<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/26/2019
 * Time: 3:58 PM
 */
?>
<?php
include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
$resultset = mysqli_query($connection, "SELECT * FROM item");
?>
<?php
include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
$result = mysqli_query($connection, "SELECT * FROM customer");
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invoice</title>
    <link rel="stylesheet"href="css/bootstrap.css">
    <link rel="stylesheet"href="js/bootstrap.js">
    <link rel="stylesheet" href="css/myStyke.css"/>
    <script src="js/bootstrap.js"></script>
    <script></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Exercise - 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Anton&display=swap');
        #slide{
            height: 670px;
            width: 20%;
            background-color: #23272b;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <div class="row" style="background-color: #17a2b8">
            <div class="col-md-4" style="font-size: 40px;font-family: 'Anton', sans-serif;"><i class="fas fa-smile-beam"style="padding:15px"></i>POS System</div>
            <div class="col-md-8"><a class="nav-link active text-dark font-weight-bold" href="index.php" style="left:-200px;position: absolute;top: 10px">Dashboard</a></div>
        </div>
    </div>
    <div class="row" id="slide">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav flex-column">
                        <li class="nav-item" id="nav1">
                            <a class="nav-link active" href="customer.php"><img src="images/Customer_48px.png" height="48" width="48"/>Customer</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="item.php"><img src="images/Ingredients_48px.png" height="48" width="48"/>Item</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="invoice.php"><img src="images/Purchase Order_48px.png" height="48" width="48"/>Order</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="orderview.php"><img src="images/Supplier_50px.png" height="50" width="50"/>Order View</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
    <div class="col-md-8 ">
        <form action="" id="formOrder" method="post" enctype="application/x-www-form-urlencoded">
        <div class="col-md-12">
            <div id="content">

                    <table>
                        <tr>
                            <td>
                                <label>Select ItemID</label>
                                <select class="form-control" name="txtItemID">
                                    <?php
                                    while ($rowData = mysqli_fetch_row($resultset)) {
                                        echo "<option value=\"$rowData[0]\">$rowData[0]</option>";
                                    }

                                    mysqli_free_result($resultset);

                                    mysqli_close($connection);
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <label>Item Name</label>
                                <input type="text" class="form-control col-md-12" name="txtItemName">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>UPrice</label>
                                <input type="text" class="form-control col-md-12" name="txtUprice">
                            </td>
                            <td>
                                <label>Qty</label>
                                <input type="text" class="form-control col-md-12" name="txtQty">
                            </td>
                        </tr>
                    </table>

            </div>

        </div>
        <div class="col-md-4"style="right: 0px;position: absolute;top: 0px">
                <table>
                    <tr >
                        <td>
                            <label>Order ID</label>
                            <input type="text" class="form-control col-12" name="txtOrderID">
                        </td>
                        <td>
                            <label>Customer ID</label>
                            <select class="form-control" name="txtCustomerID">
                                <?php
                                while ($rowData = mysqli_fetch_row($result)) {
                                    echo "<option value=\"$rowData[0]\">$rowData[0]</option>";
                                }

                                mysqli_free_result($resultset);

                                mysqli_close($connection);
                                }
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>date</label>
                            <input type="text" class="form-control col-12" name="txtDate">
                        </td>
                        <td>
                            <label>price</label>
                            <input type="text" class="form-control col-12" name="txtprice">
                        </td>
                    </tr>
                </table>

        </div>
        </form>
    </div>
    <div class="col-md-12" style="bottom: 150px;position: absolute;left: 120px">
        <div class="container" style="left: 10%;top: 25%">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Item Code</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Qty</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <div style="bottom: 0px;left: 50%;font-size: 30px"><label>Sub Total:<sup>Rs</sup>00000.00</label></div>
            <div style="right: 450px;position: absolute;top: 170px">
                <!--<div style="top: -25%"><label>Sub Total:<sup>Rs</sup>00000.00</label></div>-->
                <label>Discount</label>
                <input type="text" class="form-control col-md-12">
                <label>Payment</label>
                <input type="text" class="form-control col-md-12">
                <label>Balance</label>
                <input type="text" class="form-control col-md-12">

                <button class=" btn btn-danger col-md-6"style="right: -150px;position: absolute;top: 170px" id="btnProceed">Proceed</button>

                <button class="btn btn-primary col-md-6"style="right: -270px;position: absolute;top: 170px">clear</button>
            </div>

        </div>
    </div>

</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/orderJS.js"></script>

</body>
</html>
