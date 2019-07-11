<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/30/2019
 * Time: 8:59 AM
 */
?>
<?php

$json=file_get_contents("php://input");
$customers=json_decode($json,"true");

$custID=$customers[0]['value'];
$custName=$customers[1]['value'];
$custAddress=$customers[2]['value'];
$cLimit=$customers[3]['value'];

include 'DB-Connection.php';

if (!$connection){
    echo mysqli_connect_error();
}else{
    $sql="update customer set name='$custName',address='$custAddress',climit='$cLimit' where cid='$custID'";
    $resultSet=mysqli_query($connection,$sql);
    if ($resultSet && mysqli_affected_rows($connection) >0){
        echo "customer updated";
    }else{
        echo "update Error","<br>",
        mysqli_error($connection);
    }
    mysqli_close($connection);
}