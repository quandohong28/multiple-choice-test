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
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    signup($email, $username, $hashed_password);
                    header('Location: ../views/login.php');
                    exit;
                } else {
                    header('Location: ../views/signup.php');
                    exit;
                }
            }
            break;

        case 'change_password_submit':
            if (isset($_POST['change_password_submit'])) {
                $id = $_SESSION['user']['id'];
                $old_password = htmlspecialchars($_POST['old_password']);
                $password = htmlspecialchars($_POST['password']);
                $conf_pass = htmlspecialchars($_POST['conf_pass']);

                if ($password === $conf_pass) {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    changePassword($id, $old_password, $hashed_password);
                    unset($_SESSION['user']);
                    session_regenerate_id(true);
                    header('Lo  cation: ../views/login.php');
                    exit;
                } else {
                    header('Location: ../views/signup.php');
                    exit;
                }
            }
            break;

        default:
            # code...
            break;
    }
}
