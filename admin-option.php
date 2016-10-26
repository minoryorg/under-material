<style>
#under-material-custom td a {
	padding: 15px;
	color: #fff;
	font-size: 1.2em;
	font-weight: bold;
	line-height: 1.8em;
	text-align: center;
	text-decoration: none;
	display: block;
}
#under-material-custom td.default a {background: #009688;}
#under-material-custom td.inverse a {background: #3f51b5;}
#under-material-custom td.info a    {background: #03a9f4;}
#under-material-custom td.success a {background: #4caf50;}
#under-material-custom td.warning a {background: #ff5722;}
#under-material-custom td.danger a  {background: #f44336;}
<?php if ( get_option('color') ): ?>
#under-material-custom td.<?php echo get_option('color'); ?> {background: #aaa;}
<?php endif; ?>
</style>

<div id="icon-themes" class="icon32"></div>

<h1><?php echo esc_attr__( 'Theme Options' ); ?></h1>

<?php if ( get_option('color') ): ?>
<p>Theme of the currently selected is "<b><?php echo ucfirst(get_option('color')); ?></b>".</p>
<?php else: ?>
<p>Please select a color.</p>
<?php endif; ?>

<div class="wrap">
	<table id="under-material-custom" width="100%" cellpadding="10" cellspacing="0" border="0">
		<tr>
			<td width="100%" class="default">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=default">default</a>
			</td>
		</tr>
		<tr>
			<td width="100%" class="inverse">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=inverse">inverse</a>
			</td>
		</tr>
		<tr>
			<td width="100%" class="info">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=info">info</a>
			</td>
		</tr>
		<tr>
			<td width="100%" class="success">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=success">success</a>
			</td>
		</tr>
		<tr>
			<td width="100%" class="warning">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=warning">warning</a>
			</td>
		</tr>
		<tr>
			<td width="100%" class="danger">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=danger">danger</a>
			</td>
		</tr>
	</table>
</div>

