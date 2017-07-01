<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $title ?></title>

		<!-- Bootstrap Theme CSS -->
		<link href="<?php echo base_url('assets/bootstrap/css/cosmo.min.css'); ?>" rel="stylesheet">

	</head>

	<body id="page-top" class="index">

		<!-- Navbar -->
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="../" class="navbar-brand">Social Media API</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li>
							<a href="../twitter/">Twitter</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
								Log In <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo base_url('twitter/login'); ?>">Twitter</a></li>
								<li><a href="<?php echo base_url('facebook/login'); ?>">Facebook</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="page-header" id="banner">
				<h2><?php echo $title ?></h2>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><?php echo $title ?></h4>
				</div>
				<div class="panel-body">
					<?php echo $view ?>			
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-3.2.1.min.js') ?>"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

	</body>

</html>