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
        <tbody>
            <tr class="">
                <td>R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>
                    <img src="" alt="">
                </td>
                <td>R1C3</td>
                <td>R1C3</td>
                <td>R1C3</td>
                <td>R1C3</td>
                <td class="d-flex gap-3">
                    <a class="btn btn-warning btn-sm" href="#" data-toggle="modal" data-target="#editaccountmodal"><i
                            class="fa-regular fa-pen-to-square"></i></a>
                    <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                        href="?act=tables&data=del_account"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
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

    <form action="?act=tables&data=add_account" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="addaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="username">Tên đăng nhập</label>
                                        <input type="text" name="username" id="username"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="password">Mật khẩu</label>
                                        <input type="text" name="password" id="password"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="fullname" class="form-label">Tên đầy đủ</label>
                                        <input type="text" name="fullname" class="form-control form-control-sm"
                                            id="fullname" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Email</label>
                                        <input type="email" id="emailAddress" name="emailAddress"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <textarea name="address" cols="30" rows="3" class="form-control form-control-sm"
                                            id="address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="tel">Số điện thoại</label>
                                        <input type="tel" id="tel" name="tel" class="form-control form-control-sm" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <label class="form-label select-label">Vai trò</label>
                                    <select name="role_id" class="select form-control form-control-sm">
                                        <option value="1">Người dùng</option>
                                        <option value="0">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="introduce" class="form-label">Mô tả</label>
                                        <textarea name="introduce" cols="30" rows="3"
                                            class="form-control form-control-sm" id="introduce"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="avatar">Ảnh đại diện</label>
                                        <input class="form-control form-control-sm" id="avatar" name="avatar"
                                            type="file" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit" data-dismiss="modal">Hủy</button>
                        <button type="submit" name="btn_add" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!------Sửa tài khoản ----->

    <form action="?act=tables&data=edit_account" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="editaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="username">Tên đăng nhập</label>
                                        <input type="text" name="username" id="username"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="password">Mật khẩu</label>
                                        <input type="text" name="password" id="password"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="fullname" class="form-label">Tên đầy đủ</label>
                                        <input type="text" name="fullname" class="form-control form-control-sm"
                                            id="fullname" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Email</label>
                                        <input type="email" id="emailAddress" name="emailAddress"
                                            class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <textarea name="address" cols="30" rows="3" class="form-control form-control-sm"
                                            id="address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="tel">Số điện thoại</label>
                                        <input type="tel" id="tel" name="tel" class="form-control form-control-sm" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <label class="form-label select-label">Vai trò</label>
                                    <select name="role_id" class="select form-control form-control-sm">
                                        <option value="1">Người dùng</option>
                                        <option value="0">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="introduce" class="form-label">Mô tả</label>
                                        <textarea name="introduce" cols="30" rows="3"
                                            class="form-control form-control-sm" id="introduce"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="avatar">Ảnh đại diện</label>
                                        <input class="form-control form-control-sm" id="avatar" name="avatar"
                                            type="file" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit" data-dismiss="modal">Hủy</button>
                        <button type="submit" name="btn_edit" class="btn btn-primary">Xác nhận</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</section>