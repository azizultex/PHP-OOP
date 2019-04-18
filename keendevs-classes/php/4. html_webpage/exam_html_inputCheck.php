
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
    <?php 
        $fname="";
        $lname ="";
        $checked ="";
    ?>

    <div class="simple-form">
        <p>
            <?php 
            if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])): ?>
            Fast Name: <?php echo $fname = $_REQUEST['fname']; ?> <br>
            <?php endif; ?>

            <?php 
            if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])): ?>
            Last Name: <?php echo $lname = $_REQUEST['lname']; ?>
            <?php endif; ?>
            
            <?php 
            if(isset($_REQUEST['cb1']) && ($_REQUEST['cb1'] == 1)){
                $checked = " checked"; 
            } ?>


            <?php 
                function checkFruits($value){
                    if(isset($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])){
                        return " checked";
                    }
                }
            ?>

        </p>
        <form action="" method="GET">
            <label for="fname">First Name</label>
            <input type="text" name="fname" placeholder="First Name" id="fname">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" id="lname">

            <input type="checkbox" name="fruits[]" value="mango" <?php echo checkFruits('mango');?>><br>
            <input type="checkbox" name="fruits[]" value="orange" <?php echo checkFruits('orange');?>><br>
            <input type="checkbox" name="fruits[]" value="banana" <?php echo checkFruits('banana');?>><br>

            <input type="submit" value="Submit">

        </form>
        
    </div>

</body>
</html>