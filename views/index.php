<?php
session_start();
include '../model/account.php';
include '../model/pdo.php';

pdo_connect();

if (isset($_GET['act']) && $_GET['act'] !== '') {
    switch ($_GET['act']) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $user = login($username, $password);
                if ($user) {
                    $_SESSION['user'] = $user;
                    session_regenerate_id(true);
                    header('Location: ../index.php');
                    exit;
                } else {
                    header('Location: ../views/login.php');
                    exit;
                }
            } else {
                echo "Tên đăng nhập hoặc mật khẩu không đúng.";
            }
            break;

        case 'signup':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = htmlspecialchars($_POST['email']);
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $conf_pass = htmlspecialchars($_POST['conf_pass']);
                if ($password === $conf_pass) {
                    signup($email, $username, $password);
                    header('Location: ../views/login.php');
                    exit;
                } else {
                    header('Location: ../views/signup.php');
                    exit;
                }
            }
            break;

        case 'change_password_submit':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_SESSION['user']['id'];
                $old_password = htmlspecialchars($_POST['old_password']);
                $password = htmlspecialchars($_POST['password']);
                $conf_pass = htmlspecialchars($_POST['conf_pass']);

                if ($password === $conf_pass) {
                    if (changePassword($id, $old_password, $password)) {
                        unset($_SESSION['user']);
                        header('Location: ../views/login.php');
                        exit;
                    } else {
                        header('Location: ../views/change_password.php');
                        exit;
                    }
                } else {
                    header('Location: ../views/change_password.php');
                    exit;
                }
            }
            break;
        default:
            # code...
            break;
    }
}
