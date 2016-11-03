$(document).ready(function() {
  $("#projectclick").on("click", function(){
    $('html, body').animate({
    scrollTop: $("#bloc-3").offset().top
}, 600);
  })
  $("#upproject").on("click", function(e){
       e.preventDefault();
      $('html, body').animate({
    scrollTop: $("#bloc-3").offset().top
}, 600);
  });
  $("#home").on("click", function(e){
       e.preventDefault();
      $("html, body").animate({ scrollTop: 0});
  });
  $("#href1").on("click",function(e){
    $("html, body").animate({ scrollTop: $(document).height()-$(window).height()});
  });
  
  $('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
});

});
