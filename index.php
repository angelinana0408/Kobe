<?php
session_start();
$username = empty($_SESSION["username"]) ? '' : $_SESSION["username"];

	// If the user is logged in, redirect them home
	if ($username) {
		echo "<script>window.location.href='home.php';</script>";
	}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Kobe Home Login</title>
<meta name="description" content="slick Login">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>

function loginFun(){

  if($("#user").val().length < 1){
    $(".responseDiv").html("<p id = 'responseText'>" + "Please enter username" + "</p>");
  }
  else if($("#pass").val().length < 1){
    $(".responseDiv").html("<p id = 'responseText'>" + "Please enter password" + "</p>");
  }
  else{

        var xmlHttp = new XMLHttpRequest();

        xmlHttp.onload = function() {
            if (xmlHttp.status == 200) {
                $(".responseDiv").html("<p id = 'responseText'>" + xmlHttp.responseText + "</p>");
            }
        }

        var user = encodeURIComponent($("#user").val());
        var pass = encodeURIComponent($("#pass").val());
        var ifNew = encodeURIComponent("0");

        // Build our parameter string
        var params = "&user=" + user + "&pass=" + pass + "&new=" + ifNew;

    // Open POST connection
    xmlHttp.open("POST", "myLog.php", true);

        // Set MIME type
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Send request, passing in the parameters
        xmlHttp.send(params);
  }
}


function registerFun(){

  if($("#user").val().length < 1){
    $(".responseDiv").html("<p id = 'responseText'>" + "Please enter username" + "</p>");
  }
  else if($("#pass").val().length < 1){
    $(".responseDiv").html("<p id = 'responseText'>" + "Please enter password" + "</p>");
  }
  else{
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function() {
        if (xmlHttp.status == 200) {
            $(".responseDiv").html("<p id = 'responseText'>" + xmlHttp.responseText + "</p>");
        }
    }

    var user = encodeURIComponent($("#user").val());
    var pass = encodeURIComponent($("#pass").val());
    var ifNew = encodeURIComponent("1");

    // Build our parameter string
    var params = "&user=" + user + "&pass=" + pass + "&new=" + ifNew;

    // Open POST connection
    xmlHttp.open("POST", "myLog.php", true);

    // Set MIME type
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Send request, passing in the parameters
    xmlHttp.send(params);
  }
}

</script>


</head>
<body>
<div id="bg" style="position:absolute; width:100%; height:100%; z-index:-1">
  <img src="images/bg.jpg" height="100%" width="100%"/>
</div>
<div id="bigTitle">ALL FOR KOBE BRYANT</div>
<div class="responseDiv"></div>
<form id="slick-login">
<label for="username">username</label><input type="text" name="username" class="placeholder" id="user" placeholder="username">
<label for="password">password</label><input type="password" name="password" class="placeholder" id="pass" placeholder="password">
<input type="button" onclick="loginFun()" id="login" value="Log In">
<input type="button" onclick="registerFun()" id="register" value="Register">
</form>
</body>
</html>
