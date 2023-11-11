<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role_id'] == 0) {
        header("location: ./admin/index.php?act=home");
    } else if ($_SESSION['user']['role_id'] == 1) {
        header("location: ./user/index.php?act=home");
    }
} else {
    header("location: ./views/landingpage.php");
}
