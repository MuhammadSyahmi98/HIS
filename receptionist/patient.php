<?php
if (isset($_POST['addQueue'])) {
	$patient_PMI = $_POST['queue_id'];
	$date = date('Y-m-d');
	$time = date("H:i:s");

	// Check status
	$sql_patientQueue = "SELECT * FROM patient_queue WHERE patient_PMI = ". $patient_PMI ." AND (queue_status = 'waiting' OR queue_status = 'call')";

	$result_patientQueue = mysqli_query($conn, $sql_patientQueue);

	

	if (!$result_patientQueue->num_rows>0) {
		// Insert 	
		$stmt = $conn->prepare("INSERT INTO patient_queue (queue_date, queue_time, patient_PMI) VALUES (?, ?, ?)");
		$stmt->bind_param("ssi", $date, $time, $patient_PMI);

		 $stmt->execute();

		if ($stmt === true) {
			echo "<script>alert('Success add to wanting list')</script>";
		} else {
			echo "<script>alert('Success add to waiting list')</script>";
		}
	} else {
		echo "<script>alert('Exist in waiting list')</script>";
	}
}



if (isset($_POST['submit'])) {
	/**
	 * TODO :: Get all data from form and update
	 * ! Cant have empty spae
	 */

	// CVariable patient
	$patient_PMI = $_POST['patient_PMI'];
	$patient_name = $_POST['patient_name'];
	$patient_email = $_POST['patient_email'];
	$patient_phone_number = $_POST['patient_phone_number'];
	$patient_BOD = $_POST['patient_BOD'];
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
	 * TODO :: Check input fields
	 * ! Cant empty
	 * 
	 */

	if (true) {
		// Update
		$sql = "UPDATE patient_information SET patient_name = '" . $patient_name . "', patient_email ='" . $patient_email . "', patient_phone_number = '" . $patient_phone_number . "', 
		patient_BOD = '" . $patient_BOD . "', patient_ic_number = '" . $patient_ic_number . "', patient_sex = '" . $patient_sex . "', patient_race = '" . $patient_race . "', 
		patient_blood_type = '" . $patient_blood_type . "', patient_address = '" . $patient_address . "', patient_nationality = '" . $patient_nationality . "' WHERE patient_PMI = " . $patient_PMI . "";

		if (mysqli_query($conn, $sql)) {


			$sql = "UPDATE family_information SET family_name = '" . $family_name . "', family_phone_number = '" . $family_phone_number . "', family_ic_number = '" . $family_ic_number . "', family_sex = '" . $family_sex . "', 
			family_race = '" . $family_race . "', family_blood_type = '" . $family_blood_type . "', family_address = '" . $family_address . "', family_email = '" . $family_email . "', family_nationality = '" . $family_nationality . "'  WHERE patient_PMI = " . $patient_PMI . "";

			if (mysqli_query($conn, $sql)) {

				$sql = "UPDATE insurance_information SET insurance_name = '" . $insurance_name . "', insurance_status = '" . $insurance_status . "' WHERE patient_PMI = " . $patient_PMI . "";

				if (mysqli_query($conn, $sql)) {
					echo "<script>alert('Success')</script>";
				} else {
					// Failed to update insurance
					echo "Failed update insurance";
				}
			} else {
				// Failed update family
				echo "Failed update family";
			}
		} else {
			// Failed update patient
			echo "Failed update patient";
		}
	}
}



if (isset($_GET['patient'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient" class="active1"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				
				<a href="?billing"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%;">
			<div style="width: 100%;
							margin-left: 10px;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding: 20px;">
				<div>
					<div>
						<div class="row">
							<div class="col-sm-8">
								<h2><b>Patient</b> Details</h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<a href="?addpatient" class="btn btn-primary sign-up-btn" style="width: 100%"><i class="fas fa-plus"></i><span style="margin-left: 10px;">Add Patient</span></a>
					</div>
					<br>
					<div>
						<table id="patientlist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="30%">Name</th>
									<th width="15%">IC Number</th>
									<th width="20%">Address</th>
									<th width="15%">Action</th>
									<th width="15%">Queue</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;

								// Search all patient

								$sql_searchPatient = "SELECT * FROM patient_information";

								$result_searchPatient = mysqli_query($conn, $sql_searchPatient);

								if ($result_searchPatient->num_rows > 0) {
									while ($row__searchPatient = $result_searchPatient->fetch_assoc()) {



								?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row__searchPatient['patient_name'] ?></td>
											<td><?php echo $row__searchPatient['patient_ic_number'] ?></td>
											<td><?php echo $row__searchPatient['patient_address'] ?></td>
											<td>

												<span data-toggle="modal" data-target="#viewpatient<?php echo $i; ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a></span>
												<span data-toggle="modal" data-target="#editpatient<?php echo $i; ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: orange;" class="fas fa-edit"></i></a></span>
												<!-- <span><a onclick="return confirm('Are you sure you want to delete this patient?');" href="#" class="view" title="View" data-toggle="tooltip"><i style="color: red;" class="fas fa-trash"></i></a></span> -->


											</td>
											<td>
												<center>
													<form method="POST" id="submit_queue<?php echo $i; ?>">
														<input type="hidden" name="queue_id" value="<?php echo $row__searchPatient['patient_PMI']; ?>">
														<button onclick="submit_queue($i)" type="submit" name="addQueue" class="btn btn-success">Add to Queue</button>
													</form>
												</center>
											</td>
											<!-- viewpatient modal -->
											<div class="modal fade" id="viewpatient<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">View Patient Information</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<h4><b>Patient Details</b></h4><br>
															<div class="form-group">
																<label for="name">Fullname</label>
																<input readonly value="<?php echo  $row__searchPatient['patient_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="email">Email</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="phonenumber">Phone Number</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="dob">Date Of Birth</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_BOD']; ?>" type="date" class="form-control" id="name" name="dob">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="icnumber">IC Number</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_ic_number']; ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="sex">Sex</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="race">Race</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="race">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="blood">Blood Type</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_blood_type']; ?>" type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="blood">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="nationality">Nationality</label>
																	<input readonly value="<?php echo  $row__searchPatient['patient_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
																</div>
															</div>
															<div class="form-group">
																<label for="address">Address</label>
																<input readonly value="<?php echo  $row__searchPatient['patient_address']; ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
															</div>
															<hr>

															<?php
															$patient_PMI = $row__searchPatient['patient_PMI'];


															// search family
															$sql_searchFamily = "SELECT * FROM family_information WHERE patient_PMI = " . $patient_PMI . "";

															$result_searchFamily = mysqli_query($conn, $sql_searchFamily);

															if ($result_searchFamily->num_rows > 0) {
																$row__searchFamily = $result_searchFamily->fetch_assoc();
															}

															?>



															<br>
															<h4><b>Family Details</b></h4><br>
															<div class="form-group">
																<label for="familyname">Family Name</label>
																<input readonly value="<?php echo  $row__searchFamily['family_name']; ?>" type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="familyname">
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="familyphonenumber">Phone Number</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_phone_number']; ?>" type="number" class="form-control" id="familyphonenumber" name="familyphonenumber" placeholder="Enter Family Phone Number">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="familyicnumber">Family IC Number</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_ic_number']; ?>" type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="familyicnumber">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="familysex">Sex</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="familyrace">Race</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="race">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="familyemail">Email</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_email']; ?>" type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="blood">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="familynationality">Nationality</label>
																	<input readonly value="<?php echo  $row__searchFamily['family_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
																</div>
															</div>
															<div class="form-group">
																<label for="familyaddress">Address</label>
																<input readonly value="<?php echo  $row__searchFamily['family_address']; ?>" type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="address">
															</div>
															<hr>
															<br>
															<?php
															// search insurance
															$sql_searchInsurance = "SELECT * FROM insurance_information WHERE patient_PMI = " . $patient_PMI . "";

															$result_searchInsurance = mysqli_query($conn, $sql_searchInsurance);

															if ($result_searchInsurance->num_rows > 0) {
																$row_searchInsurance = $result_searchInsurance->fetch_assoc();
															}

															?>
															<h4><b>Insurance Details</b></h4><br>
															<div class="form-group">
																<label for="insurancename">Insurance Name</label>
																<input readonly value="<?php echo  $row_searchInsurance['insurance_name']; ?>" type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurancename">
															</div>
															<div class="form-group">
																<label for="insurancestatus">Insurance Status</label><br>
																<select disabled class="form-control" name="insurancestatus" id="insurancestatus">
																	<option <?php if ($row_searchInsurance['insurance_status'] === 'Active') {
																				echo 'selected';
																			} ?>>Active</option>
																	<option <?php if ($row_searchInsurance['insurance_status'] === 'Not Active') {
																				echo 'selected';
																			} ?>>Not Active</option>
																</select>
															</div>
															<hr>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end viewpatient modal -->

											<!-- editpatient modal -->
											<div class="modal fade" id="editpatient<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Edit Patient Information</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<form method="POSt" id="search_form<?php echo $i ?>">
															<div class="modal-body">
																<h4><b>Patient Details</b></h4><br>
																<div class="form-group">
																	<label for="name">Fullname</label>
																	<input value="<?php echo  $row__searchPatient['patient_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="patient_name">
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="email">Email</label>
																		<input value="<?php echo  $row__searchPatient['patient_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="patient_email">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="phonenumber">Phone Number</label>
																		<input value="<?php echo  $row__searchPatient['patient_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="patient_phone_number">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="dob">Date Of Birth</label>
																		<input value="<?php echo  $row__searchPatient['patient_BOD']; ?>" type="date" class="form-control" id="name" name="patient_BOD">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="icnumber">IC Number</label>
																		<input value="<?php echo  $row__searchPatient['patient_ic_number']; ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" name="patient_ic_number">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="sex">Sex</label>
																		<input value="<?php echo  $row__searchPatient['patient_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="patient_sex">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="race">Race</label>
																		<input value="<?php echo  $row__searchPatient['patient_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="patient_race">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="blood">Blood Type</label>
																		<input value="<?php echo  $row__searchPatient['patient_blood_type']; ?>" type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="patient_blood_type">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="nationality">Nationality</label>
																		<input value="<?php echo  $row__searchPatient['patient_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="patient_nationality">
																	</div>
																</div>
																<div class="form-group">
																	<label for="address">Address</label>
																	<input value="<?php echo  $row__searchPatient['patient_address']; ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="patient_address">
																</div>
																<hr>

																<?php
																$patient_PMI = $row__searchPatient['patient_PMI'];

																// search family
																$sql_searchFamily = "SELECT * FROM family_information WHERE patient_PMI = " . $patient_PMI . "";

																$result_searchFamily = mysqli_query($conn, $sql_searchFamily);

																if ($result_searchFamily->num_rows > 0) {
																	$row__searchFamily = $result_searchFamily->fetch_assoc();
																}

																?>
																<input type="hidden" name="patient_PMI" value="<?php echo $patient_PMI; ?>">
																<br>
																<h4><b>Family Details</b></h4><br>
																<div class="form-group">
																	<label for="familyname">Family Name</label>
																	<input value="<?php echo  $row__searchFamily['family_name']; ?>" type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="family_name">
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="familyphonenumber">Phone Number</label>
																		<input value="<?php echo  $row__searchFamily['family_phone_number']; ?>" type="number" class="form-control" id="familyphonenumber" name="family_phone_number" placeholder="Enter Family Phone Number">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="familyicnumber">Family IC Number</label>
																		<input value="<?php echo  $row__searchFamily['family_ic_number']; ?>" type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="family_ic_number">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="familysex">Sex</label>
																		<input value="<?php echo  $row__searchFamily['family_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="family_sex">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="familyrace">Race</label>
																		<input value="<?php echo  $row__searchFamily['family_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="family_race">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="blood">Blood Type</label>
																		<input value="<?php echo  $row__searchFamily['family_blood_type']; ?>" type="text" class="form-control" id="blood" placeholder="Enter race" name="family_blood_type">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="familyemail">Email</label>
																		<input value="<?php echo  $row__searchFamily['family_email']; ?>" type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="family_email">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="familynationality">Nationality</label>
																		<input value="<?php echo  $row__searchFamily['family_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="family_nationality">
																	</div>
																</div>
																<div class="form-group">
																	<label for="familyaddress">Address</label>
																	<input value="<?php echo  $row__searchFamily['family_address']; ?>" type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="family_address">
																</div>
																<hr>
																<br>
																<?php
																// search insurance
																$sql_searchInsurance = "SELECT * FROM insurance_information WHERE patient_PMI = " . $patient_PMI . "";

																$result_searchInsurance = mysqli_query($conn, $sql_searchInsurance);

																if ($result_searchInsurance->num_rows > 0) {
																	$row_searchInsurance = $result_searchInsurance->fetch_assoc();
																}

																?>
																<h4><b>Insurance Details</b></h4><br>
																<div class="form-group">
																	<label for="insurancename">Insurance Name</label>
																	<input value="<?php echo  $row_searchInsurance['insurance_name']; ?>" type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurance_name">
																</div>
																<div class="form-group">
																	<label for="insurancestatus">Insurance Status</label><br>
																	<select class="form-control" name="insurance_status" id="insurancestatus">
																		<option <?php if ($row_searchInsurance['insurance_status'] === 'Active') {
																					echo 'selected';
																				} ?>>Active</option>
																		<option <?php if ($row_searchInsurance['insurance_status'] === 'Not Active') {
																					echo 'selected';
																				} ?>>Not Active</option>
																	</select>
																</div>
																<hr>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																<button name="submit" value="test" class="btn btn-primary" onclick="submit(<?php echo $i ?>)">Submit</button>

															</div>
													</div>
												</div>
											</div>
											</form>
											<!-- end editpatient modal -->
										</tr>
								<?php
										$i++;
									}
								}

								?>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<?php
}

?>

<script type="text/javascript">
	function submit(value) {
		document.getElementById("search_form" + value).submit();
	}

	function submit_queue() {
		document.getElementById("submit_queue" + value).submit();
	}
</script>