<?php

// Extension manager configuration
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TNM.' . $_EXTKEY,
	'TalkList',
	array(
		'Talk' => 'list'
	),
	array(
		'Talk' => 'list'
	)
);