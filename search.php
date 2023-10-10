
<?php
include "dbconn.php";
function binarySearch(Array $arr, $x)
{
    // check for empty array
    if (count($arr) === 0) return false;
    $low = -1;
    $high = count($arr);
      
    while ($low < $high-1) {
          
        // compute middle index
        $mid = floor(($low + $high) / 2);
  
        if ($x < $arr[$mid]["Dish"]) {
            // search the left side of the array
            $high = $mid;
        }
        else {
            // search the right side of the array
            $low = $mid;
        }
    }
      if($low!=-1) return $low;
    // If we reach here element x doesnt exist
    return false;
}

$value = $_POST["food"];
$array=array();
$sql="SELECT * FROM meal WHERE name='".$_POST["food"]."';" ;    
      $result = $conn->query($sql);
    if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
             $array[]=$row["name"];
         }}
$sql1="SELECT * FROM meal WHERE name='".$_POST["food"]."';" ;    
      $results = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($rows = $results->fetch_assoc()) {
        
if(binarySearch($array, $value)!=-1){
	$x = binarySearch($products, $value);
    echo $x;}}};
?>