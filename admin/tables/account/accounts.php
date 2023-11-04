<section class="bg-light p-5 rounded-3 mb-5">
    <h3 class="text-dark text-center mb-5">Danh sách tài khoản</h3>
    <a class="btn btn-sm btn-info mb-2" href="?act=tables&data=add_account" data-toggle="modal" data-target="#addaccountmodal">Thêm tài khoản</a>
    <?php var_dump($accounts);?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <?php foreach ($accounts as $key => $value):
        ?>
        <tbody>
            <tr class="">
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['username']; ?></td>
                <td><?php echo $value['password']; ?></td>
                <td><?php echo $value['fullname']; ?></td>
                <td>
                    <img src="" alt="">
                </td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['address']; ?></td>
                <td><?php echo $value['tel']; ?></td>
                <td><?php echo $value['role_id']; ?></td>
                <td class="d-flex gap-3">
                    <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_account" data-toggle="modal" data-target="#editaccountmodal"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_account"><i class="fa fa-trash"></i></a>
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

    <form method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="addaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="row justify-content-center align-items-center h-100 mt-5">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration  mb-5" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="username">Tên đăng nhập</label>
                                                <input type="text" id="username" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="password">Mật khẩu</label>
                                                <input type="text" id="password" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="fullname" class="form-label">Tên đầy đủ</label>
                                                <input type="text" class="form-control form-control-sm" id="fullname" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="address" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control form-control-sm" id="address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="emailAddress">Email</label>
                                                <input type="email" id="emailAddress" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="tel">Số điện thoại</label>
                                                <input type="tel" id="tel" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <label class="form-label select-label">Vai trò</label>
                                            <select class="select form-control form-control-sm">
                                                <option value="1">Người dùng</option>
                                                <option value="0">Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="avatar">Ảnh đại diện</label>
                                                <input class="form-control form-control-sm" id="avatar" type="file" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit" data-dismiss="modal">Hủy</button>
                        <a class="btn btn-primary">Xác nhận</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!------Thêm tài khoản ----->

    <form method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="editaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa tài khoản</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="row justify-content-center align-items-center h-100 mt-5">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration  mb-5" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="username">Tên đăng nhập</label>
                                                <input type="text" id="username" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="password">Mật khẩu</label>
                                                <input type="text" id="password" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="fullname" class="form-label">Tên đầy đủ</label>
                                                <input type="text" class="form-control form-control-sm" id="fullname" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="address" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control form-control-sm" id="address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="emailAddress">Email</label>
                                                <input type="email" id="emailAddress" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="tel">Số điện thoại</label>
                                                <input type="tel" id="tel" class="form-control form-control-sm" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <label class="form-label select-label">Vai trò</label>
                                            <select class="select form-control form-control-sm">
                                                <option value="1">Người dùng</option>
                                                <option value="0">Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="avatar">Ảnh đại diện</label>
                                                <input class="form-control form-control-sm" id="avatar" type="file" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit" data-dismiss="modal">Hủy</button>
                        <a class="btn btn-primary">Xác nhận</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>