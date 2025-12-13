<?php
$password = "Brasil2025@";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
?>
