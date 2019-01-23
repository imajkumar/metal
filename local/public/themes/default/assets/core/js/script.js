//slider
BASE_URL=$('meta[name="csrf-base"]').attr('content');
CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 5,
  spaceBetween: 0,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
//slider

//latest price
$('.demo1').easyTicker({
  direction: 'up',
  easing: 'swing'
});

//latest price

//script for seller
var txtpidID=$('#txtpidID').val();
if(txtpidID>0){
  tpid=txtpidID;
}else{
  tpid="";
}
 $("#results_seller" ).load(BASE_URL+'/api/getSellerList?pid='+tpid);
 $("#results_seller").on( "click", ".pagination a", function (e){
  e.preventDefault();
  var favorite_filter_val = [];
  $.each($("input[name='aj_itemdata']:checked"), function(){
    favorite_filter_val.push($(this).val());
  });
  var favorite_filter=favorite_filter_val.join("i_A");
  if(favorite_filter==""){
    filer_items=[];
  }
  $(".loading-div").show(); //show loading element
  var page = $(this).attr("data-page"); //get page number from link
  $("#results_seller").load(BASE_URL+'/api/getSellerList',{"page":page,"pid":tpid,"filer_items":favorite_filter}, function(){ //get content from PHP page
    $(".loading-div").hide(); //once done, hide loading element
  });

});
//script for seller

//script for product
$("#results" ).load(BASE_URL+'/api/getProductList?pid='+tpid);
$("#results").on( "click", ".pagination a", function (e){
   e.preventDefault();
   var favorite_filter_val = [];
   $.each($("input[name='aj_itemdata']:checked"), function(){
     favorite_filter_val.push($(this).val());
   });
   var favorite_filter=favorite_filter_val.join("i_A");
   if(favorite_filter==""){
     filer_items=[];
   }
   $(".loading-div").show(); //show loading element
   var page = $(this).attr("data-page"); //get page number from link
   $("#results").load(BASE_URL+'/api/getProductList',{"page":page,"pid":tpid,"filer_items":favorite_filter}, function(){ //get content from PHP page
     $(".loading-div").hide(); //once done, hide loading element
   });
});

//script for product

// script for desable
//Disable part of page
                $('.porstion').bind('cut copy paste', function (e) {
                    e.preventDefault();
                });

                $(".porstion").on("contextmenu", function (e) {
                    return false;
                });

                $("#notificationLink").click(function () {
                    $("#notificationContainer").fadeToggle(300);
                    $("#notification_count").fadeOut("slow");
                    return false;
                });

                //Document Click
                $(document).click(function () {
                    $("#notificationContainer").hide();
                });

                //Popup Click
                $("#notificationContainer").click(function () {
                    return false
                });


// script for desable

//for button dropdownMenu1
$('.dropdown-select').on( 'click', '.dropdown-menu li a', function() {
   var target = $(this).html();

   //Adds active class to selected item
   $(this).parents('.dropdown-menu').find('li').removeClass('active');
   $(this).parent('li').addClass('active');

   //Displays selected text on dropdown-toggle button
   $(this).parents('.dropdown-select').find('.dropdown-toggle').html(target + ' <span class="caret"></span>');
});
