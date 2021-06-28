<?php
if (isset($_GET['report'])) {
?>
	<div class="pageSize" style="display: flex; margin-top: 50px;">
		<div>
			<div class="sidebar">
				<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
				<div class="dropdown-divider"></div>
				<a href="?staffmanagement"><i class="fas fa-users"></i><span style="margin-left: 10px;">Staff Management</span></a>
				<a href="?report" class="active1"><i class="fas fa-users"></i><span style="margin-left: 10px;">Report</span></a>
				<div class="dropdown-divider"></div>
				<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
			</div>
		</div>
		<div style="width: 100%;">
			<div style="display: flex;margin-left: 10px;width: 100%;">
				<div style="width: 100%;
							height: auto;
							background-color: white;
							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
							padding: 20px;">
					<div>
						<h2>Cash <b>Report</b></h2>
						<br>
						<div>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<div id="columnchart_values"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

	$color = array("#FF0000", "#FFFF00", "#33FF33", "#660066", "#FF00CC", "#33CCCC", "#0000FF", "#666666", "#FF9966", "#339966", "#000000", "#6666CC");

	$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December",);

	?>
	<script type="text/javascript">
		google.charts.load("current", {
			packages: ['corechart']
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				["Month", "Total", {
					role: "style"
				}],
				<?php
				$sql_report = "SELECT SUM(payment_total) AS totalPrice, Month(payment_date) AS month FROM payment GROUP BY MONTH(payment_date)";
				$result_report = mysqli_query($conn, $sql_report);

				if ($result_report->num_rows > 0) {
					while($row_report = $result_report->fetch_assoc()){
						$totalPriceReport = $row_report['totalPrice'];
						(int)$month1 = $row_report['month'] -1;

						?>["<?php echo $months[$month1]; ?>", <?php echo $totalPriceReport?>, "<?php echo $color[$month1] ?>"],<?php
					}

					
				}
				?>
			]);

			var view = new google.visualization.DataView(data);
			view.setColumns([0, 1,
				{
					calc: "stringify",
					sourceColumn: 1,
					type: "string",
					role: "annotation"
				},
				2
			]);

			var options = {
				title: "Cashflow per Month",
				bar: {
					groupWidth: "95%"
				},
				legend: {
					position: "none"
				},
			};
			var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
			chart.draw(view, options);
		}
	</script>
<?php
}

?>