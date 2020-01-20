<?php require_once './connect.php'?>
<?php $connection = DB()?>
<?php

//SQL command
$sql = "INSERT INTO users2 (firstname, lastname, address, email, postalcode) 
        VALUES ('Sunny', 'Sunner', 'SUN', 'sun@gmail.com',' 54678')";


// take query to $result
$result = mysqli_query($connection,$sql);

// check done or not
    if ($result){
        echo "OK insert DONE";
    }else{
        echo "Check your Code ASSHOLE  <br>" .mysqli_error($connection);
    }


mysqli_close($connection);
?>