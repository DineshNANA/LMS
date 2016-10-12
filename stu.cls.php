<?php
inclued_once 'cfg.inc.php';
inclued_once 'db.cls.php'; 
class student{
	var $con;
	var $stid;
	var $stname;
	var $address;
	var $gender;
	var $contanum;
	var $learncourses;
	var $profile;


	function student(){
		$this->con=new WADB("$SYSTEM_DBHOST","$SYSTEM_DBNAME","SYSTEM_DBUSER","$SYSTEM_DBPWD");

	}
	function stuprofile($sid){
		$query="SELECT * FROM student WHERE stid='$sid'";
	}
}
?>