<?php
	if(isset($_GET['addpatient'])) {
		?>
		<div class="pageSize" style="display: flex; margin-top: 50px;" >
			<div>
				<div class="sidebar">
					<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
					<div class="dropdown-divider"></div>
					<a href="?patient" class="active"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
					<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
					<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
					<a href="?drugs"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
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
					<h2><b>Register</b> Patient</h2>
					<hr>
					<form action="/action_page.php">
						<br><h4><b>Patient Details</b></h4><br>
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

					    <br><h4><b>Family Details</b></h4><br>
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
					    <br><h4><b>Insurance Details</b></h4><br>
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
					    <center>
					    	<button type="submit" class="btn btn-primary sign-up-btn">Register</button>
					    </center>
					  </form>
				</div>
			</div>		
		</div>

		<?php
	}

 ?>