<?php
include("../res/x5engine.php");
$nameList = array("yy5","6e3","s5c","gl4","che","ksx","e7c","rau","lms","eam");
$charList = array("F","F","F","T","D","E","W","D","2","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
