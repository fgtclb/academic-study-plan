<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function (): void {

    //==================================================================================================================
    // Page TSconfig, selectable in the page field "Page TSconfig" for installations that do not use site sets.
    //
    // The files are the same ones the sets of this extension deliver. Use one mechanism per site, not both.
    //==================================================================================================================
    ExtensionManagementUtility::registerPageTSConfigFile(
        'academic_study_plan',
        'Configuration/TSconfig/ContentElement/page.tsconfig',
        'Academic Study Plan: Content element',
    );

    ExtensionManagementUtility::registerPageTSConfigFile(
        'academic_study_plan',
        'Configuration/TSconfig/Full/page.tsconfig',
        'Academic Study Plan: All components',
    );

})();
