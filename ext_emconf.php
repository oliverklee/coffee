<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tea"
 *
 * Auto generated by Extension Builder 2013-11-01
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Coffee example',
    'description' => 'Demo extension for PHPUnit workshops with TYPO3',
    'category' => 'plugin',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'author_company' => 'oliverklee.de',
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
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-7.6.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OliverKlee\\Coffee\\' => 'Classes/',
            'OliverKlee\\Coffee\\Tests\\' => 'Tests/',
        ],
    ],
];
