<?php
class login{
	var $regid;
	var $pwd;
	var $con;
	var $result;

	function login(){
		$this->con=new WADB($SYSTEM_DBHOST,$SYSTEM_DBNAME,$SYSTEM_DBUSER,$SYSTEM_DBPWD);
	}
	function validate($rid,$pwd){
		$query="SELECT * FROM USER WHERE regid='$rid' AND pwd='$pwd'";
		$this->result=$this->con->selectRecords($query);
		if($this->con->getNumberOfRecords()==1){
			return true;
		 
		}
		else
			return false;
	}
	function gourl(){
		if($this->result["usercls"]==1){
			$url='stuhome.php';
		}
		else if($this->result["usercls"]==2){
			$url='lecthome.php';
		}
		else if($this->result["usercls"]==3){
			$url='adminhome.php';
		}
		else{
			$url='invalid.php';
		}

		header('Location:'.$url);
		exit();
	}
} 

?>