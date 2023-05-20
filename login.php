<?php

$k_adi =  "g221210046@sakarya.edu.tr";
$sifre =  "g221210046";

$home_url = "index.html";
$login_url = "login.html";

$email = $_POST["k_adi"];
$password = $_POST["sifre"];

$message1 = "Giriş Başarılı";
$message2 = "Giriş Başarısız, Lütfen Tekrar Deneyiniz";

if ($email == $k_adi && $password == $sifre) {
  
  echo '<script>
            var message = "Sayın '.$email.'' . $message1 . '";
            var title = "Giriş Sistemi";
            var buttonLabel = "OK";
            alert(message);
        </script>';
  echo '<script>window.location.href = "' . $home_url . '";</script>';
} else {
  echo '<script>
            var message = "' . $message2 . '";
            var title = "Giriş Sistemi";
            var buttonLabel = "Tekrar Dene";
            alert(message);
        </script>';
  echo '<script>window.location.href = "' . $login_url . '";</script>';

  exit();
}

?>