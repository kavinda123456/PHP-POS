<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/9/2019
 * Time: 10:48 AM
 */
?>
<?php
$json=file_get_contents("php://input");
$items=json_decode($json,"true");

$itemID=$items[0]['value'];
$itemName=$items[1]['value'];
$uprice=$items[2]['value'];
$qty=$items[3]['value'];

include 'DB-Connection.php';

if (!$connection){
echo mysqli_connect_error();
}else{
$sql="update item set name='$itemID',uprice='$uprice',qty='$qty' where iid='$itemID'";
$resultSet=mysqli_query($connection,$sql);
if ($resultSet && mysqli_affected_rows($connection) >0){
echo "customer updated";
}else{
echo "update Error","<br>",
mysqli_error($connection);
}
mysqli_close($connection);
}
