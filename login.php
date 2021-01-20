<?php
	include"header.php";
	const LOGIN="admin";
	define("PASSWORD", "secret123");

	//$tmp_login ="test";
	//$tmp_password ="test123";

	//$tmp_login ="admin";
	//$tmp_password ="test123";

	$tmp_login ="admin";
	$tmp_password ="secret123";

	if($tmp_login===LOGIN && $tmp_password !== PASSWORD){
		echo "Check correct your password <br>";

	}elseif ($tmp_login !== LOGIN) {
		echo "User not found <br>";
		
	}elseif ($tmp_login===LOGIN && $tmp_password === PASSWORD) {
		echo "Auth success <br>";
	}

//Создайте переменную $isStatus, которая должна содержать либо true, либо false. С помощью тернарного оператора, занесите в переменную $statusResult следующие значения в зависимости от условия.
//1 – если $isStatus равна true, то значение должно быть – «43224656»
//2 – если $isStatus равна false, то значение должно быть – «98645623»

$isStatus = false;
$statusResult=$isStatus===true ?"43224656":"98645623";
	echo $statusResult."<br>";



//Создайте переменную $typeCar. С помощью оператора switch сделайте проверку по следующим значениям.
//1 – если значение $typeCar равно «BMW», то выведите на экран сообщение «Selected is a very good car».
//2 – если значение $typeCar равно «Toyota», то выведите на экран сообщение «Toyota is a very reliable car!».
//3 – если значение $typeCar равно «Lada», то выведите на экран сообщение «Don't buy these cars!».
//4 – если не одно значение не с
$typeCar="BMW";

switch ($typeCar) {
	case 'BMW':
		echo "Selected is a very good car";
		break;
	case 'Toyota':
		echo "Toyota is a very reliable car!";
		break;
	case 'Lada':
		echo "Don't buy these cars!";
		break;	
	default:
		echo "Car not found";
		break;
}

?>