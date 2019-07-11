<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/29/2019
 * Time: 4:30 PM
 */
?>
<?php
$json=file_get_contents("php://input");
$customers=json_decode($json,true);

$customerID=$customers[0]['value'];
$customerName=$customers[1]['value'];
$customerAddress=$customers[2]['value'];
$customerClimit=$customers[3]['value'];

include 'DB-Connection.php';

if (!$connection){
    echo mysqli_connect_error();
}else{
    $sql="insert into customer values 
          ('$customerID',
          '$customerName',
          '$customerAddress',
          '$customerClimit')";
    $resultSet=mysqli_query($connection,$sql);
    if ($resultSet){
        echo "customer has been Aded ok";
    }else{
        echo "error","<br>",
        mysqli_error($connection);

    }
}

?>

