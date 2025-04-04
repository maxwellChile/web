<?php
include("../res/x5engine.php");
$nameList = array("dch","zwt","lay","yhd","kdm","325","g5k","xps","2vn","u6f");
$charList = array("P","4","7","G","4","D","2","L","5","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
