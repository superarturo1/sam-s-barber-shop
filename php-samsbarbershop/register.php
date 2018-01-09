<?php 
	$title='Register | Sams Barber Shop';
	$description='Register with Sams Barber Shop.';
	$keywords='haircuts, beard trims, line-ups, hair graphics';
	include_once "includes/header.php";
?>
<main id="register">
	<h1 id="register-title">Register</h1> 
	<form method="post" name="myform" action="register.php"  onsubmit="return validateForm()">
		<ul>
			<li class="title">Who Are You?</li>
			<li class="fields">
			<label>*First Name:</label><br />
			<input name="first_name" id="first_name" class="req" type="text"/>
			<label>Middle Name:</label>
			<input name="middle_name" id="middle_name" type="text"/>
			<label>Last Name:</label><br />
			<input name="last_name" id="last_name" type="text"/>
			<label>*Email:</label><br />
			<input name="email" id="email" class="req" type="text"/>
			</li>
			<li class="title">Where Are You?</li>
			<li class="fields">
				<label>City:</label>
				<input  class="tricky-inputs" name="city" id="city" type="text"/><br>
				<label class="trickylabels">State:</label>  
				<select type="text" name="state">
	<?php
	$res=mysqli_query($link, "select * from states");
	while($row=mysqli_fetch_array($res))
	{
	?>
	<option class="tricky-options"> <?php echo $row["Name"];?></option>
	<?php
	}
	?>
	</select><br>
			<label class="trickylabels">Country:</label>
			<select type="text" name="country">
	<?php
	$res=mysqli_query($link, "select * from countries");
	while($row=mysqli_fetch_array($res))
	{
	?>
	<option class="tricky-options" value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
	<?php
	}
	?>
				</select>
			</li>
	<li class="title">What Do You Do?</li>
	<li class="fields">
		<label>
		*Occupation:</label>
		<input name="occupation" id="occupation" class="req" type="text"/>
		<label>Company:</label>
		<input name="company" type="text"/>
		<label>Company Location:</label>
		<input name="location" type="text"/>
	</li>
</ul>
<input name="submit" id ="submitbutton" type="submit" value="Submit Form"/>
</form>
<?php
mysql_connect("localhost", "admin", "adminpassword1!") or die("not connected");
mysql_select_db("login") or die("no db found");
if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$occupation = $_POST['occupation'];
	$company = $_POST['company'];
	$location = $_POST['location'];
	$query = "insert into User_Submitted_Self_Info ( First_Name, Middle_Name, Last_Name, Email, City, State, Country, Occupation, Company, Company_Location) values ('$first_name', '$middle_name', '$last_name', '$email', '$city', '$state', '$country', '$occupation', '$company', '$location')";
	if(mysql_query($query))
	{
		echo "Your information is inserted successfully into our database.  ";
	}
}
?>
</main>
<?php 
	
	include_once "includes/footer.php";
?>