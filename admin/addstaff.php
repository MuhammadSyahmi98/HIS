<?php

/**
 * !This method to get data from form
 */
if (isset($_POST['add'])) {

	$staff_name = $_POST['staff_name'];
	$staff_email = $_POST['staff_email'];
	$staff_phone = $_POST['staff_phone'];
	$staff_DOB = $_POST['staff_DOB'];
	$staff_ic = $_POST['staff_ic'];
	$staff_sex = $_POST['staff_sex'];
	$staff_race = $_POST['staff_race'];
	$staff_nationality = $_POST['staff_nationality'];
	$staff_address = $_POST['staff_address'];

	//login staff
	$staff_username = $_POST['staff_username'];
	$staff_password = $_POST['password'];



	/**
	 * TODO: Check if not empty add data into database
	 * else display error
	 */

	if (true) {
		// Insert patient
		$stmt = $conn->prepare("INSERT INTO staff (staff_name, staff_email, staff_phone, staff_dob, staff_ic, staff_sex, staff_race, staff_address, staff_nationality, staff_username, staff_password, staff_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssi", $staff_name, $staff_email, $staff_phone, $staff_DOB, $staff_ic, $staff_sex, $staff_race, $staff_address, $staff_nationality, $staff_username, $staff_password, 5);
		$stmt->execute();

		echo "<script>alert('Success add staff');
				window.location.href='?staffmanagement';
				</script>";
		// echo $stmt->error;
	}
}







if (isset($_GET['addstaff'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?staffmanagement" class="active1"><i class="fas fa-users"></i><span style="margin-left: 10px;">Staff Management</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%;
							margin-left: 10px;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding-top: 10px;
							padding-bottom: 10px;">
			<div class="container-xl" style="padding-top: 10px;">
				<h2><b>Register</b> Staff</h2>
				<hr>
				<form method="POST">
					<br>
					<h4><b>Personal Details</b></h4><br>
					<div class="form-group">
						<label for="name">Fullname</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="staff_name" required>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="email">Email</label>
							<input name="staff_email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="phonenumber">Phone Number</label>
							<input name="staff_phone" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" required>
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="dob">Date Of Birth</label>
							<input name="staff_DOB" type="date" class="form-control" id="name" required>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="icnumber">IC Number</label>
							<input name="staff_ic" type="number" class="form-control" id="name" placeholder="Enter IC Number" required>
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="sex">Sex</label>
							<input name="staff_sex" type="text" class="form-control" id="sex" placeholder="Enter Sex" required>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="race">Race</label>
							<input name="staff_race" type="text" class="form-control" id="race" placeholder="Enter race" required>
						</div>
					</div>
					<div class="form-group">
						<label for="nationality">Nationality</label>
						<input name="staff_nationality" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" required>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input name="staff_address" type="text" class="form-control" id="address" placeholder="Enter Address" required>
					</div>
					<hr>

					<br>
					<h4><b>Login Details</b></h4><br>
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Username" name="staff_username" required>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="repassword">Re-enter Password</label>
							<input name="repassword" type="password" class="form-control" id="repassword" placeholder="Re-enter Password" required>
							<span id='message'></span>
						</div>
					</div>
					<hr>
					<center>
						<button name="add" type="submit" class="btn btn-primary sign-up-btn" style="width: 100%">Register</button>
					</center>
				</form>
			</div>
		</div>
	</div>

<?php
}



?>