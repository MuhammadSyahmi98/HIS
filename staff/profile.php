<?php
	if(isset($_GET['profile'])) {
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
					<a href="?billing"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
					<div class="dropdown-divider"></div>
					<a href="?profile" class="active1"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
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
						<div class="row">
							<div class="col-sm-8">
								<h2><b>Profile</b></h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<table table table-borderless>
							<tr>
								<th scope="row" width="200px">Name</th>
								<td>Luhman Musa Bin Abdul Mutalip</td>
							</tr>
							<tr>
								<th scope="row">Username</th>
								<td>ProfesorMusa123</td>
							</tr>
							<tr>
								<th scope="row">Role</th>
								<td>Doctor</td>
							</tr>
							<tr>
								<th scope="row">Date Joined</th>
								<td>15 June 2017</td>
							</tr>
						</table>
					</div>
					<hr>
				</div>
			</div>	
		</div>

		<?php
	}

 ?>