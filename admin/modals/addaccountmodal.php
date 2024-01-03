<div class="modal fade" id="addaccountmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="?act=tables&data=add_account" method="POST" enctype="multipart/form-data" id="form-add-account">
                <div class="row justify-content-center align-items-center h-100 mt-5">
                    <div class="col-11">
                        <div class="row mb-3">
                            <div class="col form-group">
                                <label class="form-label" for="username">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" />
                                <small class="form-message text-danger"></small>
                            </div>
                            <div class="col form-group">
                                <div class="form-outline">
                                    <label class="form-label" for="password">Mật khẩu</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm" />
                                    <small class="form-message text-danger"></small>
                                </div>
                            </div>
                            <div class="col form-group">
                                <label for="fullname" class="form-label">Họ và tên</label>
                                <input type="text" name="fullname" class="form-control form-control-sm" id="fullname" />
                                <small class="form-message text-danger"></small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col form-group">
                                <label class="form-label" for="emailAddress">Email</label>
                                <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-sm" />
                                <small class="form-message text-danger"></small>
                            </div>
                            <div class="col form-group">
                                <label class="form-label" for="tel">Số điện thoại</label>
                                <input min="0" type="number" id="tel" name="tel" class="form-control form-control-sm" />
                                <small class="form-message text-danger"></small>
                            </div>
                            <div class="col form-group">
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
                            <div class="col-12 mb-3 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="introduce" class="form-label">Giới thiệu</label>
                                    <textarea name="introduce" cols="30" rows="3" class="form-control form-control-sm" id="introduce"></textarea>
                                    <small class="form-message text-danger"></small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-12 form-group">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <textarea name="address" cols="30" rows="3" class="form-control form-control-sm" id="address"></textarea>
                                <small class="form-message text-danger"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="avatar">Ảnh đại diện</label>
                                    <input class="form-control form-control-sm" id="avatar" name="avatar" type="file" />
                                    <small class="form-message text-danger"></small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // Validate form
    // document.addEventListener('DOMContentLoaded', function() {
    //     Validator({
    //         form: '#form-add-account',
    //         formGroupSelector: '.form-group',
    //         errorSelector: '.form-message',
    //         rules: [
    //             Validator.isRequired('#username', 'Tên đăng nhập không được để trống'),
    //             Validator.isRequired('#password', 'Mật khẩu không được để trống'),
    //             Validator.isRequired('#fullname', 'Họ và tên không được để trống'),
    //             Validator.isRequired('#emailAddress', 'Email không được để trống'),
    //             Validator.isEmail('#emailAddress', 'Email không hợp lệ'),
    //             Validator.isRequired('#tel', 'Số điện thoại không được để trống'),
    //             Validator.isPhoneNumber('#tel', 'Số điện thoại không hợp lệ'),
    //         ]
    //     });
    // });
</script>