<?php

require '../vendor/autoload.php';

use IspChecker\IspChecker;

$isp = IspChecker::check($ipVisitor);

echo '<pre>';
print_r($isp);