<?php
/*
Plugin Name: WP Simple Maintenance & Under Construction Mode
Plugin URI: http://www.h3techs.com
Description: Simple Maintenance Mode, Under Construction & Coming Soon plugin for WordPress.
Author: H3 Technologies (Pvt.) Limited
Version: 1.5.1
Author URI: https://www.h3techs.com
*/
require_once ('class/class.db.php');
require_once ('class/class.main_ui.php');
require_once ('assets/include/class.analytics.php');
define('MYPLUGIN__PLUGIN_URL', plugin_dir_path(__FILE__));
function h3uc9sa_FormSubmitter() {
    $db = new h3uc9sa_db;
    $response = array('status' => 0, 'message' => '');
    // If form is submitted
    if (isset($_REQUEST['site_title']) || isset($_REQUEST['wp-smm-heading']) || isset($_REQUEST['wp-smm-bottom-content'])) {
        // Get the submitted form data
        $site_title = sanitize_text_field($_REQUEST['site_title']);
        $heading = sanitize_text_field($_REQUEST['wp-smm-heading']);
        $description = sanitize_text_field($_REQUEST['wp-smm-description']);
        $bottom_content = sanitize_text_field($_REQUEST['wp-smm-bottom-content']);
        // Check whether submitted data is not empty
        if (!empty($site_title) || !empty($heading) || !empty($description) || !empty($bottom_content)) {
            // Validate
            $insert = $db->h3uc9sa_add_data($site_title, $heading, $description, $bottom_content);
        }
    }
    if (isset($_REQUEST['smm-social-facebook']) || isset($_REQUEST['smm-social-twitter']) || isset($_REQUEST['smm-social-instagram']) || isset($_REQUEST['smm-social-google-page']) || isset($_REQUEST['smm-social-skype']) || isset($_REQUEST['smm-social-whatsapp']) || isset($_REQUEST['smm-social-email']) || isset($_REQUEST['smm-social-phone']) || isset($_REQUEST['smm-social-linkedin-profile']) || isset($_REQUEST['smm-social-youtube']) || isset($_REQUEST['smm-social-pinterest']) || isset($_REQUEST['smm-social-vimeo']) || isset($_REQUEST['smm-social-dribble']) || isset($_REQUEST['smm-social-behance']) || isset($_REQUEST['smm-social-vk']) || isset($_REQUEST['smm-social-telegram'])) {
        $social_facebook = sanitize_text_field($_REQUEST['smm-social-facebook']);
        $social_twitter = sanitize_text_field($_REQUEST['smm-social-twitter']);
        $social_instagram = sanitize_text_field($_REQUEST['smm-social-instagram']);
        $social_google_page = sanitize_text_field($_REQUEST['smm-social-google-page']);
        $social_skype = sanitize_text_field($_REQUEST['smm-social-skype']);
        $social_whatsapp = sanitize_text_field($_REQUEST['smm-social-whatsapp']);
        $social_email = sanitize_text_field($_REQUEST['smm-social-email']);
        $social_phone = sanitize_text_field($_REQUEST['smm-social-phone']);
        $social_linkedin_profile = sanitize_text_field($_REQUEST['smm-social-linkedin-profile']);
        $social_youtube = sanitize_text_field($_REQUEST['smm-social-youtube']);
        $social_pinterest = sanitize_text_field($_REQUEST['smm-social-pinterest']);
        $social_vimeo = sanitize_text_field($_REQUEST['smm-social-vimeo']);
        $social_dribble = sanitize_text_field($_REQUEST['smm-social-dribble']);
        $social_behance = sanitize_text_field($_REQUEST['smm-social-behance']);
        $social_vk = sanitize_text_field($_REQUEST['smm-social-vk']);
        $social_telegram = sanitize_text_field($_REQUEST['smm-social-telegram']);
        if (!empty($social_facebook) || !empty($social_twitter) || !empty($social_instagram) || !empty($social_google_page) || !empty($social_skype) || !empty($social_whatsapp) || !empty($social_email) || !empty($social_phone) || !empty($social_linkedin_profile) || !empty($social_youtube) || !empty($social_pinterest) || !empty($social_vimeo) || !empty($social_dribble) || !empty($social_behance) || !empty($social_vk) || !empty($social_telegram)) {
            $social_insert = $db->h3uc9sa_add_social_data($social_facebook, $social_twitter, $social_instagram, $social_google_page, $social_skype, $social_whatsapp, $social_email, $social_phone, $social_linkedin_profile, $social_youtube, $social_pinterest, $social_vimeo, $social_dribble, $social_behance, $social_vk, $social_telegram);
        }
    }
    if (isset($_REQUEST['datetimepicker1'])) {
        $datetime = sanitize_text_field($_REQUEST['datetimepicker1']);
        if (!empty($datetime)) {
            $db->h3uc9sa_add_datetime($datetime);
        }
    }
    if (isset($_REQUEST['gat-id'])) {
        $gat_id = esc_sql($_REQUEST['gat-id']);
        //$gat_id = sanitize_text_field( $gat_id );
        if (!empty($gat_id)) {
            $db->h3uc9sa_add_gat_id($gat_id);
        }
    }
    // Return response
    echo json_encode($response);
    wp_die();
}
function h3uc9sa_AjaxerHandler() {
    $database = new h3uc9sa_db;
    if (isset($_REQUEST['checked'])) {
        $database->h3uc9sa_insert_switch();
        wp_die();
    } elseif (isset($_REQUEST['unchecked'])) {
        $database->h3uc9sa_delete_switch();
        wp_die();
    } elseif (isset($_REQUEST['toggle_switch'])) {
        echo $database->h3uc9sa_select_switch();
        wp_die();
    } elseif (isset($_REQUEST['heading_field'])) {
        $database->h3uc9sa_select_heading();
        wp_die();
    } elseif (isset($_REQUEST['description_field'])) {
        $database->h3uc9sa_select_description();
        wp_die();
    } elseif (isset($_REQUEST['bottom_content'])) {
        $database->h3uc9sa_select_bottom_content();
        wp_die();
    } elseif (isset($_REQUEST['social_facebook'])) {
        $database->h3uc9sa_social_select('wp-smm-social-facebook');
        wp_die();
    } elseif (isset($_REQUEST['social_twitter'])) {
        $database->h3uc9sa_social_select('wp-smm-social-twitter');
        wp_die();
    } elseif (isset($_REQUEST['social_instagram'])) {
        $database->h3uc9sa_social_select('wp-smm-social-instagram');
        wp_die();
    } elseif (isset($_REQUEST['social_google_page'])) {
        $database->h3uc9sa_social_select('wp-smm-social-google-page');
        wp_die();
    } elseif (isset($_REQUEST['social_skype'])) {
        $database->h3uc9sa_social_select('wp-smm-social-skype');
        wp_die();
    } elseif (isset($_REQUEST['social_whatsapp'])) {
        $database->h3uc9sa_social_select('wp-smm-social-whatsapp');
        wp_die();
    } elseif (isset($_REQUEST['social_email'])) {
        $database->h3uc9sa_social_select('wp-smm-social-email');
        wp_die();
    } elseif (isset($_REQUEST['social_phone'])) {
        $database->h3uc9sa_social_select('wp-smm-social-phone');
        wp_die();
    } elseif (isset($_REQUEST['social_linkedin_profile'])) {
        $database->h3uc9sa_social_select('wp-smm-social-linkedin-profile');
        wp_die();
    } elseif (isset($_REQUEST['social_youtube'])) {
        $database->h3uc9sa_social_select('wp-smm-social-youtube');
        wp_die();
    } elseif (isset($_REQUEST['social_pinterest'])) {
        $database->h3uc9sa_social_select('wp-smm-social-pinterest');
        wp_die();
    } elseif (isset($_REQUEST['social_vimeo'])) {
        $database->h3uc9sa_social_select('wp-smm-social-vimeo');
        wp_die();
    } elseif (isset($_REQUEST['social_dribble'])) {
        $database->h3uc9sa_social_select('wp-smm-social-dribble');
        wp_die();
    } elseif (isset($_REQUEST['social_behance'])) {
        $database->h3uc9sa_social_select('wp-smm-social-behance');
        wp_die();
    } elseif (isset($_REQUEST['social_vk'])) {
        $database->h3uc9sa_social_select('wp-smm-social-vk');
        wp_die();
    } elseif (isset($_REQUEST['social_telegram'])) {
        $database->h3uc9sa_social_select('wp-smm-social-telegram');
        wp_die();
    } elseif (isset($_REQUEST['datetime_switch'])) {
        $database->h3uc9sa_select_datetime();
        wp_die();
    } elseif (isset($_REQUEST['gat_id'])) {
        $database->h3uc9sa_select_gat_id();
        wp_die();
    } elseif (isset($_REQUEST['del_gat_id'])) {
        $database->h3uc9sa_del_gat_id();
    } elseif (isset($_REQUEST['del_datetime'])) {
        $database->h3uc9sa_del_datetime();
    }
}
add_action('wp_ajax_h3uc9sa_FormSubmitter', 'h3uc9sa_FormSubmitter');
add_action('wp_ajax_h3uc9sa_AjaxerHandler', 'h3uc9sa_AjaxerHandler');
function h3uc9sa_deactivation_wp_smm() {
    $deactive = new h3uc9sa_db;
    $deactive->h3uc9sa_deactivation_delete();
}
function h3uc9sa_add_menuss() {
    $menu = add_options_page('WP Simple Maintenance Mode', 'WP Simple Maintenance Mode', 'manage_options', 'wp-simple-maintenance-mode', 'h3uc9sa_main_menu_ui');
    add_action('admin_print_styles-' . $menu, 'h3uc9sa_adminPanelCss');
}
function wp_codex_search_form() {
    global $wp_admin_bar, $wpdb;
    if (!is_super_admin() || !is_admin_bar_showing()) return;
    $maintenance_mode = '
<p>Enable/Disable</p>
';
    /* Add the main siteadmin menu item */
    $wp_admin_bar->add_menu(array('id' => 'maintenance_mode', 'title' => __('Maintenance Mode', 'textdomain'), 'href' => FALSE));
    $wp_admin_bar->add_menu(array('parent' => 'maintenance_mode', 'title' => $maintenance_mode, 'href' => FALSE));
}
add_action('admin_bar_menu', 'wp_codex_search_form', 1000);
register_deactivation_hook(__FILE__, 'h3uc9sa_deactivation_wp_smm');
add_action('admin_menu', 'h3uc9sa_add_menuss');
function h3uc9sa_adminPanelCss() {
    wp_enqueue_style('stylesheet_name_test', plugins_url('/assets/css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('stylesheet_name_sweetAlertCss', plugins_url('/assets/css/sweetalert2.min.css', __FILE__));
    wp_enqueue_script('script-name-sweetAlert', plugins_url('/assets/js/sweetalert2@8.js', __FILE__));
}
function h3uc9sa_main_menu_ui() {
    $admin_ui = new h3uc_ui;
    $admin_ui->admins_menu();
}
$analytics = new h3uc9sa_analytics("WP Simple Maintenance Mode", "wp-simple-maintenance-mode", "wp-simple-maintenance-mode/index.php");
add_filter('template_include', 'catch_plugin_template');
// Page template filter callback
function catch_plugin_template($template) {
    $database = new h3uc9sa_db;
    if ($database->h3uc9sa_select_switch() != "") {
        if (!current_user_can('edit_themes') || !is_user_logged_in()) {
            $template = plugin_dir_path(__FILE__) . 'templates/page1.php';
        }
    }
    return $template;
}
?>