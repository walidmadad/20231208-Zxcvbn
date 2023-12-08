<?php
require 'vendor/autoload.php';

use ZxcvbnPhp\Zxcvbn;

$password = "testPassword";

$zxcvbn = new Zxcvbn();
$score = $zxcvbn->passwordStrength($password);

echo $score['score'];

