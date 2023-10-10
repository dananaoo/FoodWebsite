<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #F4F8F1;
}
.container{
  max-width: 600px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 200%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #A6A6A6, #39404A);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg,  #39404A, #A6A6A6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }

  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

   </style>
   </head>
<body>
  <div class="container">
    <div class="title">Регистрация</div>
    <div class="content">
      <form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="user-details">
            
          <div class="input-box">
            <span class="details">Имя</span>
            <input type="text" name= "a" placeholder="Введите ваше имя" required>
          </div>
          <div class="input-box">
            <span class="details">Логин</span>
            <input type="text" name= "b" placeholder="Придумайте логин" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" name= "c" placeholder="Ваша электронная почта" required>
          </div>
          
          <div class="input-box">
            <span class="details">Пароль: 2-8 символов</span>
            <input type="password" name= "d" placeholder="Пароль" required>
          </div>
          <div class="input-box">
            <span class="details">Подтверждение пароля</span>
            <input type="password" name="e" placeholder="Пароль" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Зарегистрироваться" name="submit">
            <a href= "index.php">Назад</a>
        </div>
          
      </form>
    </div>
  </div>
    
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
    if($_POST["d"]==$_POST["e"]){
        $sql1="SELECT * FROM `login` WHERE logins='".$_POST["b"]."';";
          $result = $conn->query($sql1);
    if ($result->num_rows == 1){echo"<script>alert('Такой логин уже существует')</script>"; exit();}
$sql = "INSERT INTO `login` (`StudentID`, `Name`, `logins`, `password`, `e-mail`) VALUES (NULL, '".$_POST["a"]."', '".$_POST["b"]."', '".$_POST["d"]."', '".$_POST["c"]."')";
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Вы успешно зарегистрированы!')</script>";
} else {
  echo "Такой логин уже существует " ;

}
}
    else {
        echo "Password is wrong! Please, try again! ";
    }
}
$conn->close();
?>
   
    
</body>
</html>

