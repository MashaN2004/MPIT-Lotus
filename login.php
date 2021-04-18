<?php 
	session_start();
?>
<!-- 2 уровень -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-4 mx-auto mt-5">
		<div class="text-center">
			<h1 class="font-weight-light">Один аккаунт. Весь мир IntHelp!</h1>
			<p class="font-weight-light">Чтобы запустить IntHelp, войдите в свой аккаунт</p>
		</div>
		<div class="col-8 bg-light mx-auto pt-5 shadow-sm mb-5" style="height: 400px">
			<div class="col-4 mx-auto mb-4" style="padding-right: 230px;">
				<img src="img/1.png" class="" style="height: 100px; width: 200px;">
			</div>
			<div class="col-9 mx-auto">
				<?php 
					$con = mysqli_connect('127.0.0.1', 'root', 'root', 'hackaton');
					$query = mysqli_query($con, "SELECT * FROM users WHERE name='{$_POST['name']}' AND password='{$_POST['password']}'");
					$res = $query->fetch_assoc();
				?>
				<form action="check.php" method="POST">
					<input type="" name="name" class="form-control mt-2" placeholder="Имя">
					<p></p>
					<input type="" name="password" class="form-control" placeholder="Пароль">
					<button style="color: white;" class="form-control mt-1 bg-primary">Далее</button>
				</form>
				<p style="color: red;"><?php echo $_GET['text'] ?></p>	
				<div class="text-center">
					<a href="">Найти аккаунт</a>
				</div>				
				<div class="text-center">
					<a href="">Создать аккаунт</a>
				</div>	
			</div>
		</div>
			
	</div>
</body>
</html>