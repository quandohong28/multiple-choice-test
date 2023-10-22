<div class="profile bg-primary-gradient p-3 rounded">
    <div class="d-flex gap-5 my-5">
        <div class="col-3 px-3">
            <p class="fw-bold">Thông tin cá nhân</p>
            <p>Thông tin cá nhân của bạn sẽ được hiển thị công khai, vì vậy hãy thận trọng với những thông tin này</p>
        </div>
        <div class="col-8 p-5 bg-white rounded shadow">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="@example.com" aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label fw-bold">Giới thiệu về bản thân</label>
                    <textarea class="form-control form-control-sm" name="" id="" cols="30" rows="5"></textarea>
                    <small id="helpId" class="text-muted">Viết vài dòng giới thiệu về bản thân!</small>
                </div>

                <div class="mb-5">
                    <label for="avatar" class="form-label fw-bold">Ảnh đại diện</label>
                    <div class="d-flex gap-5 justify-content-start align-items-center">
                        <img width="50px" src="./assets/icons/user.png" class="avatar" id="avatar" alt="avatar">
                        <button type="file" class="btn btn-sm btn-outline-primary">Thay đổi</button>
                    </div>
                </div>

                <div class="mb-5">
                    <label for="avatar" class="form-label fw-bold">Ảnh bìa</label>
                    <!-- <div class="border border-1 p-5 rounded">
                        <input type="file" class="" data-max-file-size="2M" />
                        <small id="helpId" class="text-muted">
                            <span>Upload file hoặc kéo và thả</span>
                        </small>
                    </div> -->

                    <div class="border border-1 p-5 rounded d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="width: 80px; color: #ccc;">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="mb-3">
                            <label for="file-upload" class="">
                                <span class="badge bg-primary">Upload a file</span>
                                <small class="ate">or drag and drop</small>
                                <input id="file-upload" hidden name="file-upload" type="file">
                            </label>
                        </div>
                        <small class="awc awo axs">PNG, JPG up to 10MB</small>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>

    <div class="d-flex gap-5 my-5">
        <div class="col-4 px-3">
            <p class="fw-bold">Thông tin cá nhân</p>
            <p>Thông tin cá nhân của bạn sẽ được hiển thị công khai, vì vậy hãy thận trọng với những thông tin này</p>
        </div>
        <div class="col-7 px-3 bg-white rounded shadow">

        </div>
    </div>
</div>