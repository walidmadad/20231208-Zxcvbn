<?php
$password = "123456";

//generate salt with cryptographic
$salt = openssl_random_pseudo_bytes(32);

$result= hash('sha256', $password . $salt);

$hash_md5 = md5($password);
$hash_sha256 = hash('sha256', $password);
$hash_sha512 = hash('sha512', $password);
$hash_sha1 = hash('sha1', $password);

echo 'md5 : '. $hash_md5 ."<br>";
echo 'sha256 : '. $hash_sha256 ."<br>";
echo 'sha512 : '. $hash_sha512 ."<br>";
echo 'sha-1 : '. $hash_sha1 ."<br>";
echo 'sha512 with salt: ' . $result ."<br>";

$salt = openssl_random_pseudo_bytes(32);
$result= hash('sha256', $password . $salt);

echo 'another sh512 with salt : '. $result ."<br>";