<?php

// Extend TCA when rkw_events is available
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('rkw_events')) {

    $GLOBALS['TCA']['tx_rkwevents_domain_model_event']['interface']['showRecordFieldList'] = str_replace('title, ', 'title, sys_category, ', $GLOBALS['TCA']['tx_rkwevents_domain_model_event']['interface']['showRecordFieldList']);
    $GLOBALS['TCA']['tx_rkwevents_domain_model_event']['types']['1']['showitem'] = str_replace('title, subtitle, ', 'title, sys_category, subtitle, ', $GLOBALS['TCA']['tx_rkwevents_domain_model_event']['types']['1']['showitem']);

    $GLOBALS['TCA']['tx_rkwevents_domain_model_event']['columns']['sys_category'] = [
        'exclude' => 0,
//        'label' => 'LLL:EXT:rkw_events/Resources/Private/Language/locallang_db.xlf:tx_rkwevents_domain_model_event.categories',
        'label' => 'SYS_CATEGORIES',
        'config' => [
            'type' => 'select',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND ((\'###PAGE_TSCONFIG_IDLIST###\' <> \'0\' AND FIND_IN_SET(sys_category.parent,\'###PAGE_TSCONFIG_IDLIST###\')) OR (\'###PAGE_TSCONFIG_IDLIST###\' = \'0\')) AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.title ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => [
                'tablenames' => 'tx_rkwevents_domain_model_event',
                'fieldname' => 'sys_category',
            ],
            'size' => 10,
            'autoSizeMax' => 50,
            'maxitems' => 9999,
            'minitems'      => 0,
            'renderMode' => 'tree',
            'treeConfig' => [
                'rootUid' => 24,    //  @todo: needs to be set by config/settings
                'parentField' => 'parent',
                'appearance' => [
                    'nonSelectableLevels' => 0, //  set explicitly to prevent selection of parent item
                    'expandAll' => TRUE,
                    'showHeader' => TRUE,
                ],
            ],
        ],
    ];

}