<?php

$sql = new rex_sql();
$sql->setQuery('DROP TABLE IF EXISTS `' . $REX['TABLE_PREFIX'] . 'tracking_code`');

$REX['ADDON']['install']['tracking_code'] = false;

