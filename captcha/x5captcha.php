<?php
include("../res/x5engine.php");
$nameList = array("ylm","8uu","6lx","wr8","54n","cg5","f5p","y72","6vr","ye8");
$charList = array("S","7","7","N","C","M","P","S","F","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
