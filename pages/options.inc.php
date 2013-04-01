<?php
$func = rex_request('func', 'string');
$trackingCode = trim(rex_request('tracking_code', 'string'));

$configFile = $REX['INCLUDE_PATH'] . '/addons/tracking_code/' . rex_tracking_code_utils::getSettingsFile();

if (rex_request('func', 'string') == 'save') {
	$REX['ADDON']['tracking_code']['settings']['tracking_code'] = $trackingCode;

	$content = '
		$REX[\'ADDON\'][\'tracking_code\'][\'settings\'][\'tracking_code\'] = "' . $trackingCode . '";
	';

	rex_tracking_code_utils::updateSettingsFile($configFile, $content);
}
?>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('tracking_code_tracking_code', rex_tracking_code_utils::sanitizeUrl($REX['SERVER'])); ?></h2>
	<div class="rex-area-content">
		<form action="index.php" method="post">
			<textarea class="codemirror" codemirror-mode="php/htmlmixed" name="tracking_code" rows="14" cols="98"><?php echo $REX['ADDON']['tracking_code']['settings']['tracking_code']; ?></textarea>

			<input type="hidden" name="page" value="tracking_code" />
			<input type="hidden" name="subpage" value="" />
			<input type="hidden" name="func" value="save" />
			<div class="rex-form-row">
				<p class="button"><input type="submit" class="rex-form-submit" name="sendit" value="<?php echo $I18N->msg('tracking_code_save_button'); ?>" /></p>
			</div>
		</form>
	</div>
</div>

<style type="text/css">
#rex-page-tracking-code .button {
	float: right; 
	margin-top: 10px;
	margin-bottom: 10px; 
	margin-right: 5px;
}

#rex-page-tracking-code .button input {
	padding: 2px;
}

.CodeMirror {
    border: 1px solid #999999 !important;
}
</style>
