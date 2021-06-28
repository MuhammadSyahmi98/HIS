<?php

if (isset($_POST['update_staff'])) {
	$staff_name = $_POST['staff_name'];
	$staff_email = $_POST['staff_email'];
	$staff_phone = $_POST['staff_phone_number'];
	$staff_DOB = $_POST['staff_DOB'];
	$staff_ic = $_POST['staff_ic_number'];
	$staff_sex = $_POST['staff_sex'];
	$staff_race = $_POST['staff_race'];
	$staff_nationality = $_POST['staff_nationality'];
	$staff_address = $_POST['staff_address'];
	$staff_type = $_POST['staff_type'];

	$staff_id = $_POST['staff_id'];

	$sql_updateStaff = "UPDATE staff SET staff_name = '". $staff_name ."', staff_email= '". $staff_email ."', staff_phone_number= '". $staff_phone ."', 
	staff_BOD= '". $staff_DOB ."', staff_ic_number= '". $staff_ic ."', staff_sex= '". $staff_sex ."', staff_race= '". $staff_race ."', 
	staff_nationality= '". $staff_nationality ."', staff_address= '". $staff_address ."', staff_type= '". $staff_type ."' WHERE staff_id = ".$staff_id."";

	if ($conn->query($sql_updateStaff) === TRUE) {

		echo "<script>alert('Record updated successfully');
				window.location.href='?staffmanagement';
				</script>";
	  } else {
		echo "Error updating record: " . $conn->error;
	  }

}

if (isset($_GET['staffmanagement'])) {
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
		<div style="width: 100%;">
			<div style="display: flex;margin-left: 10px;width: 100%;">
				<div style="width: 100%;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding: 20px;">
					<div>
						<div>
							<div class="row">
								<div class="col-sm-8">
									<h2><b>Staff</b> Management</h2>
								</div>
							</div>
						</div>
						<br>
						<div>
							<a href="?addstaff" class="btn btn-primary sign-up-btn" style="width: 100%"><i class="fas fa-plus"></i><span style="margin-left: 10px;">Add Staff</span></a>
						</div>
						<br>
						<div>
							<table id="stafflist" class="display" style="width:100%">
								<thead>
									<tr>
										<th width="5%">#</th>
										<th width="30%">Name</th>
										<th width="15%">IC Number</th>
										<th width="20%">Username</th>
										<th width="15%">Type</th>
										<th width="15%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;

									// Search all patient

									$sql_searchStaff = "SELECT * FROM staff";

									$result_searchStaff = mysqli_query($conn, $sql_searchStaff);

									if ($result_searchStaff->num_rows > 0) {
										while ($row__searchStaff = $result_searchStaff->fetch_assoc()) {

									?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row__searchStaff['staff_name'] ?></td>
												<td><?php echo $row__searchStaff['staff_ic_number'] ?></td>
												<td><?php echo $row__searchStaff['staff_username'] ?></td>
												<td><?php
													if ($row__searchStaff['staff_type'] === '0') {
														echo 'Admin';
													} else if ($row__searchStaff['staff_type'] === '1') {
														echo 'Doctor';
													} else if ($row__searchStaff['staff_type'] === '2') {
														echo 'Pharmacist';
													} else if ($row__searchStaff['staff_type'] === '3') {
														echo 'Receptionist';
													}
													?></td>
												<td>

													<span data-toggle="modal" data-target="#viewstaff<?php echo $i; ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a></span>
													<span data-toggle="modal" data-target="#editstaff<?php echo $i; ?>"><a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: orange;" class="fas fa-edit"></i></a></span>
													
												</td>
												<!-- viewstaff modal -->
												<div class="modal fade" id="viewstaff<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">View Staff Information</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<h4><b>Staff Details</b></h4><br>
																<div class="form-group">
																	<label for="name">Fullname</label>
																	<input readonly value="<?php echo  $row__searchStaff['staff_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="email">Email</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="phonenumber">Phone Number</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="dob">Date Of Birth</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_BOD']; ?>" type="date" class="form-control" id="name" name="dob">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="icnumber">IC Number</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_ic_number']; ?>" type="text" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
																	</div>
																</div>
																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="sex">Sex</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="race">Race</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="race">
																	</div>
																</div>

																<div style="display: flex; justify-content: space-evenly;">
																	<div class="form-group" style="width: 50%">
																		<label for="nationality">Nationality</label>
																		<input readonly value="<?php echo  $row__searchStaff['staff_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
																	</div>
																	<div class="form-group" style="width: 50%; margin-left: 10px;">
																		<label for="icnumber">IC Number</label>
																		<input readonly value="<?php if ($row__searchStaff['staff_type'] === '0') {
																									echo 'Admin';
																								} else if ($row__searchStaff['staff_type'] === '1') {
																									echo 'Doctor';
																								} else if ($row__searchStaff['staff_type'] === '2') {
																									echo 'Pharmacist';
																								} else if ($row__searchStaff['staff_type'] === '3') {
																									echo 'Receptionist';
																								} ?>" type="text" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
																	</div>
																</div>
																<div class="form-group">
																	<label for="address">Address</label>
																	<input readonly value="<?php echo  $row__searchStaff['staff_address']; ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
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
												<div class="modal fade" id="editstaff<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">View Staff Information</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form method="POST">
																	<input type="hidden" name="staff_id" type="text" value="<?php echo $row__searchStaff['staff_id']; ?>">
																	<h4><b>Staff Details</b></h4><br>
																	<div class="form-group">
																		<label for="name">Fullname</label>
																		<input value="<?php echo  $row__searchStaff['staff_name']; ?>" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="staff_name">
																	</div>
																	<div style="display: flex; justify-content: space-evenly;">
																		<div class="form-group" style="width: 50%">
																			<label for="email">Email</label>
																			<input value="<?php echo  $row__searchStaff['staff_email']; ?>" type="email" class="form-control" id="email" placeholder="Enter Email" name="staff_email">
																		</div>
																		<div class="form-group" style="width: 50%; margin-left: 10px;">
																			<label for="phonenumber">Phone Number</label>
																			<input value="<?php echo  $row__searchStaff['staff_phone_number']; ?>" type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="staff_phone_number">
																		</div>
																	</div>
																	<div style="display: flex; justify-content: space-evenly;">
																		<div class="form-group" style="width: 50%">
																			<label for="dob">Date Of Birth</label>
																			<input value="<?php echo  $row__searchStaff['staff_BOD']; ?>" type="date" class="form-control" id="name" name="staff_DOB">
																		</div>
																		<div class="form-group" style="width: 50%; margin-left: 10px;">
																			<label for="icnumber">IC Number</label>
																			<input value="<?php echo  $row__searchStaff['staff_ic_number']; ?>" type="text" class="form-control" id="name" placeholder="Enter IC Number" name="staff_ic_number">
																		</div>
																	</div>
																	<div style="display: flex; justify-content: space-evenly;">
																		<div class="form-group" style="width: 50%">
																			<label for="sex">Sex</label>
																			<input value="<?php echo  $row__searchStaff['staff_sex']; ?>" type="text" class="form-control" id="sex" placeholder="Enter Sex" name="staff_sex">
																		</div>
																		<div class="form-group" style="width: 50%; margin-left: 10px;">
																			<label for="race">Race</label>
																			<input value="<?php echo  $row__searchStaff['staff_race']; ?>" type="text" class="form-control" id="race" placeholder="Enter race" name="staff_race">
																		</div>
																	</div>

																	<div style="display: flex; justify-content: space-evenly;">
																		<div class="form-group" style="width: 50%">
																			<label for="nationality">Nationality</label>
																			<input value="<?php echo  $row__searchStaff['staff_nationality']; ?>" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="staff_nationality">
																		</div>
																		<div class="form-group" style="width: 50%; margin-left: 10px;">
																			<label for="icnumber">IC Number</label>
																			<select class="form-control" name="staff_type">

																				<option value="0" <?php if ($row__searchStaff['staff_type'] === '0') {
																										echo 'selected';
																									} ?>>Admin</option>
																				<option value="1" <?php if ($row__searchStaff['staff_type'] === '1') {
																										echo 'selected';
																									} ?>>Doctor</option>
																				<option value="2" <?php if ($row__searchStaff['staff_type'] === '2') {
																										echo 'selected';
																									} ?>>Pharmacist</option>
																				<option value="3" <?php if ($row__searchStaff['staff_type'] === '3') {
																										echo 'selected';
																									} ?>>Receptionist</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="address">Address</label>
																		<input value="<?php echo  $row__searchStaff['staff_address']; ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="staff_address">
																	</div>
																	<hr>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																<button name="update_staff" type="submit" class="btn btn-primary">Update</button>
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
	</div>

<?php
}

?>