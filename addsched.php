<html><head><title>add new schedule</title></head>
<body>
<center>
<form name="addsched" method="post" action="add.php">
<table border=1 width=25%>
	<tr>
		<td colspan=2 align="center">add new schedule</td>
	</tr>
	<tr>
		<td>id:</td>
		<td><input type="text" name="txtid" id="txtid"></td>
	</tr>
	<tr>
		<td>room id:</td>
		<td><input type="text" name="txtrid" id="txtrid"></td>
	</tr>
	<tr>
		<td>employee id:</td>
		<td><input type="text" name="txteid" id="txteid"></td>
	</tr>
	<tr>
		<td>time in:</td>
		<td><input type="time" name="txtti" id="txtti"></td>
	</tr>
	<tr>
		<td>time out:</td>
		<td><input type="time" name="txtto" id="txtto"></td>
	</tr>
	<tr>
		<td>date:</td>
		<td><input type="date" name="txtd" id="txtd"></td>
	</tr>
        <tr>
		<td>unique code:</td>
		<td><input type="text" name="txtuc" id="txtuc"></td>
	</tr>
	<tr>
		<td colspan=2 align="center">
		<input type="submit" value="save">
		<input type="reset" value="clear">
		</td>
	</tr>

</table>
</form>
</center>
</body>
</html>