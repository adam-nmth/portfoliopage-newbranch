$(document).ready(function(){
  var move = 150;
$('#icon').click(function() {
  $(".search").fadeToggle(1500);
 $(".fa").toggleClass("fa-times");
 $("#resulttitle").empty();
 $("#results").empty();
  });

$( '.search' ).on( 'keydown', function ( evt ) {
  if(evt.keyCode === 13){
    var q = $(".search").val();
       if(q.length > 0){
        $.getJSON("https://en.wikipedia.org/w/api.php?callback=?",
        {
          srsearch: q,
          action: "query",
          list: "search",
          format: "json"
        },
        function(data) {
          $("#resulttitle").empty();
          $("#results").empty();
          $("#resulttitle").append("Results for <b>" + q + ":" + "</b>");
          $.each(data.query.search, function(i,item){
            $("#results").append("<div class='resultbox'><a href='http://en.wikipedia.org/wiki/" + encodeURIComponent(item.title) + "'>" + "<b>" + item.title + "</b>" + "</a>" + " - " + item.snippet + "</div>");
            $('.middle').css({'padding-bottom':'0px'});
            
          });
        });
          };
  }
});
})