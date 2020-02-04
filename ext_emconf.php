<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "rkw_tags"
 *
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'RKW Tags',
	'description' => 'Extension with dynamic tagging for multiple models for BE and FE',
	'category' => 'be',
	'author' => 'Christian Dilger',
	'author_email' => 'c.dilger@addorange.de',
	'author_company' => 'RKW Kompetenzzentrum',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '8.7.0',
    'constraints' => [
		'depends' => [
			'typo3' => '8.7.0-8.7.99'
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
];
