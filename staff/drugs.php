<?php
if (isset($_GET['drugs'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs" class="active1"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
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
								<tr>
									<td>1</td>
									<td>AstraZeneca</td>
									<td>55</td>
									<td>NORMAL</td>
									<td>
									
											<span data-toggle="modal" data-target="#viewdrugs"><a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a></span>
											<span data-toggle="modal" data-target="#editdrugs"><a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: orange;" class="fas fa-edit"></i></a></span>
											<span><a onclick="return confirm('Are you sure you want to delete this patient?');" href="#" class="view" title="View" data-toggle="tooltip"><i style="color: red;" class="fas fa-trash"></i></a></span>
								
									</td>
								</tr>
								<!-- viewdrug modal -->
								<div class="modal fade" id="viewdrugs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
													<label for="name">Drug Name</label>
													<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
												</div>
												<div class="form-group">
													<label for="description">Description</label>
													<textarea class="form-control" cols="6" disabled></textarea>
												</div>
												<div class="form-group">
													<label for="recDate">Received Date</label>
													<input type="date" class="form-control" id="recDate" placeholder="Enter Quantty" name="recDate" disabled>
												</div>
												<div class="form-group">
													<label for="expDate">Expired Date</label>
													<input type="date" class="form-control" id="expDate" placeholder="Enter Quantty" name="expDate" disabled>
												</div>
												<div class="form-group">
													<label for="quantity">Quantity</label>
													<input type="number" class="form-control" id="name" placeholder="Enter Quantty" name="quantity" disabled>
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
								<div class="modal fade" id="editdrugs" tabindex="-3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
													<label for="name">Drug Name</label>
													<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
												</div>
												<div class="form-group">
													<label for="description">Description</label>
													<textarea class="form-control" cols="6"></textarea>
												</div>
												<div class="form-group">
													<label for="recDate">Received Date</label>
													<input type="date" class="form-control" id="recDate" placeholder="Enter Quantty" name="recDate" >
												</div>
												<div class="form-group">
													<label for="expDate">Expired Date</label>
													<input type="date" class="form-control" id="expDate" placeholder="Enter Quantty" name="expDate" >
												</div>
												<div class="form-group">
													<label for="quantity">Quantity</label>
													<input type="number" class="form-control" id="name" placeholder="Enter Quantty" name="quantity">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-success">Save Drug</button>
												</form>
											</div>
										</div>
									</div>
								</div>
									<!-- end editdrug modal -->


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