<?php
session_start();
?>
<html>
    <head>
    <style>
 table,td,th
{
	padding:10px;
	border-collapse:collapse;
	font-family:Georgia, "Times New Roman", Times, serif;
	border:solid #ddd 2px;
}
             .submit {
	float: right;
	background: #ccc;
	padding: 5px 10px;
	color:  #555;
	border-radius: 5px;
	margin-right: 5px;
	border: none;
}
    </style>
    </head>
<body>
    
    <table align="center" border="1" width="100%">
<tr><th colspan=5>Любимые</th></tr>
<tr>
<th>Название</th>
<th></th> 
</tr>
        
        
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql="SELECT meal.name,meal.foodID  FROM favourite 
INNER JOIN meal ON meal.foodID=favourite.foodID WHERE StudentID='".$_SESSION['StudentID']."';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td>
        <td><form  method='post' action='meal.php'><input type='hidden'name='ID' value='".$row["foodID"]."'><input type='submit' name='submit' class='submit' value='подробнее...'></form></td>
        </tr>";
    }
    echo "</table>";}
    else {
  echo "0 results";
}

$conn->close();
?>
        <a href="Профиль.php">Назад</a><br>
        <a href="index.php">На главную</a>
    </body>
</html>