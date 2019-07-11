<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/7/2019
 * Time: 2:08 PM
 */
?>
<?php
$json=file_get_contents("php://input");
$items=json_decode($json,"true");

$txtItmID=$items[0]['value'];
$txtItmName=$items[1]['value'];
$txtUPrice=$items[2]['value'];
$txtQty=$items[3]['value'];
//$itemID=$_POST['txtItmID'];
//$itemName=$_POST['txtItmName'];
//$unitPrice=$_POST['txtUPrice'];
//$qty=$_POST['Qty'];

include 'DB-Connection.php';

if (!$connection){
    echo mysqli_connect_error();
}else{
    $sql="insert into item values ('$txtItmID','$txtItmName','$txtUPrice','$txtQty')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        echo "item has been added ok";
    }else{
        echo "error","<br>",
        mysqli_close($connection);

    }
}
