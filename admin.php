<?php  
	session_start();
	$connect = mysqli_connect("127.0.0.1", "root", "root", "hackaton");
	$ins = "INSERT INTO questions (heading, user_id, question) VALUES ('".$_GET['heading']."', '".$_GET['user_id']."', '".$_GET['question']."')";
	$query = mysqli_query($connect, "SELECT * FROM users WHERE id ='{$_GET['user_id']}'");
	$res = $query->fetch_assoc();
	mysqli_query($connect, $ins);
	header("Location: index.php?id={$res['id']}");
?>