<?php
if (isset($_GET['billing'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
				<a href="?billing" class="active1"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
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
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Check Up</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Warded</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">History</a>
					</div>
				</nav>

				<!-- checkup div -->
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<br>
						<div>
							<div class="row">
								<div class="col-sm-8">
									<h2><b>Check Up</b> Billings</h2>
								</div>
							</div>
						</div>
						<br>
						<table id="checkuplist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="25%">Name</th>
									<th width="15%">IC Number</th>
									<th width="10%">Date</th>
									<th width="15%">Bill</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql_bill1 = "SELECT * FROM medical_history INNER JOIN patient_information WHERE medical_history.patient_PMI = patient_information.patient_PMI AND payment_status = 'in process' AND history_ward = 'No'";
								$result_bill1 = mysqli_query($conn, $sql_bill1);

								if ($result_bill1->num_rows > 0) {
									$re = 1;
									while ($row_bill1 = $result_bill1->fetch_assoc()) {
								?>
										<tr>
											<td><?php echo $re; ?></td>
											<td><?php echo $row_bill1['patient_name']; ?></td>
											<td><?php echo $row_bill1['patient_ic_number']; ?></td>
											<td><?php echo $row_bill1['history_date']; ?></td>

											<!-- Calculate total price -->
											<?php
											$history_id = $row_bill1['history_id'];

											$sql_totalPrice = "SELECT * FROM drug_history INNER JOIN drug_information WHERE drug_history.drug_code = drug_information.drug_code AND history_id = " . $history_id . "";
											$result_totalPrice = mysqli_query($conn, $sql_totalPrice);
											if ($result_totalPrice->num_rows > 0) {
												$totalPrice = 0;
												while ($row_totalPrice = $result_totalPrice->fetch_assoc()) {
													$subtotal = $row_totalPrice['drug_price'] * $row_totalPrice['drug_history_quantity'];
													$totalPrice += $subtotal;
												}
											}


											?>



											<td>RM <?php echo $totalPrice; ?></td>
											<td>
												<center>
													<a href="?payment&id=<?php echo $row_bill1['history_id']; ?>" class="btn btn-success">Pay</a>
												</center>
											</td>
										</tr>
								<?php
										$re++;
									}
								}
								?>

							</tbody>
						</table>
					</div>
					<!-- end checkup div -->

					<!-- warded div -->
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<br>
						<div>
							<div class="row">
								<div class="col-sm-8">
									<h2><b>Warded</b> Billings</h2>
								</div>
							</div>
						</div>
						<br>
						<table id="wardedlist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="25%">Name</th>
									<th width="15%">IC Number</th>
									<th width="10%">Date Admitted</th>
									<th width="20%">Status</th>
									<th width="15%">Bill</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Luhman Musa Pawer</td>
									<td>991015081232</td>
									<td>24/6/2021</td>
									<td>Warded</td>
									<td>RM 25.00</td>
									<td>
										<center>
											<a href="?paymentward" class="btn btn-success">Check Out</a>
										</center>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- end warded div -->

					<!-- history div -->
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						<br>
						<div>
							<div class="row">
								<div class="col-sm-8">
									<h2><b>History</b> Billings</h2>
								</div>
							</div>
						</div>
						<br>
						<table id="historylist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th>Name</th>
									<th>IC Number</th>
									<th>Status</th>
									<th>Bill</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql_complete = "SELECT * FROM medical_history INNER JOIN patient_information WHERE medical_history.patient_PMI = patient_information.patient_PMI AND payment_status = 'Complete'";
								$result_complete = mysqli_query($conn, $sql_complete);

								if ($result_complete->num_rows > 0) {
									$we = 1;
									while ($row_complete = $result_complete->fetch_assoc()) {

								?>
										<tr>
											<td><?php echo $we;?></td>
											<td>Luhman Musa Pawer</td>
											<td>991015081232</td>
											<td>CASH/INSURANCE</td>
											<td>RM 25.00</td>
											<td>
												<center>
													<button class="btn btn-primary sign-up-btn" style="width: 100%" data-toggle="modal" data-target="#printbill">
														View<span style="margin-left: 10px;"><i class="fas fa-angle-double-right"></i></span>
													</button>
												</center>
											</td>
										</tr>
								<?php

										$we++;
									}
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- end history div -->
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL SECTION -->

	<!-- print modal -->
	<div class="modal fade" id="printbill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">View Patient Information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="printThis">
						<div>
							<center>
								<h4>Patient Details</h4>
							</center>
						</div>
						<div>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
							</div>
							<div style="display: flex; justify-content: space-evenly;">
								<div class="form-group" style="width: 50%;">
									<label for="icnumber">IC Number</label>
									<input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
								</div>
								<div class="form-group" style="width: 50%; margin-left: 10px;">
									<label for="dob">Date Of Birth</label>
									<input type="date" class="form-control" id="dob" name="dob" disabled>
								</div>
								<div class="form-group" style="width: 50%; margin-left: 10px;">
									<label for="blood">Blood Type</label>
									<input type="date" class="form-control" id="blood" name="blood" disabled>
								</div>
							</div>
							<div style="display: flex; justify-content: space-evenly;">
								<div class="form-group" style="width: 50%">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
								</div>
								<div class="form-group" style="width: 50%; margin-left: 10px;">
									<label for="phonenumber">Phone Number</label>
									<input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
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
							<div>
								<label>Date : <span style="margin-left: 10px; font-weight: bold;">24/7/2021 1525 hours</span></label>
							</div>
							<br>
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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button id="btnPrint" type="button" class="btn btn-primary">Print</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end print modal -->
<?php
}

?>