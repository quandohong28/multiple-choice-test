<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addaccountmodal">Thêm tài khoản</a>
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
        <?php include 'components/pagination.php'?>
    </div>
    <!------Thêm tài khoản ----->
    <?php include 'modals/addaccountmodal.php' ?>
    
    <!------Sửa tài khoản ----->
    <?php include 'modals/editaccountmodal.php' ?>
</div>
