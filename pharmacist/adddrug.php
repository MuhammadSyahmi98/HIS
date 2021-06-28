<?php
if (isset($_POST['register_drug'])) {
	$drug_name = $_POST['drug_name'];
	$drug_description = $_POST['drug_description'];
	$drug_doses = $_POST['drug_doses'];
	$drug_receive_date = $_POST['drug_receive_date'];
	$drug_expired_date = $_POST['drug_expired_date'];
	$drug_quantity = $_POST['drug_quantity'];
	$drug_price = $_POST['drug_price'];

	// Record data in database
	$stmt = $conn->prepare("INSERT INTO drug_information (drug_name, drug_description, drug_doses, drug_date_receive, drug_expiry_date, drug_quantity, drug_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssis", $drug_name, $drug_description, $drug_doses, $drug_receive_date, $drug_expired_date, $drug_quantity, $drug_price);
	


	if($stmt->execute()){
		echo "<script>alert('Success add drug')
		window.location.href='?drugs';
		</script>";
	} else {
		echo "<script>alert('Failed add drug')</script>";
	}
}


if (isset($_GET['adddrug'])) {
	$date = date('Y-m-d');
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				
				<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
				<a href="?drugs" class="active"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
				
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
				<form method="POST">
					<div class="form-group">
						<label for="name">Drugs Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="drug_name">
					</div>
					<div class="form-group">
						<label for="name">Description</label><br>
						<textarea name="drug_description" rows="6" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="drug_doses">Doses</label>
						<input type="text" class="form-control" id="drug_doses" placeholder="Enter Drugs Quantity" name="drug_doses" min="0">
					</div>
					<div style="display: flex; justify-content: space-evenly;">
						<div class="form-group" style="width: 50%">
							<label for="blood">Received Date</label>
							<input name="drug_receive_date" type="date" max="<?php echo $date; ?>" class="form-control" id="recDate" placeholder="Receive Date">
						</div>
						<div class="form-group" style="width: 50%; margin-left: 10px;">
							<label for="nationality">Expired Date</label>
							<input name="drug_expired_date" type="date" min="<?php echo $date; ?>" class="form-control" id="expDate" placeholder="Expired Date">
						</div>
					</div>
					<div style="display: flex; justify-content: space-evenly;">
					<div class="form-group" style="width: 50%;">
						<label for="quantity">Quantity</label>
						<input type="number" class="form-control" id="quantity" placeholder="Enter Drugs Quantity" name="drug_quantity" min="0">
					</div>
					<div class="form-group" style="width: 50%;  margin-left: 10px;">
						<label for="price">Price (RM)</label>
						<input type="text" class="form-control" id="price" placeholder="Enter Price" name="drug_price" min="0">
					</div>
					</div>
					
					<hr>
					<center>
						<button type="submit" name="register_drug" class="btn btn-primary sign-up-btn" style="width: 100%;">Register</button>
					</center>
				</form>
			</div>
		</div>
	</div>

<?php
}

?>