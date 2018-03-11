<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bren/side_bar.css" type="text/css">
<title>list of schedules</title>
<style>
    .table{
        width: 30%;
        margin: 0 auto;
    }
    .container{
        margin-top: 10%;
        text-align: center;
    }
    .headers{
        text-align: center;
        font-size: medium;
    }
    td{
        font-size: small;
    }
    .glyphicon-remove{
        color: #ff572d;
        font-size: medium;
    }
    .glyphicon-pencil,.glyphicon-floppy-disk{
        font-size: medium;
    }
    .table_cell{
        background: transparent;
        border: none;
    }
    <?php echo ($_SESSION["count"]==2) ? $_SESSION["classname"].'{background:white;border:1px solid;}' : ''?>
    #room_id{
        width: 50px;
    }
    #emp_id{
        width: 80px;
    }
</style>
<script type="text/javascript">
	function del()
	  {
	     var confirmdel = confirm("are you sure?");

	     if (confirmdel==true)//the user pressed the ok button
	     {
	     	return true;
	     }
	     else
	     {
	     	return false;
	     }
	  }
</script>
</head>
<body>

<?php
if (isset($_SESSION["count"])){
    echo "".$_SESSION["count"];
}else{
    echo "Session is not set";
}
?>

<div class="sidebar">
    <ul>
        <li><a href="homepage.php"><span class="glyphicon glyphicon-cloud"></span><span class="menu_label">home</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span><span class="menu_label">about</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="menu_label">reservations</span></a></li>
        <li><a href="employees.php"><span class="glyphicon glyphicon-user"></span><span class="menu_label">accounts</span></a></li>
        <li><a href="schedtable.php"><span class="glyphicon glyphicon-list"></span><span class="menu_label">manage</span></a></li>
    </ul>
</div>

<div class="container">
        <table class="table">
            <tr class="headers">
                <td>Remove</td>
                <td>Edit</td>
                <td>Reservation ID</td>
                <td>Room ID</td>
                <td>Employee ID</td>
                <td>Time In</td>
                <td>Time Out</td>
                <td>Date</td>
                <td>Unique Code</td>
                <td>Status</td>
            </tr>
            <?php
            include 'connect.php';

            $sql ="select * from tbl_sched order by id";
            $res = mysqli_query($con, $sql);
            while($row= mysqli_fetch_array($res))
            {
            ?><!--end of first php -->
            <tr>
                <td align="center"><a onclick="return Del()" href="delsched.php?SID=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
<!--                <td align="center"><a href="editsched.php?SID=--><?php //echo $row['id']; ?><!--"><span class="glyphicon glyphicon-pencil"></span></a></td>-->
                <td align="center"><a href="cell_edit.php?SID=<?php echo $row['id']; ?>"><span class=<?php echo ($_SESSION["count"]==2 && $_SESSION["selected"]==$row['id']) ? "'glyphicon glyphicon-floppy-disk'" : "'glyphicon glyphicon-pencil'"?>></span></a></td>
                <td><?php echo $row['id']; ?></td>
                <td><input class="<?php echo 'cell'.$row['id']?> table_cell" name="room_id" id="room_id" value=<?php echo $row['room_id']; ?> <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>> </td>
                <td><input class="table_cell <?php echo 'cell'.$row['id']?>" name="emp_id" id="emp_id" value=<?php echo $row['emp_id']; ?>  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
                <td><input type="time" class="table_cell <?php echo 'cell'.$row['id']?>" name="time_in" value="<?php echo $row['time_in']; ?>"  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
                <td><input type="time" class="table_cell <?php echo 'cell'.$row['id']?>" name="time_out" value=<?php echo $row['time_out']; ?>  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
                <td><input type="date" class="table_cell <?php echo 'cell'.$row['id']?>" name="date" value=<?php echo $row['date']; ?>  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
                <td><input type="text" class="table_cell <?php echo 'cell'.$row['id']?>" name="unique" id="unique" value=<?php echo $row['u_code']; ?>  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
                <td><input type="checkbox" class="table_cell <?php echo 'cell'.$row['id']?>" name="status" <?php echo ($row['Status'] == TRUE) ? "checked" : "";?>  <?php echo ($_SESSION["count"]<=1) ? "readonly" : ""?>></td>
            </tr>

            <?php //open of second php
            }//close of while


            mysqli_close($con);



            ?><!-- close of second php -->
        </table>
        <a href="addsched.php">add new schedule</a></br>
        <font size="4" face="arial"  color="blue">
            <?php
            include 'connect.php';

            $result = mysqli_query($con,"select * from tbl_sched");
            $rows = mysqli_num_rows($result);
            echo "<br>";
            echo "there are " . $rows . " record(s) in the table. ";
            mysqli_close($con);
            ?>
        </font>
</div>
</body>
</html>