/* For animating CSS drop down menus */

$('document').ready(function() {
  jQuery('.menuHead').hover(function() { 
  if ( jQuery(this).attr("id") == "topHome") {
    $('#bodyHome')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
  
    }
  else if ( jQuery(this).attr("id") == "topFeatures") {
   $('#bodyFeatures')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
  }
  else if ( jQuery(this).attr("id") == "topSupport") {
   $('#bodySupport')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
   }
  else if ( jQuery(this).attr("id") == "topDownload") {
   $('#bodyDownload')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
  }
  else if ( jQuery(this).attr("id") == "topDev") {
   $('#bodyDev')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
  }
  else if ( jQuery(this).attr("id") == "topBug") {
   $('#bodyBug')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
   }
  else {
   $('#bodyContact')
    .stop(true, true)
    .delay(200)
    .show(600)
    .delay(5000)
    .hide(600);
   }

   $(document).click ( function() {
          $('.menuBody').hide(); /* hiding the menus when the user clicks anywhere else */
      }); 
  });
});
