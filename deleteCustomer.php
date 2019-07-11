<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/30/2019
 * Time: 10:44 AM
 */
?>
<?php
$json=file_get_contents("php://input");
$customers=json_decode($json,"true");

$custID=$customers[0]['value'];

include 'DB-Connection.php';

if (!$connection){
    echo mysqli_connect_error();
}else{
    $SQL ="delete from customer where cid='$custID'";
    $resultSet=mysqli_query($connection,$SQL);
    if ($resultSet && mysqli_affected_rows($connection) >0){
        echo "customer deleted";
    }else{
        echo "customer delete Error","<br>",
        mysqli_error($connection);

    }
    mysqli_close($connection);
}
