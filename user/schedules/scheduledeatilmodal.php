<div class="modal fade" id="scheduledeatilmodal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lịch thi chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="?act=start_exam" id="action">
                <div class="modal-body">
                    <div class="py-3">
                        <div class="">
                            <table class="table small table-hover table-responsive">
                                <tr class="col">
                                    <th scope="col">Tên bài thi</th>
                                    <td scope="col" id="name_schedule"></td>
                                </tr>
                                <tr class="col">
                                    <th scope="col">Thời gian làm bài</th>
                                    <td scope="col" id="exam_time_schedule"></td>
                                </tr>
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
                        <span class="warning"></span>
                    </div>
                    <input type="hidden" name="type" value="2">
                    <input type="hidden" name="schedule_id" id="schedule_id">
                    <input type="hidden" name="category_id" id="category_id">
                    <input type="hidden" name="exam_time" id="exam_time">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" name="start-btn" class="btn btn-sm btn-primary" id="start-btn">
                    </button>
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
        const name_schedule = document.getElementById('name_schedule');
        const exam_time_schedule = document.getElementById('exam_time_schedule');
        const category = document.getElementById('category');
        const number_question = document.getElementById('number_question');
        var start_btn = document.getElementById('start-btn');

        if (recipient.status == 0) {
            start_btn.innerHTML = "Bài thi chưa mở";
            start_btn.disabled = true;
        } else if (recipient.status == 1 || recipient.status == 2) {
            if (recipient.schedule_detail_status == 0) {
                start_btn.innerHTML = "Bắt đầu bài thi";
            } else if (recipient.schedule_detail_status == 1) {
                start_btn.innerHTML = "Tiếp tục làm bài";
            } else if (recipient.schedule_detail_status == 2) {
                start_btn.innerHTML = "Bài thi đã kết thúc";
                start_btn.disabled = true;
            }
        } else if (recipient.status == 3) {
            start_btn.innerHTML = "Bài thi đã kết thúc";
            start_btn.disabled = true;
        }

        category.innerHTML = recipient.category_name;
        number_question.innerHTML = recipient.number_question;
        name_schedule.innerHTML = recipient.name_schedule;
        exam_time_schedule.innerHTML = recipient.exam_time_schedule + " phút";

        const categoryImage = document.querySelector('.category-image');
        categoryImage.src = `../assets/img/categories/${recipient.image}`;

        var type = document.querySelector('#type');
        var schedule_id = document.querySelector('#schedule_id');
        var category_id = document.querySelector('#category_id');
        var exam_time = document.querySelector('#exam_time');

        schedule_id.value = recipient.schedule_id;
        category_id.value = recipient.category_id;
        exam_time.value = recipient.exam_time;

        var action = document.getElementById('action');
        // Thay đổi giá trị của thuộc tính action
        if (recipient.schedule_detail_status == 0) {
            action.action = "?act=start_exam";
        } else if (recipient.schedule_detail_status == 1) {
            if (recipient.exam_code == null) {
                action.action = "?act=start_exam";
            } else {
                action.action = "?act=doing_exam&exam_code=" + recipient.exam_code;
            }
        } else if (recipient.schedule_detail_status == 2) {
            action.action = "?act=finish_exam";
        }

    });
</script>