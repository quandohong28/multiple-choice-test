    <section><!-- Start: Features Cards -->
        <div class="container bg-primary-gradient pb-5 pt-4 mb-5 rounded">
            <div class="d-flex justify-content-between mb-5 px-5 align-items-start">
                <div class="">
                    <div class="fw-bold text-primary" id="questionIndex"></div>
                </div>
                <div class="text-center">
                    <h6 class="fw-bold text-primary">Thời gian còn lại</h6>
                    <h6 class="fs-3" id="examTime"></h6>
                </div>

                <div>
                    <button type="submit" name="submit" class="btn btn-sm btn-sm btn-success" style="display: none" id="finishExamButton" data-bs-toggle="modal" data-bs-target="#finish_exam_modal">Kết
                        thúc</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h4 class="fw-bold" id="question_content"></h4>
                    <small class="badge fw-bold" id="question_level"></small>
                    <small class="text-muted">Chọn một đáp án</small>
                </div>
            </div>
            <form class="py-5 p-lg-5" method="post">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <label class="col mb-3">
                            <div class="card shadow-sm h-100" style="min-height: 100px">
                                <div class="card-body shadow rounded px-md-5">
                                    <input class="me-2" type="radio" name="answer" id="answer1">
                                    <span class="text-muted card-text answer_content" id="answer_content_1"></span>
                                </div>
                            </div>
                        </label>
                    <?php endfor ?>
                </div>
            </form>

            <div class="row shadow rounded px-md-5 px-5 py-3 mx-5 justify-content-between align-items-center gap-4">
                <button class="col-1 btn btn-sm btn-sm btn-outline-primary" id="prev_question" disabled><i class="fa-solid fa-arrow-left-long"></i></button>
                <div class="col-8 progress p-0" style="height:6px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button class="col-2 btn btn-sm btn-sm btn-primary d-flex gap-2 align-items-center justify-content-center" id="next_question">
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
                    </div>
                    <form action="?act=finish_exam" method="post" id="finish_exam">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <p>Bạn có muốn kết thúc bài thi?</p>
                                <input type="hidden" name="exam_id">
                                <input type="hidden" name="exam_time">
                                <input type="hidden" name="schedule_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" id="continue_exam">Hủy</button>
                            <button type="submit" class="btn btn-sm btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        var currentQuestionIndex = 0;
        var questions = [];

        // Lấy ra tham số truyền vào từ URL
        const urlParams = new URLSearchParams(window.location.search);
        var exam_code = urlParams.get('exam_code');

        var exam_code = JSON.parse(localStorage.getItem(exam_code));
        var type = exam_code.type;
        var exam_id = exam_code.exam_id;
        var result_id = exam_code.result_id; 
        var exam_time = exam_code.remaining_time * 60; 

        // Hàm lấy câu hỏi theo id đề thi
        const getQuestionById = async () => {
            try {
                const response = await fetch("exams/question_data.php?exam_id=" + exam_id);
                const question = await response.json();

                // Xóa câu hỏi cũ khi lấy mới
                questions = [];
                for (let index = 0; index < question.length; index++) {
                    questions.push({
                        id: question[index].id,
                        content: question[index].content,
                        question_level_id: question[index].question_level_id
                    });
                }
                // Sau khi lấy câu hỏi thành công, gọi hàm để lấy câu trả lời cho câu hỏi đầu tiên
                await getAnswersByQuestionId(questions[0].id);

                // Hàm hiển thị câu hỏi đầu tiên
                if (questions.length > 0) {
                    renderFirstQuestion();
                }
            } catch (error) {
                console.error('Error during getQuestionById:', error);
            }
        }
        // Gọi hàm lấy câu hỏi theo id đề thi
        getQuestionById();
        // Hàm hiển thị câu hỏi và câu trả lời đầu tiên
        const renderFirstQuestion = async () => {
            question_content.innerHTML = questions[currentQuestionIndex].content;
            if (questions[currentQuestionIndex].question_level_id == 1) {
                question_level.innerHTML = 'Dễ';
                question_level.classList.add('bg-success');
            } else if (questions[currentQuestionIndex].question_level_id == 2) {
                question_level.innerHTML = 'Trung bình';
                question_level.classList.add('bg-warning');
            } else {
                question_level.innerHTML = 'Khó';
                question_level.classList.add('bg-danger');
            }
            await getAnswersByQuestionId(questions[currentQuestionIndex].id);
            questionIndex.innerHTML = currentQuestionIndex + 1 + ' / ' + questions.length;
        }



        // Lấy đáp án theo id câu hỏi
        const answersDOM = document.querySelectorAll('input[name="answer"]');

        const getAnswersByQuestionId = async (question_id) => {
            const response = await fetch(`exams/answer_data.php?question_id=${question_id}`);
            const answer = await response.json();
            const answer_content = document.querySelectorAll('.answer_content');
            answer_content.forEach((item, content) => {
                item.innerHTML = answer[content].content;
            })

            answersDOM.forEach((answerDOM, index) => {
                answerDOM.value = answer[index].id;
            })
        }

        // Hàm lấy ra id câu hỏi hiện tại ở bảng result_detail
        const getResultDetailByResultIdAndQuestionId = async (result_id, question_id) => {
            const response = await fetch(
                `exams/result_detail_data.php?result_id=${result_id}&question_id=${question_id}`);
            return result_detail = await response.json();
        }

        // Hàm xử lý cập nhật câu hỏi khi chọn đáp án - lưu vào bảng result_detail
        const postData = async (answerDOM) => {
            try {
                const selectedAnswerId = answerDOM.value;
                console.log(selectedAnswerId); // Kiểm tra giá trị của selectedAnswerId

                const response = await fetch('exams/exam_detail_post.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json; charset=UTF-8'
                    },
                    body: JSON.stringify({
                        question_id: questions[currentQuestionIndex]
                            .id, // Sử dụng question_id phù hợp
                        answer_id: selectedAnswerId,
                        result_id: result_id
                    })
                });

                if (response.ok) {
                    const data = await response.json();
                    console.log(data);
                } else {
                    throw new Error('Response not OK');
                }
            } catch (error) {
                console.error('Error during POST:', error);
            }
        }

        // Xử lý sự kiện click vào đáp án
        answersDOM.forEach((answerDOM) => {
            answerDOM.onclick = () => {
                postData(answerDOM);
            }
        });

        // Gọi hàm render ra câu hỏi và câu trả lời đầu tiên khi trang được load
        var result_detail = null;

        // Đảm bảo rằng mảng questions không trống
        if (questions.length > 0) {
            renderFirstQuestion();
        }

        // Xử lý sự kiện click vào nút next và prev
        next_question.addEventListener('click', async () => {
            if (questions.length > 0 && currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++; // Tăng giá trị của currentQuestionIndex trước khi kiểm tra điều kiện
                await getAnswersByQuestionId(questions[currentQuestionIndex].id);

                if (currentQuestionIndex >= questions.length - 1) {
                    next_question.disabled = true;
                }

                // Đảm bảo câu hỏi đã được lấy từ server
                if (questions[currentQuestionIndex]) {
                    question_content.innerHTML = questions[currentQuestionIndex].content;
                    if (questions[currentQuestionIndex].question_level_id == 1) {
                        question_level.innerHTML = 'Dễ';
                        question_level.classList.add('bg-success');
                    } else if (questions[currentQuestionIndex].question_level_id == 2) {
                        question_level.innerHTML = 'Trung bình';
                        question_level.classList.add('bg-warning');
                    } else {
                        question_level.innerHTML = 'Khó';
                        question_level.classList.add('bg-danger');
                    }
                }

                if (currentQuestionIndex === questions.length - 1) {
                    finishExamButton.style.display = 'block';
                }

                questionIndex.innerHTML = currentQuestionIndex + 1 + ' / ' + questions.length;
                prev_question.disabled = false;

                // Kiểm tra xem câu hỏi hiện tại đã được chọn đáp án chưa
                let flag = false;
                result_detail = await getResultDetailByResultIdAndQuestionId(result_id, questions[
                    currentQuestionIndex].id);
                if (result_detail !== null || result_detail.answer_id !== null) {
                    answersDOM.forEach((answerDOM) => {
                        if (answerDOM.value == result_detail.answer_id) {
                            answerDOM.checked = true;
                            answerDOM.setAttribute('selected', true); // Thêm thuộc tính selected
                            flag = true;
                        } else {
                            answerDOM.checked = false;
                            answerDOM.removeAttribute('selected'); // Xóa thuộc tính selected
                        }
                    });
                }
                handleProgress(flag);
            }
        });

        prev_question.addEventListener('click', async () => {
            if (questions.length > 0 && currentQuestionIndex > 0) {
                // Giảm giá trị của currentQuestionIndex trước khi kiểm tra điều kiện
                currentQuestionIndex--;
                await getAnswersByQuestionId(questions[currentQuestionIndex].id);

                if (currentQuestionIndex <= 0) {
                    prev_question.disabled = true;
                }

                // Đảm bảo câu hỏi đã được lấy từ server
                if (questions[currentQuestionIndex]) {
                    question_content.innerHTML = questions[currentQuestionIndex].content;
                    if (questions[currentQuestionIndex].question_level_id == 1) {
                        question_level.innerHTML = 'Dễ';
                        question_level.classList.add('bg-success');
                    } else if (questions[currentQuestionIndex].question_level_id == 2) {
                        question_level.innerHTML = 'Trung bình';
                        question_level.classList.add('bg-warning');
                    } else {
                        question_level.innerHTML = 'Khó';
                        question_level.classList.add('bg-danger');
                    }
                }

                if (currentQuestionIndex !== questions.length - 1) {
                    finishExamButton.style.display = 'none';
                }

                questionIndex.innerHTML = currentQuestionIndex + 1 + ' / ' + questions.length;
                next_question.disabled = false;


                // Kiểm tra xem câu hỏi hiện tại đã được chọn đáp án chưa
                let flag = false;
                result_detail = await getResultDetailByResultIdAndQuestionId(result_id, questions[
                    currentQuestionIndex].id);
                if (result_detail !== null || result_detail.answer_id !== null) {
                    answersDOM.forEach((answerDOM) => {
                        if (answerDOM.value == result_detail.answer_id) {
                            answerDOM.checked = true;
                            answerDOM.setAttribute('selected', true); // Thêm thuộc tính selected
                            flag = false;
                        } else {
                            answerDOM.checked = false;
                            answerDOM.removeAttribute('selected'); // Xóa thuộc tính selected
                        }
                    });
                }
                handleProgress(flag);
            }
        });

        // Hàm để hiển thị câu trả lời đã chọn
        function showSelectedAnswer() {
            const selectedAnswer = document.querySelector('input[name="answer"]:checked');
            if (selectedAnswer) {
                selectedAnswer.setAttribute('selected', true);
            }
        }

        // Hàm đếm ngược thời gian, nếu hết thì tự động submit form
        function countdown(seconds) {
            function updateTimer() {
                examTime.innerHTML = formatTime(seconds);
                seconds--;

                if (seconds < 0) {
                    clearInterval(timerInterval);
                    var form = document.getElementById("finish_exam");
                    form.action = `?act=finish_exam&exam_time=${formatTime(urlParams.get('exam_time') * 60)}`;
                    form.submit();
                }

                // Lưu thời gian còn lại vào localStorage
                exam_code.remaining_time = seconds / 60; // Thay đổi giá trị exam_time
                localStorage.setItem(exam_code.exam_code, JSON.stringify(exam_code));
 
            }  
            // Gọi hàm updateTimer mỗi giây
            timerInterval = setInterval(updateTimer, 1000);
        }  
        // xu ly thoi gian lam bai
        function formatTime(seconds) {
            var hours = Math.floor(seconds / 3600);
            var minutes = Math.floor(seconds / 60);
            var remainingSeconds = seconds % 60;

            // Đảm bảo rằng remainingSeconds hiển thị luôn hai chữ số
            var displaySeconds = remainingSeconds < 10 ? "0" + remainingSeconds : remainingSeconds;
            var displayMinutes = minutes < 10 ? "0" + minutes : minutes;
            var displayHours = hours < 10 ? "0" + hours : hours;

            return displayHours + ":" + displayMinutes + ":" + displaySeconds;
        }

        var examTime = document.getElementById('examTime');

        var timerInterval = null;

        function formatTimeString(string) {
            // Chia chuỗi thời gian thành mảng phút và giây
            var arrayTime = string.split(":");

            // Lấy giá trị phút và giây từ mảng
            var hours = parseInt(arrayTime[0], 10);
            var minutes = parseInt(arrayTime[1], 10);
            var seconds = parseInt(arrayTime[2], 10);

            // Tính toán tổng thời gian ở đơn vị giây
            return hours * 3600 + minutes * 60 + seconds;
        }

        // Hàm đếm ngược thời gian khi trang được load
        countdown(exam_time);

        // Chúng ta sẽ thêm sự kiện click cho nút "Kết thúc" và "Hủy" trong modal
        finishExamButton.addEventListener('click', () => {
            clearInterval(timerInterval);
            document.querySelector('input[name="exam_time"]').value = formatTime(exam_time - formatTimeString(
                examTime.innerHTML));
        })


        const continue_exam = document.getElementById('continue_exam');
        continue_exam.addEventListener('click', () => {
            countdown(formatTimeString(examTime.innerHTML));
        })

        document.querySelector('input[name="exam_id"]').value = exam_id;

        // Xử lý thanh progress


        function handleProgress(boolean) {
            var progress = document.querySelector('.progress-bar');
            var percent = (currentQuestionIndex + 1) / questions.length * 100;
            progress.style.width = percent + '%';
            if (flag) {
                progress.classList.add('bg-success');
            } else {
                progress.classList.remove('bg-success');
            }
        }
    </script>