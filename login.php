<?php

$k_adi =  "g221210046@sakarya.edu.tr";
$sifre =  "g221210046";

$email = $_POST["k_adi"];
$password = $_POST["sifre"];

// Check if email and password match expected values
if ($email == $k_adi && $password == $sifre) {
  // Redirect to the desired page
  header("Location: /web_odev/index.html");
  exit();
} else {
  // Redirect back to the same page with an alert message
  header("Location: $_SERVER[PHP_SELF]");
  exit();
}

?>