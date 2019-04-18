<?php 
// phpinfo();
header('X-XSS-Protection:0'); 
// include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Run Local Server Using Power Shell</title>

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
		body {
			margin-top: 30px;
		}

		input[type="file"] {
		    border: 0.1rem solid #d1d1d1;
		    border-radius: .4rem;
		    height: 3.8rem;
		    padding: .6rem 1.0rem;
		    width: 100%;
		}
	</style>

	<script>
	    $(document).ready(function (e) {
		    $("#confirm").click(function () {
		        $("#submit").attr("disabled", !this.checked);
		    });
	    });
	</script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="column">
				<table>
				  	<thead>
					    <tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Food</th>
							<th>Mecidine</th>
							<th>Gender</th>
							<th>Image</th>
							<th>PDF</th>
							<th>Message</th>
							<th>Shipping</th>
					    </tr>
				 	</thead>
				  	<tbody>
						<tr>
							<td>
								<?php if(isset($_REQUEST['firstName'])){
									echo htmlspecialchars($_REQUEST['firstName']);
								} ?>
							</td>
							<td>
							<?php if(isset($_REQUEST['lastName'])){
									echo htmlspecialchars($_REQUEST['lastName']);
								} ?>
							</td>
							<td>
							<?php if(isset($_REQUEST['email'])){
									echo $_REQUEST['email'];
								} 
							?>
							</td>
							<td>
								<?php 
									if(isset($_REQUEST['food'][1])){
										echo "<ol>";
										foreach($_REQUEST['food'][1] as $single_food){
											printf("<li>%s</li>", $single_food);
										}
										echo "</ol>";
									}
								?>
							</td>

							<td>
							<?php 
								if(isset($_REQUEST['food'][2])){
									echo "<ol>";
									foreach($_REQUEST['food'][2] as $single_medicin){
										if($single_medicin !=='napa'){
											printf("<li>%s</li>", $single_medicin);
										}else{
											printf('<li style="color:red;">%s</li>', $single_medicin);
										}
									}
									echo "</ol>";
								}
							?>
							</td>
								
							<td>
							<?php 

							
							
							?>	
							</td>
								
							<td>
								<?php 
									$allowimg = array(
										'image/jpg',
										'image/jpeg',
										'image/png',
									);
									if(isset($_FILES['document'])) {
										$totalCount = count($_FILES['document']['name']);
										for($i=0; $i<$totalCount; $i++) {
											if(in_array($_FILES['document']['type'][$i], $allowimg)) {
												move_uploaded_file($_FILES['document']['tmp_name'][$i], 'files/'.$_FILES['document']['name'][$i]);
												printf('<img width="50" height="50" src="%s" style="float: left; margin: 2px 0">', 'files/'.$_FILES['document']['name'][$i]);
											}
										}
									}
								 ?>
							</td>
								
							<td>
								<?php 
									$allowPdf = array(
										'application/pdf'
									);

									if(isset($_FILES['document'])) {
										$totalCount = count($_FILES['document']['name']);
										for($i=0; $i<$totalCount; $i++) {
											if(in_array($_FILES['document']['type'][$i], $allowPdf)) {
												move_uploaded_file($_FILES['document']['tmp_name'][$i], 'files/'.$_FILES['document']['name'][$i]);
												printf('<a href="%s" target="_blank">%s</a>', 'files/'.$_FILES['document']['name'][$i], $_FILES['document']['name'][$i]);
											}
										}
									}
								 ?>
							</td>
								
							<td>
								<?php 
									if(isset($_POST['message']) && $_POST['message'] !== ''){
										echo $email = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
									} 
								?>
							</td>
								
							<td>
								<?php 
									if(isset($_POST['shipping'])){
										if($_POST['shipping'] == 'quicks') {
											echo 'Quick Shipping';
										}elseif($_POST['shipping'] == 'regulars') {
											echo 'Regular Shipping';
										}elseif($_POST['shipping'] == 'dhl') {
											echo 'DHL Shipping';
										}
									}
								?>
							</td>
						</tr>
				  	</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="POST" enctype="multipart/form-data">
					<fieldset>
						<div class="row">
							<div class="column">
								<label for="firstName">First Name</label>
								<input type="text" name="firstName" placeholder="First Name" id="firstName">
							</div>

							<div class="column">
								<label for="lastName">Last Name</label>
								<input type="text" name="lastName" placeholder="Last Name" id="lastName">
							</div>
						</div>

						<label for="lastName">Email</label>
						<input type="text" name="email" placeholder="Email" id="email">

						<div class="row">
							<div class="column">
								<label for="lastName">Check Some Food</label>
								<input type="checkbox" name="food[1][]" value="salad"> Salad
								<input type="checkbox" name="food[1][]" value="sandwich"> Sandwich
								<input type="checkbox" name="food[1][]" value="rice"> Rice
							</div>

							<div class="column">
								<label for="lastName">Check Some Medicine</label>
								<input type="checkbox" name="food[2][]" value="napa"> Napa
								<input type="checkbox" name="food[2][]" value="ace"> ACE
								<input type="checkbox" name="food[2][]" value="fexo"> Fexo
							</div>

							<div class="column">
								<label for="">Gender</label>
								<input type="radio" name="gender" value="male"> Male
								<input type="radio" name="gender" value="female"> Female
								<input type="radio" name="gender" value="other"> Other
							</div>
						</div>
						<div class="row">
							<div class="column">
								<label for="food">Shipping Method</label>
								<select name="shipping" id="food">
									<option value="" disabled selected>Select your Shipping</option>
									<option value="quicks">Quick Shipping</option>
									<option value="regulars">Regular Shipping</option>
									<option value="dhl">DHL Shipping</option>
								</select>
							</div>

							<div class="column">
								<label for="lastName">Document</label>
								<input type="file" name="document[]" placeholder="Document" id="document" multiple>
							</div>
						</div>

						<label for="message">Message</label>
						<textarea name="message" placeholder="Message…" id="message"></textarea>

						<div class="row">
							<div class="column">
								<input type="checkbox" name="confirm" id="confirm">
								<label class="label-inline" for="confirm">I agree to terms and conditions in order to place my order?</label>
							</div>
						</div>
						<input class="button-primary" type="submit" id="submit" value="Place Order">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>