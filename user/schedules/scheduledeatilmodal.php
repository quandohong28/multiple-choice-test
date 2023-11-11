<div class="modal fade modal-lg" id="scheduledeatilmodal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lịch thi chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Mã đề thi</th>
                                        <th scope="col">Chuyên mục</th>
                                        <th scope="col">Số lượng câu hỏi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row" id="id"></td>
                                        <td scope="row" id="">
                                            <span class="badge bg-light text-dark">Nhấn bắt đầu để hiển thị</span>
                                        </td>
                                        <td scope="row" id=""></td>
                                        <td scope="row" id=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-sm btn-primary">Bắt đầu làm bài</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var modalId = document.getElementById('scheduledeatilmodal');

    modalId.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = button.getAttribute('data-bs-value');

        console.log(recipient);
    });
</script>