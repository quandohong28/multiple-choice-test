<section><!-- Start: Features Cards -->
    <div class="container bg-primary-gradient pb-5 pt-4 mb-5 rounded">
        <div class="d-flex justify-content-between mb-5 px-5">
            <div class="d-flex align-items-center gap-3">
                <div class=" p-3 fw-bold text-primary" id="questionIndex"></div>
            </div>
            <div class="text-center">
                <div class="fw-bold text-primary">Thời gian còn lại</div>
                <a class="p-3 fs-3" id="examTime"></a>
            </div>

            <div>
                <button type="submit" name="submit" class="btn btn-sm btn-success" style="display: none" id="finishExamButton" data-bs-toggle="modal" data-bs-target="#finish_exam_modal">Kết thúc</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-bold" id="question_content"></h3>
                <small class="badge bg-danger fw-bold" id="question_level"></small>
                <small class="text-muted">Chọn một đáp án</small>
            </div>
        </div>
        <form class="py-5 p-lg-5" method="post">
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">

                <label class="col mb-5 ">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-md-5">
                            <input class="me-2" type="radio" name="anwser" id="">
                            <span class="text-muted card-text answer_content"></span>
                        </div>
                    </div>
                </label>

                <label class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-md-5">
                            <input class="me-2" type="radio" name="anwser" id="">
                            <span class="text-muted card-text answer_content"></span>
                        </div>
                    </div>
                </label>

                <label class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-md-5">
                            <input class="me-2" type="radio" name="anwser" id="">
                            <span class="text-muted card-text answer_content"></span>
                        </div>
                    </div>
                </label>

                <label class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-md-5">
                            <input class="me-2" type="radio" name="anwser" id="">
                            <span class="text-muted card-text answer_content"></span>
                        </div>
                    </div>
                </label>
            </div>
        </form>

        <div class="row shadow rounded px-md-5 px-5 py-3 mx-5 justify-content-between align-items-center gap-4">
            <button class="col-1 btn btn-sm btn-outline-primary" id="prev_question" disabled><i class="fa-solid fa-arrow-left-long"></i></button>
            <div class="col-8 progress" style="height:6px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <button class="col-2 btn btn-sm btn-primary d-flex gap-2 align-items-center justify-content-center" id="next_question">
                Tiếp theo<i class="fa-solid fa-arrow-right"></i></span>

            </button>
        </div>
    </div><!-- End: Features Cards -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="finish_exam_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Xác nhận kết thúc bài thi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="?act=finish_exam" method="post">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p>Bạn có muốn kết thúc bài thi?</p>
                            <input type="hidden" name="exam_id">
                            <input type="hidden" name="exam_time">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="continue_exam">Hủy</button>
                        <button type="submit" name="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    var question_id = [];
    var j = 0;
    var contents = [];
    var levels = [];
    const urlParams = new URLSearchParams(window.location.search);
    const exam_id = urlParams.get('exam_id');
    var exam_time = urlParams.get('exam_time');
    const getQuestionById = async () => {
        const response = await fetch(`exams/question_data.php?exam_id=${exam_id}`);
        const question = await response.json();
        const question_content = document.getElementById('question_content');
        const question_level = document.getElementById('question_level');

        question_content.innerHTML = question[j].content;
        question_level.innerHTML = question[j].question_level_id;
        for (let index = 0; index < question.length; index++) {
            question_id.push(question[index].id);
            contents.push(question[index].content)
            levels.push(question[index].question_level_id)
        }
    }

    const getAnswersByQuestionId = async (question_id) => {
        const response = await fetch(`exams/answer_data.php?question_id=${question_id}`);
        const answer = await response.json();
        const answer_content = document.querySelectorAll('.answer_content');
        answer_content.forEach((item, content) => {
            item.innerHTML = answer[content].content;
        })


        const answer_value = document.querySelectorAll('input[name="anwser"]');
        answer_value.forEach((item, value) => {
            item.value = answer[value].id;
        })
    }

    const finishExamButton = document.getElementById('finishExamButton');
    const continue_exam = document.getElementById('continue_exam');
    const questionIndex = document.getElementById('questionIndex');

    getQuestionById();
    setTimeout(() => {
        getAnswersByQuestionId(question_id[j])
        questionIndex.innerHTML = j + 1 + ' / ' + question_id.length;
    }, 300);
    const next_question = document.getElementById('next_question');
    const prev_question = document.getElementById('prev_question');

    next_question.addEventListener('click', () => {
        getAnswersByQuestionId(question_id[++j])
        if (j >= question_id.length - 1) {
            next_question.disabled = true;
        } else {
            question_content.innerHTML = contents[j];
            question_level.innerHTML = levels[j];
        }

        if (j == question_id.length - 1) {
            finishExamButton.style.display = 'block';
        }

        questionIndex.innerHTML = j + 1 + ' / ' + question_id.length;


        prev_question.disabled = false;

    })
    prev_question.addEventListener('click', () => {
        if (j <= 0) {
            prev_question.disabled = true;
        } else {
            getAnswersByQuestionId(question_id[--j])
            question_content.innerHTML = contents[j];
            question_level.innerHTML = levels[j];
        }

        if (j !== question_id.length - 1) {
            finishExamButton.style.display = 'none';
        }

        questionIndex.innerHTML = j + 1 + ' / ' + question_id.length;

        next_question.disabled = false;
    })

    // xu ly thoi gian lam bai
    function formatTime(seconds) {
        var minutes = Math.floor(seconds / 60);
        var remainingSeconds = seconds % 60;

        // Đảm bảo rằng remainingSeconds hiển thị luôn hai chữ số
        var displaySeconds = remainingSeconds < 10 ? "0" + remainingSeconds : remainingSeconds;

        return minutes + ":" + displaySeconds;
    }
    var formattedTime = formatTime(exam_time * 60);

    // console.log(formattedTime); // Kết quả sẽ là định dạng phút:giây

    var examTime = document.getElementById('examTime');

    var timerInterval = null;
    // Hàm đếm ngược thời gian, nếu hết thì tự động submit form
    function countdown(seconds) {
        function updateTimer() {
            examTime.innerHTML = formatTime(seconds);
            seconds--;

            if (seconds < 0) {
                clearInterval(timerInterval);
                console.log("Hết thời gian!");
            }
        }

        // Gọi hàm updateTimer mỗi giây
        timerInterval = setInterval(updateTimer, 1000);
    }

    countdown(exam_time * 60);

    function formatTimeString(string) {
        // Chia chuỗi thời gian thành mảng phút và giây
        var arrayTime = string.split(":");

        // Lấy giá trị phút và giây từ mảng
        var minutes = parseInt(arrayTime[0], 10);
        var seconds = parseInt(arrayTime[1], 10);

        // Tính toán tổng thời gian ở đơn vị giây
        return minutes * 60 + seconds;
    }

    finishExamButton.addEventListener('click', () => {
        clearInterval(timerInterval);
        document.querySelector('input[name="exam_time"]').value = examTime.innerHTML;
    })

    continue_exam.addEventListener('click', () => {
        countdown(formatTimeString(examTime.innerHTML));
    })

    document.querySelector('input[name="exam_id"]').value = exam_id;

</script>