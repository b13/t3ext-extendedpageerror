<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


// 
$TYPO3_CONF_VARS['FE']['pageUnavailable_handling_statheader'] = '';
$TYPO3_CONF_VARS['FE']['pageUnavailable_handling'] = 'USER_FUNCTION:EXT:extendedpageerror/Classes/Hooks.php:tx_extendedpageerror_hooks->pageUnavailable';

$TYPO3_CONF_VARS['FE']['pageNotFound_handling_statheader'] = '';
$TYPO3_CONF_VARS['FE']['pageNotFound_handling'] = 'USER_FUNCTION:EXT:extendedpageerror/Classes/Hooks.php:tx_extendedpageerror_hooks->pageNotFound';


?>