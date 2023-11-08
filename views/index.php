<?php
session_start();
include '../model/account.php';
include '../model/pdo.php';


pdo_connect();

if (isset($_GET['act']) && $_GET['act'] !== '') {
    switch ($_GET['act']) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = login($username, $password);
                if ($user) {
                    $_SESSION['user'] = $user;
                    header('Location: ../index.php');
                } else {
                    header('Location: ../views/login.php');
                }
            } else {
                echo 123;
            }
            break;

        case 'signup':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $conf_pass = $_POST['conf_pass'];
                if ($password === $conf_pass) {
                    signup($email, $username, $password);
                    header('Location: ../views/login.php');
                } else {
                    header('Location: ../views/signup.php');
                }
            }
            break;
        case 'change_password':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_SESSION['user']['id'];
                $old_password = $_POST['old_password'];
                $password = $_POST['password'];
                $conf_pass = $_POST['conf_pass'];
                if ($password === $conf_pass) {
                    changePassword($id, $old_password, $password);
                    unset($_SESSION['user']);
                    header('Location: ../views/login.php');
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
