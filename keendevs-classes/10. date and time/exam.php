<?php 
date_default_timezone_set('Asia/Dhaka');
$five = strtotime("+6 days");

echo date("h:i:s a D F, Y", $five);

