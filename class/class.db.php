<?php
require_once ('class.main_ui.php');
class h3uc9sa_db {
    function h3uc9sa_add_data($site_title, $heading, $description, $bottom_content) {
        global $wpdb;
        $result = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-site-title'");
        $result1 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-heading'");
        $result2 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-description'");
        $result3 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-bottom-content'");
        if ($result[0]->option_value != '' || $result1[0]->option_value != '' || $result2[0]->option_value != '' || $result3[0]->option_value != '') {
            if ($site_title != '' || $heading != '' || $description != '' || $bottom_content != '') {
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$site_title' WHERE option_name='wp-smm-site-title'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$heading' WHERE option_name='wp-smm-heading'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$description' WHERE option_name='wp-smm-description'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$bottom_content' WHERE option_name='wp-smm-bottom-content'"));
            }
        } elseif ($site_title != '' || $heading != '' || $description != '' || $bottom_content != '') {
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-site-title", "option_value" => "$site_title"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-heading", "option_value" => "$heading"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-description", "option_value" => "$description"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-bottom-content", "option_value" => "$bottom_content"));
        }
    }
    function h3uc9sa_add_social_data($facebook, $twitter, $instagram, $google_page, $skype, $whatsapp, $email, $phone, $linkedin_profile, $youtube, $pinterest, $vimeo, $dribble, $behance, $vk, $telegram) {
        global $wpdb;
        $social_results = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-facebook'");
        $social_results1 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-twitter'");
        $social_results2 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-instagram'");
        $social_results3 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-google-page'");
        $social_results4 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-skype'");
        $social_results5 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-whatsapp'");
        $social_results6 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-email'");
        $social_results7 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-phone'");
        $social_results8 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-linkedin-profile'");
        $social_results9 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-youtube'");
        $social_results10 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-pinterest'");
        $social_results11 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-vimeo'");
        $social_results12 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-dribble'");
        $social_results13 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-behance'");
        $social_results14 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-vk'");
        $social_results15 = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-telegram'");
        if ($social_results[0]->option_value != '' || $social_results1[0]->option_value != '' || $social_results2[0]->option_value != '' || $social_results3[0]->option_value != '' || $social_results4[0]->option_value != '' || $social_results5[0]->option_value != '' || $social_results6[0]->option_value != '' || $social_results7[0]->option_value != '' || $social_results8[0]->option_value != '' || $social_results9[0]->option_value != '' || $social_results10[0]->option_value != '' || $social_results11[0]->option_value != '' || $social_results12[0]->option_value != '' || $social_results13[0]->option_value != '' || $social_results14[0]->option_value != '' || $social_results15[0]->option_value != '') {
            if ($facebook != '' || $twitter != '' || $instagram != '' || $google_page != '' || $skype != '' || $whatsapp != '' || $email != '' || $phone != '' || $linkedin_profile != '' || $youtube != '' || $pinterest != '' || $vimeo != '' || $dribble != '' || $behance != '' || $vk != '' || $telegram != '') {
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$facebook' WHERE option_name='wp-smm-social-facebook'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$twitter' WHERE option_name='wp-smm-social-twitter'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$instagram' WHERE option_name='wp-smm-social-instagram'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$google_page' WHERE option_name='wp-smm-social-google-page'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$skype' WHERE option_name='wp-smm-social-skype'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$whatsapp' WHERE option_name='wp-smm-social-whatsapp'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$email' WHERE option_name='wp-smm-social-email'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$phone' WHERE option_name='wp-smm-social-phone'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$linkedin_profile' WHERE option_name='wp-smm-social-linkedin-profile'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$youtube' WHERE option_name='wp-smm-social-youtube'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$pinterest' WHERE option_name='wp-smm-social-pinterest'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$vimeo' WHERE option_name='wp-smm-social-vimeo'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$dribble' WHERE option_name='wp-smm-social-dribble'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$behance' WHERE option_name='wp-smm-social-behance'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$vk' WHERE option_name='wp-smm-social-vk'"));
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$telegram' WHERE option_name='wp-smm-social-telegram'"));
            }
        } elseif ($facebook != '' || $twitter != '' || $instagram != '' || $google_page != '' || $skype != '' || $whatsapp != '' || $email != '' || $phone != '' || $linkedin_profile != '' || $youtube != '' || $pinterest != '' || $vimeo != '' || $dribble != '' || $behance != '' || $vk != '' || $telegram != '') {
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-facebook", "option_value" => "$facebook"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-twitter", "option_value" => "$twitter"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-instagram", "option_value" => "$instagram"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-google-page", "option_value" => "$google_page"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-skype", "option_value" => "$skype"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-whatsapp", "option_value" => "$whatsapp"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-email", "option_value" => "$email"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-phone", "option_value" => "$phone"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-linkedin-profile", "option_value" => "$linkedin_profile"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-youtube", "option_value" => "$youtube"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-pinterest", "option_value" => "$pinterest"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-vimeo", "option_value" => "$vimeo"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-dribble", "option_value" => "$dribble"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-behance", "option_value" => "$behance"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-vk", "option_value" => "$vk"));
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-social-telegram", "option_value" => "$telegram"));
        }
    }
    function h3uc9sa_social_select($condition) {
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name ='$condition'");
        echo $result[0]->option_value;
    }
    function h3uc9sa_insert_switch() {
        global $wpdb;
        $wpdb->insert($wpdb->prefix . "options", array("option_name" => "toggle_switch", "option_value" => "checked"));
    }
    function h3uc9sa_delete_switch() {
        global $wpdb;
        $wpdb->delete($wpdb->prefix . "options", array("option_name" => "toggle_switch"));
    }
    function h3uc9sa_select_switch() {
        global $wpdb;
        $result = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='toggle_switch'");
        return $result[0]->option_value;
    }
    function h3uc9sa_select_heading() {
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name ='wp-smm-heading'");
        echo $result[0]->option_value;
    }
    function h3uc9sa_select_description() {
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name ='wp-smm-description'");
        echo $result[0]->option_value;
    }
    function h3uc9sa_select_bottom_content() {
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name ='wp-smm-bottom-content'");
        echo $result[0]->option_value;
    }
    function h3uc9sa_select_main_ui() {
        global $wpdb;
        foreach ($wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name ='toggle_switch'") as $key => $row) {
            $site_title = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-site-title'");
            $googleAnalytics = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-gat-id'");
            $heading = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-heading'");
            $description = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-description'");
            $bottom_content = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-bottom-content'");
            $social_facebook = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-facebook'");
            $social_twitter = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-twitter'");
            $social_instagram = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-instagram'");
            $social_google_page = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-google-page'");
            $social_skype = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-skype'");
            $social_whatsapp = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-whatsapp'");
            $social_email = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-email'");
            $social_phone = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-phone'");
            $social_linkedin_profile = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-linkedin-profile'");
            $social_youtube = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-youtube'");
            $social_pinterest = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-pinterest'");
            $social_vimeo = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-vimeo'");
            $social_dribble = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-dribble'");
            $social_behance = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-behance'");
            $social_vk = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-vk'");
            $social_telegram = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-social-telegram'");
            if ($row->option_value == "checked") {
                if (!current_user_can('edit_themes') || !is_user_logged_in()) {
                    $ui = new h3uc_ui;
                    $ui->smm_main_ui($site_title[0]->option_value, $heading[0]->option_value, $description[0]->option_value, $bottom_content[0]->option_value, $social_facebook[0]->option_value, $social_twitter[0]->option_value, $social_instagram[0]->option_value, $social_google_page[0]->option_value, $social_skype[0]->option_value, $social_whatsapp[0]->option_value, $social_email[0]->option_value, $social_phone[0]->option_value, $social_linkedin_profile[0]->option_value, $social_youtube[0]->option_value, $social_pinterest[0]->option_value, $social_vimeo[0]->option_value, $social_dribble[0]->option_value, $social_behance[0]->option_value, $social_vk[0]->option_value, $social_telegram[0]->option_value, $googleAnalytics[0]->option_value);
                }
            }
        }
    }
    function h3uc9sa_deactivation_delete() {
        global $wpdb;
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='toggle_switch'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-heading'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-description'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-site-title'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-bottom-content'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-facebook'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-twitter'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-instagram'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-google-page'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-skype'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-whatsapp'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-email'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-phone'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-linkedin-profile'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-youtube'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-pinterest'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-vimeo'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-dribble'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-behance'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-vk'"));
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-social-telegram'"));
    }
    function h3uc9sa_add_datetime($datetime) {
        global $wpdb;
        $date_time_result = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-datetime'");
        if ($date_time_result[0]->option_value != '') {
            if ($datetime != '') {
                $wpdb->query($wpdb->prepare("UPDATE wp_options SET option_value='$datetime' WHERE option_name='wp-smm-datetime'"));
            }
        } elseif ($datetime != '') {
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-datetime", "option_value" => "$datetime"));
        }
    }
    function h3uc9sa_select_datetime() {
        global $wpdb;
        $sel_date_time = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-datetime'");
        echo $sel_date_time[0]->option_value;
    }
    function h3uc9sa_select_gat_id() {
        global $wpdb;
        $sel_date_time = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-gat-id'");
        echo $sel_date_time[0]->option_value;
    }
    function h3uc9sa_add_gat_id($gat_id) {
        global $wpdb;
        $gat_id_result = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-gat-id'");
        if ($gat_id_result[0]->option_value != '') {
            if ($gat_id != '') {
                $query = 'UPDATE wp_options SET option_value="' . $gat_id . '" WHERE option_name="wp-smm-gat-id"';
                $wpdb->query($wpdb->prepare($query));
            }
        } elseif ($gat_id != '') {
            $wpdb->insert($wpdb->prefix . "options", array("option_name" => "wp-smm-gat-id", "option_value" => "$gat_id"));
        }
    }
    function h3uc9sa_del_gat_id() {
        global $wpdb;
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-gat-id'"));
    }
    function h3uc9sa_del_datetime() {
        global $wpdb;
        $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-datetime'"));
    }
}
?>