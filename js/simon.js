$(document).ready(function(){
  
  //audios
var sndOne = new Audio("https://s3.amazonaws.com/freecodecamp/simonSound1.mp3");
var sndTwo = new Audio("https://s3.amazonaws.com/freecodecamp/simonSound2.mp3");
var sndThree = new Audio("https://s3.amazonaws.com/freecodecamp/simonSound3.mp3");
var sndFour = new Audio("https://s3.amazonaws.com/freecodecamp/simonSound4.mp3");
var sndWrong = new Audio("http://www.heyrocker.com/moo/buzz.wav"); 

//variables
var state = document.getElementById("counter"),
    quarters = ["quarter1","quarter2","quarter3","quarter4"],
    quarterGroups = [["quarter1",sndOne],["quarter2",sndTwo],["quarter3",sndThree],["quarter4",sndFour]],
    gameMoves = [],
    playerMoves = [],
    turn = "computer",
    score = 0,
    pushes = 0,
    push=0,
    started = 0;
var failure;
var down = 0,
    winLevel=20;
var quarterObj = {
  quarter1: sndOne,
  quarter2: sndTwo,
  quarter3: sndThree,
  quarter4: sndFour  
}
state.value = "off";
//start button
$("#start").mousedown(function(){
  //design part
  $(this).css("box-shadow","0px 0px 0px 0px #000")
}).mouseup(function() {
    $( this ).css("box-shadow","1px 1px 7px 1px #000")  
})

 //starting the game part
$("#start").on("click",function(){
  if(state.value==="on"&&started===0){
    starter();
    }else if(started===1){
      restart();
      setTimeout(function(){
        starter();
      }, 1000);
    }else{
    }
})
 //player part

$("#quarter1").on("click",function(){
  button("quarter1",sndOne);
})

$("#quarter2").on("click",function(){
  button("quarter2",sndTwo);
})

$("#quarter3").on("click",function(){
  button("quarter3",sndThree);
})

$("#quarter4").on("click",function(){
  button("quarter4",sndFour);
})

//strict button

$("#strictBtn").mousedown(function(){
  if(state.value==="on"){
    if(down===0){
    $("#strict").css("box-shadow","0px 0px 0px 0px #000");
    $("#strict").html("!");
    down = 1;
  }else if(down===1){
    $("#strict").css("box-shadow","1px 1px 7px 1px #000")
    $("#strict").empty();
    down = 0;
  }
  };
  
})

//on-off button
$('#onoff').click(function() {
 $("#onbut").toggleClass("fa-toggle-on");
  if(state.value==="off"){
    $("#counter p").css("color","#f00505");
    state.value = "on";
  }else if(state.value==="on"){
    $("#counter p").css("color","#780202");
    state.value = "off";
    $("#strict").css("box-shadow","1px 1px 7px 1px #000")
    $("#strict").empty();
    down = 0;
    restart();
    for(var z=0;z<quarterGroups.length;z++){
      $("."+quarterGroups[z][0]).removeAttr("style");
    }
    
  }
  });

//game function;
function game(){
  //checking the players moves
  clearTimeout(failure);
  if(arrayCheck(gameMoves, playerMoves)){
    var rand = Math.floor(Math.random() * (3 - 0 + 1)) + 0;
    score++;
    gameMoves.push(quarterGroups[rand][0]);
    //playfunction
var nth = 0, times = gameMoves.length;
function play() {
    $("."+gameMoves[nth]).css("background","pink");
      quarterObj[gameMoves[nth]].play();
      var counter = document.getElementById("nums");
      counter.innerHTML = score;
  pushes=score;
  nth++;
  setTimeout(function(){
        $("."+gameMoves[nth-1]).removeAttr("style");
      }, 300)
    if(nth < times){
        setTimeout(play, 1500);
    }else{
      playerMoves = [];
      push=0;
      failure = setTimeout(function(){
            fail();
          },5000);
    }
}
play();    
  }else{
    //replay the moves
  }

}

//array check function
function arrayCheck(arr1, arr2) {
    for(var i = arr1.length; i--;) {
        if(arr1[i] !== arr2[i])
            return false;
    }
    return true;
}

//right move check function
function rightMove(playermove, computermove){
   if(playermove[push]!==computermove[push]){
     return true;
   }else{
     
     return false;
     
   }  
}

//restart function
function restart(){
    clearTimeout(failure);
    gameMoves = [],
    playerMoves = [],
    turn = "computer",
    score = 0,
    pushes = 0,
    push=0;
  
  var counter = document.getElementById("nums");
      counter.innerHTML = "--";
}

//starter function
function starter(){
  clearTimeout(failure);
  started=1;
      var rand = Math.floor(Math.random() * (3 - 0 + 1)) + 0;
    $("#counter p").css("animation","1s countglow");
    gameMoves.push(quarterGroups[rand][0])
    var color = $("."+quarterGroups[rand][0]).css("background");
    turn = "player";
    setTimeout(function(){
      $("."+quarterGroups[rand][0]).css("background","pink");
      quarterGroups[rand][1].play();
      var counter = document.getElementById("nums");
      score++;
      counter.innerHTML = score;
      setTimeout(function(){
        $("."+quarterGroups[rand][0]).removeAttr("style");
        $("#counter p").css("animation","");
    failure = setTimeout(function(){
            fail();
          },5000);
      }, 800)
    }, 1200);
}

//fail function
function fail(){
   $("#counter p").css("animation","1s countglow");
  var counter = document.getElementById("nums");
      counter.innerHTML = "!!";
  sndWrong.play();
  if(down===0){
    setTimeout(function(){
    $("#counter p").css("animation","");
    var nth = 0, times = gameMoves.length;
function play() {
    $("."+gameMoves[nth]).css("background","pink");
      quarterObj[gameMoves[nth]].play();
      var counter = document.getElementById("nums");
      counter.innerHTML = score;
  pushes=score;
  nth++;
  setTimeout(function(){
        $("."+gameMoves[nth-1]).removeAttr("style");
      }, 300)
    if(nth < times){
        setTimeout(play, 1500);
    }else{
      playerMoves = [];
      push=0;
      failure = setTimeout(function(){
            fail();
          },5000);
    }
}
play();
  },1500)
  }else if(down===1){
    setTimeout(function(){
      restart(); 
    },1000)
      setTimeout(function(){
        starter();
      }, 2000);
  }
}

//win function
function win(){
  var title = document.getElementById("simon");
      title.innerHTML = "Winner!!";
  $("#simon").css("animation","1s simonglow");
  setTimeout(function(){
    restart();
    starter();
    title.innerHTML = "Simon";
  }, 2000)
}

//buttons function
function button(quarter,sound){
    clearTimeout(failure);
    playerMoves.push(quarter);
  setTimeout(function(){
      $("."+quarter).css("background","pink");
      sound.play();
    pushes--; 
      setTimeout(function(){
        $("."+quarter).removeAttr("style");
        if(rightMove(playerMoves,gameMoves)){
          setTimeout(function(){
            fail();
          },500);
        }else if(pushes<1){
          if(score===winLevel){
            win();
          }else{
            setTimeout(function(){
          game();
        }, 1500);
          }
        }else{
          push++;
          failure = setTimeout(function(){
            fail();
          },5000);
        }
      }, 400)
    }, 200);
}
});

