<?php
if (isset($_GET['doctor'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
				<a href="?doctor" class="active1"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
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
						<div class="row">
							<div class="col-sm-8">
								<h2><b>Queued</b> Patient </h2>
							</div>
						</div>
					</div>
					<br>
					<div>
						<table id="queuelist" class="display" style="width:100%">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="25%">Name</th>
									<th width="15%">IC Number</th>
									<th width="25%">Address</th>
									<th width="15%">Date/Time</th>
									<th width="15%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								// Check status
								$sql_patientQueue1 = "SELECT * FROM patient_queue INNER JOIN patient_information WHERE patient_information.patient_PMI = patient_queue.patient_PMI AND  queue_status != 'complete' ORDER BY queue_time ASC";

								$result_patientQueue1 = mysqli_query($conn, $sql_patientQueue1);

								if($result_patientQueue1->num_rows>0){
									$o = 1;
									while($row_patientQueue1 = $result_patientQueue1->fetch_assoc()) {

									
								?>
								<tr>
									<td><?php echo $o; ?></td>
									<td><?php echo $row_patientQueue1['patient_name'] ?></td>
									<td><?php echo $row_patientQueue1['patient_ic_number'] ?></td>
									<td><?php echo $row_patientQueue1['patient_address'] ?></td>
									<td><?php echo $row_patientQueue1['queue_time']. ' '. $row_patientQueue1['queue_date'] ?></td>
									<td>
										<center>
											<a href="?treatpatient&id=<?php echo $row_patientQueue1['patient_PMI']?>&queue_id=<?php echo $row_patientQueue1['queue_id'] ?>" class="btn btn-primary sign-up-btn" style="width: 100%">Treat Patient<span style="margin-left: 10px;"><i class="fas fa-angle-double-right"></i></span></a>
										</center>
									</td>
								</tr>
								<?php
								$o++;
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