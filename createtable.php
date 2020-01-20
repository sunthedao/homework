<?php require_once './connect.php' ?>
<?php $connection = DB() ?>

<?php

$sql = "CREATE TABLE Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(30) NOT NULL,
    Lastname VARCHAR(30) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    MobileNo INT(10) NOT NULL,
    Address VARCHAR(50) NOT NULL)";

    if(mysqli_query($connection,$sql)) {
        echo "Create table sucuessfully";
    }else {
        echo "Error to Creating ur table: " . mysqli_error($conn);
    }

    mysqli_close($connection);

?>
