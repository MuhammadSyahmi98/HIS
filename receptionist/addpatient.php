<?php

/**
 * !This method to get data from form
 */
if (isset($_POST['add'])) {

	// CVariable patient
	$patient_name = $_POST['patient_name'];
	$patient_email = $_POST['patient_email'];
	$patient_phone_number = $_POST['patient_phone_number'];
	$patient_BOD = $_POST['patient_DOB'];
	$patient_ic_number = $_POST['patient_ic_number'];
	$patient_sex = $_POST['patient_sex'];
	$patient_race = $_POST['patient_race'];
	$patient_blood_type = $_POST['patient_blood_type'];
	$patient_nationality = $_POST['patient_nationality'];
	$patient_address = $_POST['patient_address'];


	// CVariable family
	$family_name = $_POST['family_name'];
	$family_phone_number = $_POST['family_phone_number'];
	$family_ic_number = $_POST['family_ic_number'];
	$family_sex = $_POST['family_sex'];
	$family_race = $_POST['family_race'];
	$family_email = $_POST['family_email'];
	$family_nationality = $_POST['family_nationality'];
	$family_blood_type = $_POST['family_blood_type'];
	$family_address = $_POST['family_address'];



	// Variable insurance
	$insurance_name = $_POST['insurance_name'];
	$insurance_status = $_POST['insurance_status'];


	/**
	 * TODO: Check if not empty add data into database
	 * else display error
	 */

	if (true) {
		// Insert patient
		$stmt = $conn->prepare("INSERT INTO patient_information (patient_name, patient_email, patient_BOD, patient_ic_number, patient_sex, patient_race, patient_blood_type, patient_address, patient_nationality, patient_phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssssssss", $patient_name, $patient_email, $patient_BOD, $patient_ic_number, $patient_sex, $patient_race, $patient_blood_type, $patient_address, $patient_nationality, $patient_phone_number);
		// ;
		// echo $stmt->error;

		if ($stmt->execute()) {
			// Search user to get id
			$sql11 = "SELECT * FROM patient_information WHERE patient_ic_number = '3456786543'";

			$result11 = mysqli_query($conn, $sql11);

			if ($result11->num_rows > 0) {
				$row = $result11->fetch_assoc();
				echo $patient_id = $row['patient_PMI'];

				// Insert family
				$stmt = $conn->prepare("INSERT INTO family_information (family_name, family_phone_number, family_ic_number, family_sex, family_race, family_blood_type, family_address, family_email, family_nationality, patient_PMI) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("sssssssssi", $family_name, $family_phone_number, $family_ic_number, $family_sex, $family_race, $family_blood_type, $family_address, $family_email, $family_nationality, $patient_id);

				$stmt->execute();

				

				// Insert insurance
				$stmt = $conn->prepare("INSERT INTO insurance_information (insurance_name, insurance_status, patient_PMI) VALUES (?, ?, ?)");
				$stmt->bind_param("ssi", $insurance_name, $insurance_status, $patient_id);

				$stmt->execute();


				echo "<script>alert('Success add patient');
				window.location.href='?patient';
				</script>";
			}
		} else {
			echo $conn->error;
		}
	}
}







if (isset($_GET['addpatient'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient" class="active"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				
				<a href="?billing"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
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
				<h2><b>Register</b> Patient</h2>
				<hr>
				<form method="POST">
					<br>
					<h4><b>Patient Details</b></h4><br>
					<div class="form-group">
						<label for="name">Fullname</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="patient_name">
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="email">Email</label>
							<input name="patient_email" type="email" class="form-control" id="email" placeholder="Enter Email">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="phonenumber">Phone Number</label>
							<input name="patient_phone_number" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="dob">Date Of Birth</label>
							<input name="patient_DOB" type="date" class="form-control" id="name">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="icnumber">IC Number</label>
							<input name="patient_ic_number" type="number" class="form-control" id="name" placeholder="Enter IC Number">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="sex">Sex</label>
							<input name="patient_sex" type="text" class="form-control" id="sex" placeholder="Enter Sex">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="race">Race</label>
							<input name="patient_race" type="text" class="form-control" id="race" placeholder="Enter race">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="blood">Blood Type</label>
							<input name="patient_blood_type" type="text" class="form-control" id="blood" placeholder="Enter Blood Type">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="nationality">Nationality</label>
							<input name="patient_nationality" type="text" class="form-control" id="nationality" placeholder="Enter Nationality">
						</div>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input name="patient_address" type="text" class="form-control" id="address" placeholder="Enter Address">
					</div>
					<hr>

					<br>
					<h4><b>Family Details</b></h4><br>
					<div class="form-group">
						<label for="familyname">Family Name</label>
						<input name="family_name" type="text" class="form-control" id="familyname" placeholder="Enter Family Name">
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="familyphonenumber">Phone Number</label>
							<input name="family_phone_number" type="number" class="form-control" id="familyphonenumber" placeholder="Enter Family Phone Number">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="familyicnumber">Family IC Number</label>
							<input name="family_ic_number" type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="familysex">Sex</label>
							<input name="family_sex" type="text" class="form-control" id="sex" placeholder="Enter Sex">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="familyrace">Race</label>
							<input name="family_race" type="text" class="form-control" id="race" placeholder="Enter race">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="familyemail">Email</label>
							<input name="family_email" type="email" class="form-control" id="familyemail" placeholder="Enter Email">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="familynationality">Nationality</label>
							<input name="family_nationality" type="text" class="form-control" id="nationality" placeholder="Enter Nationality">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="familyrace">Blood Type</label>
							<input name="family_blood_type" type="text" class="form-control" id="race" placeholder="Enter blood type">
						</div>
					</div>
					<div class="form-group">
						<label for="familyaddress">Address</label>
						<input name="family_address" type="text" class="form-control" id="familyaddress" placeholder="Enter Address">
					</div>
					<hr>
					<br>
					<h4><b>Insurance Details</b></h4><br>
					<div class="form-group">
						<label for="insurancename">Insurance Name</label>
						<input name="insurance_name" type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name">
					</div>
					<div class="form-group">
						<label for="insurancestatus">Insurance Status</label><br>
						<select name="insurance_status" class="form-control" id="insurancestatus">
							<option value="Active">Active</option>
							<option value="Not Active">Not Active</option>
						</select>
					</div>
					<hr>
					<center>
						<button name="add" type="submit" class="btn btn-primary sign-up-btn">Register</button>
					</center>
				</form>
			</div>
		</div>
	</div>

<?php
}



?>