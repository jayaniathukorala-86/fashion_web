<!DOCTYPE html>
<html>
<head>
	<title>Add Employee Information</title>
</head>
<center>
	<font color="black" size="4" style="font-family: avenir">

		<h1 style="color: DodgerBlue">Add new employee</h1>

		<body bgcolor="lightgrey">

			<form action="/emp_list" autocomplete="on" method = "POST" enctype="multipart/form-data">

				<button type="submit" formaction="/getemp" style="background: grey; height: 45px; width: 200px; color:white; font:oblique;">GET EMPLOYEE INFORMATION</button><br><br>

		  		Employee ID:<br> <input style="height:25px;font-size:14pt; color:grey;" type="number" name="emp_id" autofocus size="40"><br><br>

		  		First Name:<br> <input style="height:25px;font-size:14pt;color:grey;" type="text" name="first_name" ><br><br>

		  		Last Name:<br> <input style="height:25px;font-size:14pt;color:grey;" type="text" name="last_name"><br><br>

		  		Primary Skills:<br> <input style="height:25px;font-size:14pt;color:grey;" type="text" name="pri_skill"><br><br>

		  		Location:<br> <input style="height:25px;font-size:14pt;color:grey;" type="text" name="location"><br><br>

		  		Image: <input type=file name="emp_image_file" style="height:25px;font-size:14pt;color:grey;"> <br><br>

		  		<button type="submit" style="background: grey; height: 45px; width: 200px; color: white; size: 5; font:oblique;">UPDATE DATABASE</button>

			</form>
		</body>

	</font>
</center>
</html>