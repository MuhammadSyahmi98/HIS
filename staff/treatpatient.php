<?php
	if(isset($_GET['treatpatient']) && isset($_GET['id'])) {
		$patient_PMI = $_GET['id'];
		
		$sql_patientQueue2 = "SELECT * FROM patient_information WHERE patient_PMI = ". $patient_PMI ."";

		$result_patientQueue2 = mysqli_query($conn, $sql_patientQueue2);

		if($result_patientQueue2->num_rows>0){
			$row_patientQueue2 = $result_patientQueue2->fetch_assoc();
		}



		?>
		<div class="pageSize" style="display: flex; margin-top: 50px;" >
			<div>
				<div class="sidebar">
					<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
					<div class="dropdown-divider"></div>
					<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
					<a href="?doctor" class="active"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
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
			                <div>
			                    <center><h2><?php echo $row_patientQueue2['patient_name'] ?></h2></center>
			                </div>
			            </div>
			            <br>
			            <div>
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
			            <br>
			            <form>
				            <div><h2>Patient <b>Condition</b><h2></div>
				            	<br>
				            <div class="form-group">
						      <label for="name">Review</label><br>
						      <textarea class="form-control" rows="6" style="width: 100%;"></textarea>
						    </div>
						    <div class="form-group">
						      <label for="name">Warded Status</label><br>
						      <select class="form-control">
						      	<option selected="select" disabled="disable">-- Please Choose --</option>
						      	<option>Yes</option>
						      	<option>No</option>
						      </select>
						    </div>
						    <br>
						    <hr>
						    <br>
				            <div><h2><b>Presciption</b><h2></div>
				            	<br>
				            <div style="display: flex" style="width: 80%" class="prescription" id="prescription">
				            	<br><br>
				            	<div><input type="text" name="name" placeholder="Name" class="form-control"></div>
				            	<div style="margin-left: 10px;"><input type="number" name="doses" placeholder="Doses" class="form-control" min="0"></div>
				            	<div style="margin-left: 10px;"><input type="number" name="quantity" placeholder="Quantity" class="form-control" min="0"></div>
				            	<div style="margin-left: 10px;"><input type="text" name="usage" placeholder="Usage" class="form-control"></div>
				            </div>

				            <a href="#" onClick="addInput('prescription');" class="btn btn-primary">+ Add more</a>
				            <br>
				            <hr><br>
				            <button class="btn btn-success" style="width: 100%">Complete Checkup</button>
			            </form>
					</div>
				</div>
			</div>	
		</div>

		<?php
	}

 ?>