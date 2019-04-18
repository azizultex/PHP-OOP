<?php 
header("X-XSS-Protection:0");

if(isset($_GET['fname']) && !empty($_GET['fname'])){
    // $fname = htmlspecialchars($_GET['fname']);
    // $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_STRING);
    $fname = filter_var($_GET['fname'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
}
if(isset($_GET['lname']) && !empty($_GET['lname'])){
    $lname = htmlspecialchars($_GET['lname']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .simple-form{
            width:600px;
            margin:50px auto;
            border:1px solid #ddd;
            padding:10px;

        }
        .simple-form input{
            width:98%;
            padding:10px;
            margin-bottom:10px;
        }
        .simple-form input[type="submit"]{
            width:20%;
            margin:0 auto;
        }
    </style>
</head>
<body>

    <div class="simple-form">
    <form action="" method="get">
        <label for="fname">First Name</label>
        <input type="text" name="fname" placeholder="First Name" id="fname">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" placeholder="Last Name" id="lname">
        <input type="submit" value="Submit">
    </form>
        <p>
            <?php if(isset($fname) && !empty($fname)):?>
            First Name:<?php echo $fname;?> <br>
            <?php endif;?>
            <?php if(isset($lname) && !empty($lname)):?>
            Last Name :<?php echo $lname;?>
             <?php endif;?>
        </p>
    </div>

</body>
</html>