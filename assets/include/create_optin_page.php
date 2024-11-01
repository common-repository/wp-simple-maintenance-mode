<?php
$user = wp_get_current_user();
$name = empty($user->user_firstname) ? $user->display_name : $user->user_firstname;
$email = $user->user_email;
$site_link = '<a href="' . get_site_url() . '">' . get_site_url() . '</a>';
$website = get_site_url();
$default_login_press_redirect = PLUGIN_SLUG_NAME;
if (isset($_GET['redirect-page'])) {
    $default_login_press_redirect = sanitize_text_field(wp_unslash($_GET['redirect-page']));
}
?>


<style media="screen">
#wpwrap {
  background-color: #fdfdfd
}
#wpcontent {
  padding: 0!important
}
#h3techs-logo-wrapper {
  padding: 10px 0;
  width: 80%;
  margin: 0 auto;
  border-bottom: solid 1px #d5d5d5
}
#h3techs-logo-wrapper-inner {
  max-width: 600px;
  width: 100%;
  margin: auto
}
#h3techs-splash {
  width: 80%;
  margin: auto;
  background-color: #fdfdfd;
  text-align: center
}
#h3techs-splash h1 {
  margin-top: 40px;
  margin-bottom: 25px;
  font-size: 26px
}
#h3techs-splash-main {
  padding-bottom: 0
}
#h3techs-splash-permissions-toggle {
  font-size: 12px
}
#h3techs-splash-permissions-dropdown h3 {
  font-size: 16px;
  margin-bottom: 5px
}
#h3techs-splash-permissions-dropdown p {
  margin-top: 0;
  font-size: 14px;
  margin-bottom: 20px
}
#h3techs-splash-main-text {
  font-size: 16px;
  padding: 0;
  margin: 0
}
#h3techs-splash-footer {
  width: 80%;
  padding: 15px 0;
  border: 1px solid #d5d5d5;
  font-size: 10px;
  text-align: center;
  margin-top: 238px;
  margin-left: auto;
  margin-right: auto;
}
#h3techs-ga-optout-btn {
  background: none!important;
  border: none;
  padding: 0!important;
  font: inherit;
  color: #7f7f7f;
  border-bottom: 1px solid #7f7f7f;
  cursor: pointer;
  margin-bottom: 20px;
  font-size: 14px
}
.about-wrap .nav-tab + .nav-tab{
  border-left: 0;
}
.about-wrap .nav-tab:focus{

  box-shadow: none;
}
#h3techs-ga-submit-btn {
  height: 40px;
  margin: 30px;
  margin-bottom: 15px;
  font-size: 16px;
  line-height: 40px;
  padding: 0 20px;
}
#h3techs-ga-submit-btn:after{
  content: '\279C';
}
.h3techs-splash-box {
  width: 100%;
  max-width: 600px;
  background-color: #fff;
  border: solid 1px #d5d5d5;
  margin: auto;
  margin-bottom: 20px;
  text-align: center;
  padding: 15px
}

.about-wrap .nav-tab{
  height: auto;
  float: none;
  display: inline-block;
  margin-right: 0;
  margin-left: 0;
  font-size: 18px;
  width: 33.333%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 8px 15px;
}
.step-wrapper .h3techs-splash-box{
  padding: 0;
  border: 0;
}
.nav-tab-wrapper{
  margin:0;
  font-size: 0;
}
.nav-tab-wrapper, .wrap h2.nav-tab-wrapper{
  margin:0;
  font-size: 0;
}
.h3techs-tab-content{
  display: none;
  border:1px solid #d5d5d5;
  padding:1px 20px 20px;
  border-top: 0;
}
.h3techs-tab-content.active{
  display: block;
}
.h3techs-seprator{
  border:0;
  border-top: 1px solid #ccc;
  margin: 50px 0;
}
.admin_page_h3techs-optin #wpwrap{
  background: #f1f1f1;
}
#wpbody{
  padding-right: 0;
}
#h3techs-splash{
  max-width: calc(100% - 64px);

  background: #f1f1f1;
}
.h3techs-splash-box{
  max-width: 100%;
  background: #f1f1f1;
  box-sizing: border-box;
  overflow: hidden;
}
.about-wrap {
  position: relative;
  margin: 25px 35px 0 35px;
  max-width: 80%;
  font-size: 15px;
  width: calc(100% - 64px);
  margin: 0 auto;
}
.h3techs-left-screenshot{
  float: left;
}
.about-wrap p{
  font-size: 14px;
}
.h3techs-text-settings h5{
  margin: 25px 0 5px;
}
.about-wrap .about-description, .about-wrap .about-text{
  font-size: 16px;
}
.about-wrap .feature-section h4,.about-wrap .changelog h3{
  font-size: 1em;
}
h5{
  font-size: 1em;
}
.about-wrap .feature-section img.h3techs-left-screenshot{
  margin-left: 0 !important;
  margin-right: 30px !important;
}
.about-wrap img{

  width: 50%;
}
.h3techs-text-settings{
  overflow: hidden;
}
#h3techs-splash-footer{
  margin-top: 50px;
}
.step-wrapper{
  width: 100%;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
}
/*.step-wrapper.slide{
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}*/
.step-wrapper:after{
  content: '';
  display: table;
  clear: both;
}
.step{
  width: 100%;
  float: left;
  padding: 0 20px;
  box-sizing: border-box;
}
.h3techs-welcome-screenshots{
  margin-left: 30px !important;
}
#h3techs-splash-footer{
  font-size: 12px;
}
.about-wrap .changelog.h3techs-backend-settings{
  margin-bottom: 20px;
}
.h3techs-backend-settings .feature-section{
  padding-bottom: 20px;
}
a.h3techs-ga-button.button.button-primary{
  height: auto !important;
}
.changelog:last-child{
  margin-bottom: 0;
}
.changelog:last-child .feature-section{
  padding-bottom: 0;
}

#h3techs-logo-text{
  margin-right: 40px;
  position: relative;
  bottom: 0px;
  width: 55px;
  vertical-align: middle;
}
    .h3techs-badge {
      height: 200px;
      width: 200px;
      margin: -12px -5px;
      background: url("<?php echo plugins_url('assets/images/welcome-h3techs.png', __FILE__); ?>") no-repeat;
      background-size: 100% auto;
    }

    .about-wrap .h3techs-badge {
      position: absolute;
      top: 0;
      right: 0;
    }

    .h3techs-welcome-screenshots {
      float: right;
      margin-left: 10px !important;
      border:1px solid #ccc;
      padding:0;
      box-shadow:4px 4px 0px rgba(0,0,0,.05)
    }

    .about-wrap .feature-section {
      margin-top: 20px;
    }

    .about-wrap .feature-section p{
      max-width: none !important;
    }

    .h3techs-welcome-settings{
      clear: both;
      padding-top: 20px;
    }
    .h3techs-left-screenshot {
      float: left !important;
  }
</style>


<?php
//admin_url( 'admin.php?page=' . $default_login_press_redirect )
echo '<form method="post" action="' . admin_url('admin.php?page=' . PLUGIN_SLUG_NAME . '-optin') . '">';
echo "<input type='hidden' name='email' value='$email'>";
echo '<div id="h3techs-splash" style="padding-top:1px">';
echo '<h1> <img id="h3techs-logo-text" src="https://ps.w.org/' . PLUGIN_SLUG_NAME . '/assets/icon-256x256.png"> ' . __('Welcome to ' . PLUGIN_NAME, PLUGIN_NAME) . '</h1>';
echo '<div id="h3techs-splash-main" class="h3techs-splash-box">';
echo '<div class="step-wrapper">';
if (get_option('_h3techs_optin') == 'no' || !get_option('_h3techs_optin')) {
    echo "<div class='first-step step'>";
    echo sprintf(__('%1$s Hey %2$s,  %4$s If you opt-in some data about your installation of ' . PLUGIN_NAME . ' will be sent to <a href="http://www.h3techs.com/">H3 Technologies</a> (This doesn\'t include stats)%4$s and You will receive new feature updates, security notifications etc %5$sNo Spam.%6$s %4$s%4$s Help us %7$sImprove ' . PLUGIN_NAME . '%8$s %4$s %4$s ', 'h3techs'), '<p id="h3techs-splash-main-text">', '<strong>' . $name . '</strong>', '<strong>' . $website . '</strong>', '<br>', '<i>', '</i>', '<strong>', '</strong>') . '</p>';
    echo "<button type='submit' id='h3techs-ga-submit-btn' class='h3techs-ga-button button button-primary' name='h3techs-submit-optin' >" . __('Allow and Continue  ', PLUGIN_NAME) . "</button><br>";
    echo "<button type='submit' id='h3techs-ga-optout-btn' name='h3techs-submit-optout' >" . __('Skip This Step', PLUGIN_NAME) . "</button>";
    echo '<div id="h3techs-splash-permissions" class="h3techs-splash-box">';
    echo '<a id="h3techs-splash-permissions-toggle" href="#" >' . __('What permissions are being granted?', PLUGIN_NAME) . '</a>';
    echo '<div id="h3techs-splash-permissions-dropdown" style="display: none;">';
    echo '<h3>' . __('Your Website Overview', PLUGIN_NAME) . '</h3>';
    echo '<p>' . __('Your Site URL, WordPress & PHP version, plugins & themes. This data lets us make sure this plugin always stays compatible with the most popular plugins and themes.', PLUGIN_NAME) . '</p>';
    echo '<h3>' . __('Your Profile Overview', PLUGIN_NAME) . '</h3>';
    echo '<p>' . __('Your name and email address.', PLUGIN_NAME) . '</p>';
    echo '<h3>' . __('Admin Notices', PLUGIN_NAME) . '</h3>';
    echo '<p>' . __("Updates, Announcement, Marketing. No Spam.", PLUGIN_NAME) . '</p>';
    echo '<h3>' . __('Plugin Actions', PLUGIN_NAME) . '</h3>';
    echo '<p>' . __("Active, Deactive, Uninstallation and How you use this plugin's features and settings. This is limited to usage data. It does not include any of your sensitive " . PLUGIN_NAME . " data, such as traffic. This data helps us learn which features are most popular, so we can improve the plugin further.", PLUGIN_NAME) . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</form>';
?>

<script type="text/javascript">
jQuery(document).ready(function(s) {
  var o = parseInt(s("#h3techs-splash-footer").css("margin-top"));
  s("#h3techs-splash-permissions-toggle").click(function(a) {
    a.preventDefault(), s("#h3techs-splash-permissions-dropdown").toggle(), 1 == s("#h3techs-splash-permissions-dropdown:visible").length ? s("#h3techs-splash-footer").css("margin-top", o - 208 + "px") : s("#h3techs-splash-footer").css("margin-top", o + "px")
  })
});

</script>
