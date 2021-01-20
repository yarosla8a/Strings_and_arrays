
<?php
include"header.php";

//Первый массив должен содержать ряд значений – 2020, Ivan, false.
$one=array(2020, 'Ivan', false);
	print_r($one);
	echo "<br>";

//Второй массив должен состоять из 3 вложенных массивов каждый из которых должен содержать ключи id, name, surname, age, lang (значения укажите на свой выбор).
$two=[
	"id"=>"2",
	"name"=>"Yaroslava",
	"surname"=>"Piskalova",
	"age"=>"21",
	"lang"=>"ukr"
];
echo "<br>";
print_r($two);
echo "<br>";

//Третий массив будет являться списком настроек для чего-либо. Он должен состоять из ключей key, url, ssl, db (ключ db должен также являться массивом с ключами – port, host, login, password)

$three=[
	"key"=>"2",
	"url"=>"localhost/",
	"ssl"=>"ssl",
	"db"=>["port"=>"9000",
			"host"=>"localhost",
			"login"=>"admin2020",
			"password"=>"qwer1234"]
];
echo "<br>";
print_r($three);
echo "<br>";
$three['db']['port']=3309 . "<br>";
echo "<br>";
print_r($three);

?>