<div class="modal fade" id="editScheduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa lịch thi</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="?act=tables&data=edit_schedule" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên lịch thi</label>
                                    <input type="text" name="edit_name" id="name"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_exam">Số lượng đề thi</label>
                                    <input type="number" id="number_exam" name="edit_number_exam"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="edit_time_start"
                                        class="form-control form-control-sm" id="time_start" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="exam_time">Thời gian làm bài</label>
                                    <input type="number" id="exam_time" name="edit_exam_time"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="" placeholder="" name="edit_id" id="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" name="submit" type="submit">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const myModal = document.getElementById('editScheduleModal')
    myModal.addEventListener('shown.bs.modal', function () {
        const id = document.querySelector('input[name="edit_id"]');
        const name = document.querySelector('input[name="edit_name"]');
        const time_start = document.querySelector('input[name="edit_time_start"]');
        const exam_time = document.querySelector('input[name="edit_exam_time"]');
        const number_exam = document.querySelector('input[name="edit_number_exam"]');
        

        const button = event.relatedTarget
        const recipient = button.getAttribute('data-value')
        const val = JSON.parse(recipient)

        name.setAttribute('value', val.name);
        time_start.setAttribute('value', val.time_start);
        exam_time.setAttribute('value', val.exam_time);
        number_exam.setAttribute('value', val.number_exam);
        
        id.setAttribute('value', val.id);
    })
</script>