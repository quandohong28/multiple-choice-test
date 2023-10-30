<div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration  mb-5" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Thêm tài khoản</h3>
                <form enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="username" class="form-control form-control-sm" />
                                <label class="form-label" for="username">Tên đăng nhập</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="password" class="form-control form-control-sm" />
                                <label class="form-label" for="password">Mật khẩu</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <input type="text" class="form-control form-control-sm" id="fullname" />
                                <label for="fullname" class="form-label">Tên đầy đủ</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <input type="text" class="form-control form-control-sm" id="address" />
                                <label for="address" class="form-label">Địa chỉ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <input type="email" id="emailAddress" class="form-control form-control-sm" />
                                <label class="form-label" for="emailAddress">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <input type="tel" id="tel" class="form-control form-control-sm" />
                                <label class="form-label" for="tel">Số điện thoại</label>
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
                    <div class="mt-4 pt-2 text-center">
                        <input class="btn btn-primary btn-sm" type="submit" value="Xác nhận" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>