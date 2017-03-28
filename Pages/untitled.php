
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






<div class="intro">
        <div class="inner">
                <div class="content">
                        <h1>Navigation Buttons.</h1>
                        <p id="h1"><br><br><br><br><br>Heading<br><br><br><br><br><br><br></p>
                </div>
        </div>
</div>
<div class="page">
        <div class="inner">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
        </div>
      
</div>



<script>



var team1 = '<p> Hello</p>';

function team1F(){
    document.getElementById("t1").innerHTML = "hey";
   // alert('<img src="../Assets/ph.png" alt="team2">';
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

<!--<h2 class="teamHeader" id="h2">Team 1</h2>-->



<a href="https://cse.broward.edu/intech/" target="_blank">
<img src="../Assets/team1.jpg" alt="team1" height="250" width="600" onclick="team1F()" id="team1">
</a><div class="box"><iframe src="https://cse.broward.edu/intech/" width = "500" height = "500"></iframe></div>

<a href="https://cse.broward.edu/intech/" target="_blank">
<!--<h2 class="teamHeader" id="h2">Team 2</h2>-->
<img src="../Assets/team2.jpg" alt="team2" height="250" width="600" onclick="team2F()" id="team2">
</a><div class="box"><iframe src="https://cse.broward.edu/intech/" width = "500" height = "500"></iframe></div>

<br>
<br>

<br>
<br>

<br>
<br>

<!--<h2 class="teamHeader" id="h2">Team 3</h2>-->
<a href="https://cse.broward.edu/intech/" target="_blank">
<img src="../Assets/team3.jpg" alt="team3" height="250" width="600" onclick="team3F()" id="team3">
</a><div class="box"><iframe src="https://cse.broward.edu/intech/" width = "500" height = "500"></iframe></div>

<!--<h2 class="teamHeader" id="h2">Team 4</h2>-->
<a href="https://cse.broward.edu/intech/" target="_blank">
<img src="../Assets/team4.jpg" alt="team4" height="250" width="600" onclick="team4F()" id="team4">

</a><div class="box"><iframe src="https://cse.broward.edu/intech/" width = "500" height = "500"></iframe></div>



<?php

/*
 * include end structure
 */
include('../Structure/Footer.php');


?>