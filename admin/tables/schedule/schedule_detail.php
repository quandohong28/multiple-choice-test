<div class="card shadow mb-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết lịch thi - Danh sách thi sinh tham gia</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include '../components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                    <i class="fa-regular fa-square-plus fa-fw fa-lg"></i>
                    Thêm thí sinh
                </button>
            </div>
            <div class="col">
                <?php include 'components/data_export.php' ?>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($schedule_detail as $key => $value) : ?>
                        <tr class="">
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['account_id'] ?></td>
                            <td><?= $value['fullname'] ?></td>
                            <td class="col-1">
                                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm mx-4" href="?act=tables&data=del_candidate&candidate_id=<?= $value['account_id'] ?>&schedule_id=<?= $schedule_id ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include '../components/pagination.php' ?>
    </div>
</div>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Thêm thí sinh</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 pb-2">
                            <div class="form-outline">
                                <a href="../assets/public/candidates_partten.xlsx" class="btn btn-sm btn-success mb-3">
                                    <i class="fa-regular fa-file-excel fa-fw"></i>
                                    File mẫu
                                </a>
                                <a href="../assets/public/manual.docx" type="button" class="btn btn-sm btn-outline-dark mb-3">
                                    <i class="fa fa-file-download fa-fw"></i>
                                    Hướng dẫn sử dụng
                                </a>
                            </div>
                            <div class="mb-3 pb-2">
                                <label for="username" class="form-label">Thêm một thí sinh</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm">
                                <small class="text-muted">Tên người dùng</small>
                            </div>
                            <div class="file-upload mb-3">
                                <div class="mb-3">
                                    <small>Hoặc</small>
                                </div>
                                <div class="pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="accounts">Tải lên file</label>
                                        <input type="file" id="accounts" name="accounts" class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const username = document.getElementById('username');
    const fileUpload = document.querySelector('.file-upload');

    username.addEventListener('input', function() {
        const inputValue = username.value.trim();

        if (inputValue) {
            // Nếu ô input có giá trị, ẩn DOM element
            fileUpload.classList.add('d-none');
        } else {
            // Ngược lại, hiển thị DOM element
            fileUpload.classList.remove('d-none');
        }
    });
</script>