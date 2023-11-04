<?php

include './model/account.php';
include './model/pdo.php';

$accounts = getAllAccounts();
echo '<pre>';
var_dump($accounts);
echo '</pre>';
