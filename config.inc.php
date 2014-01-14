<?php
// init addon
$REX['ADDON']['name']['tracking_code'] = 'Tracking Code';
$REX['ADDON']['page']['tracking_code'] = 'tracking_code';
$REX['ADDON']['version']['tracking_code'] = '1.0.1';
$REX['ADDON']['author']['tracking_code'] = "RexDude";
$REX['ADDON']['supportpage']['tracking_code'] = 'forum.redaxo.de';
$REX['ADDON']['perm']['tracking_code'] = 'tracking_code[]';

// permissions
$REX['PERM'][] = 'tracking_code[]';

// includes
require($REX['INCLUDE_PATH'] . '/addons/tracking_code/classes/class.rex_tracking_code.inc.php');

// fetch all strings for later usage with getString method
if (!$REX['SETUP']) {
	rex_register_extension('ADDONS_INCLUDED', 'rex_tracking_code::init');
}

if ($REX['REDAXO']) {
	// includes
	require($REX['INCLUDE_PATH'] . '/addons/tracking_code/classes/class.rex_tracking_code_utils.inc.php');

	// add lang file
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/tracking_code/lang/');

	// add subpages
	$REX['ADDON']['tracking_code']['SUBPAGES'] = array(
		array('', $I18N->msg('tracking_code_settings'))
	);

	if (isset($REX['USER']) && $REX['USER']->isAdmin()) {
		$REX['ADDON']['tracking_code']['SUBPAGES'][] = array('help', $I18N->msg('tracking_code_help'));
	}
}
