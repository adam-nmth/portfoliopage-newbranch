$(document).ready(function(){
  var sum = 0;
var nums= [];
var eq=0;
//numbers
$("#zero").on("click", function(){
  if(eq===1){
    $(".field").text(0); 
  }else{
    $(".field").append(0);
  }
  nums.push(0);  
  eq=0;
});
$("#one").on("click", function(){
  if(eq===1){
    $(".field").text(1); 
  }else{
    $(".field").append(1);
  }
  nums.push(1);  
  eq=0;
});
$("#two").on("click", function(){
  if(eq===1){
    $(".field").text(2); 
  }else{
    $(".field").append(2);
  }
  nums.push(2);  
  eq=0;
});
$("#three").on("click", function(){
  if(eq===1){
    $(".field").text(3); 
  }else{
    $(".field").append(3);
  }
  nums.push(3);  
  eq=0;
});
$("#four").on("click", function(){
 if(eq===1){
    $(".field").text(4); 
  }else{
    $(".field").append(4);
  }
  nums.push(4);  
  eq=0;
});
$("#five").on("click", function(){
  if(eq===1){
    $(".field").text(5); 
  }else{
    $(".field").append(5);
  }
  nums.push(5);  
  eq=0;
});
$("#six").on("click", function(){
  if(eq===1){
    $(".field").text(6); 
  }else{
    $(".field").append(6);
  }
  nums.push(6);  
  eq=0;
});
$("#seven").on("click", function(){
  if(eq===1){
    $(".field").text(7); 
  }else{
    $(".field").append(7);
  }
  nums.push(7);  
  eq=0;
});
$("#eight").on("click", function(){
 if(eq===1){
    $(".field").text(8); 
  }else{
    $(".field").append(8);
  }
  nums.push(8);  
  eq=0;
});
$("#nine").on("click", function(){
  if(eq===1){
    $(".field").text(9); 
  }else{
    $(".field").append(9);
  }
  nums.push(9);  
  eq=0;
});

//others
$("#plus").on("click",function(){
  $(".field").append("+");
  nums.push("+");
 
})

$("#equal").on("click",function(){
  sum = eval(nums.join(""));
  $(".field").text(sum);
  nums = [];
  console.log(nums);
  eq=1;
})

$("#ac").on("click",function(){
  sum = 0;
  $(".field").text("");
  nums = [];
  eq=0;
})

$("#minus").on("click", function(){
  $(".field").append("-");
  nums.push("-");
})

$("#multiply").on("click", function(){
  $(".field").append("*");
  nums.push("*");
})

$("#divide").on("click", function(){
  $(".field").append("/");
  nums.push("/");
})

$("#ce").on("click",function(){
  var help = nums.join("");
 help = help.slice(0,-1);
  nums = help.split("");
  $(".field").text(help);
  
})

$("#dot").on("click", function(){
  $(".field").append(".");
  nums.push(".");
})

$("#percent").on("click", function(){
  $(".field").append("%");
  nums.push("%");
})

$("#square").on("click",function(){
  var sq = eval(nums.join(""));
  sum = sq*sq;
  nums = [];
  $(".field").text(sum);
  eq = 1;
  
})
})
