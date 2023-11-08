<!-- Start: Navbar Centered Links -->
<nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light mb-5" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="?act=home">
            <!-- Logo -->
            <img width="36px" src="../assets/img/logo/logo.png" alt="" class="me-3">
            <span>Tech Quiz Hero</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="?act=home">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=schedule">Lịch thi</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=practice">Thi thử</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=support">Hỗ trợ</a></li>
                <li class="nav-item"><a class="nav-link" href="?act=result">Điểm</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= '../assets/img/accounts/' . $_SESSION['user']['avatar'] ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="?act=profile">Hồ sơ</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="?act=setting">Cài đặt</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="?act=change_password">Đổi mật khẩu</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa-solid fa-arrow-right-from-bracket me-3"></i>Đăng xuất</a>
                    </li>
                </ul>
            </div>

            <button class="btn btn-link dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: var(--bs-body-color);"><svg class="bi bi-sun-fill mb-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                </svg></button>

        </div>
    </div>
</nav><!-- End: Navbar Centered Links -->

<!-- logout modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="logoutModalLabel">Bạn có thực sự muốn đăng xuất</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Nhấn Đăng xuất để thoát khỏi phiên làm việc hiện tại.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-dark" data-bs-dismiss="modal">Huỷ</button>
                <a href="?act=logout" class="btn btn-sm btn-danger">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>