<?php
class rex_tracking_code {
	protected static $trackingCode = '';

	public static function init() {
		global $REX;
		
		$sql = new rex_sql();
		$sql->setQuery('SELECT * FROM ' . $REX['TABLE_PREFIX'] . 'tracking_code WHERE id = 1');
		
		self::$trackingCode = $sql->getValue('tracking_code');
	}

	public static function getTrackingCode() {
		return self::$trackingCode;
	}
}

