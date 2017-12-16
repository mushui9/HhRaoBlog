<?php 
include "header.php";
include 'functions.php';

$re = xrdsingle($_GET['post_id']);
$row=mysql_fetch_row($re);
echo "<h2>" . $row[1] . "</h2>";
echo '<p>' . $row[2] . '&nbsp;' . $row[4] . '&nbsp;<a href="edit.php?post_id=' . $row[0] . '">[edit]</a></p>';
echo '<div class="content">' . $row[3] . '</div>';
//обр╩ф╙
echo "<h4><a href='single.php?post_id=" . ($row[0]-1) . "'>next</a></h4>";

echo '<hr width="100%" color=#cccccc noShade SIZE=1>';

include 'comments.php';

$re = xrdcomment($_GET['post_id']);
while($row=mysql_fetch_array($re)){
	echo '<hr width="100%" color=#cccccc noShade SIZE=1>';
    echo "<span>" . $row['comment_date'] . "</span>";
	echo "<p class = 'content'>" . $row['comment_content'] . "</p>";
}

include 'footer.php';
?>