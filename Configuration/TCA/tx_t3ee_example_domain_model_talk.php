<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tx_t3eeexample_domain_model_talk'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:t3ee_example/Resources/Private/Language/Backend/Locallang_db.xlf:tx_t3eeexample_domain_model_talk',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'versioning' => FALSE,
		'versioningWS' => FALSE,
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3ee_example') . 'Resources/Public/Icons/tx_t3eeexample_domain_model_talk.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'name, date_time, speaker',
	),
	'types' => array(
		'1' => array('showitem' => 'name, date_time, speaker'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:t3ee_example/Resources/Private/Language/Backend/Tca.xlf:tx_t3eeexample_domain_model_talk.name',
			'config' => array(
				'type' => 'input',
				'size' => 60,
				'eval' => 'required'
			),
		),
		'date_time' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:t3ee_example/Resources/Private/Language/Backend/Tca.xlf:tx_t3eeexample_domain_model_talk.date_time',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'speaker' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:t3ee_example/Resources/Private/Language/Backend/Tca.xlf:tx_t3eeexample_domain_model_talk.speaker',
			'config' => array(
				'type' => 'select',
				'items' => Array(
					Array("-- Please Select --", 0),
				),
				'foreign_table' => 'tx_t3eeexample_domain_model_speaker',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		)
	),
);