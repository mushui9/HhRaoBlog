<div>
	<form action="" method="POST">
        <textarea name="comment_content" placeholder="Everything you want to say……"></textarea>
        <input type="submit" value="Comment" id= "button"/>
    </form>
</div>

<?php 

if($_POST){
	$content = $_POST['comment_content'];
	$date =  date('Y-m-d H:i:s',time());
	$post_ID = $_GET['post_id'];
    if($content == ''){
        echo '<script language = "javascript">
		alert("评论不能为空");
		</script>';
    }
    else{
		xwrcomment($date,$post_ID,$content);
		echo '<script language = "javascript">
		alert("发送成功");
		</script>';
    }
}

?>