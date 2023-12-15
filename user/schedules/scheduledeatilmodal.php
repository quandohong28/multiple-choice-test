<div class="modal fade" id="scheduledeatilmodal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lịch thi chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="?act=start_exam">
                <div class="modal-body">
                    <div class="py-3">
                        <div class="">
                            <table class="table small table-hover table-responsive">
                                <tr class="col">
                                    <th scope="col">Chuyên mục</th>
                                    <td scope="col" id="category"></td>
                                </tr>
                                <tr class="col">
                                    <th scope="col">Số lượng câu hỏi</th>
                                    <td scope="col" id="number_question"></td>
                                </tr>
                            </table>
                            <div class="row">
                                <img src="" alt="" class="category-image">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="type" value="2">
                    <input type="hidden" name="schedule_id" id="schedule_id">
                    <input type="hidden" name="category_id" id="category_id">
                    <input type="hidden" name="exam_time" id="exam_time"> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" name="start-btn" class="btn btn-sm btn-primary">Bắt đầu làm bài</button>
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

        const category = document.getElementById('category');
        const number_question = document.getElementById('number_question');

        category.innerHTML = recipient.category_name;
        number_question.innerHTML = recipient.number_question;

        const categoryImage = document.querySelector('.category-image');
        categoryImage.src = `../assets/img/categories/${recipient.image}`;

        var type = document.querySelector('#type');
        var schedule_id = document.querySelector('#schedule_id');
        var category_id = document.querySelector('#category_id');
        var exam_time = document.querySelector('#exam_time');

        schedule_id.value = recipient.schedule_id;
        category_id.value = recipient.category_id;
        exam_time.value = recipient.exam_time;

    });
</script>