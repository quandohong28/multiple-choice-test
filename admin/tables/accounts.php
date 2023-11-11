<section class="bg-light p-5 rounded-3 mb-5">
    <h3 class="text-dark text-center mb-5">Danh sách tài khoản</h3>

    <a class="btn btn-sm btn-info mb-2" href="#" data-toggle="modal" data-target="#addaccountmodal">Thêm tài khoản</a>

    <table class="table table-striped">
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
        <?php foreach ($accounts as $account) :
            extract($account);

        ?>
            <tbody>
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
            </tbody>
        <?php endforeach; ?>
    </table>
    <nav>
        <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </nav>


    <!------Thêm tài khoản ----->
    <?php include 'modals/addaccountmodal.php' ?>

    <!------Sửa tài khoản ----->
    <?php include 'modals/editaccountmodal.php' ?>
</section>