<?php 
include "header.php";
include 'functions.php';
?>

<div class = "menu"><h3>
	FIGHTING
	</h3>
</div>
	
<?php
$re = xrdpage($_GET['page']);
while($row=mysql_fetch_array($re)){
    echo "<h2><a href='single.php?post_id=" . $row['post_ID'] . "'>" . $row['post_title'] . "</a></h2>";
	echo "<span>Post at " . $row['post_date'] . "</span>";
}

include 'footer.php';
?>