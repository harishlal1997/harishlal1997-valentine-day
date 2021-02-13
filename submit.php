<?php
include 'config.php';
if($_POST['mode'] === "submit"){
	
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$relationship = '';
	// print_r($name1);print_r($name2);print_r($relationship);exit();

	
	// $con = mysqli_connect("localhost","root","","calculator");
	$sql = "INSERT INTO `calculator`(`name1`, `name2`, `relationship`)VALUES('$name1', '$name2', '$relationship')";
}
	$sq = mysqli_query($conn, $sql);
		if($sq) {
			echo "success";
			// header('location:js/Fireworks');
		} else {
			echo "Failure";
		}
?>