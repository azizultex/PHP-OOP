
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
		<form action="" method="GET">
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
			<label for="fname">First Name</label>
			<input type="text" name="fname" placeholder="fname" id="fname">
			<label for="lname">last Name</label>
			<input type="text" name="lname" placeholder="lname" id="lname">
			<input type="submit" value="SUBMIT"><br>
			<?php if(isset($fullname) && !empty($fullname)): ?>
				FULLNAME : <?php echo $fullname?>
				<?php endif?>
		</form>
	</div>

	
	<div class= "myform">
	   <h1>MY first Form</h1>
			
	     <p>
		

          <?php if(isset($fname) && !empty($fname)):?>
		   First name:<?php echo $fname;?> <br>
		   <?php endif ?>
           <?php if(isset($lname) && !empty($lname)):?>
		   last name:<?php echo $lname;?>
		   <?php endif ?>
		 </p>
		 <form action="" method="GET">
		 <label for="fname">First Name</label>
		 <input type="text" name="fname" id="fname">
		 <label for="lname">last Name</label>
		 <input type="text" name="lname" id="lname">
		 <input type="submit" value="submit">
		 </form>
	</div>
</body>
</html>