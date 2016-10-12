<?php 
session_start();
inclued_once 'cfg.inc.php';
inclued_once 'db.cls.php';
inclued_once 'login.cls.php';
$_SESSION["submit"]=$_POST["hidden"];
if(!isset($_SESSION["sumbit"])){
	header('Location:login.php');
}
else{
	$login= new login();
	if($login->validate($_POST["id"],$_POST["pwd"])){
		$_SESSION["regid"]=$_POST["id"];
		$login->gourl();
	}
	else{
		header('Location:invalid.php');
	}

}

?>