
<?php require_once __DIR__ .'/../connect.php' ?> 
<?php 
header("Content-Type","application/json") ?>

 <?php $connection = DB() ?>
<?php

$sql = "SELECT * from users";
$rows = array();
$result = mysqli_query($connection,$sql);

// check row
if (mysqli_num_rows($result)>0){

    // loop for data
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
}else 
{
 echo "result = 0 , go check ur COde";
 } 

 echo json_encode($rows);


 
 
 mysqli_close($connection);
?>





