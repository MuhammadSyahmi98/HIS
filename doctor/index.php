<?php
session_start();

require "../src/backend/conn.php";

$staff_id = $_SESSION['staff_id'];

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" lang="EN">
	<title>Staff</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="../src/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../src/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

	
	<style type="text/css">
		.sidebar {
			width: 300px;
			height: auto;
			background-color: white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.sidebar a {
			padding: 10px 8px 10px 16px;
			text-decoration: none;
			color: grey;
			display: block;
		}

		.sidebar a:hover {
			color: black;
		}

		.active1 {
			background-color: #33cabb;
			color: white !important;
		}

		.pageSize {
			height: 100%;
			margin-left: 5%;
			margin-right: 5%;
		}

		@media screen {
			#printSection {
				display: none;
			}
		}

		@media print {
			body * {
				visibility: hidden;
			}

			#printSection,
			#printSection * {
				visibility: visible;
			}

			#printSection {
				position: absolute;
				left: 0;
				top: 0;
			}
		}
	</style>
</head>

<body>

	<?php include('header.php') ?>
	<?php include('dashboard.php') ?>
	<?php include('doctor.php') ?>
	<?php include('treatpatient.php') ?>
	<?php include('profile.php') ?>




	<script type="text/javascript">
		// pagination
		$(document).ready(function() {
			$('#patientlist').DataTable({
				"pagingType": "full_numbers"
			});
		});

		$(document).ready(function() {
			$('#queuelist').DataTable({
				"pagingType": "full_numbers"
			});
		});

		$(document).ready(function() {
			$('#checkuplist').DataTable({
				"pagingType": "full_numbers"
			});
		});

		$(document).ready(function() {
			$('#historylist').DataTable({
				"pagingType": "full_numbers"
			});
		});

		$(document).ready(function() {
			$('#wardedlist').DataTable({
				"pagingType": "full_numbers"
			});
		});
		// printing
		document.getElementById("btnPrint").onclick = function() {
			printElement(document.getElementById("printThis"));
		}

		function printElement(elem) {
			var domClone = elem.cloneNode(true);

			var $printSection = document.getElementById("printSection");

			if (!$printSection) {
				var $printSection = document.createElement("div");
				$printSection.id = "printSection";
				document.body.appendChild($printSection);
			}

			$printSection.innerHTML = "";
			$printSection.appendChild(domClone);
			window.print();
		}

		

		//add prescription
		function addInput(divName) {
			var refEl = document.getElementById(divName); // refEl can be anything ex: document.body

			var clone = refEl.cloneNode(true);
			var input = clone.getElementsByTagName("INPUT");


			refEl.parentNode.insertBefore(clone, refEl.nextSibling);
		}
	</script>
	<script>
		$(function() {
			$("#skill_input").autocomplete({
				source: "livesearch.php",
				select: function(event, ui) {
					event.preventDefault();
					$("#skill_input").val(ui.item.value);
					$("#drug_code").val(ui.item.id);
					$("#skill_dose").val(ui.item.dose);
				}
			});
		});
	</script>
</body>

</html>