<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng số lượng chuyên
                                mục</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $number_category['number_category'] ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-line fa-list fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách chuyên mục</h6>
                </div>
                <div class="card-body">
                    <?php foreach ($categories as $key => $value):
                        $numbers_schedule = getNumberScheduleFromCategoryId($value['id']);
                        $questions_stats = getCategoryQuestionStatsById($value['id']);
                        $easy = $questions_stats['easy_questions'];
                        $medium = $questions_stats['medium_questions'];
                        $hard = $questions_stats['hard_questions'];
                        ?>
                        <div class="border p-3 border-1 border-solid rounded mt-3">
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold text-primary">
                                    <?= $value['name'] ?>
                                </span>
                                <a class="" data-bs-toggle="collapse" href="#statistic_category<?= $key ?>" role="button"
                                    aria-expanded="false" aria-controls="statistic_category<?= $key ?>"
                                    id="collapseButton<?= $key ?>">Xem
                                    thống
                                    kê</a>
                            </div>
                            <div class="collapse" id="statistic_category<?= $key ?>">
                                <div class="d-flex p-3 justify-content-evenly">
                                    <div>
                                        <p>Số lịch thi được tạo :
                                            <?= $numbers_schedule['total_schedules'] ?>
                                        </p>
                                        <p>Tổng số lượng câu hỏi :
                                            <?= $questions_stats['total_questions'] ?>
                                        </p>
                                    </div>
                                    <div>
                                        <canvas id="levelRate<?= $key ?>" data<?= $key ?>='<?= json_encode($questions_stats) ?>'></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.getElementById('collapseButton<?= $key ?>').addEventListener('click', function () {
                                // Lấy collapseExample
                                const collapse<?= $key ?> = document.getElementById('statistic_category<?= $key ?>');


                                // Nếu collapse không có lớp 'show' thì làm việc render biểu đồ
                                if (!collapse<?= $key ?>.classList.contains('show')) {
                                    const levelRate<?= $key ?> = document.getElementById('levelRate<?= $key ?>');
                                    const questions_stats<?= $key ?> = JSON.parse(levelRate<?= $key ?>.getAttribute('data<?= $key ?>'));
                                    data<?= $key ?> = [
                                        questions_stats<?= $key ?>.easy_questions,
                                        questions_stats<?= $key ?>.medium_questions,
                                        questions_stats<?= $key ?>.hard_questions
                                    ]
                                    new Chart(levelRate<?= $key ?>, {
                                        type: 'doughnut',
                                        data: {
                                            labels: ['Dễ', 'Trung bình', 'Khó'],
                                            datasets: [{
                                                label: 'Số lượng',
                                                data: data<?= $key ?>,
                                                backgroundColor: ['rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(255, 99, 132)'],
                                            }]
                                        }
                                    });
                                }
                            });
                        </script>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>