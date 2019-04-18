<?php
// http://php.net/manual/en/filter.filters.php
// http://php.net/manual/en/filter.filters.flags.php


filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
$var = $_GET['email'];
filter_var($var, "filter ID", "options");