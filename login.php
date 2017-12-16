<?php 
ob_start();//防止在网页上出现setcookie问题
include 'functions.php';
if($_POST){
	//$name = $_POST['name'];
	$pwd = md5($_POST['pwd']);
	$re = xrduser($pwd);
	$row=mysql_fetch_row($re);//可用is_bool($re)函数判断是否为空
	if(count($row)==3){
		setcookie('user',$row[1]);
		echo '<script language = "javascript">location.replace("' . $_GET['page'] . '.php");</script>';
	}else{
		echo '<script language = "javascript">alert("密码错误");</script>';
	}
}
?>

<form action="" method="POST" style="margin:200px auto;width:350px">
	PASSWORD：<input name = "pwd" type = "password" />
    <input type="submit" value="LOGIN" />
</form>