<div class="profile bg-primary-gradient p-3 rounded">
    <div class="d-flex gap-5 my-5">
        <div class="col-3 px-3">
            <p class="fw-bold">Hồ sơ</p>
            <small> Thông tin cá nhân của bạn sẽ được hiển thị công khai, vì vậy hãy thận trọng với những thông tin này.</small>
        </div>
        <div class="col-8 p-5 bg-white rounded shadow">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="@example.com" value="<?= $email ?>" aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label fw-bold">Giới thiệu về bản thân</label>
                    <textarea class="form-control form-control-sm" name="" id="" cols="30" rows="5"><?= $introduce ?></textarea>
                    <small id="helpId" class="text-muted">Viết vài dòng giới thiệu về bản thân!</small>
                </div>

                <div class="mb-5">
                    <label for="photo" class="form-label fw-bold">Ảnh đại diện</label>
                    <div class="d-flex gap-5 justify-content-start align-items-center">
                        <img width="100px" src="<?= $avatarPath . $avatar ?>" id="photo" alt="photo">
                        <button type="file" class="btn btn-sm btn-outline-primary">Thay đổi</button>
                    </div>
                </div>

                <div class="mb-5">
                    <label for="cover-photo" class="form-label fw-bold">Ảnh bìa</label>
                    <div class="border border-1 p-5 rounded d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="width: 80px; color: #ccc;">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="mb-3">
                            <label for="cover-photo" class="">
                                <span class="badge bg-primary">Upload a file</span>
                                <small class="ate">or drag and drop</small>
                                <input id="cover-photo" hidden name="cover-photo" type="file">
                            </label>
                        </div>
                        <small class="awc awo axs">PNG, JPG up to 10MB</small>
                    </div>
                </div>
                <hr>
                <div class="text-end">
                    <button class="btn btn-sm btn-outline-white">Huỷ</button>
                    <button class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <hr>

    <div class="d-flex gap-5 my-5">
        <div class="col-3 px-3">
            <p class="fw-bold">Thông tin cá nhân</p>
            <small>Sử dụng một địa chỉ thường trú nơi bạn có thể nhận thư.</small>
        </div>
        <div class="col-8 p-5 bg-white rounded shadow">
            <form action="">
                <div class="d-flex mb-5 gap-5">
                    <div class="col">
                        <label for="fisrtname" class="form-label fw-bold">Họ</label>
                        <input type="fisrtname" name="fisrtname" id="fisrtname" class="form-control form-control-sm" aria-describedby="helpId" value="<?= $firstname ?>">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label fw-bold">Tên</label>
                        <input type="lastname" name="lastname" id="lastname" class="form-control form-control-sm" aria-describedby="helpId" value="<?php foreach ($lastname as $name) {
                                                                                                                                                        echo $name . ' ';
                                                                                                                                                    } ?>">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                </div>

                <div class="mb-5 d-flex">
                    <div class="col-8">
                        <label for="tel" class="form-label fw-bold">Số điện thoại</label>
                        <input type="tel" name="tel" id="tel" class="form-control form-control-sm" placeholder="+84" aria-describedby="helpId" value="<?= $tel ?>">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                </div>

                <div class="mb-5 d-flex">
                    <div class="col-8">
                        <label for="city" class="form-label fw-bold">Tỉnh</label>
                        <select class="form-select form-select-sm" name="city" id="city">
                            <option selected>Lựa chọn</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="address" class="form-label fw-bold">Địa chỉ chi tiết</label>
                    <textarea class="form-control form-control-sm" name="address" id="address" cols="30" rows="2"><?= $address?></textarea>
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
                <hr>
                <div class="text-end">
                    <button class="btn btn-sm btn-outline-white">Huỷ</button>
                    <button class="btn btn-sm btn-primary">Lưu</button>
            </form>
        </div>
    </div>
    <hr>
</div>

<script>
    const city = document.getElementById('city');
    fetch('https://provinces.open-api.vn/api/?depth=2')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            data.forEach(item => {
                var option = document.createElement('option');
                option.value = item.code; // Giá trị tùy chọn (value) có thể là item.id hoặc một giá trị khác
                option.textContent = item.name; // Văn bản hiển thị trong tùy chọn (option text)
                city.appendChild(option);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

</script>