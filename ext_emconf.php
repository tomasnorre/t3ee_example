<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Extension for T3EE',
    'description' => 'Demo Extension for the T3EE',
    'category' => 'Example Extensions',
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => 'tomas.mikkelsen@aoe.com',
    'author_company' => 'AOE GmbH',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.0.1',
    'constraints' => array(
            'depends' => array(
                    'typo3' => '6.2.0-7.99.99',
                ),
            'conflicts' => array(
                ),
            'suggests' => array(
                ),
        ),
    'autoload' => array(
            'psr-4' => array(
                    'TNM\\T3eeExample\\' => 'Classes',
                ),
        ),
    'autoload-dev' => array(
            'psr-4' => array(
                    'TNM\\T3eeExample\\Tests\\' => 'Tests',
                ),
        ),
);
