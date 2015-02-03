<!DOCTYPE html>
<html>
<head>
	<title>Login | Chits</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet" >
	<link href="<?php echo base_url().'assets/css/styles.css';?>" rel="stylesheet" >
</head>
<body>

	<div class="container my-borders mycontainer-background">

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php echo base_url(); ?>img/header.jpg" class="img-margin">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div style="background-color: #229933;">
					<h5 style="color: #fff; margin-left: 1%;"> You must login to continue </h5>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div style="background-color: #fff; height: 50px;">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-center"> Welcome to CHITS. Please login to proceed. </h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div style="background-color: #fff; height: 10px;">
				</div>
			</div>
		</div>
		<div class="row myinput">
			<?php 
				$attributes = array('class' => 'form-group', 'col-md-12');
				echo form_open('login/login_validation', $attributes);
			?>
			    <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4">
			        <input type="text" class="form-control input-lg myinput" placeholder="Username">
			    </div>
			    <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4">
			        <input type="password" class="form-control input-lg myinput" placeholder="Password">
			    </div>
			    <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4">
			        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
			        <h4 class="text-center"><a href="#">I forgot my password</a></h4>
			    </div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div style="background-color: #fff; height: 100px;">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-offset-3 col-md-6 col-md-offset-3">
					<h6 class="text-center">
						Copy right &copy; 2012-2013 National Telehealth Center - University of the Philippines Manila
					</h6>
				</div>
			</div>
		</div>

	</div>

</body>
</html>