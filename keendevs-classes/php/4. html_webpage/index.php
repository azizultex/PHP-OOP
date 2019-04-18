
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		
	body h1{
		text-align:center;
		font-size:36px;
	}
	.myform{
		max-width:400px;
		margin:0 auto;
		padding:20px;
		font-size:30px;
	}
	.myform input{
		width:400px;
		font-size:20px;
		padding:10px;
		margin-bottom:20px;
	}
	.myform input[type="submit"]{
		width:100px;
		background-color:#424242;
		color:#FF9800;
		border:0;
	}
	.myform input[type="submit"]:hover{
		background-color:#fff;
		color:#424242;
		border:1px solid#FF9800;
	}
	</style>
</head>
<body>
	<div class="myform">
		<h1>MY FIRST FORM</h1>
		<p>
			<?php
			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$fullname = $fname." ".$lname;
			?>
		<?php if(isset($fname) && !empty($fname)): ?>
			FIRST NAME: <?php echo $fname?> <br>
			<?php endif ?>
			<?php if(isset($lname) && !empty($lname)): ?>
			LAST NAME: <?php echo $lname?><br>
			<?php endif ?>
			</p>
		<form action="" method="GET">
			<label for="fname">First Name</label>
			<input type="text" name="fname" placeholder="fname" id="fname">
			<label for="lname">last Name</label>
			<input type="text" name="lname" placeholder="lname" id="lname">
			<input type="submit" value="SUBMIT"><br>
			<input type="checkbox" name="cb1" id="cb1">
			<label for="cb1">Checkbox</label>
			<label for="photo">photo</label>
			<input type="file" name="photo" id="photo">
		</form>
	</div>