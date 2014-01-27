<?php
$func = rex_request('func', 'string');
$trackingCode = rex_tracking_code::getTrackingCode();

if (rex_request('func', 'string') == 'save') {
	$trackingCode = trim(rex_request('tracking_code', 'string'));

	$sql = new rex_sql();
	//$sql->debugsql = 1;
	$sql->setQuery('UPDATE ' . $REX['TABLE_PREFIX'] . 'tracking_code SET tracking_code = "' . $trackingCode . '" WHERE id = 1');

	if ($sql->getError() == '')  {
		echo rex_info($I18N->msg('tracking_code_configfile_update'));
	} else {
		echo rex_warning($I18N->msg('tracking_code_configfile_nosave'));
	}
}
?>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('tracking_code_tracking_code', rex_tracking_code_utils::sanitizeUrl($REX['SERVER'])); ?></h2>
	<div class="rex-area-content">
		<form action="index.php" method="post">
			<textarea <?php if (OOPlugin::isAvailable('be_utilities', 'codemirror') || (isset($REX['ADDON']['be_style']['plugin_customizer']['codemirror']) && $REX['ADDON']['be_style']['plugin_customizer']['codemirror'] == 1)) { ?>style="display: none;"<?php } ?> class="codemirror" codemirror-mode="php/htmlmixed" name="tracking_code"><?php echo $trackingCode; ?></textarea>

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
#rex-page-tracking-code textarea {
	width: 98%;
	height: 280px;
}

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
