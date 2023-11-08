<div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5">
    <div class="filter px-5 py-3 mb-5 bg-white shadow rounded">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <ul style="margin: auto; display: flex; justify-content: center;" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?act=result&nav=general">Bảng điểm chung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?act=result&nav=list&kind=that">Thi thật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?act=result&nav=list&kind=thu">Thi thử</a>
                </li>
            </ul>
        </nav>
    </div>
<?php

if (isset($_GET['nav'])) {
    switch ($_GET['nav']) {
        case 'general':
            include('general.php');
            break;

        case 'list':
            include('list.php');
            break;
            
        case 'detail_exam':
			$avatarPath = '../assets/img/accounts/';
            include "detail_exam.php";
            break;

        default:
            include('general.php');
            break;
    }
} else {
    include('general.php');
}
?>