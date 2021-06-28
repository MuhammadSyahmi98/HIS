<?php
if (isset($_GET['paymentward'])) {

	
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
						<input value="<?php echo $row_payment['patient_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%;">
							<label for="icnumber">IC Number</label>
							<input value="<?php echo $row_payment['patient_ic_number']; ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="dob">Date Of Birth</label>
							<input  value="<?php echo $row_payment['patient_BOD']; ?>" type="date" class="form-control" id="dob" name="dob" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="blood">Blood Type</label>
							<input value="<?php echo $row_payment['patient_blood_type']; ?>" type="date" class="form-control" id="blood" name="blood" disabled>
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="email">Email</label>
							<input value="<?php echo $row_payment['patient_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="phonenumber">Phone Number</label>
							<input  value="<?php echo $row_payment['patient_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
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
						<thead class="thead-dark">
							<tr>
								<th colspan="4" scope="col">Ward</th>
							</tr>
						</thead>
						<tr class="table-activet">
							<td>Name</td>
							<td>Price/Quantity</td>
							<td>Quantity</td>
							<td>Price</td>
						</tr>
						<tr>
							<td colspan="3">Total Price</td>
							<td>RM 55.00</td>
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
							<button class="btn btn-success" style="width: 100%">Payment Completed</button>
						</div>
					</div>
				</div>

				<div style="display: none" id="insurance" style="margin-bottom: 10px;">
					<br>
					<div>
						<table class="table">
							<tr>
								<th scope="col" width="20%">Insurance Name</th>
								<td>UTeM Holding</td>
							</tr>
							<tr>
								<th scope="col">Insurance Status</th>
								<td>Active</td>
							</tr>
						</table>
						<div>
							<button class="btn btn-success" style="width: 100%">Issued to Insurance</button>
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