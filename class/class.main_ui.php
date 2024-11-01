<?php
class h3uc_ui {
    function admins_menu() {
        global $wpdb;
        $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'front_page_options';
?>
  <br>
  <br>

  <h2 class="nav-tab-wrapper">
    <ul>

      <?php if (!isset($_GET['tab']) && $_GET['page'] == "wp-simple-maintenance-mode") {
?>
        <li>
    <a style="background-color: white; width: 100px; text-align: center;  border-bottom: 3px solid #00000047;" class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode"><span class="icon"><span class="dashicons 
dashicons-admin-generic"></span></span> <br>General </a>
    </li>
        <?php
        } else {
?>
<li>
    <a style="background-color: white; width: 100px; text-align: center;" class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode"><span class="icon"><span class="dashicons 
dashicons-admin-generic"></span></span> <br>General </a>
    </li>
        <?php
        } ?>

      
<?php
        if ($_GET['tab'] == "design") {
?>
 <li>
    <a style="background-color: white; width: 100px; text-align: center;border-bottom: 3px solid #00000047;" class="nav-tab <?php echo $active_tab == 'design' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=design"><span class="icon"><span class="dashicons 
dashicons-admin-appearance"></span></span> <br>Design</a>
</li>
 <?php
        } else {
?>
  <li>
    <a style="background-color: white; width: 100px; text-align: center;" class="nav-tab <?php echo $active_tab == 'design' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=design"><span class="icon"><span class="dashicons 
dashicons-admin-appearance"></span></span> <br>Design</a>
</li>
  <?php
        }
?>
    
    <?php
        if ($_GET['tab'] == "content") {
?>
      <li>
    <a style="background-color: white; width: 100px; text-align: center; border-bottom: 3px solid #00000047;" class="nav-tab <?php echo $active_tab == 'content' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=content"><span class="icon"><span class="dashicons dashicons-format-aside"></span></span> <br>Content</a>
</li>
      <?php
        } else {
?>
<li>
    <a style="background-color: white; width: 100px; text-align: center; " class="nav-tab <?php echo $active_tab == 'content' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=content"><span class="icon"><span class="dashicons dashicons-format-aside"></span></span> <br>Content</a>
</li>
      <?php
        }
?>

     <?php
        if ($_GET['tab'] == "help") {
?>
<li>
    <a style="background-color: white; width: 100px; text-align: center; border-bottom: 3px solid #00000047;" class="nav-tab <?php echo $active_tab == 'help' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=help"><span class="icon"><span class="dashicons dashicons-sos"></span></span> <br>Help</a>
  </li>
      <?php
        } else {
?>
<li>
    <a style="background-color: white; width: 100px; text-align: center;" class="nav-tab <?php echo $active_tab == 'help' ? 'nav-tab-active' : ''; ?>" href="admin.php?page=wp-simple-maintenance-mode&tab=help"><span class="icon"><span class="dashicons dashicons-sos"></span></span> <br>Help</a>
  </li>
      <?php
        }
?>

    </ul>          
  </h2>

  <?php
        if (!isset($_GET['tab']) && $_GET['page'] == "wp-simple-maintenance-mode") {
?>
    <style type="text/css">
.options_div
{
  background-color: white; padding-top: 1px; padding-left: 20px;padding-right: 5px;padding-bottom: 5px; border: 2px; margin-left: 10px;
}
.smm_h2
{
  border-bottom: 1px solid #dedede; margin: 0; padding: .5em 0 .5em 1em;
}
.label
{
font-size: 15px;
}
      .switch {
        position: relative;
        display: inline-block;
      }

      .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
      }

      .slider {
        cursor: pointer;
        display: inline-block;
        position: relative;
        width: 121px;
        height: 30px;        
        font-weight: 600;
        background: transparent;
        /*-webkit-transition: .4s;
        transition: .4s;*/
        transition: all 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
        border: 2px solid #f1f1f1;
      }

      .slider:before {
        display: inline-block;
        position: relative;
        z-index: 1;
        background: #ea1919;
        text-align: center;
        width: 55px;
        height: 24px;
        left: 3px;
        top: 3px;
        content: "OFF";
        color:white;
        transition: all 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
        transform: translateX(0px);
      }

      input:checked + .slider {        
        
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        content: "ON";
        background-color: #00acee;
        -webkit-transform: translateX(59px);
        -ms-transform: translateX(59px);
        transform: translateX(59px);
      }

     #sideBanner,#topBanner,#bottomBanner {
        width: 100%;
        height: auto
      }
      
    </style>





       <style type="text/css">
          .switch {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 56px;
  height: 20px;
  padding: 3px;
  background-color: white;
  border-radius: 18px;
  box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
  cursor: pointer;
  background-image: -webkit-linear-gradient(top, #eeeeee, white 25px);
  background-image: -moz-linear-gradient(top, #eeeeee, white 25px);
  background-image: -o-linear-gradient(top, #eeeeee, white 25px);
  background-image: linear-gradient(to bottom, #eeeeee, white 25px);
}

.switch-input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: 10px;
  text-transform: uppercase;
  background: #eceeef;
  border-radius: inherit;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
  -webkit-transition-property: opacity background;
  -moz-transition-property: opacity background;
  -o-transition-property: opacity background;
  transition-property: opacity background;
}
.switch-label:before, .switch-label:after {
  position: absolute;
  top: 50%;
  margin-top: -.5em;
  line-height: 1;
  -webkit-transition: inherit;
  -moz-transition: inherit;
  -o-transition: inherit;
  transition: inherit;
}
.switch-label:before {
  content: attr(data-off);
  right: 11px;
  color: #aaa;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.switch-label:after {
  content: attr(data-on);
  left: 11px;
  color: white;
  text-shadow: 0 1px rgba(0, 0, 0, 0.2);
  opacity: 0;
}
.switch-input:checked ~ .switch-label {
  background: #47a8d8;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
}
.switch-input:checked ~ .switch-label:before {
  opacity: 0;
}
.switch-input:checked ~ .switch-label:after {
  opacity: 1;
}

.switch-handle {
  position: absolute;
  top: 4px;
  left: 4px;
  width: 18px;
  height: 18px;
  background: white;
  border-radius: 10px;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  background-image: -webkit-linear-gradient(top, white 40%, #f0f0f0);
  background-image: -moz-linear-gradient(top, white 40%, #f0f0f0);
  background-image: -o-linear-gradient(top, white 40%, #f0f0f0);
  background-image: linear-gradient(to bottom, white 40%, #f0f0f0);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}
.switch-handle:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -6px 0 0 -6px;
  width: 12px;
  height: 12px;
  background: #f9f9f9;
  border-radius: 6px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
  background-image: -webkit-linear-gradient(top, #eeeeee, white);
  background-image: -moz-linear-gradient(top, #eeeeee, white);
  background-image: -o-linear-gradient(top, #eeeeee, white);
  background-image: linear-gradient(to bottom, #eeeeee, white);
}
.switch-input:checked ~ .switch-handle {
  left: 40px;
  box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
}

.switch-green > .switch-input:checked ~ .switch-label {
  background: #4fb845;
}

        </style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
<div class="container" style="float:left; max-width: 100%">
       <div class="row">
            <div class="col-md-12" id="topBanner" style="display: none"> 
              <img src="" >
            </div>

        </div>


        <div class="row">
            <div class="col-md-10"> 


                  <br>
<div class="options_div">
 <h2 class="smm_h2">General Settings</h2>    
    <div>
      <table class="form-table">
       <tbody>
        <tr>
          <th>
            <label>Enable / Disable</label>            
          </th>
          <td>
           <label>  
            <div id="btnn">
            </div>
          </label>
        </td>
      </tr>         
<tr>
  <th>
    <label>Automatic End Date & Time</label>
  </th>
  <td>
<!--     <label class="switch">
      <input type="checkbox" id="end_date_switch">
      <span class="slider round"></span>
    </label> -->



    <label class="switch switch-green">
      <input type="checkbox" id="end_date_switch" class="switch-input" checked>
      <span class="switch-label" data-on="On" data-off="Off"></span>
      <span class="switch-handle"></span>
    </label>



<br>
<div id='datetimepickerdiv' style="display: none;    padding-left: 30px;">  
  <form id="datetimefrm">
  <br>
<input id="datetimepicker1" type="datetime-local" name="datetimepicker1">
<input class="button button3" id="datetimebtn" type="submit" value="Save Changes">  
</form>
  </div>
  </td>
</tr>
<tr>
  <th>
    <label>Google Analytics Tracking</label>
  </th>
  <td>
    <!-- <label class="switch">
      <input type="checkbox" id="go_ana_track">
      <span class="slider round"></span>
    </label> -->


      <label class="switch switch-green">
      <input type="checkbox"  id="go_ana_track" class="switch-input" checked>
      <span class="switch-label" data-on="On" data-off="Off"></span>
      <span class="switch-handle"></span>
    </label>



    <div id="google_tracking_id" style="display: none; padding-left: 30px;">
      <form id="gatfrm">
      <br>
      <input id="gat-id" type="text" class="code" name="gat-id" value="" placeholder="UA-xxxxxx-xx">
      <input class="button button3" id="gatbtn" type="submit" value="Save Changes">        
      <p class="description">Enter the unique tracking ID found in your GA tracking profile settings to track visits to pages.</p>
      </form>
    </div>
  </td>
</tr>
</tbody>
</table>
</div>

</div>




            </div> 


            <div class="col-md-2" id="sideBanner" style="display: none">
                <img src="" >
            </div>
        </div>


        <div class="row">
            <div class="col-md-12" id="bottomBanner" style="display: none"> 
              <img src="">
            </div>

        </div> 


</div>

    <br>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>

<script type="text/javascript">  
  jQuery(document).ready(function(){    
        // Submit form text data via Ajax
      jQuery("#end_date_switch").on("click",function(){
        if (jQuery(this).prop("checked") == true) 
        {          
          jQuery("#datetimepickerdiv").fadeIn();          
        }else
        {

          jQuery("#datetimepickerdiv").fadeOut();   

          var del_datetime = 'del_datetime';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'del_datetime':del_datetime,
        }          
        jQuery.post(ajaxurl, data, function(response) {
                 
        });
        }
      });
    
    jQuery("#go_ana_track").on("click",function(){
        if (jQuery(this).prop("checked") == true) 
        {
          jQuery("#google_tracking_id").fadeIn();
        }else
        {
          jQuery("#google_tracking_id").fadeOut();
            var del_gat_id = 'del_gat_id';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'del_gat_id':del_gat_id,
        }          
        jQuery.post(ajaxurl, data, function(response) {
          
          
        });

        }
      });


    jQuery("#datetimefrm").on('submit', function(e){       
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('action', 'h3uc9sa_FormSubmitter');                
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                jQuery('#datetimebtn').attr("disabled","disabled");
                jQuery('#datetimefrm').css("opacity",".5");
            },
            success: function(response){ //console.log(response);                                  
                if(response.status == 1){
                    jQuery('#datetimefrm')[0].reset();                    
                }

                Swal.fire(
                    'Success!',
                    "Changes Saved Successfully",
                    'success'
                  );


                jQuery('#datetimefrm').css("opacity","");
                jQuery("#datetimebtn").removeAttr("disabled");
            }
        });
    });

    jQuery("#gatfrm").on('submit', function(e){       
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('action', 'h3uc9sa_FormSubmitter');                
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                jQuery('#gatbtn').attr("disabled","disabled");
                jQuery('#gatfrm').css("opacity",".5");
            },
            success: function(response){ //console.log(response);                                  
                if(response.status == 1){
                    jQuery('#gatfrm')[0].reset();                    
                }
                 Swal.fire(
                    'Success!',
                    "Changes Saved Successfully",
                    'success'
                  );
                jQuery('#gatfrm').css("opacity","");
                jQuery("#gatbtn").removeAttr("disabled");
            }
        });
    });

    var gat_id = 'gat_id';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'gat_id':gat_id,
        }          
        jQuery.post(ajaxurl, data, function(response) {
          if (response != '') 
          {             
          jQuery("#go_ana_track").prop( "checked", true );
          jQuery("#google_tracking_id").css("display", "block");
          jQuery("#gat-id").val(response);
        }else
        {
          jQuery("#go_ana_track").prop( "checked", false );

        }
        });

    var datetime_switch = 'datetime_switch';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'datetime_switch':datetime_switch,
        }          
        jQuery.post(ajaxurl, data, function(response) {
          if (response != '') 
          {                        
          jQuery("#end_date_switch").prop( "checked", true );
          jQuery("#datetimepickerdiv").css("display", "block");          
          jQuery("#datetimepicker1").val(response);

          }else
          {
          jQuery("#end_date_switch").prop( "checked", false );
          }
        });

    var toggle_switch = 'toggle_switch';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'toggle_switch':toggle_switch,
        }
        jQuery.post(ajaxurl, data, function(response) {
            if (jQuery.trim(response) == 'checked') 
        {
          jQuery("#btnn").html(` <label class="switch switch-green">
                  <input type="checkbox" id="h3_switch" class="switch-input" checked>
                  <span class="switch-label" data-on="On" data-off="Off"></span>
                  <span class="switch-handle"></span>
                </label>`);    
        }else
        {
          jQuery("#btnn").html(` <label class="switch switch-green">
                  <input type="checkbox" id="h3_switch" class="switch-input">
                  <span class="switch-label" data-on="On" data-off="Off"></span>
                  <span class="switch-handle"></span>
                </label>`);    
        }
        });
    
  jQuery( "#btnn" ).on( "click", "#h3_switch", function() {
      if (jQuery(this).prop("checked") == true) 
      {
        var check = "checked";
        var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'checked':check,
        }
        jQuery.post(ajaxurl, data, function(response) {
            
        });
      }else{
        var check = "unchecked";
        var data={
          'action': 'h3uc9sa_AjaxerHandler',
          'unchecked':check,
        }
        jQuery.post(ajaxurl, data, function(response) {
            
        });
      }
    });
  });
</script>
<?php
        } elseif ($_GET['tab'] == 'content') {
?>
<style type="text/css">
.options_div
{
  background-color: white; padding-top: 1px; padding-left: 20px;padding-right: 5px;padding-bottom: 5px; border: 2px; margin-left: 10px;
}
.smm_h2
{
  border-bottom: 1px solid #dedede; margin: 0; padding: .5em 0 .5em 1em;
}
</style>
<br>
<div class="options_div">
 <h2 class="smm_h2">Content Settings</h2>
 <form id="smm-form" method="POST">
   <table class="form-table">
     <tbody>
       <tr valign="top">
    <th scope="row">
      <label>Title</label>
    </th>
    <td>
      <input id="site_title" type="text" class="regular-text code" name="site_title" value="Under Construction !">
      <p class="description">Page title. Default: Under Construction !</p>
    </td>
  </tr>
  <tr valign="top">
        <th scope="row">
          <label>Heading</label>
        </th>
        <td>
         <label>    
          <input id="wp-smm-heading" type="text" class="regular-text code" name="wp-smm-heading" value="We are working on it !">
      <p class="description">Page Heading. Default: We are working on it !</p>
        </label>
      </td>
    </tr>
    <tr>
      <th>
        <label>Description</label>
      </th>
      <td style="width: 700px; float: left; display: inline-table;">
       
         <?php wp_editor('', 'wp-smm-description', $settings = array('textarea_name' => 'wp-smm-description', 'quicktags' => false, 'textarea_rows' => 10, 'media_buttons' => false)); ?>       
    </td>
  </tr>
<tr>
  <th>
    <label>Bottom Content</label>
  </th>
  <td>
   <label>    
    <input id="wp-smm-bottom-content" type="text" class="regular-text code" name="wp-smm-bottom-content" value="Our site is in under construction">
      <p class="description">Bottom Content. Default: Our site is in under construction !</p>
  </label>
</td>
</tr>
  <tr>
  <th>
  </th>
  <td>
    <label><input class="button button3" id="submitBtn" type="submit" value="Save Changes"></label>
  </td>
</tr>

     </tbody>
   </table>
 </form>

 <h3>Social & Contact Icons</h3>
    <form id="smm-social-form" method="POST">
    <div>
      <table class="form-table">
       <tbody>        
<tr valign="top">
    <th scope="row"><label for="social_facebook">Facebook Page</label></th>    
    <td>
      <input id="social_facebook" type="url" class="regular-text code" name="smm-social-facebook" value="" placeholder="Facebook business or personal page URL">
      <p class="description">Complete URL, with https prefix, to Facebook page.</p></td></tr>

      <tr valign="top">
    <th scope="row"><label for="social_twitter">Twitter Profile</label></th>
    <td><input id="social_twitter" type="url" class="regular-text code" name="smm-social-twitter" value="" placeholder="Twitter profile URL"><p class="description">Complete URL, with https prefix, to Twitter profile page.</p></td></tr>

    <tr valign="top">
    <th scope="row"><label for="social_instagram">Instagram Profile</label></th>
    <td><input id="social_instagram" type="url" class="regular-text code" name="smm-social-instagram" value="" placeholder="Instagram profile URL"><p class="description">Complete URL, with https prefix, to Instagram profile.</p></td></tr>

    <tr valign="top">
    <th scope="row"><label for="google_page">Google Page</label></th>
    <td><input id="social_google-page" type="url" class="regular-text code" name="smm-social-google-page" value="" placeholder="Google+ Pgae URL"><p class="description">Complete URL, with https prefix, to Google+ page.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_skype">Skype Username</label></th>
    <td><input id="social_skype" type="text" class="regular-text code" name="smm-social-skype" value="" placeholder="Skype Username or Account Name"><p class="description">Skype Username Or Account Name.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_whatsapp">WhatsApp Phone Number</label></th>
    <td><input id="social_whatsapp" type="number" class="regular-text code" name="smm-social-whatsapp" value="" placeholder="123-456-789"><p class="description">WhatsApp phone number in international format without + or 00 prefix.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_email">Email Address</label></th>
    <td><input id="social_email" type="email" class="regular-text code" name="smm-social-email" value="" placeholder="name@domin.com"><p class="description">Email will be encoded on the page to protect it from email address harvesters.</p></td></tr>

    <tr valign="top">
    <th scope="row"><label for="social_phone">Phone Number</label></th>
    <td><input id="social_phone" type="number" class="regular-text code" name="smm-social-phone" value="" placeholder="+1-123-456-789"><p class="description">Phone number in full international format..</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="linkedin_profile">Linkedin Profile</label></th>
    <td><input id="social_linkedin_profile" type="url" class="regular-text code" name="smm-social-linkedin-profile" value="" placeholder="Linkedin profile page URL"><p class="description">Complete URL, with https prefix, to LinkedIn profile page.</p></td></tr>

    <tr valign="top">
    <th scope="row"><label for="social_youtube">Youtube Profile Page or Video</label></th>
    <td><input id="social_youtube" type="url" class="regular-text code" name="smm-social-youtube" value="" placeholder="Youtube page or URL"><p class="description">Complete URL, with https prefix, to YouTube page or video.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_pinterest">Pinterest Profile</label></th>
    <td><input id="social_pinterest" type="url" class="regular-text code" name="smm-social-pinterest" value="" placeholder="Pinterest Profile URL"><p class="description">Complete URL, with https prefix, to Pinterest profile.</p></td></tr>

    
    <tr valign="top">
    <th scope="row"><label for="social_vimeo">Vimeo Profile Page or Video</label></th>
    <td><input id="social_vimeo" type="url" class="regular-text code" name="smm-social-vimeo" value="" placeholder="Vimeo Profile Page or Video URL"><p class="description">Complete URL, with https prefix, to Vimeo page or video.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_dribble">Dribbble Profile</label></th>
    <td><input id="social_dribble" type="url" class="regular-text code" name="smm-social-dribble" value="" placeholder="Dribbble profile URL"><p class="description">Complete URL, with https prefix, to Dribbble profile.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_behance">Behance Profile</label></th>
    <td><input id="social_behance" type="url" class="regular-text code" name="smm-social-behance" value="" placeholder="Behance profile URL"><p class="description">Complete URL, with https prefix, to Behance profile.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_vk">VK Profile</label></th>
    <td><input id="social_vk" type="url" class="regular-text code" name="smm-social-vk" value="" placeholder="VK profile URL"><p class="description">Complete URL, with https prefix to Telegram group, channel or account.</p></td></tr>


    <tr valign="top">
    <th scope="row"><label for="social_telegram">Telegram Group, Channel or Account</label></th>
    <td><input id="social_telegram" type="url" class="regular-text code" name="smm-social-telegram" value="" placeholder="Telegram Group, Channel or Account URL"><p class="description">Complete URL, with https prefix, to Twitter profile page.</p></td></tr>
    
<tr>
  <th>
  </th>
  <td>
    <label><input class="button button3" id="socialsubmit" type="submit" value="Save Changes"></label>
  </td>
</tr>
</tbody>
</table>
</div>
</form>
</div>
<br>
<script type="text/javascript">
  
    var heading_field = 'heading_field';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'heading_field':heading_field,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#wp-smm-heading").val(response);
        }); 

    var description_field = 'description_field';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'description_field':description_field,
        }
        jQuery.post(ajaxurl, data, function(response) { 
          tinyMCE.activeEditor.setContent(response);        
        }); 

    var bottom_content = 'bottom_content';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'bottom_content':bottom_content,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#wp-smm-bottom-content").val(response);
        });

    var social_facebook = 'social_facebook';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_facebook':social_facebook,
        }
        jQuery.post(ajaxurl, data, function(response) {          
            jQuery("#social_facebook").val(response);
        });

    var social_twitter = 'social_twitter';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_twitter':social_twitter,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_twitter").val(response);
        });


    var social_instagram = 'social_instagram';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_instagram':social_instagram,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_instagram").val(response);
        });


    var social_google_page = 'social_google_page';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_google_page':social_google_page,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_google-page").val(response);
        });

    var social_skype = 'social_skype';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_skype':social_skype,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_skype").val(response);
        });


    var social_whatsapp = 'social_whatsapp';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_whatsapp':social_whatsapp,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_whatsapp").val(response);
        });


    var social_email = 'social_email';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_email':social_email,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_email").val(response);
        });


    var social_phone = 'social_phone';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_phone':social_phone,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_phone").val(response);
        });


    var social_linkedin_profile = 'social_linkedin_profile';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_linkedin_profile':social_linkedin_profile,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_linkedin_profile").val(response);
        });


    var social_youtube = 'social_youtube';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_youtube':social_youtube,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_youtube").val(response);
        });


    var social_pinterest = 'social_pinterest';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_pinterest':social_pinterest,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_pinterest").val(response);
        });


    var social_vimeo = 'social_vimeo';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_vimeo':social_vimeo,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_vimeo").val(response);
        });


    var social_dribble = 'social_dribble';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_dribble':social_dribble,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_dribble").val(response);
        });


    var social_behance = 'social_behance';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_behance':social_behance,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_behance").val(response);
        });


    var social_vk = 'social_vk';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_vk':social_vk,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_vk").val(response);
        });


    var social_telegram = 'social_telegram';
    var data={
        'action': 'h3uc9sa_AjaxerHandler',
        'social_telegram':social_telegram,
        }
        jQuery.post(ajaxurl, data, function(response) {
            jQuery("#social_telegram").val(response);
        });


    jQuery("#smm-social-form").on('submit', function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('action', 'h3uc9sa_FormSubmitter');
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                jQuery('#socialsubmit').attr("disabled","disabled");
                jQuery('#smm-social-form').css("opacity",".5");
            },
            success: function(response){ //console.log(response);                
                if(response.status == 1){
                    jQuery('#smm-form')[0].reset();                    
                }
                jQuery('#smm-social-form').css("opacity","");
                jQuery("#socialsubmit").removeAttr("disabled");
            }
        });
    });

    jQuery("#smm-form").on('submit', function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('action', 'h3uc9sa_FormSubmitter');
        formdata.append('wp-smm-description', tinyMCE.activeEditor.getContent({format:'raw'}));
        
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                jQuery('#submitBtn').attr("disabled","disabled");
                jQuery('#smm-form').css("opacity",".5");
            },
            success: function(response){ //console.log(response);                
                if(response.status == 1){
                    jQuery('#smm-form')[0].reset();                    
                }
                jQuery('#smm-form').css("opacity","");
                jQuery("#submitBtn").removeAttr("disabled");
            }
        });
    });
</script>
<?php
        } elseif ($_GET['tab'] == 'help') {
?>
    <br>
<div class="options_div">
 <h2 class="smm_h2">Help!</h2>
<br>
<br>
Write us at info@h3techs.com for any information.
 <br>
 <br>
</div>
  <?php
        } elseif ($_GET['tab'] == "design") {
?>

<style type="text/css">
  .options_div
{
  background-color: white; padding-top: 1px; padding-left: 20px;padding-right: 5px;padding-bottom: 5px; border: 2px; margin-left: 10px;
}
.smm_h2
{
  border-bottom: 1px solid #dedede; margin: 0; padding: .5em 0 .5em 1em;
}
.label
{
font-size: 15px;
}
</style>

<div class="options_div">
  <h2 class="smm_h2">Coming Soon</h2>
  <h6>Hundredes of templates are coming soon</h6>
</div>

<?php
        }
    }
    function smm_main_ui($site_title, $heading, $description, $b_content, $facebook, $twitter, $instagram, $google_page, $skype, $whatsapp, $email, $phone, $linkedin_profile, $youtube, $pinterest, $vimeo, $dribble, $behance, $vk, $telegram, $googleAnalytics) {
        global $wpdb;
        $sel_date_time = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name='wp-smm-datetime'");
        if ($sel_date_time[0]->option_value != '') {
            if (get_gmt_from_date(current_time('mysql')) >= get_gmt_from_date($sel_date_time[0]->option_value)) {
                $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='toggle_switch'"));
                $wpdb->query($wpdb->prepare("DELETE From  wp_options WHERE option_name='wp-smm-datetime'"));
            }
        }
?>
<html>
  <head>
    <title><?php echo $site_title; ?></title>

    <?php echo $googleAnalytics; ?>

	<style>
body, html {
  max-width: 100% !important;
  margin: 0px  !important; 
}

.middle {
  position: absolute !important;
  top: 30% !important;
  left: 50% !important;
  transform: translate(-50%, -50%) !important;
  text-align: center !important;
}
.bottom
{
  position: absolute !important;
  top: 88% !important;
  left: 50% !important;
  transform: translate(-50%, -50%) !important;
  text-align: center !important;
}

</style>
  </head>
<body>

  <div class="middle">
    <h1><?php echo $heading; ?></h1>
    
    <p><?php echo $description; ?></p>
  </div>
  <div class="bottom">
    <p style="font-size: 20px;"><?php echo $b_content; ?></p>

    <?php
        if ($facebook != '') {
?>  
    <a href="<?php echo $facebook; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/facebook-icon.png" width="30px" height="30px"></a>
    <?php
        }
        if ($twitter != '') {
?>
    <a href="<?php echo $twitter; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/twitter-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($instagram != '') {
?>
    <a href="<?php echo $instagram; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/instagram-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($google_page != '') {
?>
    <a href="<?php echo $google_page; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/google-plus-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($skype != '') {
?>
    <a href="<?php echo $skype; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/skype-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($whatsapp != '') {
?>
    <a href="<?php echo $whatsapp; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/whatsapp-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($email != '') {
?>
    <a href="<?php echo $email; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/email-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($phone != '') {
?>
    <a href="<?php echo $phone; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/phone-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($linkedin_profile != '') {
?>
    <a href="<?php echo $linkedin_profile; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/linkedin-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($youtube != '') {
?>
    <a href="<?php echo $youtube; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/youtube-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($pinterest != '') {
?>
    <a href="<?php echo $pinterest; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/pinterest-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($vimeo != '') {
?>
    <a href="<?php echo $vimeo; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/vimeo-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($dribble != '') {
?>
    <a href="<?php echo $dribble; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/dribbble-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($behance != '') {
?>
    <a href="<?php echo $behance; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/behanc-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($vk != '') {
?>
    <a href="<?php echo $vk; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/vk-icon.png" width="30px" height="30px"></a>
      <?php
        }
        if ($telegram != '') {
?>
    <a href="<?php echo $telegram; ?>"><img src="<?php echo plugin_dir_url(__FILE__); ?>../assets/img/telegram-icon.png" width="30px" height="30px"></a>
      <?php
        }
?>
  </div>

</body>
</html>

	<?php
    }
}
?>