<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package under-material
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'under-material' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'under-material' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'under-material' ), 'under-material', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
$(document).ready(function() {
	// Content
    $('.site-content').addClass('container');
    $('.site-info').addClass('container');
    $('.content-area').addClass('col-md-8');
	// Widget
    $('.widget-area').addClass('col-md-4');
    $('.widget > ul').addClass('nav nav-pills nav-stacked withripple');
    // Recent Comments
    $('.widget > #recentcomments').removeClass('');
    $('.widget > #recentcomments').addClass('panel-body');
    // Calendar
    $('#calendar_wrap').addClass('panel-body');
    $('#wp-calendar').addClass('table');
    // Text
    $('.textwidget').addClass('panel-body');
    // Tag Cloud
    $('.tagcloud').addClass('panel-body');
    // Form
    $('select,textarea,input:not([type=button],[type=submit])').addClass('form-control');
    $('[type=submit]').addClass('btn btn-raised btn-default');
    // Add to ...
});
$(function(){
	$.material.init();
});
</script>
</body>
</html>
