<?php 

//�������ݿ�
function xconnect(){
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('app_myrao',$db);
	return $db;
}

//�����ݿ��ȡ��������
function xrdpage($post_tag){   
	$db=xconnect();
	if($post_tag=='article')
		$sql = "select * from posts order by post_ID desc";
	else
		$sql = "select * from posts where post_tag = '$post_tag' order by post_ID desc";
	$re = mysql_query($sql,$db);
	return $re;
}

//�����ݿ��ȡ��ƪ����
function xrdsingle($post_id){   
	$db=xconnect();
	$sql = "select * from posts where post_ID = '$post_id'";
	$re = mysql_query($sql,$db);
	return $re;
}

//�����ݿ��ȡ����
function xrdcomment($post_id){   
	$db=xconnect();
	$sql = "select * from comments where comment_post_ID = '$post_id'";
	$re = mysql_query($sql,$db);
	return $re;
}

//�����ݿ��ȡ�û�
function xrduser($pwd){   
	$db=xconnect();
	$sql = "select * from users where user_pass = '$pwd'";
	$re = mysql_query($sql,$db);
	return $re;
}

//�����ݿ�д����
function xwrcomment($date,$post_id,$content){
	$db=xconnect();
    $sql = "insert into comments(comment_date,comment_post_ID,comment_content) values('$date','$post_id','$content')";
	$re = mysql_query($sql,$db);
	return $re;
}

//�����ݿ�д����
function xwrpost($date,$title,$content,$tag){
	$db=xconnect();
    $sql = "insert into posts(post_date,post_title,post_content,post_tag) values('$date','$title','$content','$tag')";
	$re = mysql_query($sql,$db);
	return $re;
}

//�������ݿ�����
function xuppost($content,$id){
	$db=xconnect();
    $sql = "update posts set post_content = '$content' where post_ID = '$id'";
	$re = mysql_query($sql,$db);
	return $re;
}

?>