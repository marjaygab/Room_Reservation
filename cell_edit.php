<?php
/**
 * Created by PhpStorm.
 * User: Marjay
 * Date: 3/11/2018
 * Time: 10:57 PM
 */
session_start();
$_SESSION["previous"] = $_SESSION["selected"];
$_SESSION["selected"] = $_GET["SID"];
echo $_SESSION["selected"];
if($_SESSION["previous"] == $_SESSION["selected"]){
    $_SESSION["count"] += 1;
}

if($_SESSION["count"] == 3) {
    $_SESSION["count"] = 1;
//save
}
else if ($_SESSION["count"] == 2){
//set editable
    $_SESSION["classname"] = '.cell'.$_SESSION["selected"];
    header('location:schedtable.php');
}
else{
    header('location:schedtable.php');
}


?>