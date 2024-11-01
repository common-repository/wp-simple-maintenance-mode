<?php
require_once ('class.analyticsAjax.php');
if (class_exists('h3uc9sa_analytics')) {
    return;
}
class h3uc9sa_analytics {
    function h3uc9sa_define_constants($pluginName, $pluginSlug, $pluginFile, $imgIcon) {
        $this->define('PLUGIN_NAME', $pluginName);
        $this->define('PLUGIN_SLUG_NAME', $pluginSlug);
        $this->define('PLUGIN_BASEFILE', $pluginFile);
        $this->define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
        $this->define('H3TECHS_FEEDBACK_SERVER', "http://secure.h3techs.com/pluginsAnalytics/feedback.php");
        $this->define('H3TECHS_ADVERTISEMENT_SERVER', "http://secure.h3techs.com/pluginsAnalytics/advertisement.php");
        $this->define('PLUGIN_ICON', $imgIcon);
        new h3uc9sa_analyticsAjax();
    }
    private function define($name, $value) {
        if (!defined($name)) {
            define($name, $value);
        }
    }
    function h3uc9sa_setItems($links, $file) {
        if ($file == PLUGIN_BASEFILE) {
            $settings_link = "";
            if (get_option('_plugin_optin') == 'no') {
                $settings_link.= sprintf(esc_html__(' %1$s Opt In %2$s ', PLUGIN_SLUG_NAME), '<a class="opt-out" href="' . admin_url('admin.php?page=' . PLUGIN_SLUG_NAME . '-optin') . '">', '</a>');
            } elseif (get_option('_plugin_optin') == 'yes') {
                $settings_link.= sprintf(esc_html__(' %1$s Opt Out %2$s ', PLUGIN_SLUG_NAME), '<a class="opt-out" href="' . admin_url('admin.php?page=' . PLUGIN_SLUG_NAME . '-optin' . '&plugin_menu=no') . '">', '</a>');
            }
            else{
                 $settings_link.= sprintf(esc_html__(' %1$s Opt In %2$s ', PLUGIN_SLUG_NAME), '<a class="opt-out" href="' . admin_url('admin.php?page=' . PLUGIN_SLUG_NAME . '-optin') . '">', '</a>');
            }
            array_unshift($links, $settings_link);
        }
        return $links;
    }
    function __construct($pluginName, $pluginSlug, $pluginFile, $imgIcon = false) {
        $this->h3uc9sa_define_constants($pluginName, $pluginSlug, $pluginFile, $imgIcon);
        $this->h3uc9sa_hooks();
    }
    function h3uc9sa_deactive_modal() {
        global $pagenow;
        if ('plugins.php' !== $pagenow) {
            return;
        }
        include PLUGIN_DIR_PATH . 'deactivate_modal.php';
    }
    function h3uc9sa_attach_scripts($hook) {
        wp_register_script('my-script-custom', plugins_url('/custom.js', __FILE__));
        wp_enqueue_script('my-script-custom');
        $translation_array = array('pluginName' => PLUGIN_NAME);
        //after wp_enqueue_script
        wp_localize_script('my-script-custom', 'obj', $translation_array);
    }
    function h3uc9sa_hooks() {
        add_action('plugin_action_links', array($this, 'h3uc9sa_setItems'), 10, 2);
        add_action('admin_footer', array($this, 'h3uc9sa_deactive_modal'));
        add_filter('plugin_row_meta', array($this, 'h3uc9sa_row_meta'), 10, 2);
        add_action('admin_init', array($this, 'h3uc9sa_redirect_optin'));
        add_action('admin_init', array($this, 'h3uc9sa_optin_checker'));
        add_action('admin_enqueue_scripts', array($this, 'h3uc9sa_attach_scripts'));
        add_action('admin_menu', array($this, 'h3uc9sa_create_optin_page'));
        add_action('admin_init', array($this, 'h3uc9sa_myplugin_pages'));
        register_deactivation_hook( PLUGIN_BASEFILE , array( $this, 'h3uc9sa_deactivationFunction' ) );
    }

    function h3uc9sa_deactivationFunction(){
        if(get_option('_plugin_optin')){
            delete_option('_plugin_optin');
        }
    }


    function h3uc9sa_optin_checker() {
        if (isset($_REQUEST['page'])) {
            if ($_REQUEST['page'] == PLUGIN_SLUG_NAME) {
                if (!get_option('_plugin_optin')) {
                    $url = admin_url('admin.php?page=' . PLUGIN_SLUG_NAME . '-optin');
                    wp_redirect($url);
                }
            }
        }
    }
    function h3uc9sa_create_optin_page() {
        add_submenu_page(null, __('Activate', PLUGIN_SLUG_NAME), __('Activate', PLUGIN_SLUG_NAME), 'manage_options', PLUGIN_SLUG_NAME . '-optin', array($this, 'h3uc9sa_optin_page'));
    }
    function h3uc9sa_optin_page() {
        include 'create_optin_page.php';
    }
    function h3uc9sa_get_settings_page() {
        $loginpress_setting = get_option(PLUGIN_SLUG_NAME . '_setting', array());
        if (!is_array($loginpress_setting) && empty($loginpress_setting)) {
            $loginpress_setting = array();
        }
        $page = array_key_exists(PLUGIN_SLUG_NAME . '_page', $loginpress_setting) ? get_post($loginpress_setting[PLUGIN_SLUG_NAME . '_page']) : false;
        return $page;
    }
    function h3uc9sa_myplugin_pages($value) {
        global $pagenow;
        $page = (isset($_REQUEST['page']) ? $_REQUEST['page'] : false);
        if ($pagenow == 'admin.php' && $page == PLUGIN_SLUG_NAME . '-optin') {
            $default_login_press_redirect = PLUGIN_SLUG_NAME;
            if (isset($_GET['redirect-page'])) {
                $default_login_press_redirect = sanitize_text_field(wp_unslash($_GET['redirect-page']));
            }
            if (isset($_POST)) {
                if (isset($_POST['h3techs-submit-optout'])) {
                    update_option('_plugin_optin', 'no');
                    wp_redirect('admin.php?page=' . $default_login_press_redirect);
                } elseif (isset($_POST['h3techs-submit-optin'])) {
                    update_option('_plugin_optin', 'yes');
                    wp_redirect('admin.php?page=' . $default_login_press_redirect);
                }
            }
            if (isset($_GET['plugin_menu'])) {
                if ($_GET['plugin_menu'] == 'no') {
                    update_option('_plugin_optin', 'no');
                    wp_redirect('admin.php?page=' . $default_login_press_redirect);
                } elseif ($_GET['plugin_menu'] == 'yes') {
                    update_option('_plugin_optin', 'yes');
                    wp_redirect('admin.php?page=' . $default_login_press_redirect);
                }
            }
        }
    }
    function h3uc9sa_check_settings_page() {
        // Retrieve the LoginPress admin page option, that was created during the activation process.
        $option = $this->h3uc9sa_get_settings_page();
        include 'include/create-loginpress-page.php';
        // Retrieve the status of the page, if the option is available.
        if ($option) {
            $page = get_post($option);
            $status = $page->post_status;
        } else {
            $status = null;
        }
        // Check the status of the page. Let's fix it, if the page is missing or in the trash.
        if (empty($status) || 'trash' === $status) {
            //new LoginPress_Page_Create();
            
        }
    }
    function h3uc9sa_redirect_optin() {
        if (isset($_POST['h3techs-submit-optout'])) {
            update_option('_plugin_optin', 'no');
            $this->h3uc9sa_send_data(array('action' => 'Skip',));
        } elseif (isset($_POST['h3techs-submit-optin'])) {
            update_option('_plugin_optin', 'yes');
            $fields = array('action' => 'Activate');
            $this->h3uc9sa_send_data($fields);
        }
    }
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP')) $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR')) $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED')) $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR')) $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED')) $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR')) $ipaddress = getenv('REMOTE_ADDR');
        else $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    function getBrowser() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";
        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }
        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/OPR/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Chrome/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        } elseif (preg_match('/Edge/i', $u_agent)) {
            $bname = 'Edge';
            $ub = "Edge";
        } elseif (preg_match('/Trident/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        }
        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
            
        }
        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }
        // check if we have a number
        if ($version == null || $version == "") {
            $version = "?";
        }
        return array('userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern);
    }
    function h3uc9sa_send_data($args) {
        $cuurent_user = wp_get_current_user();
        $browser = $this->getBrowser();
        $fields = array('email' => get_option('admin_email'), 'website' => get_site_url(), 'action' => '', 'reason' => '', 'reason_detail' => '', 'display_name' => $cuurent_user->display_name, 'blog_language' => get_bloginfo('language'), 'wordpress_version' => get_bloginfo('version'), 'php_version' => PHP_VERSION, 'plugin_name' => PLUGIN_NAME, 'wordpress_timezone' => date_default_timezone_get(), 'ip_address' => $this->get_client_ip(), 'browser' => $browser['name'] . '/' . $browser['version'] . '/' . $browser['platform']);
        $args = array_merge($fields, $args);
        $response = wp_remote_post(H3TECHS_FEEDBACK_SERVER, array('method' => 'POST', 'timeout' => 5, 'httpversion' => '1.0', 'blocking' => true, 'headers' => array(), 'body' => $args,));
    }
    public function h3uc9sa_row_meta($meta_fields, $file) {
        if ($file != PLUGIN_BASEFILE) {
            return $meta_fields;
        }
        echo "<style>.loginpress-rate-stars { display: inline-block; color: #ffb900; position: relative; top: 3px; }.loginpress-rate-stars svg{ fill:#ffb900; } .loginpress-rate-stars svg:hover{ fill:#ffb900 } .loginpress-rate-stars svg:hover ~ svg{ fill:none; } </style>";
        $plugin_rate = "https://wordpress.org/support/plugin/" . PLUGIN_SLUG_NAME . "/reviews/?rate=5#new-post";
        $plugin_filter = "https://wordpress.org/support/plugin/" . PLUGIN_SLUG_NAME . "/reviews/?filter=5";
        $svg_xmlns = "https://www.w3.org/2000/svg";
        $svg_icon = '';
        for ($i = 0;$i < 5;$i++) {
            $svg_icon.= "<svg xmlns='" . esc_url($svg_xmlns) . "' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>";
        }
        // Set icon for thumbsup.
        $meta_fields[] = '<a href="' . esc_url($plugin_filter) . '" target="_blank"><span class="dashicons dashicons-thumbs-up"></span>' . __('Vote!', PLUGIN_NAME) . '</a>';
        // Set icon for 5-star reviews. v1.1.22
        $meta_fields[] = "<a href='" . esc_url($plugin_rate) . "' target='_blank' title='" . esc_html__('Rate', PLUGIN_NAME) . "'><i class='loginpress-rate-stars'>" . $svg_icon . "</i></a>";
        return $meta_fields;
    }
}
?>