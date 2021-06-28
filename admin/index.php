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
	</style>
</head>

<body>

	<?php include('header.php') ?>

	<?php include('dashboard.php') ?>
	<?php include('staffmanagement.php') ?>
	<?php include('addstaff.php') ?>
	<?php include('profile.php') ?>



	<script type="text/javascript">
		$('#password, #repassword').on('keyup', function () {
		  if ($('#password').val() == $('#repassword').val()) {
		    $('#message').html('**Matching').css('color', 'green');
		  } else 
		    $('#message').html('**Not Matching').css('color', 'red');
		});

		// pagination
		$(document).ready(function() {
			$('#stafflist').DataTable({
				"pagingType": "full_numbers"
			});
		});
		
	</script>
</body>

</html>