<?php

/**
 * Copy ready column definition:
			Array(
				'NAME'	=> '',
				'TYPE'	=> '',
				'SIZE'	=> ,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
 */	

 function getImportDefinition() {
	$phase_01 = Array(
	'PERSONS'				=> Array(
		'FILE'					=> 'person.txt',
		'TBL'					=> 'pum_conversie_person',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'shortname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'stafftype',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 1,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'firstname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'passportname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 60,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'infix',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'surname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 60,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'initials',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'gender',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 1,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'nationality',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'datebirth',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'citybirth',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'countrybirth',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'maritalstatus',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'addresshome',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 60,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'ziphome',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'cityhome',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'countryhome',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'datacontractstart',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'datecontractend',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'dateregistration',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'replacedby',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 60,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
  			Array(
				'NAME'	=> 'mainsector',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL AUTO_INCREMENT'
				)
		)
	),
	'PERSON_CV'				=> Array(
		'FILE'					=> 'cv.txt',
		'TBL'					=> 'pum_conversie_cv',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'specialindications',
				'TYPE'	=> 'int',
				'SIZE'	=> 1,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_LANGUAGE'		=> Array(
		'FILE'					=> 'cv_language.txt',
		'TBL'					=> 'pum_conversie_cv_language',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'language',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'readingskill',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'writingskill',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'speakingskill',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_SECTOR'			=> Array(
		'FILE'					=> 'cv_sector.txt',
		'TBL'					=> 'pum_conversie_cv_sector',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'mainsector',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'subsector',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_EDUCATION'		=> Array(
		'FILE'					=> 'education.txt',
		'TBL'					=> 'pum_conversie_education',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'institutionname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'educationlevel',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'city',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'from',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'until',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'study',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'certificate',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_JOB'			=> Array(
		'FILE'					=> 'job_experience.txt',
		'TBL'					=> 'pum_conversie_job_experience',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'companyname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'city',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'from',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'till',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'position',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'description',
				'TYPE'	=> 'text',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_EXPERIENCE'		=> Array(
		'FILE'					=> 'pum_experience.txt',
		'TBL'					=> 'pum_conversie_pum_experience',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'companyname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'city',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'from',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'projectnumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'project_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_ROLE'			=> Array(
		'FILE'					=> 'person_role.txt',
		'TBL'					=> 'pum_conversie_person_role',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'role',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'role_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_CC_COUNTRY'		=> Array(
		'FILE'					=> 'person_cc_country.txt',
		'TBL'					=> 'pum_conversie_person_cc_country',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PERSON_SC_SECTOR'		=> Array(
		'FILE'					=> 'person_sc_sector.txt',
		'TBL'					=> 'pum_conversie_person_sc_sector',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'mainsector',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'person_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PROJECT'				=> Array(
		'FILE'					=> 'project.txt',
		'TBL'					=> 'pum_conversie_project',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'projectno',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'type',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'prof_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'cc_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sc_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'lr_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'aa_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'expert_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'coupletype',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'combitype',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'neworfu',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'mainstart',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'mainend',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 12,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'totaladvice',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'intakeadvicemon',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'intakeadvice1',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'intakeadvice2',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisationname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'countrypart',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'plannedstart',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'plannedend',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'plannedtravelstart',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'plannedtravelend',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'travelstart',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'travelend',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'implementedadvice',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'readon',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 100,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'numberemployees',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'esteblishmentdate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'paytravelling',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'natureofproblems',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 150,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'expectedworkexpert',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 150,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'expectedqualificationsexpert',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 150,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'expectedresults',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 150,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL AUTO_INCREMENT'
				),
			Array(
				'NAME'	=> 'profperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ccperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'scperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'lrperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'aaperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'expertperson_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'PROJECT_LANGUAGE'		=> Array(
		'FILE'					=> 'project_language.txt',
		'TBL'					=> 'pum_conversie_project_language',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'project_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'contacttype',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 15,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'language',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 15,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'project_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'REL_PROJECT_PERSON'	=> Array(
		'FILE'					=> 'project_rel.txt',
		'TBL'					=> 'pum_conversie_project_rel_project',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'project_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'linktype',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'relatedproject_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'project_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'relatedproject_id',
				'TYPE'	=> 'int',
				'SIZE'	=> 11,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	)
);

//=================================================================================================================

	$phase_02 = Array(
	'CONTINENT'				=> Array(
		'FILE'					=> 'continent.txt',
		'TBL'					=> 'pum_conversie_continent',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				)
		)
	),
	'CONTINENT_PART'			=> Array(
		'FILE'					=> 'continent_part.txt',
		'TBL'					=> 'pum_conversie_continent_part',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'continent_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				)
		)
	),
	'COUNTRY'				=> Array(
		'FILE'					=> 'country.txt',
		'TBL'					=> 'pum_conversie_country',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'continent_part_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'iso2',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'iso3',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'uncode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'embassy_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'consulate_unit',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'outfit_interval',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 13,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'COUNTRYPART'			=> Array(
		'FILE'					=> 'country_part.txt',
		'TBL'					=> 'pum_conversie_country_part',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'country_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'iso2',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'iso3',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'uncode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'omniverscode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sponsor_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'min_duration',
				'TYPE'	=> 'int',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'base_amount_lr_proj',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'base_amount_lr_trn_blp',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'COUNTRYPART_BUDGET'	=> Array(
		'FILE'					=> 'country_part_budget.txt',
		'TBL'					=> 'pum_conversie_country_part_budget',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'country_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'startdate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'amount',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'COUNTRYPART_PEOPLE'	=> Array(
		'FILE'					=> 'country_part_people.txt',
		'TBL'					=> 'pum_conversie_country_part_people',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'country_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'person_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'role',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'MAINSECTOR'			=> Array(
		'FILE'					=> 'sector_main.txt',
		'TBL'					=> 'pum_conversie_mainsector',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'cluster_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'cluster_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'mainsector_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'mainsector_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sc_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'SUBSECTOR'				=> Array(
		'FILE'					=> 'sector_sub.txt',
		'TBL'					=> 'pum_conversie_subsector',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'mainsector_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'group_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'group_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sector_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sector_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sc_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'ASPECT'			=> Array(
		'FILE'					=> 'aspect.txt',
		'TBL'					=> 'pum_conversie_aspect',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'aspect_code',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'aspect_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'description',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'aa_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'ORGANISATION'			=> Array(
		'FILE'					=> 'organisation.txt',
		'TBL'					=> 'pum_conversie_organisation',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'relation_type',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 15,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_address',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_city',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_zipcode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_countrypart',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_division',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_email',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone1_country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone1_area',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone1_subscriber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone1',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 18,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone2_country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone2_area',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone2_subscriber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_phone2',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 18,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_fax_country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_fax_area',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_fax_subscriber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_fax',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 18,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_PObox',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_POzipcode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'organisation_POcity',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'partofholding',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_dependency',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_location',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_name',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_no_employees',
				'TYPE'	=> 'int',
				'SIZE'	=> 6,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_turnover',
				'TYPE'	=> 'int',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'holding_website',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_owned_private',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_owned_foreign',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_owned_government',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_owned_other',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_owned_other_specified',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'foreign_licencers',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'foreign_ownership_info',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 50,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'franchising_contract',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'franchising_relationship',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 50,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'website',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'cluster',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 2,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'maincode',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sector',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'language',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'establishment_year',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'no_employees',
				'TYPE'	=> 'int',
				'SIZE'	=> 6,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'pct_female_employees',
				'TYPE'	=> 'int',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'legal_form',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'project_manager',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'ORG_CONTACT'			=> Array(
		'FILE'					=> 'organisation_contact.txt',
		'TBL'					=> 'pum_conversie_organisation_contact',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'org_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'firstname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'middlenames',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'lastname',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'gender',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 6,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'function',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'title',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'title2',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 20,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'is_authorisedofficer',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 3,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'email',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 9,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'HBF_BUDGET'			=> Array(
		'FILE'					=> 'hbf_budget.txt',
		'TBL'					=> 'pum_conversie_hbf_budget',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'Sponsor',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'BudgetYear',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'sponsorType',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 1,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Amount',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'org_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'HBF_COUNTRY'			=> Array(
		'FILE'					=> 'hbf_country.txt',
		'TBL'					=> 'pum_conversie_hbf_country',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'Country',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'MaxFunding',
				'TYPE'	=> 'double',
				'SIZE'	=> '7,2',
				'INDEX'	=> false,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'Manager',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'HBF_COUNTRY_SPONSOR'	=> Array(
		'FILE'					=> 'hbf_country_sponsor.txt',
		'TBL'					=> 'pum_conversie_hbf_country_sponsor',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'HBF_Country_unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'Sponsor',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				)
		)
	),
	'HBF_APPLICATION'		=> Array(
		'FILE'					=> 'hbf_application.txt',
		'TBL'					=> 'pum_conversie_hbf_application',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'ApplicationNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ApplicationDate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'AllotmentNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'AllotmentDate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'BudgetYear',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'CountryMaxFunding',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'AMDocID',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'CCDocID',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ExpertDocID',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'LRName',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 30,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationDocID',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectType',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ReasonRetour',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'DueDate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Comment',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationPO',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationInformation',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationBusinessActivities',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationTurnover',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'OrganisationContribution',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'RequestMaterials',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'RequestEnhancements',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'RequestProjectRelation',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionSupplyAmtExBTW',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionSupplyAmtInclBTW',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionTransportAmtExBTW',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionTransportAmtInclBTW',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionSupplyAmtAbroadExBTW',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionTotalAmount',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionOrganisationAmt',
				'TYPE'	=> 'double',
				'SIZE'	=> '10,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionOrganisation',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionOffer',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionOtherFunds',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ContributionOtherReasons',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectExecution',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectMethod',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectNextSteps',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 15,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
			)
	),	
	'HBF_FUNDING'			=> Array(
		'FILE'					=> 'hbf_funding.txt',
		'TBL'					=> 'pum_conversie_hbf_funding',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ApplicationNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'AllotmentNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Sponsor',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 40,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Amount',
				'TYPE'	=> 'double',
				'SIZE'	=> '7,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ApprovalDate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'BudgetYear',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'DocStatus',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	),
	'HBF_PAYMENT'			=> Array(
		'FILE'					=> 'hbf_payment.txt',
		'TBL'					=> 'pum_conversie_hbf_payments',
		'COLS'					=> Array(
			Array(
				'NAME'	=> 'unid',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 32,
				'INDEX'	=> true,
				'OTH'	=> 'NOT NULL'
				),
			Array(
				'NAME'	=> 'ApplicationNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 5,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'AllotmentNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 8,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'ProjectNumber',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 10,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'Amount',
				'TYPE'	=> 'double',
				'SIZE'	=> '7,2',
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'BudgetYear',
				'TYPE'	=> 'int',
				'SIZE'	=> 4,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'PaymentTo',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'PaymentDate',
				'TYPE'	=> 'date',
				'SIZE'	=> NULL,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'PaymentRef',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 255,
				'INDEX'	=> false,
				'OTH'	=> ''
				),
			Array(
				'NAME'	=> 'status',
				'TYPE'	=> 'varchar',
				'SIZE'	=> 12,
				'INDEX'	=> true,
				'OTH'	=> ''
				)
		)
	)
);
	//return $phase_01;							// versie 1.0
	return array_merge($phase_01, $phase_02);	// v 1.0.1
}
