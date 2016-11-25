<?php
/**
 * Integration Shortcode Functions
 *
 * @package YT_SCASE_COM
 * @version 2.3.0
 * @since WPAS 4.0
 */
if (!defined('ABSPATH')) exit;
add_shortcode('video_gallery', 'yt_scase_com_get_integ_video_gallery');
/**
 * Display integration shortcode or no access msg
 * @since WPAS 4.0
 *
 * @return string $layout or $no_access_msg
 */
function yt_scase_com_get_integ_video_gallery($atts) {
	$no_access_msg = __('You are not allowed to access to this area. Please contact the site administrator.', 'yt-scase-com');
	$access_views = get_option('yt_scase_com_access_views', Array());
	if (!current_user_can('view_video_gallery') && !empty($access_views['integration']) && in_array('video_gallery', $access_views['integration'])) {
		return $no_access_msg;
	} else {
		wp_enqueue_script('jquery');
		wp_enqueue_style('wpas-boot');
		wp_enqueue_script('wpas-boot-js');
		wp_enqueue_script('video-gallery-js');
		add_action('wp_footer', 'yt_scase_com_enq_allview');
		if (!empty($atts) && !empty($atts['filter'])) {
			$shc_filter = "video_gallery_filter";
			global $$shc_filter;
			$$shc_filter = $atts['filter'];
		}
		ob_start();
		emd_get_template_part('yt-scase-com', 'integration', 'video-gallery');
		$layout = ob_get_clean();
		return $layout;
	}
}
