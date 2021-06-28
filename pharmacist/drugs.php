<?php
if (isset($_POST['update_drug$m'])) {
	$drug_id = $_POST['drug_id'];
	$drug_name = $_POST['drug_name'];
	$drug_description = $_POST['drug_description'];
	$drug_doses = $_POST['drug_doses'];
	$drug_receive_date = $_POST['drug_receive_date'];
	$drug_expired_date = $_POST['drug_expired_date'];
	$drug_quantity = $_POST['drug_quantity'];
	$drug_price = $_POST['drug_price'];

	$sql = "UPDATE drug_information SET drug_name = '" . $drug_name . "', drug_description = '" . $drug_description . "', drug_doses = '" . $drug_doses . "', drug_date_receive = '" . $drug_receive_date . "', drug_expiry_date = '" . $drug_expired_date . "', drug_quantity = ' " . $drug_quantity . "', drug_price = '".$drug_price."' WHERE drug_code = " . $drug_id . "";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Success update drug')
		window.location.href='?drugs';
		</script>";
	} else {
		echo "<script>alert('Failed update drug')
		window.location.href='?drugs';
		</script>";
	}
}


if (isset($_GET['drugs'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs" class="active1"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
				
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
								<h2><b>Drugs</b> Details</h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<a href="?adddrug" class="btn btn-primary sign-up-btn" style="width: 100%"><i class="fas fa-plus"></i><span style="margin-left: 10px;">Add New Drug</span></a>
					</div>
					<br>
					<div>
						<table id="patientlist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="35%">Name</th>
									<th width="20%">Quantity</th>
									<th width="10%">Status</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql_searchDrug = "SELECT * FROM drug_information";

								$result_searchDrug = mysqli_query($conn, $sql_searchDrug);

								if ($result_searchDrug->num_rows > 0) {
									$m = 1;
									while ($row_searchDrug = $result_searchDrug->fetch_assoc()) {


								?>
										<tr>
											<td><?php echo $m; ?></td>
											<td><?php echo $row_searchDrug['drug_name']; ?></td>
											<td><?php echo $row_searchDrug['drug_quantity']; ?></td>
											<td><?php if ($row_searchDrug['drug_quantity'] > 100) {
													echo "Normal";
												} else {
													echo "Low";
												} ?></td>
											<td>

												<span data-toggle="modal" data-target="#viewdrugs<?php echo $m ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a></span>
												<span data-toggle="modal" data-target="#editdrugs<?php echo $m ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: orange;" class="fas fa-edit"></i></a></span>
												

											</td>
										</tr>
										<!-- viewdrug modal -->
										<div class="modal fade" id="viewdrugs<?php echo $m ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Drugs Details</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label for="name">Drugs Name</label>
															<input readonly value="<?php echo $row_searchDrug['drug_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="drug_name">
														</div>
														<div class="form-group">
															<label for="name">Description</label><br>
															<textarea name="drug_description" rows="6" class="form-control" readonly><?php echo $row_searchDrug['drug_description']; ?></textarea>
														</div>
														<div class="form-group">
															<label for="drug_doses">Doses</label>
															<input readonly value="<?php echo $row_searchDrug['drug_doses']; ?>" type="text" class="form-control" id="drug_doses" placeholder="Enter Drugs Quantity" name="drug_doses" min="0">
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="blood">Received Date</label>
																<input readonly value="<?php echo $row_searchDrug['drug_date_receive']; ?>" name="drug_receive_date" type="date" max="<?php echo $date; ?>" class="form-control" id="recDate" placeholder="Receive Date">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="nationality">Expired Date</label>
																<input readonly value="<?php echo $row_searchDrug['drug_expiry_date']; ?>" name="drug_expired_date" type="date" min="<?php echo $date; ?>" class="form-control" id="expDate" placeholder="Expired Date">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%;">
																<label for="quantity">Quantity</label>
																<input readonly value="<?php echo $row_searchDrug['drug_quantity']; ?>" type="number" class="form-control" id="quantity" placeholder="Enter Drugs Quantity" name="drug_quantity" min="0">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="nationality">Price</label>
																<input readonly value="<?php echo $row_searchDrug['drug_price']; ?>" name="drug_expired_date" type="text" min="<?php echo $date; ?>" class="form-control" id="expDate" placeholder="Expired Date">
															</div>
														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										<!-- end viewdrug modal -->

										<!-- editdrug modal -->
										<div class="modal fade" id="editdrugs<?php echo $m ?>" tabindex="-3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Drugs Details</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<form method="POST">
														<div class="modal-body">
															<input type="hidden" value="<?php echo  $row_searchDrug['drug_code'] ?>" name="drug_id">

															<div class="form-group">
																<label for="name">Drugs Name</label>
																<input value="<?php echo $row_searchDrug['drug_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="drug_name">
															</div>
															<div class="form-group">
																<label for="name">Description</label><br>
																<textarea name="drug_description" rows="6" class="form-control"><?php echo $row_searchDrug['drug_description']; ?></textarea>
															</div>
															<div class="form-group">
																<label for="drug_doses">Doses</label>
																<input value="<?php echo $row_searchDrug['drug_doses']; ?>" type="text" class="form-control" id="drug_doses" placeholder="Enter Drugs Quantity" name="drug_doses" min="0">
															</div>
															<div style="display: flex; justify-content: space-evenly;">
																<div class="form-group" style="width: 50%">
																	<label for="blood">Received Date</label>
																	<input value="<?php echo $row_searchDrug['drug_date_receive']; ?>" name="drug_receive_date" type="date" max="<?php echo $date; ?>" class="form-control" id="recDate" placeholder="Receive Date">
																</div>
																<div class="form-group" style="width: 50%; margin-left: 10px;">
																	<label for="nationality">Expired Date</label>
																	<input value="<?php echo $row_searchDrug['drug_expiry_date']; ?>" name="drug_expired_date" type="date" min="<?php echo $date; ?>" class="form-control" id="expDate" placeholder="Expired Date">
																</div>
															</div>
															<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%;">
																<label for="quantity">Quantity</label>
																<input  value="<?php echo $row_searchDrug['drug_quantity']; ?>" type="number" class="form-control" id="quantity" placeholder="Enter Drugs Quantity" name="drug_quantity" min="0">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="nationality">Price</label>
																<input  value="<?php echo $row_searchDrug['drug_price']; ?>" name="drug_price" type="text" min="<?php echo $date; ?>" class="form-control" id="expDate" placeholder="Price">
															</div>
														</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button name="update_drug$m" type="submit" class="btn btn-success">Save Drug</button>

														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- end editdrug modal -->

								<?php
										$m++;
									}
								}
								?>
							</tbody>
						</table>

					</div>
					<br>
				</div>
			</div>
		</div>
	</div>


<?php
}

?>