<?php
class rex_tracking_code {
	public static function get() {
		global $REX;

		if ($REX['ADDON']['tracking_code']['settings']['tracking_code'] == '') {
			return '';
		} else {
			return $REX['ADDON']['tracking_code']['settings']['tracking_code'] . PHP_EOL;
		}
	}
}

