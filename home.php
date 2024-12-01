<?php
include ('assets/include/config.php');
$sy = $conn->query("SELECT * from school_year where is_on = 1 ")->fetch_array();
 ?>

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
	  <li class="breadcrumb-item active">Dashboard</li>
	</ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

	<!-- Left side columns -->
	<div class="col-lg-8">
	  <div class="row">

	<div class="container">
		<h4>Academic: <?php echo isset($sy['school_year']) ? $sy['school_year'] : '' ?></h4>
	</div>
	<div class="row">
	<div class="card col-md-3 offset-md-2 alert alert-success">
		<div class="card-body text-center">
			Enrolled Students 
			<hr>
			<h3><?php echo $conn->query("SELECT * from enrollment where status = 1 and school_year = ".$sy['id'])->num_rows ?></h3>
		</div>
	</div>
	<div class="card col-md-3 offset-md-2 alert alert-info">
		<div class="card-body text-center">
			Faculty 
			<hr>
			<h3><?php echo $conn->query("SELECT * from faculty where status = 1 ")->num_rows ?></h3>
		</div>
	</div>
	</div>
</div>