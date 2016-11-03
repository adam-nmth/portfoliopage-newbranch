<?php

class projectlist{
  public function back(){
        return <<<BACK
        <li><a id="back" href="javascript:history.back()"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></a></li>
BACK;
}

    public function tribute(){
        return <<<TRIBUTE
        <div class="page-container">
  <div class="headerimg" style="background: url(/img/projects/tribute.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Tribute Page</p>
        </td>
        <td  width="627px">
        <a href="?project=tribute_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>Creating a simple tribute page was<br> my first FreeCodeCamp project, made<br> on Codepen. It was fun to play with all<br> the margins, paddings, and attributes<br> for the first time, and to figure out,<br> how these things really work. </p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/tributecode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
TRIBUTE;
}
    public function tribute_playengine(){
      return <<<TRIBUTEPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/tribute_play.css">
      <title>Projects - Tribute Page</title>
TRIBUTEPLAYENGINE;
    }
    public function tribute_play(){
        return <<<TRIBUTEPLAY
       <div class="container-fluid">
    <div class="col-xs-12">
   <div class="bigbox margins">
   <div class="box1 margins">
     <h1 class="text-center serif"> <strong>Isaac Asimov</strong><br>
       <span style="font-size: 20px"><em>"I do not fear computers. I fear the lack of them."</em></span></h1>
 </div>
    <div class="margins">
    <img src="http://www.tabletmag.com/wp-content/files_mf/asimov62090.jpg" alt="img-responsive" class="img-thumbnail center-block img-responsive">
    </div>
  <div class="box2 margins">
       <h3 class="serif text-left"><strong>
         Overview</strong>
    </h3>
    <h4 class="serif">
    <p style="line-height: 23px">Asimov's career can be divided into several periods. His early career, dominated by science fiction, began with short stories in 1939 and novels in 1950. This lasted until about 1958, all but ending after publication of The Naked Sun. He began publishing nonfiction in 1952, co-authoring a college-level textbook called Biochemistry and Human Metabolism. Following the brief orbit of the first man-made satellite Sputnik I by the USSR in 1957, his production of nonfiction, particularly popular science books, greatly increased, with a consequent drop in his science fiction output. Over the next quarter century, he wrote only four science fiction novels. Starting in 1982, the second half of his science fiction career began with the publication of Foundation's Edge. From then until his death, Asimov published several more sequels and prequels to his existing novels, tying them together in a way he had not originally anticipated, making a unified series. There are, however, many inconsistencies in this unification, especially in his earlier stories.</p>
    <p style="line-height: 23px">Asimov believed his most enduring contributions would be his "Three Laws of Robotics" and the Foundation series (see Yours, Isaac Asimov, p. 329). Furthermore, the Oxford English Dictionary credits his science fiction for introducing the words 'positronic' (an entirely fictional technology), 'psychohistory' (which is also used for a different study on historical motivations) and 'robotics' into the English language. Asimov coined the term 'robotics' without suspecting that it might be an original word; at the time, he believed it was simply the natural analogue of words such as mechanics and hydraulics, but for robots. Unlike his word 'psychohistory', the word 'robotics' continues in mainstream technical use with Asimov's original definition. Star Trek: The Next Generation featured androids with "positronic brains", giving Asimov credit for conceiving this fictional technology.</p>
  </h4>
    <h3 class="serif text-left"><strong>
         Awards</strong>
    </h3>
    <h4>
    <ul style="line-height: 23px" class="serif">
     <li>Damon Knight Memorial Grand Master Award – 1987</li>
<li>Nebula Award for Best Novelette – 1977 · "The Bicentennial Man"</li>
<li>Hugo Award for Best Related Work – 1995 · "I. Asimov"</li>
<li>Edward E. Smith Memorial Award – 1967</li>
<li>Locus Award for Best Short Story – 1987 · "Robot Dreams"</li>
<li>Locus Award for Best Science Fiction Novel – 1983 · Foundation's Edge</li>
<li>Klumpke-Roberts Award – 1975</li>
<li>Locus Award for Best Novel – 1973 · The Gods Themselves</li>
<li>Retro Hugo Award for Best Novel – 1996 · The Mule</li>
    </ul>
    </h4>
    <h4 class="serif text-left">
      If you find the work of Isaac Asimov interesting, do not hesitate to visit his<a href="https://en.wikipedia.org/wiki/Isaac_Asimov" target="_blank"> Wikipedia Page</a>.
    </h4>
       </div>
  </div>
      <footer>
        <p class="text-center">Written and Coded by <a href="http://codepen.io/mr_nemeth" target="_blank"> Adam Nemeth</a>.
      </footer>
  </div>
  </div>

TRIBUTEPLAY;
}

    public function quote(){
      return <<<QUOTE
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/quote.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Random Quote Machine</p>
        </td>
        <td  width="627px">
        <a href="?project=quote_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Random Quote Machine was the first project where I had to use JavaScript/jQuery, which was a bit challenging, but then after some hours everything started to make sense. It was interesting to see how the learnt functions and commands work in "real-life", and to use a live API to receive data, and to process it. The "Quote Me!" button allows the user to reprocess the JSON call, and receive a new quote, and the Twitt button twitts the quote, taking care of it's length being between the limits.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/quotecode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
QUOTE;
    }
    public function quote_playengine(){
      return <<<QUOTEPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/quote_play.css">
      <script type="text/javascript" src="/js/quote.js"></script>
      <title>Projects - Random Quote Machine</title>
QUOTEPLAYENGINE;
    }
    public function quote_play(){
      return <<<QUOTEPLAY
      <div class = "container-fluid"> 
  <div class="middle">
<div class="logobox text-center">
      
         <div class="quote">
           <p class="quoteT"></p>
           <p class="authorname text-right"></p>
           <div id="buttons">
           <button id = "quote" class = "btn btn-default">
          <b>Quote Me!</b>
      </button>
            
            <a class="twitt" href="https://twitter.com/intent/tweet" data-size="large" target="_blank">
              <button id="tweet" class="btn btn-default"><i class="fa fa-twitter"></i></button>
  </a>
           </div>
         </div>
        
          
       
       
      </div>
      </div>
  <footer>
    <p style="color:#000" st class="text-center">coded and designed by <a href="http://codepen.io/mr_nemeth" target="_blank">Adam Nemeth</a></p>
</footer>
  </div>

  
QUOTEPLAY;
    }
    
    public function weather(){
      return <<<WEATHER
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/weather.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Local Weather App</p>
        </td>
        <td  width="627px">
        <a href="?project=weather_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Weather App was the second project where I needed to use JSON API packages from an external website. It is a dynamic solution, where the user is being shown the current temperature in his area, after accepting for his location data to be used. The two bottom buttons can be used to change the value from Celsius to Farenheit, and backwards, using simple JavaScript calculations. Also the background is changing according to the cloud data, and the local time data.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/weathercode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
WEATHER;
    }
    public function weather_playengine(){
      return <<<WEATHERPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/weather_play.css">
      <script type="text/javascript" src="/js/weather.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <title>Projects - Local Weather App</title>
WEATHERPLAYENGINE;
    }
    public function weather_play(){
      return <<<WEATHERPLAY
      <div class = "contaner-fluid">
  <div class="middle">
    <div class="logobox">
  <div class="title text-center">
    <h1>Free Code Camp</br></h1><h1> Weather App</h1></div>
  

    <div  class="weather text-center">
      <p id="currweth"><br></p>
      <p id="test"</p>
      </div>
     
    <div class = "buttons text-center">
      
      <div class="col-md-12 text-center">
         
        <button id="one" class="btn btn-default "><b>°C</b></button>
        <button id="two" class="btn btn-default "><b>°F</b></button>
           
      </div>
      </div>  
    
        
  </div>    
    </div>
</div>
    </div>
WEATHERPLAY;
    }
    
    public function twitch(){
      return <<<TWITCH
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/twitchtv.jpg) no-repeat top">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Twitch TV JSON API</p>
        </td>
        <td  width="627px">
        <a href="?project=twitch_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Twitch TV project is another JSON<br> based site, where some twitch users are<br> being listed. They can be filtered by<br> being online, or offline. If a user is currently online and streaming, the name<br> of his show appears on the right. If the user does not exist anymore, a "User does not exist" sign can be seen. The biggest challenge in this project was to list the received data dinamically, using<br> JavaScript iterations.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/twitchcode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
TWITCH;
    }
    public function twitch_playengine(){
      return <<<TWITCHPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/twitch_play.css">
      <script type="text/javascript" src="/js/twitch.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
      <title>Projects - Twitch.tv JSON API</title>
TWITCHPLAYENGINE;
    }
    public function twitch_play(){
      return <<<TWITCHPLAY
      <div class="container-fluid">
    <div id="titlerow" class="text-center">
    <h1>Twitch Streamers</h1>
     <div class="btn-group">
       <button id="all" type="button" class="btn btn-primary">All</button>
       <button id="online" type="button" class="btn btn-primary">Online</button>
       <button id="offline" type="button" class="btn btn-primary">Offline</button>
</div>
    </div>
     <div class="twitchbox">
       </div>
</div>
TWITCHPLAY;
    }
    
    public function calculator(){
      return <<<CALCULATOR
      <div class="page-container">
  <div class="headerimg" style="background: url(/img/projects/calculator.jpg) no-repeat top">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Online JavaScript Calculator</p>
        </td>
        <td  width="627px">
        <a href="?project=calculator_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The first project which was mostly<br> based on JavaScript, was the Online Calculator. For this I had to set all<br> the buttons, and their values first,<br> and then the rules. The user can make<br> all the basic operations, and also clear the field, or just delete one by one.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/calculatorcode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
CALCULATOR;
    }
    public function calculator_playengine(){
      return <<<CALCULATORPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/calc_play.css"> 
        <script type="text/javascript" src="/js/calc.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <title>Projects - Online Javascript Calculator</title>
CALCULATORPLAYENGINE;
    }
    public function calculator_play(){
      return <<<CALCULATORPLAY
      <div class="container-fluid">
  <div class="horizont">
    
   <div class="middle">
       <div class="text-center">
       <h3>Free Code Camp<br><i>Online Calculator</i></h3>
         <div class="field text-right">
         </div>
       </div>
     <div class="btns text-center">
       
         <div class="btn-group btn-group-justified">
           <div id="ac" class="btn-group" role="group">
      <button type="button" class="btn btn-default">AC</button>
           </div>
      <div  class="btn-group" role="group">
      <button id="ce" type="button" class="btn btn-default">CE</button>
           </div>
           <div class="btn-group" role="group">
      <button id="percent" type="button" class="btn btn-default">%</button>
           </div>
           <div class="btn-group" role="group">
      <button id="divide" type="button" class="btn btn-default">/</button>
           </div>
       </div>
       
       <div class="btn-group btn-group-justified">
           <div class="btn-group" role="group">
      <button id="seven" type="button" class="btn btn-default">7</button>
           </div>
      <div class="btn-group" role="group">
      <button id="eight" type="button" class="btn btn-default">8</button>
           </div>
           <div class="btn-group" role="group">
      <button id="nine" type="button" class="btn btn-default">9</button>
           </div>
           <div class="btn-group" role="group">
      <button id="multiply" type="button" class="btn btn-default">X</button>
           </div>
       </div>
       
       <div class="btn-group btn-group-justified">
           <div class="btn-group" role="group">
      <button id="four" type="button" class="btn btn-default">4</button>
           </div>
      <div class="btn-group" role="group">
      <button id="five" type="button" class="btn btn-default">5</button>
           </div>
           <div class="btn-group" role="group">
      <button id="six" type="button" class="btn btn-default">6</button>
           </div>
           <div class="btn-group" role="group">
      <button id="minus" type="button" class="btn btn-default">-</button>
           </div>
       </div>
       
       <div class="btn-group btn-group-justified">
           <div class="btn-group" role="group">
      <button id="one" type="button" class="btn btn-default">1</button>
           </div>
      <div class="btn-group" role="group">
      <button id="two" type="button" class="btn btn-default">2</button>
           </div>
           <div class="btn-group" role="group">
      <button id="three" type="button" class="btn btn-default">3</button>
           </div>
           <div class="btn-group" role="group">
      <button id="plus" type="button" class="btn btn-default">+</button>
           </div>
       </div>
       
       <div class="btn-group btn-group-justified">
           <div class="btn-group" role="group">
      <button id="zero" type="button" class="btn btn-default">0</button>
           </div>
      <div class="btn-group" role="group">
      <button id="dot" type="button" class="btn btn-default">.</button>
           </div>
           <div class="btn-group" role="group">
             <button id="square" type="button" class="btn btn-default">X<sup>2</sup></button>
           </div>
           <div class="btn-group" role="group">
      <button id="equal" type="button" class="btn btn-default">=</button>
           </div>
       </div>
         
     </div>
   </div>

  </div>
</div>
CALCULATORPLAY;
    }
    
    public function pomodoro(){
      return <<<POMODORO
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/pomodoro.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Pomodoro Clock</p>
        </td>
        <td  width="627px">
        <a href="?project=pomodoro_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Pomodoro Clock can be used to set<br>the time of your sessions and breaks,<br> and then it gives a buzz noise, and glows at the end of every part. User can also stop and reset the sessions. The most tricky part of the script was the<br> countdown function, for which I needed<br> some guidance from a website, and<br> modified the idea to fit into my clock solution. </p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/pomodorocode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
POMODORO;
    }
    public function pomodoro_playengine(){
      return <<<POMODOROPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/pomodoro_play.css"> 
        <script type="text/javascript" src="/js/pomodoro.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
      <title>Projects - Pomodoro Clock</title>
POMODOROPLAYENGINE;
    }
    public function pomodoro_play(){
      return <<<POMODOROPLAY
      <div class="container">
  <div class="round">
<div class="title text-center">
  <h1>Pomodoro-clock</h1>
</div>
  
<div class="text-center">
  <table>
  <tbody>
  <tr>
  <td>
  <p>Break Length</p>
  </td>
  <td>
  <p>Session Length</p>
  </td>
  </tr>
  <tr>
  <td>
  <a id="breakMin" class="hov" href="javascript:void(0)">-</a>
    <a id="brk">5</a>
    <a id="breakPlus" class="hov" href="javascript:void(0)">+</a> 
  </td>
  <td>
  <a id="sessionMin" class="hov" href="javascript:void(0)">-</a>
    <a id="sssn">25</a>
    <a id="sessionPlus" class="hov" href="javascript:void(0)">+</a>
  </td>
  </tr>
  </tbody>
  </table>
<div class="control">
</div>
    <h2 id="whatsup" class="title2">Session</h2>
</div>  
<div class="clock">
    <div class="load text-center">
    <p id="time">25</p>
    <div class="btn-group">
  <button id="start" type="button" class="btn btn-default" value="Start">Start</button>
  <button id="reset" type="button" class="btn btn-default">Reset</button>
      <span id="dummy"></span>
    </div>
    </div>
</div>
  </div>
    </div>
POMODOROPLAY;
    }
    
    public function tictac(){
      return <<<TICTAC
      
<div class="page-container">
  <div class="headerimg" style="background: url(/img/projects/tictac.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / TicTacToe Game</p>
        </td>
        <td  width="627px">
        <a href="?project=tictac_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Tic-Tac-Toe Game was my personal favorite from the FreeCodeCamp projects. First I was a bit afraid about designing the AI for the computer player, but as I kept thinking about it, and started by simple steps, I had more and more fun.<br> This part made me realize how useful JavaScript can be, and how colorful you<br> can control an app with it.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/tictaccode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  </div>

TICTAC;
    }
    public function tictac_playengine(){
      return <<<TICTACPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/tictac_play.css">
        <script type="text/javascript" src="/js/tictac.js"></script>
        <title>Projects - TicTacToe Game</title>
TICTACPLAYENGINE;
    }
    public function tictac_play(){
      return <<<TICTACPLAY
      <div class="container">
<div class="table">
   <div class="popup text-center">
     <h1>Choose a side!</h1>
     <div class="sides">
     <a id="o" href="javascript:void(0)" type="submit"><i class="fa fa-circle-o" aria-hidden="true"></i></a>
       <a id="x" href="javascript:void(0)" type="submit">
       <i class="fa fa-times" aria-hidden="true"></i></a>
     </div>
   </div>
  <div class="playground">
 <!-- 1st row -->   
    
   <div id="square1" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value1" class="table-cell">
                    
            </div>
        </div>
    </div>
</div>
    <div id="square2" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value2" class="table-cell">
                    
            </div>
        </div>
    </div>
</div>
    <div id="square3" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value3" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>

     <!-- 2nd row -->  
    <div id="square4" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value4" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
    <div id="square5" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value5" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
    <div id="square6" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value6" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
     <!-- 3rd row -->  
    <div id="square7" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value7" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
    <div id="square8" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value8" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
    <div id="square9" class="square">
    <div class="content">
        <div class="tabe text-center">
            <div value="" id="value9" class="table-cell">
                   
            </div>
        </div>
    </div>
</div>
    
 </div> 
</div>
TICTACPLAY;
    }
    
    public function simon(){
      return <<<SIMON
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/simon.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Simon Game</p>
        </td>
        <td  width="627px">
        <a href="?project=simon_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Simon Game is based on the classic board game, where the computer starts giving a note, and then you have to press the same note, to get to the next level with two notes, and so on. Most of the difficulties in this challange were to<br> set the right timings with setTimeout,<br> so every function gets started, and finishes by the right point, so the user experience is at its best. </p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/simoncode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
SIMON;
    }
    public function simon_playengine(){
      return <<<SIMONPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/simon_play.css">
        <script type="text/javascript" src="/js/simon.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <title>Projects - Simon Game</title>
SIMONPLAYENGINE;
    }
    public function simon_play(){
      return <<<SIMONPLAY
      <div class="container">
  <div class="bigcircle">
    <div class="main">
      <a id="quarter1" href="javascript:void(0)" type="submit">
	<div class="quarter quarter1"></div>
        </a>
        <a id="quarter2" href="javascript:void(0)" type="submit">
	<div class="quarter quarter2"></div>
          </a>
          <a id="quarter3" href="javascript:void(0)" type="submit">
	<div class="quarter quarter3"></div>
            </a>
            <a id="quarter4" href="javascript:void(0)" type="submit">
	<div class="quarter quarter4"></div>
              </a>
      <div class="cutout text-center">
        <h1 id="simon">Simon</h1>
        <div class="line">
          <div class="col-sm-4">
          <div id="counter" value="off">
            <p id="nums">--</p>
            </div>
            <p id="cp" class="ps">count</p>
            </div>
          <div class="col-sm-4">
            <a id="startBtn" href="javascript:void(0)" type="submit">
            <div id="start"></div></a>
            <p id="cs" class="ps">start</p>
            </div>
            <div class="col-sm-4">
              <a id="strictBtn" href="javascript:void(0)" type="submit">
                <div id="strict"></div></a>
              <p id="cs" class="ps">strict</p>
              </div>
        </div>
        <div class="line second">
          <div class="text-center">
            <div class="col-sm-4">
            <p>OFF</p>
            </div>
              <div class="col-sm-4">
          <a  id="onoff" href="javascript:void(0)"  type="submit"><i id="onbut" class="fa fa-toggle-off" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-4">
            <p>ON</p>
                  </div>
        </div>
          </div>
      </div>
</div>
  </div>
</div>
SIMONPLAY;
    }
    
    public function wiki(){
      return <<<WIKI
      <div class="page-container">

  <div class="headerimg" style="background: url(/img/projects/wiki.jpg) no-repeat center">
  </div>
  <table class="t1">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p><b>Codepen Projects</b> / Advanced / Wikipedia Viewer</p>
        </td>
        <td  width="627px">
        <a href="?project=wiki_play">
          <div class="tryout text-center">Try It Out</div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  
  <h2>About</h2>
  <hr>
  
  <table class="secondtable">
    <tbody>
      <tr>
        <td width="313px" valign="top">
          <p>The Wikipedia Viewer is a simple project, where the user can get to a Random Wikipedia page by clicking a button,<br> or can search and get results by using<br> the search field. The most challanging<br>part of this project was to design the results, so every outcome will fit<br> nicely, no matter.</p>
        </td>
        <td  width="627px">
          <div class="codebox">
          <img class="img-responsive" src="/img/projects/wikicode.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
WIKI;
    }
    public function wiki_playengine(){
      return <<<WIKIPLAYENGINE
      <link rel="stylesheet" type="text/css" href="/css/wiki_play.css"> 
        <script type="text/javascript" src="/js/wiki.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <title>Projects - Wikipedia Viewer</title>
WIKIPLAYENGINE;
    }
    public function wiki_play(){
      return <<<WIKIPLAY
      <div class="container">
  
    <div class="middle">
      <div class="title">
      <p class="text-center">Wikipedia Viewer</p>
      </div>
      <div class="horizont">
        <div class="col-sm-6">
          <div class="text-center">
         <a href="http://en.wikipedia.org/wiki/Special:Random" target="_blank"> <button class="btn btn-default gomb"><b>Random Article</b></button></a>
            </div>
        </div>
        <div class="col-sm-6">
          <div class="text-center">
          <input style="color:#7c7cfd" action="submit" type="text" class="search" placeholder="search Wikipedia">
          <a id="icon" href="javascript:void(0)" type="submit"><i  class="fa fa-search"></i></a>
         </div> 
        </div>
      </div>
  
    </div>
    <div class="bottom" style="padding-bottom:150px">
      <div id="resulttitle"></div>
      <div id="results"></div>
  </div>

</div>
WIKIPLAY;
    }
}
?>