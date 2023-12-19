<div class="d-flex min-vh-100">
    <div class="d-flex flex-column flex-shrink-0 pt-3 pe-3 bg-light h-100" style="width: 200px;">
        <span class="fs-5 ms-3">Cài đặt</span>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto gap-3">
            <li class="nav-item">
                <a href="?act=setting&controller=general" class="nav-link">
                    Cài đặt chung
                </a>
            </li>
            <li>
                <a href="?act=setting&controller=schedule" class="nav-link">
                    Lịch thi
                </a>
            </li>
            <li>
                <a href="?act=setting&controller=practice_exam" class="nav-link">
                    Thi thử
                </a>
            </li>
            <li>
                <a href="?act=setting&controller=notification" class="nav-link">
                    Thông báo
                </a>
            </li>
            <li>
                <a href="?act=setting&controller=login" class="nav-link">
                    Đăng nhập
                </a>
            </li>
        </ul>
    </div>
    <div class="p-5 bg-white col-12 mt-3 rounded-3">
        <?php
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'general':
                    include 'setting/general.php';
                    break;
                default:
                    # code...
                    break;
            }
        }
        ?>
    </div>
</div>