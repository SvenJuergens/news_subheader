<?php
defined('TYPO3_MODE') or die();

$fields = [
    'sub_header' => [
        'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
        'config' => [
            'type' => 'input',
            'size' => 60
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    $fields
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    'sub_header',
    '',
    'after:title'
);
