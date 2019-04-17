<?php
	/* Template Name: Custom Registration Template */

	get_header();
	global $wpdb;

	if ($_POST) 
	{
		$first=$wpdb->escape($_POST['first']);
		$last=$wpdb->escape($_POST['last']);
		$email=$wpdb->escape($_POST['email']);
		$uid=$wpdb->escape($_POST['uid']);
		$pwd=$wpdb->escape($_POST['pwd']);
		$age=$wpdb->escape($_POST['age']);
		$coursename=$wpdb->escape($_POST['coursename']);
		$institute=$wpdb->escape($_POST['institute']);
		$bdate=$wpdb->escape($_POST['bdate']);
		$gender=$wpdb->escape($_POST['gender']);
		$country=$wpdb->escape($_POST['country']);
		$CV=$wpdb->escape($_POST['CV']);
		$dept=$wpdb->escape($_POST['dept']);
		$semester=$wpdb->escape($_POST['semester']);

		$error = array();
		if (strpos($uid, ' ')!== FALSE) {
			$error['uid_space'] = "Username has Space";
		}
		if (empty($uid)) {
			$error['uid_empty'] = "Needed Username must";
		}

		if (username_exists($uid)) {
			$error['uid_exists'] = "username already exists";
		}
		if (!is_email($email)) {
			$error['email_valid'] = "email has no valid value";
		}
		if (email_exists($email)) {
			$error['email_existence'] = "Email already exists";
		}
		//if(strcmp($password, $Confpassword))
		if(count($error) == 0)
		{
			wp_create_user($uid,$pwd,$email);
			echo "User Created Successfully";
			exit();
		}
		else
		{
			print_r($error);
		}
	}

?>

<section class="main-container">
	<div class="main-wrapper"></div>
	<h2>Signup</h2>
	<form class="signup-form" method="POST">
		<input type="text" name="first" placeholder="Firstname">
		<input type="text" name="last" placeholder="Lastname">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="uid" placeholder="Username">
		<input type="password" name="pwd" placeholder="Password">
		<input type="number" name="age" value="" min="15" max="30" placeholder="Enter Your Age">
		<select name="coursename" >
			<option selected>BSc Engg</option>
			<option>Higher Diploma</option>
		</select>
		<select name="institute" >
			<option selected>IUT</option>
			<option>BUET</option>
			<option>DU</option>
		</select>
		<input type="date" name="bdate" placeholder="BirthDate">
		<input type="radio" name="gender" value="male" checked>Male
		<input type="radio" name="gender" value="female">Female
		<select name="country">
			<option>USA</option>
			<option selected>Bangladesh</option>
			<option>Nigeria</option>
			<option>Afghanistan</option>
			<option>Pakistan</option>
			<option>Cameroon</option>
			<option>Saudi Arabia</option>
		</select>
		<input type="file" name="CV">
		<select name="dept" >
			<option selected>CSE</option>
			<option>EEE</option>
			<option>MCE</option>
			<option>CEE</option>
		</select>
		<select name="semester" >
			<option selected>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>

		</select>
		<button type="submit" name="submit" placeholder="">Sign Up</button>
	</form>
</section>

<?php
	get_footer();
?>