<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] !== '') {
    if ($_SESSION['user']['role'] == 'admin') {
        header("location: ./admin/index.php?act=home");
    } else {
        header("location: ./user/index.php?act=home");
    }
} else {
    header("location: ./views/landingpage.php");
}
