<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mã đề thi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result_detail[0]['exam_code']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số lượng câu hỏi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result_detail[0]['number_question']?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Thời gian làm bài trung bình</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= '21' . ' phút'?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Điểm trung bình</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= '16'?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">TOP</h6>
                    <small>Những câu hỏi có tỷ lệ chọn sai nhiều nhất</small>
                </div>
                <div class="card-body">
                    <div class="" style="height: 300px;">
                        <div>
                            <a href="#question3" class="card-title fw-bold text-success">
                                <span>ID câu hỏi. </span>
                                <span>Nội dung câu hỏi</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">TOP</h6>
                    <small>Những câu hỏi có tỷ lệ chọn đúng nhiều nhất</small>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chi tiết</h6>
                </div>
                <?php foreach($result_detail as $key => $value) :
                $answers = json_encode(getAnswersByQuestionId($value['question_id']));
                ?>
                <div class="p-5">
                    <div class="d-flex justify-content-between gap-5">
                        <span class="fw-bold text-primary"><?= $value['question_content'] ?></span>
                        <small class="col-4 text-end">Tổng số lựa chọn: 30</small>
                    </div>
                    <div class="collapse show" id="collapseExample">
                        <div class="d-flex p-3 justify-content-between">
                            <div>
                                <canvas id="horizontalAnswerChart<?= $key?>" answers<?= $key?>='<?= $answers ?>'
                                    style="height: 300px; width: 200%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    const horizontalAnswerChart<?= $key?> = document.getElementById('horizontalAnswerChart<?= $key?>');
                    const answers<?= $key?> = JSON.parse(horizontalAnswerChart<?= $key?>.getAttribute('answers<?= $key?>'));
                    const answerContent<?= $key?> = answers<?= $key?>.map(answer => answer.content);
                    const data<?= $key?> = answers<?= $key?>.map(answer => answer.id).map(str => parseInt(str, 10));
                    console.log(data<?= $key?>);
                    new Chart(horizontalAnswerChart<?= $key?>, {
                        type: 'bar',
                        data: {
                            labels: answerContent<?= $key?>,
                            datasets: [{
                                label: 'Đáp án đúng',
                                data: data<?= $key?>,
                                backgroundColor: [
                                    'rgba(24, 207, 0, 0.8)',
                                    'rgba(255, 73, 73, 0.8)',
                                    'rgba(255, 73, 73, 0.8)',
                                    'rgba(255, 73, 73, 0.8)'
                                ]
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                x: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>
