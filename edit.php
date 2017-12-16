<?php
if(isset($_GET['post_id'])){ 
	if(!isset($_COOKIE['post_id']))
		setcookie('post_id',$_GET['post_id']);
	$_COOKIE['post_id'] =  $_GET['post_id'];
}
?>

<?php /*
//需要登录时加入这段代码
if(!isset($_COOKIE['user']))
	echo '<script language = "javascript">location.replace("login.php?page=edit");</script>';
if($_COOKIE['user']!='myrao')
	echo '<script language = "javascript">location.replace("login.php?page=edit");</script>';
*/?>
	
<?php
include "header.php";
include 'functions.php';
$re = xrdsingle($_COOKIE['post_id']);
$row=mysql_fetch_row($re);
if($_POST){
	$content = $_POST['editor'];
	$id = $row[0];
    if($content == ''){
        echo '<script language = "javascript">
		alert("发布不能为空");
		</script>';
    }
    else{
		xuppost($content,$id);
		echo '<script language = "javascript">alert("更新成功");
		location.replace("single.php?post_id=' . $id . '");</script>';
    }
}
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<form action="" method="POST"><br>
	标题：<?php echo $row[1]; ?>
	<input type="submit" value="UPDATE"><br>
	<textarea name="editor" value=<?php echo $row[3]; ?>></textarea>
	<script type="text/javascript">CKEDITOR.replace('editor');</script><br>
</form>

<?php 
include 'footer.php';
?>