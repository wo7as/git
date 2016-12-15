<?php
	session_start();
	include_once('classes/Human.php');
	include_once('classes/Db.php');
$name = 'wo7as';
$db = new Db;

$sql = Db::$db->prepare('Select * From users Where login = ?');
$sql->execute(['wo7as']);
$res = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $value){
    echo $value['login'];
}



	include_once('func.php');

	if(isset($_SESSION['msg']))
	{
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	if(isset ($_POST['sub']))
	{
		//$name = $_POST['name'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		//$age = $_POST['age'];
		//$nation = $_POST['nation'];

		$obj = new Human("$weight","$height");
		$result = $obj->getInfo();
		$_SESSION['msg'] = $result;
		header('location:index.php');
		exit();

	}
	?>
	<h3>Расчитать ваш идеальный вес с учетом вашего роста</h3>
	<form method = "post">
	<p>Вес:</p><input type = "text" name = "weight"></input>
	<p>Рост:</p><input type = "text" name = "height"></input>
	<p><input type = "submit" name = "sub" value = "Принять"></p>
</form>
