<nav class="nav justify-content-center  ">
    <a class="nav-link" href="?act=result&nav=general">Bảng điểm chung</a>
    <a class="nav-link" href="?act=result&nav=list&kind=that">Thi thật</a>
    <a class="nav-link" href="?act=result&nav=list&kind=thu">Thi thử</a>
</nav>

<?php
if (isset($_GET['nav'])) {
    switch ($_GET['nav']) {
        case 'general':
            include('general.php');
            break;

        case 'list':
            include('list.php');
            break;

        default:
            include('general.php');
            break;
    }
} else {
    include('general.php');
}
?>