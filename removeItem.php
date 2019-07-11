<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/8/2019
 * Time: 4:42 PM
 */
?>
<?php
$json=file_get_contents("php://input");
$item=json_decode($json,"true");
$itemid=$item[0]['value'];

include 'DB-Connection.php';

if (!$connection){
    echo mysqli_connect_error();
}else{
    $sql="delete from item where iid='$itemid'";
    $result=mysqli_query($connection,$sql);
    if ($result && mysqli_affected_rows($connection)>0){
        echo 'item deleted';
    }else{
        echo 'not deleted',"<br>",
        mysqli_error($connection);
    }
    mysqli_close($connection);
}

