<?php
session_start();
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css" type="text/css">
    <link rel="stylesheet" href="bren/side_bar.css" type="text/css">

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
<div class="content_page">
    <?php
    $_SESSION["count"]=1;
    $_SESSION["selected"] = "none";
    if (isset($_SESSION["count"])){
        echo "Session is Set";
        echo $_SESSION["count"];
    }else{
        echo "Session is not set";
    }
    ?>
</div>

</body>
</html>