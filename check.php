<?php  
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'hackaton');
	$query = mysqli_query($con, "SELECT * FROM users WHERE name='{$_POST['name']}' AND password='{$_POST['password']}'");
	$res = $query->fetch_assoc();

	$num = mysqli_num_rows($query);
	if ($num == 0) {
		header("Location:login.php?text=Нет такого пользователя");
	}
	else
	{
		header("Location:index.php?id={$res['id']}");
	}
?>