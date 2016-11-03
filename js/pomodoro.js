$(document).ready(function(){
var br = 5;
var ses = 25;
var d = 25;
var elapsed = 0;
var breakTime=br*60;
$("#breakMin").on("click",function(){
  if(br>1){
   br--;
    breakTime=br*60;
   $("#brk").text(br); 
  }  
})

$("#breakPlus").on("click",function(){
   br++;
  breakTime=br*60;
   $("#brk").text(br); 
})

$("#sessionMin").on("click",function(){
  if(ses>1){
   ses--;
    d--;
    fiveMinutes = 60 * d;
   $("#sssn").text(ses);
   $("#time").text(ses);
  }  
})  

$("#sessionPlus").on("click",function(){
   ses++;
  d++;
  fiveMinutes = 60 * d;
   $("#sssn").text(ses); 
   $("#time").text(ses);
  
})

var fiveMinutes = 60 * d,
      display = $('#time'); 

$("#start").on("click",function(){
  var but = document.getElementById("start");
  var brsess = document.getElementById("whatsup")
  if(but.value === "Start"){
    
    but.value = "Stop";
    $(this).text("Stop"); 
    
    if(brsess.innerHTML === "Session"){
      startTimer(fiveMinutes, display); 
    }else if(brsess.innerHTML === "Break"){
      startBreak(breakTime);
    }
    
   
  }else if(but.value === "Stop"){
    but.value = "Start";
    $(this).text("Start");
    clearInterval(countdown);
    clearInterval(breakdown);
    breakTime = (60*br) - elapsed;
    fiveMinutes = (60 * d)-elapsed;
  }
})

//session motor
var countdown, breakdown;
function startTimer(duration, display) {
    var timer = duration,
        minutes,
        seconds;  
    var firstcolor = [];
        var secondcolor = ["red","#0eb434"];
 countdown = setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        
        firstcolor.push(secondcolor[1]);
        secondcolor.pop();
        $(".load").css("background",firstcolor);
        secondcolor.unshift(firstcolor[0]);
      firstcolor.pop();
        display.text(minutes + ":" + seconds);
        elapsed++;   
        if (--timer < 0) {
          snd.play();
           clearInterval(countdown);
          elapsed = 0;
          breakTime= br*60;
           $(".title2").text("Break");
           startBreak(breakTime);
          }
        }
    , 1000);
}
//

$("#reset").on("click", function(){
     clearInterval(countdown);
  clearInterval(breakdown);
  ses = 25;
  d = 25;
  br=5;
  breakTime= br*60;
  $(".title2").text("Session");
  $("#time").text(ses);
  $("#brk").text(br);
  fiveMinutes = d * 60;
  elapsed = 0;
  $(".load").css("background","#0eb434")
  document.getElementById("start").value = "Start";
    $("#start").text("Start");
  $("#sssn").text("25");
})


//break motor
function startBreak(breakDur){
            var timr = breakDur,
                mins,
                secs;
  $(".load").css("background","#7e562a");
            breakdown = setInterval(function(){
        mins = parseInt(breakDur / 60, 10)
        secs = parseInt(breakDur % 60, 10);
elapsed++;
        mins = mins < 10 ? "0" + mins : mins;
        secs = secs < 10 ? "0" + secs : secs;
       
        $('#time').text(mins + ":" + secs);  
        if (--breakDur < 0) { 
          snd.play();
          clearInterval(breakdown);
          elapsed = 0;
          fiveMinutes = d *60;
          $(".title2").text("Session");
         startTimer(fiveMinutes, display);  
        };
            }, 1000);
};           
//sound engine
var snd = new Audio("http://www.buddhanet.net/filelib/audio/gong-burmese.wav"); 
//
});