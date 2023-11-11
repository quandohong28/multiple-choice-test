<div class="modal fade modal-lg" id="scheduledeatilmodal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lịch thi chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="pt-5">
                        <div class="">
                            <table class="table small table-hover table-responsive">
                                <tr class="col">
                                    <th scope="col">ID</th>
                                    <td scope="col" id="id"></td>
                                </tr>
                                <tr class="col">
                                    <th scope="col">Mã đề thi</th>
                                    <td scope="col" id="exam_code">
                                </tr>
                                <tr class="col">
                                    <th scope="col">Chuyên mục</th>
                                    <td scope="col" id="category"></td>
                                </tr>
                                <tr class="col">
                                    <th scope="col">Số lượng câu hỏi</th>
                                    <td scope="col" id="nunmber_question"></td>
                                </tr>
                            </table>
                            <div class="row">
                                <img src="" alt="" class="category-image">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Đóng</button>
                    <a href="?act=doing_exam&type=real&id=21" class="btn btn-sm btn-primary">Bắt đầu làm bài</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var scheduledeatilmodal = document.getElementById('scheduledeatilmodal');

    scheduledeatilmodal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = JSON.parse(button.getAttribute('data-bs-value'));

        const id = document.getElementById('id');
        const exam_code = document.getElementById('exam_code');
        const category = document.getElementById('category');
        const nunmber_question = document.getElementById('nunmber_question');

        id.innerHTML = recipient[0].schedule_id;
        exam_code.innerHTML = recipient[0].exam_code;
        category.innerHTML = recipient[0].name;
        nunmber_question.innerHTML = recipient[0].number_question;

        const categoryImage = document.querySelector('.category-image');
        categoryImage.src = `../assets/img/categories/${recipient[0].image}`;
    });
</script>