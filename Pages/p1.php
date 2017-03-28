
<?php
//Tangy
$title = 'Join a team';
//Tangy
$header = '';
/*
 * include start structure
 */
include('../Structure/Header.php');
?>
<style>
<!--

-->
.box{
    display: none;
    width: 100%;
}

a:hover + .box,.box:hover{
    display: block;
    position: relative;
    z-index: 100;


   
html { 
  background: url(../Assets/BrowardHealthSimulationOpens.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<p id="t1"></p>

<img src="../Assets/phBig.gif" alt="Picture of even" > 
<p>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
</p>

This live preview for <a href="http://en.wikipedia.org/">Wikipedia</a><div class="box"><iframe src="http://en.wikipedia.org/" width = "500px" height = "500px"></iframe></div> remains open on mouseover.
<script>



var team1 = '<p> Hello</p>';

function team1F(){
	document.getElementById("t1").innerHTML = "hey";
	alert('<img src="../Assets/ph.png" alt="team2">';
}

function team2F(){
	document.getElementById("t1").innerHTML = "hey";
}

function team3F(){
	document.getElementById("t1").innerHTML = "hey";
}

function team4F(){
	document.getElementById("t1").innerHTML = "hey";
}



</script>

<h2 id="h2">Meet The Teams</h2>

<h2 class="teamHeader" id="h2">Team 1</h2>
<img src="../Assets/ph.png" alt="team1" height="250" width="600" onclick="team1F()" id="team1">
<h2 class="teamHeader" id="h2">Team 2</h2>
<img src="../Assets/ph.png" alt="team2" height="250" width="600" onclick="team2F()" id="team2">
<h2 class="teamHeader" id="h2">Team 3</h2>
<img src="../Assets/ph.png" alt="team3" height="250" width="600" onclick="team3F()" id="team3">
<h2 class="teamHeader" id="h2">Team 4</h2>
<img src="../Assets/ph.png" alt="team4" height="250" width="600" onclick="team4F()" id="team4">
<?php

/*
 * include end structure
 */
include('../Structure/Footer.php');


?>