$(document).ready(function(){
var url = "http://api.forismatic.com/api/1.0/?method=getQuote&key=457653&format=jsonp&lang=en&jsonp=?";
var getQuote = function(data) {
  $(".quoteT").text('"' + data.quoteText +'"');
  // code below cuts the quote length for the tweet, if it's too long 
  var quoteText = data.quoteText;
  function truncateString(str) {
  if (str.length > 100) {
   quoteText = str.substr(0, 100) + '..."';
    
  } else {
    quoteText = str + '"';
    
  }
 };
  // turncate function end
   truncateString(quoteText);
  var quot = 'https://twitter.com/intent/tweet?text=' + '"' + quoteText + ' Author - ' + data.quoteAuthor;
  if (data.quoteAuthor === '') {
    data.quoteAuthor = 'Unknown';
  }
   $(".authorname").text("- " + data.quoteAuthor);
$(".twitt").attr("href", quot);
};


$.getJSON(url, getQuote, "json");

  });
// function below is for the quote me button
var colors = ["#d43211", "#12973c", "#422e94"]
var moColors = ["#f59b89", "#91f2b0","#ab9de1"]

 $("#quote").on("click", function(){
 $.getJSON(url, getQuote, "json");      
 colors.unshift(colors.pop());
   moColors.unshift(moColors.pop());
$('body').css({'background-color': colors[0]});
 $('.quote').css({'color': colors[0]});
   $( "#one" ).css({'background-color': colors[0]});
   $( "#quote" ).css({'background-color': colors[0]});
 });

$( "#one" ).hover(function(){
  $( "#one" ).css({'background-color': moColors[0]});
},function(){
  $( "#one" ).css({'background-color': colors[0]});
});
$( "#quote" ).hover(function(){
 $( "#quote" ).css({'background-color': moColors[0]});
},function(){
  $( "#quote" ).css({'background-color': colors[0]});
});