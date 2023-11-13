<div class="profile bg-primary-gradient p-3 rounded">
    <form action="?act=edit_profile" method="post" enctype="multipart/form-data">
        <div class="d-flex gap-5 my-5">
            <div class="col-3 px-3">
                <p class="fw-bold fs-4">Hồ sơ</p>
                <div class="mb-5 d-flex justify-content-center align-items-center">
                    <div class="gap-5">
                        <img width="300px" height="300px" style="background-position: center;" class="rounded-circle object-fit-cover" src="<?= $avatarPath . $avatar ?>" id="photo" alt="photo">
                    </div>
                </div>

                <small> Thông tin cá nhân của bạn sẽ được hiển thị công khai, vì vậy hãy thận trọng với những thông tin này.</small>
            </div>
            <div class="col-8 p-5 bg-white rounded shadow">
                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="@example.com" value="<?= $email ?>" aria-describedby="helpId">
                </div>
                <div class="mb-5">
                    <label for="description" class="form-label fw-bold">Cập nhật ảnh đại diện</label>
                    <div class="border border-1 p-5 rounded d-flex flex-column align-items-center">
                        <label for="cover-photo" class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="width: 80px; color: #ccc;">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="mb-3">
                                <span class="badge bg-primary">Upload a file</span>
                                <small class="ate">or drag and drop</small>
                                <input id="cover-photo" hidden name="avatar" type="file">
                            </div>
                            <small class="awc awo axs">PNG, JPG up to 10MB</small>
                        </label>
                    </div>
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label fw-bold">Giới thiệu về bản thân</label>
                    <textarea class="form-control form-control-sm" name="introduce" id="" cols="30" rows="5" placeholder="Viết vài dòng giới thiệu về bản thân!"><?= $introduce ?></textarea>
                </div>

                <div class="d-flex mb-5 gap-5">
                    <div class="col">
                        <label for="fullname" class="form-label fw-bold">Họ và tên</label>
                        <input type="fullname" name="fullname" id="fullname" class="form-control form-control-sm" aria-describedby="helpId" value="<?= $fullname ?>">
                    </div>
                    <div class="col">
                        <label for="tel" class="form-label fw-bold">Số điện thoại</label>
                        <input type="tel" name="tel" id="tel" class="form-control form-control-sm" placeholder="+84" aria-describedby="helpId" value="<?= $tel ?>">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="address" class="form-label fw-bold">Địa chỉ chi tiết</label>
                    <textarea class="form-control form-control-sm" name="address" id="address" cols="30" rows="2"><?= $address ?></textarea>
                </div>
                <hr>
                <div class="text-end">
                    <button class="btn btn-sm btn-outline-white">Huỷ</button>
                    <button type="submit" name="btn_edit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
</div>