<?php
class rex_tracking_code {
	protected static $trackingCode = '';

	public static function init() {
		global $REX;
		
		$sql = new rex_sql();
		$sql->setQuery('SELECT * FROM ' . $REX['TABLE_PREFIX'] . 'tracking_code WHERE id = 1');
		
		if ($sql->getRows() > 0) {
			self::$trackingCode = $sql->getValue('tracking_code');
		}
	}

	public static function getTrackingCode() {
		if (self::$trackingCode == '') {
			return '';
		} else {
			return self::$trackingCode . PHP_EOL;
		}
	}
}

