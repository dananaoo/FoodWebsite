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
    </style>
    </head>
<body>
    
    <table align="center" border="1" width="100%">
<tr><th colspan=5>Recipes</th></tr>
<tr>
<th>Название</th>
<th>Инструкция</th>
<th>Время</th>
<th>Порция</th>
<th>Калория</th>
 <th>Изображение</th>   
    <th>Тип</th>   
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
    function Partition(&$data, $left, $right) {
	$pivot = $data[$right];
	$temp;
	$i = $left;

	for ($j = $left; $j < $right; $j++)
	{
		if ($data[$j] <= $pivot)
		{
			$temp = $data[$j];
			$data[$j] = $data[$i];
			$data[$i] = $temp;
			$i++;
		}
	}

	$data[$right] = $data[$i];
	$data[$i] = $pivot;

	return $i;
}

function QuickSortRecursive(&$data, $left, $right) {
	if ($left < $right)
	{
		$q = Partition($data, $left, $right);
		QuickSortRecursive($data, $left, $q - 1);
		QuickSortRecursive($data, $q + 1, $right);
	}
}    
    $sql="SELECT meal.name
FROM meal
INNER JOIN type ON meal.typeID = type.typeID WHERE type.typeID='".$_POST["ID"]."';";
$result = $conn->query($sql);
        $array= array();
if ($result->num_rows > 0) { 
    $num= $result->num_rows;
    echo $num;
     while($row = $result->fetch_assoc()) {
             $array[]=$row["name"];
         }}
        QuickSortRecursive($array, 0, $num-1);
        print_r($array);
    $num=count($array);
        
    for($i=0; $i<$num; $i++){
        $sql1="SELECT meal.name, meal.instruction, meal.time, meal.portion, meal.kсal, meal.photo, type.type
FROM meal
INNER JOIN type ON meal.typeID = type.typeID WHERE type.typeID='".$_POST["ID"]."';";
        $results = $conn->query($sql1);
        if ($results->num_rows > 0) { 
    while($rows = $results->fetch_assoc()) {
        if ($array[$i]==$rows["name"]){
        echo "<table><tr><td>" . $rows["name"]. "</td>
        <td>" . $rows["instruction"]. "</td>
        <td> " . $rows["time"]. "</td>
        <td> " . $rows["portion"]. "</td>
        <td> " . $rows["kсal"]. "</td>
        <td><img alt='photo' width='142' height='78' src='data:image/jpeg;base64,".base64_encode($rows["photo"])."'/></td>
        <td> " . $rows["type"]. "</td></tr>";
    }}
    echo "</table>";}}
   
$conn->close();
?>
    </body>
</html>

