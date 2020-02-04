<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        //=================================================================
        // Add tables
        //=================================================================
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
            'tx_rkwbasics_domain_model_target_group'
        );


//        //=================================================================
//        // Add TypoScript
//        //=================================================================
//        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
//            $extKey,
//            'Configuration/TypoScript',
//            'RKW Basics'
//        );

    },
    $_EXTKEY
);

