<?php
include '../model/account.php';
include '../model/pdo.php';

pdo_connect();

if (isset($_GET['act']) && $_GET['act'] !== '') {
    switch ($_GET['act']) {
        case 'login':
            if (isset($_POST['login_submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = login($username, $password);
                if ($user) {
                    $_SESSION['user'] = $user;
                    header('Location: ../index.php');
                } else {
                    header('Location: ../views/login.php');
                }
            }
            break;

        case 'signup':
            if (isset($_POST['signup_submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $conf_pass = $_POST['conf_pass'];
                if ($username == getUserByUsername($username)['username']) {
                    if ($password === $conf_pass) {
                        signup($username, $password);
                        header('Location: ../views/login.php');
                    } else {
                        header('Location: ../views/signup.php');
                    }
                } else {
                    header('Location: ../views/signup.php');
                }
            }
            break;

        default:
            # code...
            break;
    }
}
