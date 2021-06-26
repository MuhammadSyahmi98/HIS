<?php
	if(isset($_GET['order'])) {
		?>
		<div class="pageSize" style="display: flex; margin-top: 50px;" >
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
			                     <div class="col-sm-8"><h2><b>CPOE</b> Details</h2></div>
			                </div>
			            </div>
			            <br>
			            <div>
			            	<table id="queuelist" class="display" style="width:100%">
						        <thead>
						            <tr>
						            	<th width="5%">#</th>
						                <th width="30%">Name</th>
						                <th width="20%">IC Number</th>
						                <th width="10%">Status</th>
						                <th width="15%">Date/Time</th>
						                <th width="15%">Action</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						            	<td>1</td>
						                <td>Luhman Musa Pawer</td>
						                <td>991015081232</td>
						                <td>22</td>
						                <td>24/7/2021 1535</td>
						                <td>
						                	<center>
						                		<button class="btn btn-primary sign-up-btn" style="width: 100%" data-toggle="modal" data-target="#cpoe">
						                			View Order<span style="margin-left: 10px;"><i class="fas fa-angle-double-right"></i></span>
						                		</button>
						                	</center>
						                </td>
						            </tr>
						        </tbody>
					    	</table>
			            </div>
					</div>
				</div>
			</div>	
		</div>

		<?php
	}

 ?>