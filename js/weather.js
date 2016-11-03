$(document).ready(function() {

if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(locationSuccess);
};
function locationSuccess(position) {
	var lat = position.coords.latitude;
	var lon = position.coords.longitude;
  var url = "https://api.apixu.com/v1/current.json?key=2b9456d5ac534cce8b3204837162703&q=" + lat + "," + lon;
  $.getJSON(url, function(json) {
     var city = json["location"]["name"];  
     var country = json["location"]["country"];
    var tempStyle = " C";
     var celsius = "The temperature is currently <span style=\"color:#F50\">" + json["current"]["temp_c"] + tempStyle + "</span>" + " in " + "<span style=\"color:#F50\">" + city + "</span>" + ".";
     $("#currweth").html(celsius); 
    var time = json["location"]["localtime"];
    time = time.split(" ");
    time = time[1].split(":");
   
 if (json["current"]["cloud"] < 1 && time[0] > 8){
   if (time[0] < 19){
     $("body").css('background-image', 'url(\"img/pexels.jpeg\")');
      } else {
        $("body").css('background-image', 'url(\"img/nightspace.jpeg\")')
      }
    } else if (json["current"]["cloud"] > 0 && time[0] > 8) { 
        if(time[0] < 19) {
      $("body").css('background-image', 'url(\"img/cloudy.jpg\")')
    } else {
      $("body").css('background-image', 'url(\"img/cloudynight.jpg\")')
    }
    } else if (json["current"]["cloud"] < 1 && time[0] < 8) {
     $("body").css('background-image', 'url(\"img/nightspace.jpeg\")') 
    } else if (json["current"]["cloud"] > 0 && time[0] < 8) {
      $("body").css('background-image', 'url(\"img/cloudynight.jpg\")')
    }   
  });
};

    
   $("#two").on("click", function(){
      var currTemp = $("#currweth").text()
      var numb = currTemp.match(/\d/g);
      numb = Math.round((numb.join("") * 9 / 5) + 32);
      var city = currTemp.split(" ");
      city[7] = city[7].split('.').join("");
      if (city[5] === "C") {
      var tempInFaren = "The temperature is currently <span style=\"color:#F50\">" + numb + " F" + "</span>" + " in " + "<span style=\"color:#F50\">" + city[7] + "</span>" + ".";
     $("#currweth").html(tempInFaren);
      };
      
});


$("#one").on("click", function(){
      var currTemp = $("#currweth").text()
      var finNumb = currTemp.match(/\d/g);
          finNumb = Math.round(((Math.round(finNumb.join("")) - 32) * 5)/9);
      var city = currTemp.split(" ");
      city[7] = city[7].split('.').join("");
      if (city[5] === "F") {
      var tempInFaren = "The temperature is currently <span style=\"color:#F50\">" + finNumb + " C" + "</span>" + " in " + "<span style=\"color:#F50\">" + city[7] + "</span>" + ".";
      $("#currweth").html(tempInFaren);
      };
});
 
});
    