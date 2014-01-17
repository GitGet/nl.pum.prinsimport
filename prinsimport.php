<?php

require_once 'prinsimport.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function prinsimport_civicrm_config(&$config) {
  _prinsimport_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function prinsimport_civicrm_xmlMenu(&$files) {
  _prinsimport_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function prinsimport_civicrm_install() {
  return _prinsimport_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function prinsimport_civicrm_uninstall() {
  return _prinsimport_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function prinsimport_civicrm_enable() {
  return _prinsimport_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function prinsimport_civicrm_disable() {
  return _prinsimport_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function prinsimport_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _prinsimport_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function prinsimport_civicrm_managed(&$entities) {
  return _prinsimport_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_navigationMenu
 *
 * Discloses additional menu options to trigger import functions through page urls
  */
function prinsimport_civicrm_navigationMenu( &$params ) {
	//  Get the maximum key of $params
	$maxKey = ( max( array_keys($params) ) );
	
	$params[$maxKey+1] = array (
		'attributes' => array (
			'label'      => 'PRINS import',
			'name'       => 'PRINS_import',
			'url'        => null,
			'permission' => 'administer CiviCRM',
			'operator'   => null,
			'separator'  => null,
			'parentID'   => null,
			'navID'      => $maxKey+1,
			'active'     => 1
			),
		'child' =>  array (
			'1' => array (
				'attributes' => array (
					'label'      => 'Read files',
					'name'       => 'PRINS_Read',
					'url'        => 'civicrm/prinsread',
					'permission' => 'administer CiviCRM',
					'operator'   => null,
					'separator'  => 1,
					'parentID'   => $maxKey+1,
					'navID'      => 1,
					'active'     => 1
					),
				'child' => null
				),
			'2' => array (
				'attributes' => array (
					'label'      => 'Clear tables',
					'name'       => 'PRINS_Clear',
					'url'        => 'civicrm/prinsclear',
					'permission' => 'administer CiviCRM',
					'operator'   => null,
					'separator'  => 1,
					'parentID'   => $maxKey+1,
					'navID'      => 1,
					'active'     => 1
					),
				'child' => null
				),
			'3' => array (
				'attributes' => array (
					'label'      => 'Drop tables',
					'name'       => 'PRINS_Drop',
					'url'        => 'civicrm/prinsdrop',
					'permission' => 'administer CiviCRM',
					'operator'   => null,
					'separator'  => 1,
					'parentID'   => $maxKey+1,
					'navID'      => 1,
					'active'     => 1
					),
				'child' => null
				),
			)
		);
}