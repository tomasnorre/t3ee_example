<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'tx_t3eeexample',
	'T3EE',
	'T3EE Example'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3ee_example', 'Configuration/TypoScript', 'T3EE Example');