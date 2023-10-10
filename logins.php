<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="log.php" method="post">
     	<h2>Вход</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Логин</label>
     	<input type="text" name="uname" placeholder="Введите свой логин"><br>

     	<label>Пароль</label>
     	<input type="password" name="password" placeholder="Введите пароль"><br>
           <a href="index.php">Назад</a>
         <button type="submit">Login</button>
     </form>
</body>
</html>