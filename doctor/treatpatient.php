<?php
$array_list = $_SESSION['list_medicine'];
$review = '';
$ward_status = '';
$staff_id;

if (isset($_POST['resetPresciption'])) {
	$review = $_POST['review'];
	$ward_status = $_POST['ward_status'];
	$_SESSION['list_medicine'] = array();
	header("Refresh:0");
}

if (isset($_POST['addList'])) {

	$review = $_POST['review'];
	$ward_status = $_POST['ward_status'];

	$drug_code = $_POST['drug_code'];
	$drug_name = $_POST['drug_name'];
	$drug_doses = $_POST['drug_doses'];
	$drug_quantity = $_POST['drug_quantity'];

	$array = array($drug_code, $drug_name, $drug_doses, $drug_quantity);
	array_push($array_list, $array);
	$_SESSION['list_medicine'] = $array_list;
}

if (isset($_POST['complete'])) {

	// history inforamtion
	$patient_PMI = $_GET['id'];
	$review = $_POST['review'];
	$ward_status = $_POST['ward_status'];
	$history_date = date('Y-m-d');
	$history_time = date('H:i:s');

	/**
	 * !Insert data into history_table
	 * !Get history_id for next process
	 */

	$stmt = $conn->prepare("INSERT INTO medical_history (history_date, history_time, history_review, history_ward, patient_PMI, staff_id) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssii", $history_date, $history_time, $review, $ward_status, $patient_PMI, $staff_id);

	if ($stmt->execute()) {

		$sql_selectMedicalHistory = "SELECT * FROM medical_history WHERE history_date = '" . $history_date . "' AND history_time = '" . $history_time . "' AND history_review = '" . $review . "' AND history_ward = '" . $ward_status . "' AND patient_PMI = " . $patient_PMI . " AND staff_id = " . $staff_id . "";
		$result_selectMedicalHistory = mysqli_query($conn, $sql_selectMedicalHistory);

		if ($result_selectMedicalHistory->num_rows > 0) {
			$row_selectMedicalHistory = $result_selectMedicalHistory->fetch_assoc();
			$history_id = $row_selectMedicalHistory['history_id'];

			/**
			 * TODO : Insert data for each array
			 */

			$count_array = count($array_list);
			for ($mq = 0; $mq < $count_array; $mq++) {
				$drug_code = $array_list[$mq][0];
				$drug_quantity = $array_list[$mq][2];
				$stmt = $conn->prepare("INSERT INTO drug_history (drug_history_quantity, drug_code, history_id) VALUES (?,?,?)");
				$stmt->bind_param('iii', $drug_quantity, $drug_code, $history_id);
				$stmt->execute();
			}

			// Update queue status
			$queue_id = $_GET['queue_id'];

			$sql_updateQueue1 = "UPDATE patient_queue SET queue_status = 'complete' WHERE queue_id = '" . $queue_id . "'";

			if ($conn->query($sql_updateQueue1) === TRUE) {
				$_SESSION['list_medicine'] = array();
				echo "<script>alert('Consultation compeleted')
			window.location.href='?doctor';</script>";
			} else {
				echo "Error updating record: " . $conn->error;
			}
		} else {
			echo $conn->error;
		}
	} else {
		echo "<script>alert('Failed add medical history')</script>";
	}
}

if (isset($_GET['treatpatient']) && isset($_GET['id'])) {

	$patient_PMI = $_GET['id'];

	// search paient

	$sql_patientQueue2 = "SELECT * FROM patient_information WHERE patient_PMI = " . $patient_PMI . "";

	$result_patientQueue2 = mysqli_query($conn, $sql_patientQueue2);

	if ($result_patientQueue2->num_rows > 0) {
		$row_patientQueue2 = $result_patientQueue2->fetch_assoc();

		// update patient queue to complete
		$sql_updateQueue = "UPDATE patient_queue SET queue_status = 'call' WHERE patient_PMI = " . $patient_PMI . " AND queue_status = 'waiting'";
		if (mysqli_query($conn, $sql_updateQueue)) {
		} else {
			echo "<script>alert('Failed to update queue status')</script>";
		}
	}



?>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- jQuery UI library -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
		<div class="sidebar">
				<a href="?dashboard" class="active1"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
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
						<div>
							<center>
								<h2><?php echo $row_patientQueue2['patient_name'] ?></h2>
							</center>
						</div>
					</div>
					<br>
					<div>
						<div style="display: flex; justify-content: space-evenly;">
							<div class="form-group" style="width: 50%;">
								<label for="icnumber">IC Number</label>
								<input value="<?php echo $row_patientQueue2['patient_ic_number'] ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" disabled>
							</div>
							<div class="form-group" style="width: 50%; margin-left: 10px;">
								<label for="dob">Date Of Birth</label>
								<input value="<?php echo $row_patientQueue2['patient_BOD'] ?>" type="date" class="form-control" id="dob" name="dob" disabled>
							</div>
							<div class="form-group" style="width: 50%; margin-left: 10px;">
								<label for="blood">Blood Type</label>
								<input value="<?php echo $row_patientQueue2['patient_blood_type'] ?>" type="text" class="form-control" id="blood" name="blood" disabled>
							</div>
						</div>
						<div style="display: flex; justify-content: space-evenly;">
							<div class="form-group" style="width: 50%">
								<label for="email">Email</label>
								<input value="<?php echo $row_patientQueue2['patient_email'] ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
							</div>
							<div class="form-group" style="width: 50%; margin-left: 10px;">
								<label for="phonenumber">Phone Number</label>
								<input value="<?php echo $row_patientQueue2['patient_phone_number'] ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
							</div>
						</div>
					</div>
					<hr>
					<br>
					<form method="POST">
						<div>
							<h2>Patient <b>Condition</b>
								<h2>
						</div>
						<br>
						<div class="form-group">
							<label for="name">Review</label><br>
							<textarea name="review" class="form-control" rows="6" style="width: 100%;"><?php echo  $review ?></textarea>
						</div>
						<div class="form-group">
							<label for="name">Warded Status</label><br>
							<select name="ward_status" class="form-control">
								<option <?php if (empty($ward_status)) {
											echo "selected";
										} ?> disabled="disable">-- Please Choose --</option>
								<option value="Yes" <?php if ($ward_status === 'Yes') {
														echo 'selected';
													} ?>>Yes</option>
								<option value="No" <?php if ($ward_status === 'No') {
														echo 'selected';
													} ?>>No</option>
							</select>
						</div>
						<br>
						<hr>
						<br>
						<div>
							<h2><b>Presciption</b>
								<h2>
						</div>
						<br>

						<!-- Loops array list -->
						<?php
						$total_list = count($array_list);
						for ($q = 0; $q < $total_list; $q++) { ?>
							<div style="display: flex" style="width: 100%" class="prescription" id="prescription">
								<br><br>
								<div><input value="<?php echo $array_list[$q][1]; ?>" readonly type="text" name="name" placeholder="Name" class="form-control"></div>
								<div style="margin-left: 10px;"><input value="<?php echo $array_list[$q][2]; ?>" readonly type="text" name="doses0" placeholder="Doses" class="form-control" min="0"></div>
								<div style="margin-left: 10px;"><input value="<?php echo $array_list[$q][3]; ?>" readonly type="number" name="quantity0" placeholder="Quantity" class="form-control" min="0"></div>

							</div>
						<?php

						}

						?>


						<div style="display: flex; width: 100%" class="prescription" id="prescription">
							<br><br>
							<input type="hidden" id="drug_code" name="drug_code">
							<div><input style="width: 100%;" id="skill_input" type="text" name="drug_name" placeholder="Name" class="form-control"></div>
							<div style="margin-left: 10px;"><input readonly id="skill_dose" type="text" name="drug_doses" placeholder="Doses" class="form-control" min="0"></div>
							<div style="margin-left: 10px;"><input type="number" name="drug_quantity" placeholder="Quantity" class="form-control" min="0"></div>
						</div>

						<button name="addList" class="btn btn-primary">+ Add more</button>
						<button name="resetPresciption" class="btn btn-secondary">Reset Presciption</button>
						<br>
						<hr><br>
						<button name="complete" class="btn btn-success" style="width: 100%">Complete Checkup</button>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php
}

?>