<div class="modal fade" id="addaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="?act=tables&data=add_account" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center align-items-center h-100 mt-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="username">Tên đăng nhập</label>
                                    <input type="text" name="username" id="username" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="password">Mật khẩu</label>
                                    <input type="text" name="password" id="password" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline w-100">
                                    <label for="fullname" class="form-label">Họ và tên</label>
                                    <input type="text" name="fullname" class="form-control form-control-sm" id="fullname" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline w-100">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <textarea name="address" cols="30" rows="3" class="form-control form-control-sm" id="address"></textarea>
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
                                    <?php foreach ($getRole as $key => $value) : ?>
                                        <option value="<?= $value['id'] ?>">
                                            <?= $value['role'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="introduce" class="form-label">Mô tả</label>
                                    <textarea name="introduce" cols="30" rows="3" class="form-control form-control-sm" id="introduce"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="avatar">Ảnh đại diện</label>
                                    <input class="form-control form-control-sm" id="avatar" name="avatar" type="file" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <button type="submit" name="btn_add" class="btn btn-primary">Xác nhận</button>
            </div>
        </div>
    </div>
</div>