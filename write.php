<?php /*
//��Ҫ��¼ʱ������δ���
if(!isset($_COOKIE['user']))
	echo '<script language = "javascript">location.replace("login.php?page=write");</script>';
if($_COOKIE['user']!='myrao')
	echo '<script language = "javascript">location.replace("login.php?page=write");</script>';
*/?>
	
<?php
include "header.php";
include 'functions.php';
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<form action="" method="POST"><br>
	���⣺<input type ="text" name="title"></input>
	��ǩ��<select name="tag"><option value="mood">mood</option><option value="essay">essay</option><option value="prose">prose</option><option value="dairy">dairy</option></select>
	<input type="submit" value="POST"></input><br>
	<textarea name="editor"></textarea>
	<script type="text/javascript">CKEDITOR.replace('editor');</script><br>
</form>

<?php 
if($_POST){
	$content = $_POST['editor'];
	$date =  date('Y-m-d H:i:s',time());
	$title = $_POST['title'];
	$tag = $_POST['tag'];
    if($content == ''){
        echo '<script language = "javascript">
		alert("��������Ϊ��");
		</script>';
    }
    else{
		xwrpost($date,$title,$content,$tag);
		echo '<script language = "javascript">
		alert("�����ɹ�");
		</script>';
    }
}
?>

<?php 
include 'footer.php';
?>