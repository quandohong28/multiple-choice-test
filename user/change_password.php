<div class="profile bg-primary-gradient p-3 rounded">
    <div class="d-flex gap-5 my-5">
        <div class="col-3 px-3">
            <p class="fw-bold">Đổi mật khẩu</p>
            <small>Mật khẩu mới sẽ dùng để đăng nhập và xác minh thông tin sau này. Bạn cần cẩn trọng với việc <i>Đổi mật khẩu</i></small>
        </div>
        <div class="col-8 p-5 bg-white rounded shadow">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Mật khẩu cũ</label>
                    <input type="text" name="email" id="email" class="form-control form-control-sm">
                    <small id="helpId" class="text-muted">Mật khẩu hiện tại</small>
                </div>

                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Mật khẩu mới</label>
                    <input type="password" name="email" id="email" class="form-control form-control-sm">
                    <small id="helpId" class="text-muted">Mật khẩu phải lớn hơn 8 ký tự và chứa ít nhất 1 số, phân biệt chữ hoa chữ thường</small>
                </div>

                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Nhập lại mật khẩu mới</label>
                    <input type="password" name="email" id="email" class="form-control form-control-sm">
                    <small id="helpId" class="text-muted">Phải trùng với mật khẩu mới</small>
                </div>

                <hr>
                <div class="text-end">
                    <button class="btn btn-sm btn-outline-white">Huỷ</button>
                    <button class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>