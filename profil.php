<?php 
session_start();
if (isset($_SESSION['StudentID']) && isset($_SESSION['logins'])) {
include "dbconn.php";
    $sql= "SELECT * FROM login WHERE logins='".$_SESSION['logins']."'";
    $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
             if ($row['logins'] === $_SESSION['logins']) {
            	$_SESSION['Name'] = $row['Name'];
                $_SESSION['e-mail'] = $row['e-mail'];
                $_SESSION['password'] = $row['password'];}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Профиль</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="profil.php" method="post">
     	<h2>Ваш профиль</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Ваше имя </label>
     	<input type="text" name="uname" value="<?php echo $_SESSION['Name']; ?>"><br>

     	<label>Ваш е-mail</label>
     	<input type="text" name="mail" value="<?php echo $_SESSION['e-mail']; ?>"><br>
         <label>Ваш логин <?php echo $_SESSION['logins']; ?></label><br> <br>
         <label>Ваш пароль</label>
     	<input type="text" name="pas" value="<?php echo $_SESSION['password']; ?>"><br>
          <a href="Профиль.php">Назад</a>
         <input class = "sub" type="submit" value="Изменить" name="submit">
     </form>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  

    if(!empty($_POST["submit"])) {
        $sql = "UPDATE `login` SET `Name`='".$_POST["uname"]."',`password`='".$_POST["pas"]."',`e-mail`='".$_POST["mail"]."' WHERE `logins`='".$_SESSION['logins']."' "; 
        echo "<script>alert('Успешно изменено')</script>";
        
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Успешно изменено')</script>";
    header("Location:profil.php");
  exit;
     echo "<meta http-equiv='refresh' content='0'>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
}
 
?>  

</body>
</html>
<?php 
}else{
     header("Location: logins.php");
     exit();
}
 ?>