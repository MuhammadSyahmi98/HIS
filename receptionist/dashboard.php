<?php
if (isset($_GET['dashboard'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard" class="active1"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				
				<a href="?billing"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%;">
			<div style="display: flex;margin-left: 10px;width: 100%;">
				<div style="width: calc(100%/3);
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding: 20px;">
					<div><label style="font-size: 20px;">Total <b>Today</b> Patient</label></div>
					<div style="display: flex; margin-top: 10px;">
						<div><i style="color: blue;" class="fas fa-calendar-day fa-4x"></i></div>
						<?php
						$date = date('Y-m-d');
						$sql10 = "SELECT COUNT(*) AS totalPatient FROM patient_queue WHERE queue_date = '" . $date . "'";
						$result_total_count = mysqli_query($conn, $sql10);

						if ($result_total_count->num_rows > 0) {
							$row_total_count = $result_total_count->fetch_assoc();
						}
						?>
						<div style="margin-left: 20px;"><span style="font-size: 50px;"><?php echo $row_total_count['totalPatient'] ?></span><span style="font-size: 25px;margin-left: 10px;">patients</span></div>
					</div>
				</div>
				<div style="width: calc(100%/3);
								margin-left: 10px;
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding: 20px;">
					<div><label style="font-size: 20px;">Total <b>Warded</b> Patient</label></div>
					<div style="display: flex; margin-top: 10px;">
						<div><i style="color: #33cabb;" class="fas fa-hospital-alt fa-4x"></i></div>
						<div style="margin-left: 20px;"><span style="font-size: 50px;">78</span><span style="font-size: 25px;margin-left: 10px;">patients</span></div>
					</div>
				</div>
				<div style="width: calc(100%/3);
								height: auto;
								margin-left: 10px;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding: 20px;">
					<div><label style="font-size: 20px;">Total <b>Treated</b> Patient</label></div>
					<div style="display: flex; margin-top: 10px;">
						<div><i style="color: red;" class="fas fa-heartbeat fa-4x"></i></div>
						<?php
						$date = date('Y-m-d');
						$sql10 = "SELECT COUNT(*) AS totalPatient FROM patient_queue WHERE queue_status = 'complete'";
						$result_total_count = mysqli_query($conn, $sql10);

						if ($result_total_count->num_rows > 0) {
							$row_total_count = $result_total_count->fetch_assoc();
						}
						?>
						<div style="margin-left: 20px;"><span style="font-size: 50px;"><?php echo $row_total_count['totalPatient'] ?></span><span style="font-size: 25px;margin-left: 10px;">patients</span></div>
					</div>
				</div>
			</div>

			<!-- below -->
			<div style="display: flex;margin-left: 10px;width: 100%;">
				<div style="margin-top: 10px;
								width: 50%;
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding: 20px;">
					<div><label style="font-size: 30px;"><b>Queue</b> Patient</label></div>
					<br>
					<?php
					$date = date('Y-m-d');
					$sql10 = "SELECT COUNT(*) AS totalPatient FROM patient_queue WHERE queue_status = 'waiting'";
					$result_total_count = mysqli_query($conn, $sql10);

					if ($result_total_count->num_rows > 0) {
						$row_total_count = $result_total_count->fetch_assoc();
					}
					?>
					<div><label>Total Patient:</label><label style="margin-left: 10px;"><span style="font-weight: bold; font-size: 20px;"><?php echo $row_total_count['totalPatient'] ?></span> patient</label></div>
					<br>
					<div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$date = date('Y-m-d');
								$sql10 = "SELECT * FROM patient_queue INNER JOIN patient_information WHERE patient_queue.patient_PMI = patient_information.patient_PMI AND queue_status = 'waiting' LIMIT 5";
								$result_total_count = mysqli_query($conn, $sql10);

								if ($result_total_count->num_rows > 0) {
									$mn = 1;
									while ($row_total_count = $result_total_count->fetch_assoc()) {
								?>
										<tr>
											<td><?php echo $mn; ?></td>
											<td><?php echo $row_total_count['patient_name']; ?></td>

										</tr>

								<?php
										$mn++;
									}
								}
								?>

							</tbody>
						</table>
					</div>
				</div>

				<div style="margin-top: 10px;
								width: 50%;
								margin-left: 10px;
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding: 20px;">
					<div><label style="font-size: 30px;"><span style="color: red; font-weight: bold">Low</span> Quantity Drugs</label></div>
					<br>
					<div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Quantiy</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$date = date('Y-m-d');
								$sql10 = "SELECT * FROM drug_information WHERE drug_quantity < 100 LIMIT 5";
								$result_total_count = mysqli_query($conn, $sql10);

								if ($result_total_count->num_rows > 0) {
									$rt = 1;
									while ($row_total_count = $result_total_count->fetch_assoc()) {
								?>
										<tr>
											<td><?php echo $rt; ?></td>
											<td><?php echo $row_total_count['drug_name']; ?></td>
											<td><?php echo $row_total_count['drug_quantity']; ?></td>
										</tr>
								<?php


										$rt++;
									}
								}
								?>

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