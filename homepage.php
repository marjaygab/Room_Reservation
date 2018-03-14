<?php
session_start();
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css" type="text/css">
    <link rel="stylesheet" href="bren/side_bar.css" type="text/css">
    <style>
        .jumbotron{
            margin-top: 5%;
        }
        .overview_active{
            width: 25%;
            height: 35%;
            background: #ff7a24;
            color: #fff;
            padding: 40px 20px 10px 20px;
            text-align: center;
            padding-top:40px;
            margin-top: 0;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <ul>
        <li><a href="homepage.php"><span class="glyphicon glyphicon-cloud"></span><span class="menu_label">Home</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span><span class="menu_label">About</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="menu_label">Reservations</span></a></li>
        <li><a href="employees.php"><span class="glyphicon glyphicon-user"></span><span class="menu_label">Accounts</span></a></li>
        <li><a href="schedtable.php"><span class="glyphicon glyphicon-list"></span><span class="menu_label">Manage</span></a></li>
    </ul>
</div>
<div class="container">
    <div class="jumbotron">
        <h1>Reseroom App</h1>
        <p>Together with the Smart Reservation Tool (SMART), you can have no worries in booking reservations for a specific room in your organization.</p>
        <p>Just click <a href="#">here</a> to reserve!</p>
    </div>
    <div class="row">
        <div class="jumbotron overview_active col-md-3">
            <h1>4/10</h1>
            <p>rooms are reserved</p>
        </div>
        <div class="table_view col-md-9">
            <table class="table">
                <tr class="headers">
                    <td>Room ID</td>
                    <td>Employee ID</td>
                    <td>Time In</td>
                    <td>Time Out</td>
                    <td>Date</td>
                    <td>Status</td>
                </tr>
<!--                dito niyo lagay yung magdidisplay ng ACTIVE reserved na reservations-->
            </table>
<!--            dito niyo ilagay yung part na magnenext-->
        </div>
    </div>
</div>

</body>
</html>