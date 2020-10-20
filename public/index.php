<?php
require_once '../vendor/autoload.php';

use App\Wcs\Hello;

$a = new Hello();
echo $a->talk();