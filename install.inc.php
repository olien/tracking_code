<?php
$error = '';

$sql = new rex_sql();
//$sql->debugsql=1;

$sql->setQuery("
	CREATE TABLE IF NOT EXISTS `" . $REX['TABLE_PREFIX'] . "tracking_code` (
		`id` INT(11) unsigned NOT NULL auto_increment,
		`tracking_code` TEXT NOT NULL,
	PRIMARY KEY ( `id` )
);");

$sql->setQuery('INSERT INTO `' . $REX['TABLE_PREFIX'] . 'tracking_code` VALUES (1, "")');                                                                                

if ($error == '') {
	$REX['ADDON']['install']['tracking_code'] = true;
} else {
	$REX['ADDON']['installmsg']['tracking_code'] = $error;
}



