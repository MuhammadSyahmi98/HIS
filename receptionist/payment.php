<?php
$date = date('Y-m-d');
if(isset($_POST['submit_cash'])){
	$method = 'cash';
	$history_id = $_POST['history_id'];
	$total_price2 = $_POST['totalPrice'];

	$stmt = $conn->prepare("INSERT INTO payment (payment_method, payment_total, payment_date, history_id) VALUES (?,?,?,?)");
	$stmt->bind_param("sssi", $method, $total_price2, $date, $history_id);

	if($stmt->execute()){
		// Update payment status
		$sql_updatePayment = "UPDATE medical_history SET payment_status = 'Complete' WHERE history_id = ".$history_id."";
		if($conn->query($sql_updatePayment) === TRUE) {
			echo "<script>alert('Payment success');
				window.location.href='?billing';
				</script>";
		} else {
			echo $conn->error;
		}
	} else {
		echo $stmt->error;
	}

}


if(isset($_POST['submit_insurance'])){
	$method = 'insurance';
	$history_id = $_POST['history_id'];
	$total_price2 = $_POST['totalPrice'];

	$stmt = $conn->prepare("INSERT INTO payment (payment_method, payment_total, payment_date, history_id) VALUES (?,?,?,?)");
	$stmt->bind_param("sssi", $method, $total_price2, $date, $history_id);

	if($stmt->execute()){
		// Update payment status
		$sql_updatePayment = "UPDATE medical_history SET payment_status = 'Complete' WHERE history_id = ".$history_id."";
		if($conn->query($sql_updatePayment) === TRUE) {
			echo "<script>alert('Payment success');
				window.location.href='?billing';
				</script>";
		} else {
			echo $conn->error;
		}
	} else {
		echo $stmt->error;
	}

}



if (isset($_GET['payment']) && isset($_GET['id'])) {

	$history_id = $_GET['id'];

	$sql_payment = "SELECT * FROM medical_history INNER JOIN patient_information WHERE medical_history.patient_PMI = patient_information.patient_PMI AND history_id = " . $history_id . "";
	$result_payment = mysqli_query($conn, $sql_payment);

	if ($result_payment->num_rows > 0) {
		$row_payment = $result_payment->fetch_assoc();
	}

?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				
				<a href="?billing" class="active1"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%; margin-bottom: 4%;">
			<div style="width: 100%;
							margin-left: 10px;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding: 20px;">
				<div class="row">
					<div class="col-sm-8">
						<h2><b>Payment</b></h2>
					</div>
				</div>

				<hr>
				<div>
					<center>
						<h4>Patient Details</h4>
					</center>
				</div>
				<div>
					<div class="form-group">
						<label for="name">Name</label>
						<?php
						 $patient_PMI = $row_payment['patient_PMI'];
						?>
						<input value="<?php echo $row_payment['patient_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%;">
							<label for="icnumber">IC Number</label>
							<input value="<?php echo $row_payment['patient_ic_number']; ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="dob">Date Of Birth</label>
							<input value="<?php echo $row_payment['patient_BOD']; ?>" type="date" class="form-control" id="dob" name="dob" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="blood">Blood Type</label>
							<input value="<?php echo $row_payment['patient_blood_type']; ?>" type="text" class="form-control" id="blood" name="blood" disabled>
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="email">Email</label>
							<input value="<?php echo $row_payment['patient_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="phonenumber">Phone Number</label>
							<input value="<?php echo $row_payment['patient_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
						</div>
					</div>
				</div>
				<hr>
				<div>
					<center>
						<h4>Billing Details</h4>
					</center>
				</div>
				<br>
				<div>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th colspan="4" scope="col">Prescription</th>
							</tr>
						</thead>
						<tr class="table-activet">
							<td>Name</td>
							<td>Price/Quantity</td>
							<td>Quantity</td>
							<td>Price</td>
						</tr>
						<?php
						$sql_payment2 = "SELECT * FROM drug_history INNER JOIN drug_information WHERE drug_history.drug_code = drug_information.drug_code AND history_id = " . $history_id . "";
						$result_payment2 = mysqli_query($conn, $sql_payment2);

						if ($result_payment2->num_rows > 0) {
							$total_price = 0;
							while ($row_payment2 = $result_payment2->fetch_assoc()) {
						?>
								<tr>
									<td><?php echo $row_payment2['drug_name']; ?></td>
									<td><?php echo $row_payment2['drug_price']; ?></td>
									<td><?php echo $row_payment2['drug_history_quantity']; ?></td>
									<?php
									$subtotal1 = 0;
									$subtotal1 = $row_payment2['drug_history_quantity'] * $row_payment2['drug_price'];
									$total_price += $subtotal1;
									?>
									<td><?php echo $subtotal1; ?></td>
								</tr>
						<?php
							}
						}

						?>

						<tr>
							<td colspan="3">Total Price</td>
							<td>RM <?php echo $total_price; ?></td>
						</tr>
					</table>
				</div>
				<hr>
				<div>
					<center>
						<h4>Payment Method</h4>
					</center>
				</div>
				<br>
				<div>

					<select class="form-control" id="payment">
						<option selected="select" disabled="disable">--Please Select Payment Method--</option>
						<option value="1">Cash</option>
						<option value="2">Insurance</option>
					</select>
				</div>

				<div style="display: none" id="cash">
					<br>
					<div>
						<div>
							<form method="POST">
								<input name="history_id" type="hidden" type="text" value="<?php echo $history_id; ?>">
								<input name="totalPrice" type="hidden" type="text" value="<?php echo $total_price; ?>">
								<button name="submit_cash" class="btn btn-success" style="width: 100%">Payment Completed</button>
							</form>
						</div>
					</div>
				</div>

				<div style="display: none" id="insurance" style="margin-bottom: 10px;">
					<br>
					<div>
						<table class="table">
						<?php
						
						$sql_insurance2 = "SELECT * FROM insurance_information WHERE patient_PMI = ".$patient_PMI."";
						$result_insurance2 = mysqli_query($conn, $sql_insurance2);

						if ($result_insurance2->num_rows > 0) {
							$row_insurance2 = $result_insurance2->fetch_assoc();
						}

						?>
							<tr>
								<th scope="col" width="20%">Insurance Name</th>
								<td><?php echo $row_insurance2['insurance_name'];?></td>
							</tr>
							<tr>
								<th scope="col">Insurance Status</th>
								<td><?php echo $row_insurance2['insurance_status'];?></td>
							</tr>
						</table>
						<div>
							<form method="POST">
								<input name="history_id" type="hidden" type="text" value="<?php echo $history_id; ?>">
								<input name="totalPrice" type="hidden" type="text" value="<?php echo $total_price; ?>">
								<button <?php if($row_insurance2['insurance_status'] === 'Not Active'){echo 'disabled';} ?> name="submit_insurance" class="btn btn-success" style="width: 100%">Issued to Insurance</button>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		// payment type
		$(document).ready(function() {
			$('#payment').on('change', function() {
				if (this.value == '1') {
					$("#cash").show();
					$("#insurance").hide();
				} else {
					$("#insurance").show();
					$("#cash").hide();
				}
			});
		});
	</script>


<?php
}

?>