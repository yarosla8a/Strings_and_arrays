<?php
//вывеод приветственное сообщение по типу: “Здравствуйте, Александр”.
	include"header.php";
	$name = "Ярослава";
	define( "GREETING", "Здраствуйте");
	echo GREETING.', '.$name;
?>
