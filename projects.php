<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Adam Nemeth, Front-End, Web Developer, Portfolio Page, Website, Webdesign, Webpages, Mr Nemeth">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animate.min.css" /><link rel='stylesheet' href='/css/font-awesome.min.css'/>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/projects.css">    
	<script src="/js/jquery-2.1.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/blocs.min.js"></script>
    
<?php
    include_once("class/mainclass.php");
    $projects = new projectlist();
    
    if($_GET['project'] == "tribute_play"){
        echo $projects->tribute_playengine();
      }else if($_GET['project'] == "quote_play"){
      	echo $projects->quote_playengine();
      }else if($_GET['project'] == "weather_play"){
      	echo $projects->weather_playengine();
      }else if($_GET['project'] == "twitch_play"){
      	echo $projects->twitch_playengine();
      }else if($_GET['project'] == "calculator_play"){
      	echo $projects->calculator_playengine();
      }else if($_GET['project'] == "pomodoro_play"){
      	echo $projects->pomodoro_playengine();
      }else if($_GET['project'] == "tictac_play"){
      	echo $projects->tictac_playengine();
      }else if($_GET['project'] == "simon_play"){
      	echo $projects->simon_playengine();
      }else if($_GET['project'] == "wiki_play"){
      	echo $projects->wiki_playengine();
      }else{
      	echo "<title>Projects</title>";
      }
      ?>
</head>
<body>
<!-- Main container -->
<!-- Navbar -->
<div class="container-fluid">
		<nav class="navbar row navbar-fixed-top">
			<div class="navbar-header ">	
			</div>
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-left">
       <li><a href="https://www.facebook.com/adamnnn" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li><a href="https://hu.linkedin.com/in/adam-nemeth-7170819a" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
				<li><a href="https://github.com/mrnemeth" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li><a href="https://www.freecodecamp.com/mrnemeth" target="_blank"><i class="fa fa-code"></i></a></li>
				<li><a href="https://soundcloud.com/percut" target="_blank">
				<i class="fa fa-soundcloud" aria-hidden="true"></i>
				</a></li>
    </ul>
				<ul id="ul" class="site-navigation nav navbar-nav">
					<?php
					if($_GET['project'] == "tribute_play"){
        echo $projects->back();
      }else if($_GET['project'] == "quote_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "weather_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "twitch_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "calculator_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "pomodoro_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "tictac_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "simon_play"){
      	echo $projects->back();
      }else if($_GET['project'] == "wiki_play"){
      	echo $projects->back();
      }
					?>
					<li>
						<a href="/index.php" id="home">Home</a>
					</li>
					<li>
						<a href="/index.php#bloc-3" id="upproject">Projects</a>
					</li>
				</ul>
			</div>
		</nav>
	
	<!-- site content -->
<?php
       if($_GET['project'] == "tribute"){
        echo $projects->tribute();
      }else if($_GET['project'] == "tribute_play"){
      	echo $projects->tribute_play();
      }else if($_GET['project'] == "quote"){
      	echo $projects->quote();
      }else if($_GET['project'] == "quote_play"){
      	echo $projects->quote_play();
      }else if($_GET['project'] == "weather"){
      	echo $projects->weather();
      }else if($_GET['project'] == "weather_play"){
      	echo $projects->weather_play();
      }else if($_GET['project'] == "twitch"){
      	echo $projects->twitch();
      }else if($_GET['project'] == "twitch_play"){
      	echo $projects->twitch_play();
      }else if($_GET['project'] == "calculator"){
      	echo $projects->calculator();
      }else if($_GET['project'] == "calculator_play"){
      	echo $projects->calculator_play();
      }else if($_GET['project'] == "pomodoro"){
      	echo $projects->pomodoro();
      }else if($_GET['project'] == "pomodoro_play"){
      	echo $projects->pomodoro_play();
      }else if($_GET['project'] == "tictac"){
      	echo $projects->tictac();
      }else if($_GET['project'] == "tictac_play"){
      	echo $projects->tictac_play();
      }else if($_GET['project'] == "simon"){
      	echo $projects->simon();
      }else if($_GET['project'] == "simon_play"){
      	echo $projects->simon_play();
      }else if($_GET['project'] == "wiki"){
      	echo $projects->wiki();
      }else if($_GET['project'] == "wiki_play"){
      	echo $projects->wiki_play();
      }
       ?>
       </div>
       <footer>
        <p class="text-center">Designed by<a href="https://hu.linkedin.com/in/adam-nemeth-7170819a" target="_blank"> Benjamin Rigo</a>, and Coded by<a href="https://hu.linkedin.com/in/adam-nemeth-7170819a" target="_blank"> Adam Nemeth</a>.
      </footer> 
</body>
    
<!-- Google Analytics -->
 
<!-- Google Analytics END -->

</html>
