<?php
	if(isset($_GET['billing'])) {
		?>
		<div class="pageSize" style="display: flex; margin-top: 50px;" >
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
			                    <div class="col-sm-8"><h2><b>Check Up</b> Billings</h2></div>
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
					            <tr>
					            	<td>1</td>
					                <td>Luhman Musa Pawer</td>
					                <td>991015081232</td>
					                <td>24/6/2021</td>
					                <td>RM 25.00</td>
					                <td>
					                	<center>
						                	<button class="btn btn-primary">Pay</button> 
				                        </center>
					                </td>
					            </tr>
					        </tbody>
				    	</table>
					  </div>
					<!-- end checkup div -->

					<!-- warded div -->
					  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					  	<br>
					  	<div>
			                <div class="row">
			                    <div class="col-sm-8"><h2><b>Warded</b> Billings</h2></div>
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
						                	<button class="btn btn-success">Check Out</button> 
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
			                    <div class="col-sm-8"><h2><b>History</b> Billings</h2></div>
			                </div>
			            </div>
			            <br>
					  	<table id="historylist" class="display" style="width:100%">
					        <thead>
					            <tr>
					            	<th width="5%">#</th>
					                <th>Name</th>
					                <th>IC Number</th>
					                <th>Date Admitted</th>
					                <th>Date Checkout</th>
					                <th>Status</th>
					                <th>Bill</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					            	<td>1</td>
					                <td>Luhman Musa Pawer</td>
					                <td>991015081232</td>
					                <td>24/6/2021</td>
					                <td>25/6/2021</td>
					                <td>CASH/INSURANCE</td>
					                <td>RM 25.00</td>
					                <td><center><a href="#"><i style="color: dodgerblue; font-size: 20px;" class="far fa-eye"></center></td>
					            </tr>
					        </tbody>
				    	</table>
					  </div>
					<!-- end history div -->
					</div>

				</div>
			</div>
			
			
		</div>

		<?php
	}

 ?>