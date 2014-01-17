<?php

require_once 'CRM/Core/Page.php';
require_once 'Prinsimporthandling.inc.php';

class CRM_Prinsimport_Page_Prinsread extends CRM_Core_Page {
  function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(ts('Prinsread'));
	
	$this->assign('startTime', date('Y-m-d H:i:s'));
	$this->assign('message', 'starting'); // message to produce on the page
	
	try {
		$conv = new CRM_Prinsimport_Pages_Importhandling();
		//$con = $conv->dbConnect();
		//CRM_Core_Error::Debug('CONNECTION', $con);
		//exit();
				
		// open files
		//CRM_Core_Error::Debug('GLOBALS', dirname(__FILE__));
		//exit();
		//dpm($GLOBALS['CONVERSIE']);
		foreach($GLOBALS['CONVERSIE'] as $def) {
			//CRM_Core_Error::Debug($def);
			//exit();
			// create tables (if not available)
			$this->assign('message', 'create table ' . key($GLOBALS['CONVERSIE']));
			$conv->createTable($def);
			$conv->importFile($def);
		}
		
		// read lines
		
		// insert into table
		
		// close files
		
		// report "done"
		$this->assign('message', 'ready');
		
		// Example: Assign a variable for use in a template
		$this->assign('currentTime', date('Y-m-d H:i:s'));
		
	} catch(CiviCRM_API3_Exception $e) {
		$error = $e->getMessage();
		CRM_Utils_System::setUFMessage('API error: ' . $error);
		$this->assign('message', $this->message . ': ' . $error);
	}

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));
	
	$this->assign('homeCiviUrl', CRM_Utils_System::url('civicrm', null, true));
	
    parent::run();
  }
}
