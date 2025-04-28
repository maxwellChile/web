<?php
include("../res/x5engine.php");
$nameList = array("452","8zj","lk8","psr","ky3","7nr","2ha","jrr","zut","cfl");
$charList = array("Z","S","N","C","3","4","H","V","J","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
