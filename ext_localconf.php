<?php

defined('TYPO3_MODE') or die();

// Extension manager configuration
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TNM.'.$_EXTKEY,
    'Talk',
    array(
        'Talk' => 'list',
    ),
    array(
        'Talk' => 'list',
    )
);
