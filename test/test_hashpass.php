<?php
include "./model/account.php";

$password = "admin";

$hash = hashPassword($password);

echo $hash . '------------';
