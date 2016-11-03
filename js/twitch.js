$(document).ready(function() {
  var possibleChannels= ["storbeck", "terakilobyte", "habathcx","RobotCaleb","comster404","brunofin","thomasballinger","noobs2ninjas","beohoff","esl_sc2"];

possibleChannels.forEach(function(name){
$.getJSON('https://api.twitch.tv/kraken/streams/' + name, 
    function(channel){
        if (channel["stream"] === null) { 
         $.getJSON('https://api.twitch.tv/kraken/channels/' + name, 
    function(img){
           if(img["logo"] !== null){
            $(".twitchbox").append("<div class='twitches' id='"+name+"'><img class='img-circle ' src='" + img["logo"] + "'><a target='_blank' href='https://www.twitch.tv/" + name + "'>" + name + "</a><p style='color:red'>Offline</p></div>");
           }else {
             $(".twitchbox").append("<div class='twitches' id='"+name+"'><img class='img-circle ' src='http://dummyimage.com/50x50/ecf0e7/5c5457.jpg&text=0x3F'><a target='_blank' href='https://www.twitch.tv/" + name + "'>" + name + "</a><p style='color:red'>Offline</p></div>");
           }
          $("#"+name+"").css({"background-color":"#d8dcd5"})
            });
          }else if(channel["stream"] !== null){
           $(".twitchbox").append("<div class='twitches' id='"+name+"'><img class='img-circle ' src='" + channel.stream.channel.logo + "'><a target='_blank' href='https://www.twitch.tv/" + name + "'>" + name + "</a><p>" + channel["stream"]["game"] + ": " + channel["stream"]["channel"]["status"].substr(0, 15) + "...</p></div>");
          $("#"+name+"").css({"background-color":"#16e939"})
        }
    }).fail(function(err) {
     $(".twitchbox").append("<div class='twitches' id='"+name+"'><img class='img-circle ' src='http://dummyimage.com/50x50/ecf0e7/5c5457.jpg&text=0x3F'><a target='_blank' href='https://www.twitch.tv/" + name + "'>" + name + "</a><p style='color:white'>User doesn't exist</p></div>");
  $("#"+name+"").css({"background-color":"#31392d"})
   });
});

//buttons below

$("#online").on("click", function(){
  var possibleChannels= ["storbeck", "terakilobyte", "habathcx","RobotCaleb","comster404","brunofin","thomasballinger","noobs2ninjas","beohoff","esl_sc2"];
  possibleChannels.forEach(function(id){
    $("#"+id+"").css({"display":""});
  });
  possibleChannels.forEach(function(id){
      $.getJSON('https://api.twitch.tv/kraken/streams/' + id, 
    function(channel){
        if (channel["stream"] === null) {
          $("#"+id+"").css({"display":"none"})
        }
   }).fail(function(err){
         $("#"+id+"").css({"display":"none"})
      });
  });
  
});

$("#offline").on("click", function(){
  var possibleChannels= ["storbeck", "terakilobyte", "habathcx","RobotCaleb","comster404","brunofin","thomasballinger","noobs2ninjas","beohoff","esl_sc2"];
  possibleChannels.forEach(function(id){
    $("#"+id+"").css({"display":""});
  });
  possibleChannels.forEach(function(id){
   $.getJSON('https://api.twitch.tv/kraken/streams/' + id, 
    function(channel){
        if (channel["stream"] !== null) {
          $("#"+id+"").css({"display":"none"})
        }
   }).fail(function(err){
         $("#"+id+"").css({"display":"none"})
      });
  });
})
$("#all").on("click", function(){
  var possibleChannels= ["storbeck", "terakilobyte", "habathcx","RobotCaleb","comster404","brunofin","thomasballinger","noobs2ninjas","beohoff","esl_sc2"];
  possibleChannels.forEach(function(id){
            $("#"+id+"").css({"display":""})
        });
     });

});

