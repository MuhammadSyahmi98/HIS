<?php
if (isset($_GET['patient'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient" class="active1"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
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
								<h2><b>Patient</b> Details</h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<table id="patientlist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="35%">Name</th>
									<th width="20%">IC Number</th>
									<th width="10%">Age</th>
									<th width="15%">Action</th>
									<th width="15%">Queue</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Luhman Musa Pawer</td>
									<td>991015081232</td>
									<td>22</td>
									<td>

										<span data-toggle="modal" data-target="#viewpatient"><a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a></span>
										<span data-toggle="modal" data-target="#editpatient"><a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: orange;" class="fas fa-edit"></i></a></span>
										<span><a onclick="return confirm('Are you sure you want to delete this patient?');" href="#" class="view" title="View" data-toggle="tooltip"><i style="color: red;" class="fas fa-trash"></i></a></span>


									</td>
									<td>
										<center>
											<button type="submit" class="btn btn-success">Add to Queue</button>
										</center>
									</td>
									<!-- viewpatient modal -->
									<div class="modal fade" id="viewpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">View Patient Information</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<center>
															<label for="name">Status</label>
															<input type="text" class="form-control" id="name" name="name">
														</center>
													</div>
													<hr>
													<br>
													<h4><b>Patient Details</b></h4><br>
													<div class="form-group">
														<label for="name">Fullname</label>
														<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="email">Email</label>
															<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="phonenumber">Phone Number</label>
															<input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
														</div>
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="dob">Date Of Birth</label>
															<input type="date" class="form-control" id="name" name="dob">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="icnumber">IC Number</label>
															<input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
														</div>
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="sex">Sex</label>
															<input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="race">Race</label>
															<input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
														</div>
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="blood">Blood Type</label>
															<input type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="blood">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="nationality">Nationality</label>
															<input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
														</div>
													</div>
													<div class="form-group">
														<label for="address">Address</label>
														<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
													</div>
													<hr>

													<br>
													<h4><b>Family Details</b></h4><br>
													<div class="form-group">
														<label for="familyname">Family Name</label>
														<input type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="familyname">
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="familyphonenumber">Phone Number</label>
															<input type="number" class="form-control" id="familyphonenumber" name="familyphonenumber" placeholder="Enter Family Phone Number">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="familyicnumber">Family IC Number</label>
															<input type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="familyicnumber">
														</div>
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="familysex">Sex</label>
															<input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="familyrace">Race</label>
															<input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
														</div>
													</div>
													<div style="display: flex; justify-content: space-evenly;">
														<div class="form-group" style="width: 50%">
															<label for="familyemail">Email</label>
															<input type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="blood">
														</div>
														<div class="form-group" style="width: 50%; margin-left: 10px;">
															<label for="familynationality">Nationality</label>
															<input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
														</div>
													</div>
													<div class="form-group">
														<label for="familyaddress">Address</label>
														<input type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="address">
													</div>
													<hr>
													<br>
													<h4><b>Insurance Details</b></h4><br>
													<div class="form-group">
														<label for="insurancename">Insurance Name</label>
														<input type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurancename">
													</div>
													<div class="form-group">
														<label for="insurancestatus">Insurance Status</label><br>
														<select class="form-control" name="insurancestatus" id="insurancestatus">
															<option>Active</option>
															<option>Not Active</option>
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
									<div class="modal fade" id="editpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Patient Information</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<center>
															<label for="name">Status</label>
															<input type="text" class="form-control" id="name" name="name">
														</center>
													</div>
													<hr>
													<form action="/action_page.php">
														<br>
														<h4><b>Patient Details</b></h4><br>
														<div class="form-group">
															<label for="name">Fullname</label>
															<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="email">Email</label>
																<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="phonenumber">Phone Number</label>
																<input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="dob">Date Of Birth</label>
																<input type="date" class="form-control" id="name" name="dob">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="icnumber">IC Number</label>
																<input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="sex">Sex</label>
																<input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="race">Race</label>
																<input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="blood">Blood Type</label>
																<input type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="blood">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="nationality">Nationality</label>
																<input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
															</div>
														</div>
														<div class="form-group">
															<label for="address">Address</label>
															<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
														</div>
														<hr>

														<br>
														<h4><b>Family Details</b></h4><br>
														<div class="form-group">
															<label for="familyname">Family Name</label>
															<input type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="familyname">
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="familyphonenumber">Phone Number</label>
																<input type="number" class="form-control" id="familyphonenumber" name="familyphonenumber" placeholder="Enter Family Phone Number">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="familyicnumber">Family IC Number</label>
																<input type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="familyicnumber">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="familysex">Sex</label>
																<input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="familyrace">Race</label>
																<input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
															</div>
														</div>
														<div style="display: flex; justify-content: space-evenly;">
															<div class="form-group" style="width: 50%">
																<label for="familyemail">Email</label>
																<input type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="blood">
															</div>
															<div class="form-group" style="width: 50%; margin-left: 10px;">
																<label for="familynationality">Nationality</label>
																<input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
															</div>
														</div>
														<div class="form-group">
															<label for="familyaddress">Address</label>
															<input type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="address">
														</div>
														<hr>
														<br>
														<h4><b>Insurance Details</b></h4><br>
														<div class="form-group">
															<label for="insurancename">Insurance Name</label>
															<input type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurancename">
														</div>
														<div class="form-group">
															<label for="insurancestatus">Insurance Status</label><br>
															<select class="form-control" name="insurancestatus" id="insurancestatus">
																<option>Active</option>
																<option>Not Active</option>
															</select>
														</div>

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
										<!-- end editpatient modal -->
								</tr>
							</tbody>
						</table>
					</div>
					<br>
					<div>
						<a href="?addpatient" class="btn btn-primary sign-up-btn" style="width: 100%"><i class="fas fa-plus"></i><span style="margin-left: 10px;">Add Patient</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}

?>