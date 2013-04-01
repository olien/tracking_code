<?php
class rex_tracking_code_utils {
	public static function sanitizeUrl($url) {
		return preg_replace('@^https?://|/.*|[^\w.-]@', '', $url);
	}

	public static function getSettingsFile() {
		global $REX;

		if (isset($REX['WEBSITE_MANAGER'])) {
			return $REX['WEBSITE_MANAGER']->getCurrentWebsite()->getSettingsFile();
		} else {
			return 'settings.inc.php';
		}
	}

	public static function includeSettingsFile() {
		global $REX;

		$includeFile = $REX['INCLUDE_PATH'] . '/addons/tracking_code/' . self::getSettingsFile(); 

		if (!file_exists($includeFile)) {
			self::createSettingsFile($includeFile);
		} 

		require($includeFile);
	}

	public static function createSettingsFile($file) {
		$fileHandle = fopen($file, 'w');

		fwrite($fileHandle, "<?php\r\n");
		fwrite($fileHandle, "// --- DYN\r\n");
		fwrite($fileHandle, "// --- /DYN\r\n");

		fclose($fileHandle);

		$content = '
			$REX[\'ADDON\'][\'tracking_code\'][\'settings\'][\'tracking_code\'] = "";
		';

		self::updateSettingsFile($file, $content, false);
	}

	public static function updateSettingsFile($file, $content, $showSuccessMsg = true) {
		global $I18N;

		if (rex_replace_dynamic_contents($file, str_replace("\t", "", $content)) !== false) {
			if ($showSuccessMsg) {
				echo rex_info($I18N->msg('tracking_code_configfile_update'));
			}
		} else {
			echo rex_warning($I18N->msg('tracking_code_configfile_nosave'));
		}
	}
}

