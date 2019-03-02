<?php

// use nl2br for browser

$str = "The quick brownbrownbrown fox jumps over the lazy dog.";
echo wordwrap($str, 10);
echo PHP_EOL;
echo wordwrap($str, 10, "---", true);