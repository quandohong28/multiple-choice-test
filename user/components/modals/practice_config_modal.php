<div class="modal fade modal-lg" id="practiceConfigModal" tabindex="-1" aria-labelledby="practiceConfigModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="practiceConfigModalLabel">Tùy chỉnh đề thi</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="form-body p-5">
                    <strong class="small">Chuyên đề: Khoa học máy tính</strong>
                    <p>Chọn level</p>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="" class="form-label form-label"><span class="badge bg-success">Dễ</span></label>
                            <input type="number" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col">
                            <label for="" class="form-label form-label"><span class="badge bg-warning">Trung Bình</span></label>
                            <input type="number" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col">
                            <label for="" class="form-label form-label"><span class="badge bg-danger">Khó</span></label>
                            <input type="number" name="" id="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exam_time" class="form-label">Thời gian thi</label>
                        <select class="form-select form-select-sm" name="exam_time" id="exam_time">
                            <option value="" selected>30 Phút</option>
                            <option value="">45 Phút</option>
                            <option value="">1 Tiếng</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-dismiss="modal">Huỷ</button>
                    <a href="?act=doing_exam&type=practice&id=21" class="btn btn-sm btn-success" type="submit">Bắt đầu</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var modalId = document.getElementById('modalId');

    modalId.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = button.getAttribute('data-bs-whatever');

        // Use above variables to manipulate the DOM
    });
</script>