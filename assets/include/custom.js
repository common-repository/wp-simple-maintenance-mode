jQuery( document ).ready(function() {
    console.log( "ready!" );
    var plugin_name=obj.pluginName;
    if(jQuery('#bottomBanner').length)
    {
        var data={
        'action': 'h3uc9sa_bottomBanner',
        'application_name':plugin_name,
        }
        jQuery.post(ajaxurl, data, function(response) {
             
              if(typeof(response) == "string"){
                response=JSON.parse(response);  
              }
              console.log(response);
              console.log(response.url);

              if(response.url){
                jQuery('#bottomBanner').show();
                jQuery('#bottomBanner img').attr("src", response.url);
              }

        });
    }

    if(jQuery('#topBanner').length){
        var data={
        'action': 'h3uc9sa_topBanner',
        'application_name':plugin_name,
        }
        jQuery.post(ajaxurl, data, function(response) {
              
              if(typeof(response) == "string"){
                response=JSON.parse(response);  
              }

              if(response.url){
                jQuery('#topBanner').show();
                jQuery('#topBanner img').attr("src", response.url);
              }

        });
    }

    if(jQuery('#sideBanner').length){
        var data={
        'action': 'h3uc9sa_sideBanner',
        'application_name':plugin_name,
        }
        jQuery.post(ajaxurl, data, function(response) {
              
              if(typeof(response) == "string"){
                response=JSON.parse(response);  
              }
              console.log(response);
              console.log(response.url);

              if(response.url){
                jQuery('#sideBanner').show();
                jQuery('#sideBanner img').attr("src", response.url);
              }
        });
    }

});