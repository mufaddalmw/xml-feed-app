// load jquery module
global.$ = global.jQuery = require('jquery'); //load jquery
require('foundation-sites'); //load foundation-sites
$(document).foundation(); //initialize foundation

// to prevent form from submitting upon successful validation
  // $('#productFeedForm').on("submit", function(ev) {
  //   ev.preventDefault();
  //   // console.log("Submit for form id "+ev.target.id+" intercepted");
  // })
  // // form validation passed, form will submit if submit event not returned false
  // .on("formvalid.zf.abide", function(ev,frm) {
  //   // console.log("Form id "+frm.attr('id')+" is valid");
  //
  //   $.ajax({
  //       type: "GET",
  //       url: "content-header.php",
  //       // url: "http://pf.tradetracker.net/?aid=1&type=xml&encoding=utf-8&fid=251713&categoryType=2&additionalType=2&limit=10",
  //       dataType: "xml",
  //       success: function(xml) {
  //         // console.log('worked')
  //          $(xml).find('name').each(function(){
  //            var title = $(this).text();
  //            console.log(title);
  //           //  $(this).find('title').each(function(){
  //           //
  //           //  });
  //          });
  //       }
  //   });



  // });
