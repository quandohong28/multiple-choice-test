<section><!-- Start: Features Cards -->
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h3 class="fw-bold">Kết quả bài thi</h3>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2">
        <div class="general-inf-user filter p-5 bg-white shadow rounded mb-5">
            <div class="row gap-5 justify-content-center align-items-center">
                <div class="col-md-2">
                    <img src="<?= $avatarPath . $_SESSION['user']['avatar'] ?>" style="width: 150px; height: 150px;"
                        class="rounded-circle">
                </div>
                <div class="col-md-9">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="col-md-12 pb-1 border-bottom">
                                <h5 class="text-primary text-uppercase">Đỗ Hồng Quân</h5>
                                <p>Bài thi: Tên bài thi</p>
                                <p class="small">Hình thức: Thi thử</p>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="col d-flex gap-3">
                                    <p class="badge bg-primary">Điểm: <?= $result['points'] ?></p>
                                    <p class="badge bg-success">Số câu đúng: 12</p>
                                    <p class="badge bg-danger">Số câu sai: 43</p>
                                    <p class="badge bg-dark">Thời gian làm bài: <?= $result['exam_time'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 align-items-end">
            <?php foreach ($result_detail as $key => $value) :
                $answers = getAnswersByQuestionId($value['question_id']);
            ?>
            <div class="col">
                <div class="px-3 py-3 mb-4 bg-white border rounded">
                    <div class="question p-3 mb-3" style="background-color: #5c5c5c10; border-radius: .3rem">
                        <strong>Câu <?= ++$key ?>: <?= $value['question_content'] ?></strong>
                    </div>
                    <ul class="p-0 m-0" style="list-style-type: none;">
                        <?php foreach ($answers as $answer) : ?>
                        <li class="answer d-flex align-items-center gap-3 mb-3">
                            <input type="radio" onclick="return false"
                                <?= $value['selected_answer_id'] == $answer['id'] ? 'checked' : '' ?>>
                            <label
                                class="text m-0 small <?= $value['selected_answer_id'] == $answer['id'] && $answer['is_correct'] == 1 ? 'text-success' : 'text-danger' ?>"
                                for="answer"><?= $answer['content'] ?></label>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php include 'components/pagination.php'; ?>
    </div>

</section>
