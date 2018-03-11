<HTML>
<HEAD>
<TITLE>List of Employees</TITLE>
<SCRIPT TYPE="text/javascript">
	function Del()
	  {
	     var confirmDel = confirm("Are you sure?");

	     if (confirmDel==true)//the user pressed the ok button
	     {
	     	return true;
	     }
	     else
	     {
	     	return false;
	     }
	  }
</SCRIPT>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bren/side_bar.css" type="text/css">
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
        .glyphicon-pencil{
            font-size: medium;
        }
        .form-control{
            height: 25px;
        }
        .search_button{
            padding: 2px 10px;
        }
    </style>
</HEAD>
<BODY>

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

    <FORM class="form-inline" NAME="searchArea" METHOD="POST" ACTION="">
                <div class="form-group">
                    <Label>Search by Last name:</Label>
                    <INPUT class="form-control form-control-xs mb-2 mr-sm-2" TYPE="text" ID="txtSearchLN" NAME="txtSearchLN">
                </div>
        <INPUT class="btn btn-primary search_button" TYPE="submit" VALUE=" Search ">
    </FORM>

    <TABLE class="table">
        <TR class="headers">
            <TD>Remove</TD>
            <TD>Edit</TD>
            <TD>ID Number</TD>
            <TD>Last Name</TD>
            <TD>First Name</TD>
            <TD>Address</TD>
            <TD>Age</TD>
            <TD>Department</TD>
            <TD>Email</TD>
            <TD>Gender</TD>
        </TR>
        <?php
        include 'connect.php';

        if (!isset($_POST['txtSearchLN']))
        {
            $_POST['txtSearchLN'] = "undefined";
        }

        $searchLN = $_POST['txtSearchLN'];

        if ($searchLN=="undefined")
        {
            $SQL = mysqli_query($con,"SELECT * FROM employee ORDER BY Emp_LN");

        }
        else
        {
            $SQL=mysqli_query($con,"SELECT * FROM employee WHERE Emp_LN LIKE '$searchLN%'");
        }
        while($row=mysqli_fetch_array($SQL))
        {
        ?><!--end of first php -->
        <TR>
            <TD ALIGN="CENTER"><a onclick="return Del()" href="delete_employee.php?SID=<?php echo $row['Employee_ID']; ?>"><span class="glyphicon glyphicon-remove"></span></a></TD>
            <TD ALIGN="CENTER"><a href="editrec.php?SID=<?php echo $row['Employee_ID']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></TD>
            <TD><?php echo $row['Employee_ID']; ?></TD>
            <TD><?php echo $row['Emp_LN']; ?></TD>
            <TD><?php echo $row['Emp_FN']; ?></TD>
            <TD><?php echo $row['Emp_Address']; ?></TD>
            <TD><?php echo $row['Emp_Age']; ?></TD>
            <TD><?php echo $row['Emp_Department']; ?></TD>
            <TD><?php echo $row['Emp_Email']; ?></TD>
            <TD><?php echo $row['Emp_Gender']; ?></TD>
        </TR>
        <?php //open of second php
        }//close of while
        mysqli_close($con);
        ?><!-- close of second php -->
    </TABLE>
    <font size="4" face="arial"  color="blue">
        <?php
        include 'connect.php';

        $result = mysqli_query($con,"SELECT * FROM employee ");
        $rows = mysqli_num_rows($result);
        echo "<br>";
        echo "There are " . $rows . " record(s) in the table. ";
        mysqli_close($con);
        ?>
    </font>
    <br><a href="addemp.php">Add another employee</a></br>
</div>





</BODY>
</HTML>
