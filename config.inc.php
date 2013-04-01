<?php
// init addon
$REX['ADDON']['name']['tracking_code'] = 'Tracking Code';
$REX['ADDON']['page']['tracking_code'] = 'tracking_code';
$REX['ADDON']['version']['tracking_code'] = '1.0.0';
$REX['ADDON']['author']['tracking_code'] = "RexDude";
$REX['ADDON']['supportpage']['tracking_code'] = 'forum.redaxo.de';
$REX['ADDON']['perm']['tracking_code'] = 'tracking_code[]';

// permissions
$REX['PERM'][] = 'tracking_code[]';

// includes
require($REX['INCLUDE_PATH'] . '/addons/tracking_code/classes/class.rex_tracking_code.inc.php');
require($REX['INCLUDE_PATH'] . '/addons/tracking_code/classes/class.rex_tracking_code_utils.inc.php');

// settings
rex_tracking_code_utils::includeSettingsFile();

if ($REX['REDAXO']) {
	// add lang file
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/tracking_code/lang/');

	// add subpages
	$REX['ADDON']['tracking_code']['SUBPAGES'] = array(
		array('', $I18N->msg('tracking_code_settings')),
		array('help', $I18N->msg('tracking_code_help'))
	);
}
