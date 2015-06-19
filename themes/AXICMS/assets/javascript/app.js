/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/* MAIN NAV FOR DEFAULT LAYOUT DROPDOWN ITEMS */

$(function() {
  $(".dropdown").hover(
    function() {
      $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
      $(this).toggleClass('open');
      $('b', this).toggleClass("caret caret-up");
    },
    function() {
      $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
      $(this).toggleClass('open');
      $('b', this).toggleClass("caret caret-up");
    });
});

// invoke the carousel
// $('#myCarousel').carousel({
//   interval: 3000
// });

var link = document.getElementsByClassName('carousel')[0].id;

/* SLIDE ON CLICK */ 

$('.carousel-linked-nav > li > a').click(function() {

    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#' + link).carousel(item - 1);

    // remove current active class
    $('.carousel-linked-nav .active').removeClass('active');

    // add active class to just clicked on item
    $(this).parent().addClass('active');

    // don't follow the link
    return false;
});

/* AUTONAV HIGHLIGHTING */

$(document).ready( function() {
    $('.carousel').carousel();
    $('#'+ link).on('slide.bs.carousel', function(e) {
        var from = $('.carousel-linked-nav li.active').index();
        var next = $(e.relatedTarget);
        var to =  next.index();

        // This could interest you
        $('.carousel-linked-nav li').removeClass('active').eq(to).addClass('active');

    });
});

/*POPUP MODAL FOR CAROUSEL */

$('.carImg').click(function(){
    var image = $(this).attr("src");
    // do my image switching logic here.
    $('#bs-pop').html('<img src=' + image + " class=\"img-responsive\">");
});

