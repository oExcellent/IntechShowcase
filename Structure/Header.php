<!doctype html>
<html lang="en">
<head>

    <title><?php echo $title; ?></title>

    <meta charset="UTF-8">
    <meta name="desription" content="       ">
    <meta name="keyword" content="          ">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../Styles/style1.css">

    <style>
    #ht{
    color: white;
    text-align: center;
    }


.box{
    display: none;
    width: 100%;
}

a:hover + .box,.box:hover{
    display: block;
    position: relative;
    z-index: 100;
}

#h2,#h1{
color: white;
text-align: center;
text-shadow: 2px 2px 8px black;
   }

html { 
  background: url(../Assets/beautiful-wallpaper-39.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


html, body {
    margin:0;
    padding:0;
    height:100%

}
body { font-family:Georgia, "Times New Roman", Times, serif 
  background-color: #bf8840;}
h1, p { margin:0 0 1em; }
h1 { text-align:center; }

.intro {
    display:table;
    height:100%;
    width:100%;
    margin:auto;
    background:url(../Assets/Hackathon-India-1.jpg) no-repeat 50% 50%;
    background-size:cover;
}
.intro .inner {
    display:table-cell;
    vertical-align:top;
    width:100%;
    max-width:none;
}
.content {
    padding:0px;
    background:rgba(255,255,255,0.0);
    max-width:960px;
    margin:auto;
    color:white;
}
.inner {
    max-width:600px;
    margin:auto;
    font-size:140%;
    line-height:1.6;
    padding:10px
    color:white;
}
.page {
    width:80%;
    margin:auto;
    color:black;
    text-shadow: 2px 2px 8px white;
}
.page .inner p { padding:2em 0 0 
}














/* Popup container - can be anything you want */
.popup {
    position: relative;
  
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

}

/* The actual popup */
.popup .popuptext {

    visibility: hidden;
    width: 500px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;

}

/* Popup arrow */
.popup .popuptext::after {

    content: "";
    position: absolute;
    top: 100%;
     left: 10px;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
      left: 30%;
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;

}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}

#foot{
    text-align: center;
    </style>
}
</head>

<body>
<header>
    <h1 id="ht"><?php echo $header?></h1>
</header>

<nav>

     <!--  <a href="link.html" > Home | About Us | Contact Us</a>-->

</nav>

<main>