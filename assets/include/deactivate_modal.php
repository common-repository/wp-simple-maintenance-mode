<?php
$h3techs_deactivate_nonce = wp_create_nonce('h3techs-deactivate-nonce'); ?>
<style>
    .h3techs-hidden{

      overflow: hidden;
    }
    .h3techs-popup-overlay .h3techs-internal-message{
      margin: 3px 0 3px 22px;
      display: none;
    }
    .h3techs-reason-input{
      margin: 3px 0 3px 22px;
      display: none;
    }
    .h3techs-reason-input input[type="text"]{

      width: 100%;
      display: block;
    }
  .h3techs-popup-overlay{

    background: rgba(0,0,0, .8);
    position: fixed;
    top:0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 1000;
    overflow: auto;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .h3techs-popup-overlay.h3techs-active{
    opacity: 1;
    visibility: visible;
  }
  .h3techs-serveypanel{
    width: 600px;
    background: #fff;
    margin: 0 auto 0;
    border-radius: 3px;
  }
  .h3techs-popup-header{
    background: #f1f1f1;
    padding: 20px;
    border-bottom: 1px solid #ccc;
  }
  .h3techs-popup-header h2{
    margin: 0;
    text-transform: uppercase;
  }
  .h3techs-popup-body{
      padding: 10px 20px;
  }
  .h3techs-popup-footer{
    background: #f9f3f3;
    padding: 10px 20px;
    border-top: 1px solid #ccc;
  }
  .h3techs-popup-footer:after{

    content:"";
    display: table;
    clear: both;
  }
  .action-btns{
    float: right;
  }
  .h3techs-anonymous{

    display: none;
  }
  .attention, .error-message {
    color: red;
    font-weight: 600;
    display: none;
  }
  .h3techs-spinner{
    display: none;
  }
  .h3techs-spinner img{
    margin-top: 3px;
  }
  .h3techs-pro-message{
    padding-left: 24px;
    color: red;
    font-weight: 600;
    display: none;
  }
  .h3techs-popup-header{
    background: none;
        padding: 18px 15px;
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,.1);
    box-shadow: 0 0 8px rgba(0,0,0,.1);
    border: 0;
}
.h3techs-popup-body h3{
    margin-top: 0;
    margin-bottom: 30px;
        font-weight: 700;
    font-size: 15px;
    color: #495157;
    line-height: 1.4;
    text-tranform: uppercase;
}
.h3techs-reason{
    font-size: 13px;
    color: #6d7882;
    margin-bottom: 15px;
}
.h3techs-reason input[type="radio"]{
margin-right: 15px;
}
.h3techs-popup-body{
padding: 30px 30px 0;

}
.h3techs-popup-footer{
background: none;
    border: 0;
    padding: 29px 39px 39px;
}
</style>
<div class="h3techs-popup-overlay">
  <div class="h3techs-serveypanel">
    <form action="#" method="post" id="h3techs-deactivate-form">
    <div class="h3techs-popup-header">
      <h2><?php _e('Quick feedback about ' . PLUGIN_NAME, PLUGIN_NAME); ?></h2>
    </div>
    <div class="h3techs-popup-body">
      <h3><?php _e('If you have a moment, please let us know why you are deactivating:', PLUGIN_NAME); ?></h3>
      <input type="hidden" class="h3techs_deactivate_nonce" name="h3techs_deactivate_nonce" value="<?php echo $h3techs_deactivate_nonce; ?>">
      <ul id="h3techs-reason-list">
        <li class="h3techs-reason h3techs-reason-pro" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="pro">
            </span>
            <span><?php _e(" I upgraded to " . PLUGIN_NAME . " Pro", PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-pro-message"><?php _e('No need to deactivate this ' . PLUGIN_NAME . ' Core version. Pro version works as an add-on with Core version.', PLUGIN_NAME); ?></div>
        </li>
        <li class="h3techs-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="1">
            </span>
            <span><?php _e('I only needed the plugin for a short period', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
        </li>
        <li class="h3techs-reason has-input" data-input-type="textfield">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="2">
            </span>
            <span><?php _e('I found a better plugin', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
          <div class="h3techs-reason-input"><span class="message error-message "><?php _e('Kindly tell us the Plugin name.', PLUGIN_NAME); ?></span><input type="text" name="better_plugin_h3" placeholder="What's the plugin's name?"></div>
        </li>
        <li class="h3techs-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="3">
            </span>
            <span><?php _e('The plugin broke my site', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
        </li>
        <li class="h3techs-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="4">
            </span>
            <span><?php _e('The plugin suddenly stopped working', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
        </li>
        <li class="h3techs-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="5">
            </span>
            <span><?php _e('I no longer need the plugin', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
        </li>
        <li class="h3techs-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="6">
            </span>
            <span><?php _e("It's a temporary deactivation. I'm just debugging an issue.", PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
        </li>
        <li class="h3techs-reason has-input" data-input-type="textfield" >
          <label>
            <span>
              <input type="radio" name="h3techs-selected-reason" value="7">
            </span>
            <span><?php _e('Other', PLUGIN_NAME); ?></span>
          </label>
          <div class="h3techs-internal-message"></div>
          <div class="h3techs-reason-input"><span class="message error-message "><?php _e('Kindly tell us the reason so we can improve.', PLUGIN_NAME); ?></span><input type="text" name="other_reason_h3" placeholder="Kindly tell us the reason so we can improve."></div>
        </li>
      </ul>
    </div>
    <div class="h3techs-popup-footer">
      <label class="h3techs-anonymous"><input type="checkbox" /><?php _e('Anonymous feedback', PLUGIN_NAME); ?></label>
        <input type="button" class="button button-secondary button-skip h3techs-popup-skip-feedback" value="<?php _e('Skip & Deactivate', PLUGIN_NAME); ?>" >
      <div class="action-btns">
        <span class="h3techs-spinner"><img src="<?php echo admin_url('/images/spinner.gif'); ?>" alt=""></span>
        <input type="submit" class="button button-secondary button-deactivate h3techs-popup-allow-deactivate" value="<?php _e('Submit & Deactivate', PLUGIN_NAME); ?>" disabled="disabled">
        <a href="#" class="button button-primary h3techs-popup-button-close"><?php _e('Cancel', PLUGIN_NAME); ?></a>

      </div>
    </div>
  </form>
    </div>
  </div>


  <script>
    (function( $ ) {

      jQuery(function() {

       
        // Code to fire when the DOM is ready apna.

        jQuery(document).on('click', 'tr[data-slug="<?php echo PLUGIN_SLUG_NAME ?>"] .deactivate', function(e){
          e.preventDefault();
          
          $('.h3techs-popup-overlay').addClass('h3techs-active');
          $('body').addClass('h3techs-hidden');
        });
        $(document).on('click', '.h3techs-popup-button-close', function () {
          close_popup();
        });
        $(document).on('click', ".h3techs-serveypanel,tr[data-slug='<?php echo PLUGIN_SLUG_NAME ?>'] .deactivate",function(e){
            e.stopPropagation();
        });

        $(document).click(function(){
          close_popup();
        });
        $('.h3techs-reason label').on('click', function(){
          if($(this).find('input[type="radio"]').is(':checked')){
            //$('.h3techs-anonymous').show();
            $(this).next().next('.h3techs-reason-input').show().end().end().parent().siblings().find('.h3techs-reason-input').hide();
          }
        });
        $('input[type="radio"][name="h3techs-selected-reason"]').on('click', function(event) {
          $(".h3techs-popup-allow-deactivate").removeAttr('disabled');
          $(".h3techs-popup-skip-feedback").removeAttr('disabled');
          $('.message.error-message').hide();
          $('.h3techs-pro-message').hide();
        });

        $('.h3techs-reason-pro label').on('click', function(){
          if($(this).find('input[type="radio"]').is(':checked')){
            $(this).next('.h3techs-pro-message').show().end().end().parent().siblings().find('.h3techs-reason-input').hide();
            $(this).next('.h3techs-pro-message').show()
            $('.h3techs-popup-allow-deactivate').attr('disabled', 'disabled');
            $('.h3techs-popup-skip-feedback').attr('disabled', 'disabled');
          }
        });
        $(document).on('submit', '#h3techs-deactivate-form', function(event) {
          event.preventDefault();

          var _reason =  $('input[type="radio"][name="h3techs-selected-reason"]:checked').val();
          var _reason_details = '';

          var deactivate_nonce = $('.h3techs_deactivate_nonce').val();

          if ( _reason == 2 ) {
            _reason_details = $("input[type='text'][name='better_plugin_h3']").val();
          } else if ( _reason == 7 ) {
            _reason_details = $("input[type='text'][name='other_reason_h3']").val();
          }

          if ( ( _reason == 7 || _reason == 2 ) && _reason_details == '' ) {
            $('.message.error-message').show();
            return ;
          }
          $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
              action        : 'h3uc9sa_deactivate',
              reason        : _reason,
              reason_detail : _reason_details,
              security      : deactivate_nonce
            },
            beforeSend: function(){
              $(".h3techs-spinner").show();
              $(".h3techs-popup-allow-deactivate").attr("disabled", "disabled");
            }
          })
          .done(function() {
            $(".h3techs-spinner").hide();
            $(".h3techs-popup-allow-deactivate").removeAttr("disabled");
            window.location.href =  $("tr[data-slug='<?php echo PLUGIN_SLUG_NAME ?>'] .deactivate a").attr('href');
          });

        });

        $('.h3techs-popup-skip-feedback').on('click', function(e){
          // e.preventDefault();
          window.location.href =  $("tr[data-slug='<?php echo PLUGIN_SLUG_NAME ?>'] .deactivate a").attr('href');
        })

        function close_popup() {
          $('.h3techs-popup-overlay').removeClass('h3techs-active');
          $('#h3techs-deactivate-form').trigger("reset");
          $(".h3techs-popup-allow-deactivate").attr('disabled', 'disabled');
          $(".h3techs-reason-input").hide();
          $('body').removeClass('h3techs-hidden');
          $('.message.error-message').hide();
          $('.h3techs-pro-message').hide();
        }
        });

        })( jQuery ); // This invokes the function above and allows us to use '$' in place of 'jQuery' in our code.
  </script>
