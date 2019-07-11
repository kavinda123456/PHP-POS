<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/26/2019
 * Time: 3:55 PM
 */
?>
<?php
include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
    $SQL= "select * from item";
    $resultset = mysqli_query($connection,$SQL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customer</title>
    <link rel="stylesheet"href="css/bootstrap.css">
    <link rel="stylesheet"href="js/bootstrap.js">
    <link rel="stylesheet" href="css/myStyke.css"/>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
                    <form>
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
                    </form>


                </div>
            </div>

        </div>

    </div>
    <div class="col-md-8">
        <div class="col-md-12">
            <div id="content">
                <form id="itemForm">
                    <label>Item ID</label>
                    <input type="text" class="form-control col-md-7" name="txtCusID" placeholder="Enter ID">
                    <label>Item Name</label>
                    <input type="text" class="form-control col-md-7"name="txtCusName" placeholder="Enter Name">
                    <label>Unit Price</label>
                    <input type="text" class="form-control col-md-7"name="txtCusAddress"placeholder="Enter Address">
                    <label>QTY</label>
                    <input type="text" class="form-control col-md-7"name="txtClimit"placeholder="Enter C-Limit">
                    <br>
                </form>
            </div>

        </div>
        <div class="col-md-12">
            <div class="btn-group-lg" style="bottom:-20px;position: absolute;right: 0px;">
                <button class="btn btn-danger col-md-12"style="margin-bottom: 10px" type="button" id="btnAdd">Add</button>
                <br>
                <button class="btn btn-primary col-md-12"style="margin-bottom: 10px"type="button" id="btnUpdate">Update</button>
                <br>
                <button class="btn btn-success col-md-12"style="margin-bottom: 10px"type="button" id="btnDelete">Delete</button>
                <br>
                <button class="btn btn-secondary col-md-12"style="margin-bottom: 10px"type="button" id="btnRefresh">Refresh</button>

            </div>
        </div>
    </div>
    <div class="col-md-12" style="bottom: 40px;position: absolute;left: 120px">
        <div class="container" style="left: 10%;top: 25%">
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col"class="text-white">Item ID</th>
                    <th scope="col"class="text-white">Item Name</th>
                    <th scope="col"class="text-white">Unit Price</th>
                    <th scope="col"class="text-white">QTY</th>
                </tr>
                </thead>
                <tbody>
                <?php

                while ($rowdata=mysqli_fetch_row($resultset)){
                    echo "<tr>
                            <td>$rowdata[0]</td>
                            <td>$rowdata[1]</td>
                            <td>$rowdata[2]</td>
                            <td>$rowdata[3]</td>
                      </tr>";
                }
                mysqli_close($connection);
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/itemJS.js"></script>
</body>
</html>
