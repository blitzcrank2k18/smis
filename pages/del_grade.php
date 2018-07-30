<?php
include "../includes/db.php";
if(mysqli_query($conn,"DELETE FROM student_grade where sg_id = '".$_GET['id']."'")){
	echo '<script>location.replace(document.referrer);</script>';
}
?>