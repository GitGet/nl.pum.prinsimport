<?php

require_once 'Prinsimportdefinities.inc.php';

$GLOBALS['CONVERSIE'] = getImportDefinition();
	
class CRM_Prinsimport_Pages_Importhandling {

	private $con = NULL;

	/**
	 * Provides a connection object (mysqli_connect) to the active CiviCRM database
	 */
	function dbConnect() {
		global $con;
		if ($con==NULL) {
			// Retrieve credentials
			$xs = $this->dbAccess();
			$con = mysqli_connect($xs['HOST'] ,$xs['USER'], $xs['PASSWORD'], $xs['DATABASE']);
			// Check connection
			if (mysqli_connect_errno()) {
				CRM_Utils_System::setUFMessage('Unable to connect to the CiviCRM database for conversion.');
				$con = NULL;
			}
		}
		return $con;
	}
	
	/**
	 * Returns an associative array containing host, database, username and password
	 * Details are required to access additional conmversion tables
	 */
	private function dbAccess() {
		$reg = $GLOBALS['_DB_DATAOBJECT']['RESULTS'][1]->dbh->dsn;
		$return = Array(
			'HOST' => $reg['hostspec'],
			'DATABASE' => $reg['database'],
			'USER' => $reg['username'],
			'PASSWORD' => $reg['password']
		);
		return $return;
	}
	
	/**
	 * Builds the table as defined in $GLOBALS['CONVERSIE'].
	 * Parameter $specs provides all required definition info in an associative array
	 * Example: createTable($GLOBALS['CONVERSIE']['PERSONS'])
	 */
	function createTable($specs) {
	//CRM_Core_Error::Debug('SPECS', $specs);
	//exit();
		//global $con;
		if (!isset($specs)) {
			CRM_Utils_System::setUFMessage('No table definition provided for table creation.');
		} else {
			//$con = $this->dbConnect();
			//if ($con==NULL) {
			//	exit();
			//}
			// Build query
			$sqlcols = '';
			$sqlindex = '';
			foreach($specs['COLS'] AS $col) {
				if (strlen($sqlcols)>0) {
					$sqlcols .= ', ';
				}
				$sqlcols .= '`' . $col['NAME'] . '` ' . $col['TYPE'] . (isset($col['SIZE'])?('(' . $col['SIZE'] . ')'):'') . ($col['OTH'] != ''?(' ' . $col['OTH']):'');
				if ($col['INDEX']) {
					$sqlindex .= ', INDEX `' . $col['NAME'] . '` (`' . $col['NAME'] . '`)';
				}
			}
			if ($sqlcols=='') {
				CRM_Utils_System::setUFMessage('No column definition provided.');
			} else {
				$sql = 'CREATE TABLE IF NOT EXISTS `' . $specs['TBL'] . '` (' . $sqlcols . $sqlindex . ') ENGINE=InnoDB DEFAULT CHARACTER SET=utf8 COLLATE=utf8_unicode_ci';
				// Execute query
				//if (!mysqli_query($con, $sql)) {
				//	CRM_Utils_System::setUFMessage('Unable to create table.');
				//	CRM_Core_Error::Debug('TABLE DEFINITION', $specs);
				//	CRM_Core_Error::Debug('SQL', $sql);
				//	//exit();
				//}
				$result = CRM_Core_DAO::executeQuery($sql);
			}
		}
	}
	
	function clearTable($specs) {
		if (!isset($specs)) {
			CRM_Utils_System::setUFMessage('No table definition provided for row deletion.');
		} else {
			$sql = 'DELETE FROM `' . $specs['TBL'] . '`';
			$result = CRM_Core_DAO::executeQuery($sql);
		}
	}
	
	function dropTable($specs) {
		if (!isset($specs)) {
			CRM_Utils_System::setUFMessage('No table definition provided for table drop.');
		} else {
			$sql = 'DROP TABLE `' . $specs['TBL'] . '`';
			$result = CRM_Core_DAO::executeQuery($sql);
		}
	}
	
	private function tableExists($name) {
		//global $con;
		//$con = $this->dbConnect();
		$sql = 'SHOW TABLES LIKE \'' . $name . '\'';
		//$result = mysqli_query($con, $sql);
		$dao = CRM_Core_DAO::executeQuery($sql);
		$result = $dao->fetch() ? TRUE : FALSE;
		$dao->free();
		return $result;
	}
	
	/**
	 * Processes a conversion file, based on the details in its definition array
	 */
	function importFile($specs) {
		global $con;
		$con = $this->dbConnect();
		if (!isset($specs)) {
			CRM_Utils_System::setUFMessage('No definition provided for file import.');
		} elseif (!$this->tableExists($specs['TBL'])) {
			CRM_Utils_System::setUFMessage('Table "' . $specs['TBL'] . '" does not exist.');
		} else {
			//drupal_set_message('FILE: ' . $specs['FILE'], 'error');
			$file=fopen(dirname(__FILE__) . '/prinsimportfiles/' . $specs['FILE'], "r");
			if (!$file) {
				CRM_Utils_System::setUFMessage('Could not open file "' . $specs['FILE'] . '".');
			} else {
				if (!feof($file)) {
					$line = fgets($file); // skip column headers
					//CRM_Core_Error::Debug('HEADER LINE', $line);
				}
				while (!feof($file)) {
					$line = fgets($file);
					if ($line!='') {
						$sql = $this->processLine($specs, $line);
						//CRM_Core_Error::Debug('SQL LINE', $sql);
						//exit();
						//execute
						//mysql_query('set names utf8');
						
						//if (!mysqli_query($con, $sql)) {
						//	CRM_Utils_System::setUFMessage('Unable to execute: ' . $sql);
						//}
						$result = CRM_Core_DAO::executeQuery($sql);
						//CRM_Core_Error::Debug('SQL RESULT', $result);
						//exit();
					}
				}
				fclose($file);
			}
		}
	}
	
	/**
	 * Transforms a single line from a conversion file to an sql statement, based on the details in its definition array
	 */
	private function processLine($specs, $line) {
		$values = explode(',', $line);
		$sqlcolnames = '';
		$sqlcolvalues = '';
		for ($i=0; $i<count($values); $i++) {
			try {
				$sqlcol = '';
				$colval = $this->decodeValue($values[$i]);
				$colname = $specs['COLS'][$i]['NAME'];
				$coltype = $specs['COLS'][$i]['TYPE'];
				$colsize = $specs['COLS'][$i]['SIZE'];
				switch ($coltype) {
					case 'varchar':
						if (isset($colsize)) {
							$colval = substr($colval, 0, $colsize);
						}
						break;
					case 'text':
						// ignore $colsize;
					case 'date':
						// ignore $colsize; date is already formatted 'yyyy-mm-dd'
						break;
					case 'int':
						// ignore $colsize
						// ?: $colval = intval($colval);
						// min/max
						break;
					case 'double':
						// ignore $colsize
						// ?: rounding to decimals
						// min/max
						break;
					default:
						// do not add field to sql statement
						// report undefined data type
						$colval = NULL;
				}
				if (isset($colval)) {
					if (strlen($sqlcolnames)>0) {
						$sqlcolnames .= ', ';
						$sqlcolvalues .= ', ';
					}
					if (strpos($colval, chr(39))>-1) {
						//CRM_Core_Error::Debug('VALUE ALERT', $colval);
						//CRM_Core_Error::Debug('POS', strpos($colval, chr(39)));
						$colval = str_ireplace(chr(39), '\\'.chr(39), $colval);
					}
					$sqlcolnames .= '`' . $colname . '`';
					$sqlcolvalues .= '\'' . $colval . '\'';
				}
			} catch(CiviCRM_API3_Exception $e) {
				$error = $e->getMessage();
				CRM_Utils_System::setUFMessage('API error: ' . $error . '(col=' . $i . ')');
			}
		}
		return 'INSERT INTO `' . $specs['TBL'] . '` (' . $sqlcolnames . ') VALUES (' . $sqlcolvalues . ')';
	}
	
	/**
	 * Translates encoded characters:
	 * 	'[COMMA]' to ','
	 *	'[LF]' to ''
	 * 	'[CR]' to ''
	 *	'[QUOTE]' to '"'
	 *	''' to chr(39) (='\'')
	 */
	private function decodeValue($strValue) {
		$modValue = $strValue;
		if (strpos($modValue, '[')) {
			$arFind = Array(
				'[COMMA]',
				'[LF]',
				'[CR]',
				'[QUOTE]'
				);
			$arReplace = Array(
				',',
				'',
				'',
				chr(39)
				);
			$modValue = str_ireplace($arFind, $arReplace, $strValue);
		}
		return $modValue;
	}

}
