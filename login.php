<?php 
ob_start();//��ֹ����ҳ�ϳ���setcookie����
include 'functions.php';
if($_POST){
	//$name = $_POST['name'];
	$pwd = md5($_POST['pwd']);
	$re = xrduser($pwd);
	$row=mysql_fetch_row($re);//����is_bool($re)�����ж��Ƿ�Ϊ��
	if(count($row)==3){
		setcookie('user',$row[1]);
		echo '<script language = "javascript">location.replace("' . $_GET['page'] . '.php");</script>';
	}else{
		echo '<script language = "javascript">alert("�������");</script>';
	}
}
?>

<form action="" method="POST" style="margin:200px auto;width:350px">
	PASSWORD��<input name = "pwd" type = "password" />
    <input type="submit" value="LOGIN" />
</form>