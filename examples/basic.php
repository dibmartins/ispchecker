<?php

require '../vendor/autoload.php';

use IspChecker\IspChecker;

$ipVisitor = $_SERVER['REMOTE_ADDR'];

$isp = IspChecker::check($ipVisitor);

print_r($isp);