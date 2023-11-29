<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản</h6>
    </div>
    <div class="card-body">
        <d  iv class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end me-1">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm">
                            <option value="id" selected>ID</option>
                            <option value="username">Tên đăng nhập</option>
                            <option value="fullname">Họ và tên</option>
                            <option value="role">Vai trò</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Cách sắp xếp</label>
                        <select name="filterByLetter" class="form-control form-control-sm">
                            <option value="a-z" selected>A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="search" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3 form-group ">
                        <div class="row">
                            <button name="filter" class="btn btn-sm btn-info me-3 col">
                                <i class="fa fa-fw fa-search fs-6 me-2"></i>
                                <span class="lg-hidden">Tìm kiếm</span>
                            </button>
                            <button type="reset" class="btn btn-sm btn-outline-dark col">
                                <i class="fa-regular fa-fw fa-window-restore"></i>
                                <a href="index.php?act=tables&data=accounts" class="lg-hidden text-decoration-none">Mặc định</a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </d>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addaccountmodal">
                    <i class="fa-regular fa-fw fa-square-plus fa-lg"></i>
                    <span class="md-hidden">Thêm tài khoản</span>
                </a>
            </div>
            <div class="col">
                <?php include 'components/data_export.php' ?>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Ảnh đại diện</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Ảnh đại diện</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($accounts as $account) : extract($account); ?>
                        <tr class="">
                            <td class="align-middle">
                                <?= $id; ?>
                            </td>
                            <td class="align-middle">
                                <?= $username; ?>
                            </td>
                            <td class="align-middle">
                                <?= $fullname; ?>
                            </td>
                            <td class="align-middle">
                                <img src="<?= $pathImg . $avatar; ?>" alt="" width="50px">
                            </td>
                            <td class="align-middle">
                                <?= $email; ?>
                            </td>
                            <td class="align-middle text-truncate" style="max-width: 460px;">
                                <?= $address; ?>
                            </td>
                            <td class="align-middle">
                                <?= $tel; ?>
                            </td>
                            <td class="align-middle">
                                <span class="badge <?php echo $role == 'admin' ? 'bg-primary' : 'bg-danger'; ?>">
                                    <?= $role; ?>
                                </span>
                            </td>
                            <td class="align-middle">
                                <button type="button" class="btn btn-warning btn-sm btneditaccount" data-bs-toggle="modal" data-bs-target="#exampleModalABC" data-value='<?= json_encode($account) ?>'>
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>

                                <a name="dlt_btn" onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_account&id=<?= $id; ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <?php
            $currentURL = "index.php?act=tables&data=accounts";
            $amountPage = ceil(count(getAllAccounts()) / 10);
            for ($page = 1; $page <= $amountPage; $page++) :
            ?>
                <li class="page-item"><a class="page-link" href="<?= $currentURL . "&page=$page" ?>"><?= $page ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </div>
    <!------Thêm tài khoản ----->
    <?php include 'modals/addaccountmodal.php' ?>

    <!------Sửa tài khoản ----->
    <?php include 'modals/editaccountmodal.php' ?>
</div>