<?php 
	$con = mysqli_connect('127.0.0.1', 'root','root','hackaton');
	$upd = mysqli_query($con, "UPDATE questions SET heading='{$_GET['heading']}', question='{$_GET['question']}' WHERE user_id='{$_GET['user_id']}'");
	mysqli_query($con, $upd);
	header("Location: index.php?id={$_GET['user_id']}");
?>