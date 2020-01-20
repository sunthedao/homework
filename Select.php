<?php require_once './connect.php'; ?>
<?php $connection = DB()?>
<?php 

//คำสั่ง SQL
$sql = "SELECT * FROM users ";

// query ข้อมูลมาเก็บในตัวแปร
$result = mysqli_query($connection, $sql);

$r = $result;

//เช็คว่ามีข้อมูลกี่ row
if (mysqli_num_rows($result) > 0) {
    
    // วนลูป เอาข้อมูลออกมา
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " lastname: " .$row["lastname"]. " | Email :" . $row["email"]. " postalcode :" .$row["postalcode"].  "<br>";
    }

} else {
    echo "0 results";
}
print_r($r);

mysqli_close($connection);
?>