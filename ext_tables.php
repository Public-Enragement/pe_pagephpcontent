<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Phpcontent',
	'Page PHP Content'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Page PHP Content Element');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pepagephpcontentelement_domain_model_phpcontent', 'EXT:pe_pagephpcontentelement/Resources/Private/Language/locallang_csh_tx_pepagephpcontentelement_domain_model_phpcontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pepagephpcontentelement_domain_model_phpcontent');
$GLOBALS['TCA']['tx_pepagephpcontentelement_domain_model_phpcontent'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pe_pagephpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_pepagephpcontentelement_domain_model_phpcontent',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,php_content,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/PHPContent.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_pepagephpcontentelement_domain_model_phpcontent.gif'
	),
);
