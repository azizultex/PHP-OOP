<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP in HTML</title>
    <style>
        .datetime {
            font-size: 30px;
        }
    </style>
</head>
<body>

    <h2>Welcome to our Weather App</h2>

    <span class="datetime">
    <?php 
    
        date_default_timezone_set("asia/dhaka");
        echo date("D M j G:i:s T Y");

    ?>
    </span>
    <div class="clock datetime"></div>

    <script>
    
        function clock(){
            var clockDiv = document.querySelector(".clock");
            clockDiv.innerHTML = Date();
        }

        setInterval(clock, 1000);
    
    </script>
    
</body>
</html>  