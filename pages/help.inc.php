<?php
$codeExample1 = '<?php echo rex_tracking_code::get(); ?>';
?>

<div class="rex-addon-output">
	<h2 class="rex-hl2"><?php echo $I18N->msg('tracking_code_help'); ?></h2>
	<div class="rex-area-content">
		<p><?php echo $I18N->msg('tracking_code_help_msg'); ?></p>
		<?php rex_highlight_string($codeExample1); ?>
	</div>
</div>

<style type="text/css">
.rex-addon-output p {
	margin-bottom: 5px;
}
</style>
