//slider
BASE_URL=$('meta[name="csrf-base"]').attr('content');
CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


// login process
// login process

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

// script for read more
$('ul.term-list').each(function(){

  var LiN = $(this).find('li').length;

  if( LiN > 3){
    $('li', this).eq(2).nextAll().hide().addClass('toggleable');
    $(this).append('<li class="more">+see more</li>');
  }

});

$('ul.term-list').on('click','.more', function(){
  if( $(this).hasClass('less') ){
    $(this).text('+ see more').removeClass('less');
  }else{
    $(this).text('-less').addClass('less');
  }
  $(this).siblings('li.toggleable').slideToggle();
});


// script for read more
// script for product filter
//product filter
//  console.log($('input[name="aj_itemdata"]:checked').serialize());
  $('input[type="checkbox"]').click(function(){
      var checkboxType=$(this).attr('id');
      switch(checkboxType) {
        case 'sellerFilter':
          //code seller filter
          var favorite_filter_val = [];
          $.each($("input[name='seller_itemdata']:checked"), function(){
            favorite_filter_val.push($(this).val());
          });
          var favorite_filter=favorite_filter_val.join("i_A");
          var pcatID=$('#txtpidID').val();
          var page = $(this).attr("data-page"); //get page number from link
          if (typeof(page) == "undefined"){
            page =1;
          }
          var datastring = "_token=" + CSRF_TOKEN + "&filer_items=" + favorite_filter+"&pcatID="+pcatID+"&page="+page;
          $.ajax({
          type: 'POST',
                  url: BASE_URL + "/seller_filter_ajax", //this should be url to your PHP file
                  data:datastring,
                  beforeSend: function(){
                  //alert("wait");
                  },
                  success: function(data) {
                    console.log(data);
                  // $("#results" ).html('');
                  // $("#results" ).html(data);
                }

          });

          break;
        case 'y':
          // code block
          break;
        default:
          // code block
          var favorite_filter_val = [];
          $.each($("input[name='aj_itemdata']:checked"), function(){
            favorite_filter_val.push($(this).val());
          });
          var favorite_filter=favorite_filter_val.join("i_A");
          var pcatID=$('#txtpidID').val();
          var page = $(this).attr("data-page"); //get page number from link
          if (typeof(page) == "undefined"){
            page =1;
          }
         //ajax
          var datastring = "_token=" + CSRF_TOKEN + "&filer_items=" + favorite_filter+"&pcatID="+pcatID+"&page="+page;
          $.ajax({
          type: 'POST',
                  url: BASE_URL + "/product_filer_ajax", //this should be url to your PHP file
                  data:datastring,
                  beforeSend: function(){
                  },
                  success: function(data) {
                  $("#results" ).html('');
                  $("#results" ).html(data);
                }

          });
      }



});

// script for product filter


// script for target
$(document).ready(function() {
      $("#target-content").load("pagination.php?page=1");
      $("#pagination li").on('click',function(e){
      e.preventDefault();
      $("#target-content").html('loading...');
      $("#pagination li").removeClass('active');
      $(this).addClass('active');
        var pageNum = this.id;
        $("#target-content").load("pagination.php?page=" + pageNum);
      });

      var owl = $('.owl-carousel');
      owl.owlCarousel({
      items:4,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true
      });
    });


// script for target
