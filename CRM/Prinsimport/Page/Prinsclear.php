<?php

require_once 'CRM/Core/Page.php';
require_once 'Prinsimporthandling.inc.php';

class CRM_Prinsimport_Page_Prinsclear extends CRM_Core_Page {
  function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(ts('Prinsclear'));

	$this->assign('startTime', date('Y-m-d H:i:s'));
	
	try {
		$conv = new CRM_Prinsimport_Pages_Importhandling();
		foreach($GLOBALS['CONVERSIE'] as $def) {
			$conv->clearTable($def);
		}
	} catch(CiviCRM_API3_Exception $e) {
		$error = $e->getMessage();
		CRM_Utils_System::setUFMessage('API error: ' . $error);
	}
	
    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));
	
	$this->assign('homeCiviUrl', CRM_Utils_System::url('civicrm', null, true));
	
    parent::run();
  }
}
