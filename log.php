<?php 
session_start(); 
include "dbconn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: logins.php?error=Введите логин");
	    exit();
	}else if(empty($pass)){
        header("Location: logins.php?error=Введите пароль");
	    exit();
	}else{
		$sql = "SELECT * FROM login WHERE  logins='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['logins'] === $uname && $row['password']===$pass ) {
            	$_SESSION['logins'] = $row['logins'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['StudentID'] = $row['StudentID'];
                $_SESSION['e-mail'] = $row['e-mail'];
                $_SESSION['password'] = $row['password'];
            	header("Location: Профиль.php");
		        exit();
            }else{
				header("Location: logins.php?error=Неправильный логин или пароль");
		        exit();
			}
		}else{
			header("Location: logins.php?error=Неправильный логин или пароль");
	        exit();
		}
	}
	
}else{
	header("Location: logins.php");
	exit();
}