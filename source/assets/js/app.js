// load jquery module
global.$ = global.jQuery = require('jquery'); //load jquery
require('foundation-sites'); //load foundation-sites
$(document).foundation(); //initialize foundation

// to prevent form from submitting upon successful validation
  $('#productFeedForm').on("submit", function(ev) {
    ev.preventDefault();
    // console.log("Submit for form id "+ev.target.id+" intercepted");
  })
  // form validation passed, form will submit if submit event not returned false
  .on("formvalid.zf.abide", function(ev,frm) {
    // console.log("Form id "+frm.attr('id')+" is valid");

    $.ajax({
        type: "GET",
        url: "http://192.168.0.153:3000/productfeed.xml",
        dataType: "xml",
        success: function(xml) {
           $(xml).find('name').each(function(){
             $(this).find('title').each(function(){
               var title = $(this).text();
               console.log(title);
             });
           });
        }
    });



  });
