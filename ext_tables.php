<?php
defined('TYPO3_MODE') or die();

/** @noinspection PhpUndefinedClassInspection */
/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon('extensions-typoscript_code-content',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:typoscript_code/Resources/Public/Icons/tt_content_ts.png']);
