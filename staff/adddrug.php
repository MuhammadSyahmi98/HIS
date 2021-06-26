<?php
if (isset($_GET['adddrug'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs" class="active"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
				<a href="?billing"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%;
							margin-left: 10px;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding-top: 10px;
							padding-bottom: 10px;">
			<div class="container-xl" style="padding-top: 10px;">
				<h2><b>Register</b> New Drug</h2>
				<hr>
				<form>
					<div class="form-group">
						<label for="name">Drugs Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
					</div>
					<div class="form-group">
						<label for="name">Description</label><br>
						<textarea rows="6" class="form-control"></textarea>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="blood">Received Date</label>
							<input name="patient_blood_type" type="date" class="form-control" id="recDate" placeholder="Receive Date">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="nationality">Expired Date</label>
							<input name="patient_nationality" type="date" class="form-control" id="expDate" placeholder="Expired Date">
						</div>
					</div>
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="number" class="form-control" id="quantity" placeholder="Enter Drugs Quantity" name="name" min="0">
					</div>
					<hr>
					<center>
						<button type="submit" class="btn btn-primary sign-up-btn" style="width: 100%;">Register</button>
					</center>
				</form>
			</div>
		</div>
	</div>

<?php
}

?>