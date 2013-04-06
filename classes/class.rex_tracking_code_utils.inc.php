<?php
class rex_tracking_code_utils {
	public static function sanitizeUrl($url) {
		return preg_replace('@^https?://|/.*|[^\w.-]@', '', $url);
	}
}

