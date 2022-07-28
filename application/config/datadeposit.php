<?php
//enable datadeposit
$config['datadeposit']['enable_datadeposit']=false;

$config['datadeposit']['mandatory_fields'] = array(
	'ident_title',
	'coll_dates',
	'coverage_country'
);

$config['datadeposit']['mandatory_fields2'] = array(
	'Title',
	'Dates of Data Collection',
	'Country',
);

$config['datadeposit']['merged'] = array_combine($config['datadeposit']['mandatory_fields'], $config['datadeposit']['mandatory_fields2']);

$config['datadeposit']['recommended_fields'] = array(
	'overview_abstract',
	'coverage_geo',
	'prim_investigator',
	'funding',
	'impact_wb_name',
	'impact_wb_id'
);

$config['datadeposit']['recommended_fields2'] = array(
	'Abstract',
	'Geographical Coverage',
	'Primary Investigator',
	'Funding',
	'IE Project Name',
	'IE Project ID'
);

//folder for storing project files
$config['datadeposit']['resources'] = 'datafiles';

$config['datadeposit']['recommended'] = array_combine($config['datadeposit']['recommended_fields'], $config['datadeposit']['recommended_fields2']);

//enable/disable operational_information and impact evaluation fields
$config['datadeposit']['additional_fields']=false;

