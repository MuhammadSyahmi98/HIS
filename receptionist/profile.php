<?php
if (isset($_GET['profile'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				
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
					<?php

					$sql_staff = "SELECT * FROM staff WHERE staff_id = ".$staff_id."";

					$result_staff = mysqli_query($conn, $sql_staff);

					if ($result_staff->num_rows > 0) {
						$row_staff = $result_staff->fetch_assoc();
					}
					?>
					<table table table-borderless>
						<tr>
							<th scope="row" width="200px">Name</th>
							<td><?php echo $row_staff['staff_name']; ?></td>
						</tr>
						<tr>
							<th scope="row">Username</th>
							<td><?php echo $row_staff['staff_username']; ?></td>
						</tr>
						<tr>
							<th scope="row">Role</th>
							<td>Receptionist</td>
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