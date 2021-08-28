<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
</head>

<form name="StudentRegistration" method="post" action="reg.php">
<table width="20%"  align="center" cellspacing="2">
	<tr>
		<td colspan=2>
		<center><font size=5><b>Student Registration Form</b></font></center>
	 	</td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  size="30"></td>
	</tr>
	<tr>
		<td>Father Name</td>
		<td><input type="text" name="fname" size="30"></td>
	</tr>
	<tr>
  		<td>Address</td>
  		<td><input type="text" name="address"  size="30"></td>
  	</tr>
	<tr>
  		<td>Gender</td>
  		<td><input type="radio" name="gender" value="male" size="10">Male
  		<input type="radio" name="gender" value="Female" size="10">Female</td>
  	</tr>
  	<tr>
		<td>State</td>
		<td><select Name="state">
		<option value="NULL" selected>select..</option>
		<option value="Raj">Rajasthan</option>
		<option value="Guj">Gujrat</option>
		<option value="Har">Haryana</option>
		<option value="Bih">Bihar</option>
		</select></td>
	</tr>
	<tr>
		<td>City</td>
		<td><select name="city">
		<option value="NULL" selected>select..</option>
		<option value="jodhpur">Jodhpur</option>
		<option value="vadodara">Vadodara</option>
		<option value="sonipat">Sonipat</option>
		<option value="jaipur">Jaipur</option>
		</select></td>
	</tr>
	<tr>
		<td>Course</td>
		<td><select name="course">
		<option value="NULL" selected>select..</option>
		<option value="B.Tech">B.Tech</option>
		<option value="M.Tech">M.Tech</option>
		<option value="LLB">LLB</option>
		<option value="BCA">BCA</option>
		</select></td>
	</tr>
	<tr>
		<td>EmailId</td>
		<td><input type="text" name="email"  size="30"></td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="text" name="dob"  size="30"></td>
	</tr>
	<tr>
		<td>MobileNo</td>
		<td><input type="text" name="mob"  size="30"></td>
	</tr>
	<tr>
		<td><input type="Submit" value="Submit Form" /></td>
	</tr>

</table>
<a style="align: center" href="studentDetails.php">Click Here For Student Details</a>
</form>



</body>
</html>