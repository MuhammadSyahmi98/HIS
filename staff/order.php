<?php
if (isset($_POST['readyCPOE'])) {
	$history_id = $_POST['history_id'];

	 $sql3 = "UPDATE medical_history SET drug_status = 'complete' WHERE history_id = " . $history_id . "";
	// $conn->query($sql3) ===
	if ( $conn->query($sql3)=== true) {
	 	$sql4 = "SELECT drug_history.drug_code AS drug_code, drug_history_quantity, drug_quantity FROM drug_history INNER JOIN drug_information WHERE drug_history.drug_code = drug_information.drug_code AND history_id =" . $history_id . "";

		$result_searchDrug2 = mysqli_query($conn, $sql4);

		if ($result_searchDrug2->num_rows > 0) {
			while($row3 = $result_searchDrug2->fetch_assoc()){
				$drug_code = $row3['drug_code'];
				$durg_history_quantity = $row3['drug_history_quantity'];

				$drug_quantity = $row3['drug_quantity'];

				// new total
				$newTotal = (int) $drug_quantity - (int) $durg_history_quantity;

				$sql5 = "UPDATE drug_information SET drug_quantity = ".$newTotal." WHERE drug_code = ".$drug_code."";

				if($conn->query($sql5) === TRUE){

				} else {
					echo "Error updating drug record: " . $conn->error;
				}
			}
			
		}




	} else {
		echo "Error updating record: " . $conn->error;
	}
}


if (isset($_GET['order'])) {
?>

	<style>
		.rTable {
			display: table;
			width: 100%;
		}

		.rTableRow {
			display: table-row;
		}

		.rTableHeading {
			display: table-header-group;
			background-color: #ddd;
		}

		.rTableCell,
		.rTableHead {
			display: table-cell;
			padding: 3px 10px;
			border: 1px solid #999999;
		}

		.rTableHeading {
			display: table-header-group;
			background-color: #ddd;
			font-weight: bold;
		}

		.rTableFoot {
			display: table-footer-group;
			font-weight: bold;
			background-color: #ddd;
		}

		.rTableBody {
			display: table-row-group;
		}
	</style>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
				<a href="?order" class="active1"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
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
								<h2><b>CPOE</b> Details</h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<table id="queuelist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="30%">Name</th>
									<th width="15">IC Number</th>
									<th width="15%">Status</th>
									<th width="20%">Date/Time</th>
									<th width="15%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql_searchMedicalHis = "SELECT * FROM medical_history INNER JOIN patient_information WHERE medical_history.patient_pmi = patient_information.patient_pmi";

								$result_searchMedicalHis = mysqli_query($conn, $sql_searchMedicalHis);

								if ($result_searchMedicalHis->num_rows > 0) {
									$t = 1;
									while ($row_searchMedicalHis = $result_searchMedicalHis->fetch_assoc()) {



								?>
										<tr>
											<td><?php echo $t; ?></td>
											<td><?php echo $row_searchMedicalHis['patient_name']; ?></td>
											<td><?php echo $row_searchMedicalHis['patient_ic_number']; ?></td>
											<td><?php echo $row_searchMedicalHis['drug_status']; ?></td>
											<td><?php echo $row_searchMedicalHis['history_time'] . ' ' . $row_searchMedicalHis['history_date']; ?></td>
											<td>
												<center>
													<button class="btn btn-primary sign-up-btn" style="width: 100%" data-toggle="modal" data-target="#cpoe<?php echo $t; ?>">
														View Order<span style="margin-left: 10px;"><i class="fas fa-angle-double-right"></i></span>
													</button>
												</center>
											</td>
										</tr>
										<div class="modal fade" id="cpoe<?php echo $t; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">CPOE Details</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<center>
																<label for="name">Status</label>
																<input style="text-align: center; text-transform: capitalize;" readonly value="<?php echo $row_searchMedicalHis['drug_status']; ?>" type="text" class="form-control" id="name" name="name">
															</center>
														</div>
														<hr>
														<div>
															<div class="form-group">
																<label for="name">Name</label>
																<input value="<?php echo $row_searchMedicalHis['patient_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
															</div>

															<div class="form-group">
																<label for="icnumber">IC Number</label>
																<input value="<?php echo $row_searchMedicalHis['patient_ic_number']; ?>" type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
															</div>



															<div class="form-group">
																<label for="phonenumber">Phone Number</label>
																<input value="<?php echo $row_searchMedicalHis['patient_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
															</div>

														</div>

														<hr>
														<label><b>CPOE Details</b></label>
														<div>


															<div class="rTable">
																<div class="rTableRow">
																	<div class="rTableHead"><strong>#</strong></div>
																	<div class="rTableHead"><span style="font-weight: bold;">Name</span></div>
																	<div class="rTableHead">Quantity</div>
																</div>
																<?php
																$history_id = $row_searchMedicalHis['history_id'];

																$sql_searchMedicalHis2 = "SELECT * FROM drug_history INNER JOIN drug_information WHERE drug_history.drug_code = drug_information.drug_code AND history_id = " . $history_id . "";

																$result_searchMedicalHis2 = mysqli_query($conn, $sql_searchMedicalHis2);
																if ($result_searchMedicalHis2->num_rows > 0) {
																	$ui = 1;
																	while ($row_searchMedicalHis2 = $result_searchMedicalHis2->fetch_assoc()) {
																?>
																		<div class="rTableRow">
																			<div class="rTableCell"><?php echo $ui; ?></div>
																			<div class="rTableCell"><?php echo $row_searchMedicalHis2['drug_name']; ?></div>
																			<div class="rTableCell"><?php echo $row_searchMedicalHis2['drug_history_quantity']; ?></div>
																		</div>
																<?php

																		$ui++;
																	}
																}


																?>

															</div>


															<!-- table data here -->
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<form method="POST">
															<input type="hidden" name="history_id" value="<?php echo $history_id; ?>">
															<button <?php if($row_searchMedicalHis['drug_status'] === 'complete'){echo "disabled";} ?> type="submit" name="readyCPOE" class="btn btn-success">CPOE Ready</button>
														</form>
													</div>
												</div>
											</div>
										</div>

								<?php
										$t++;
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

	<!-- cpoe modal -->

	<!-- end cpoe modal -->

<?php
}

?>