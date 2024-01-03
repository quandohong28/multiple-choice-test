<div class="container-fluid mt-5">
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Số lượng thí sinh
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $number_cadidate ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số lượng đề thi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $number_exam ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-clipboard-list fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Điểm trung bình</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?= number_format($avgPoint['avg_point'], 2) ? number_format($avgPoint['avg_point'], 2) : '0' ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-check fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Thời gian một bài thi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $exam_time . ' phút' ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-clock fa-2x"></i>
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
                    <h6 class="m-0 font-weight-bold text-primary">Tỷ lệ điểm</h6>
                </div>
                <div class="card-body row justify-content-center">
                    <div style="width: 50%;">
                        <?php
                        if ($pointRate): ?>
                            <canvas id="pieCategoryChart"></canvas>
                        <?php else:
                            ?>
                            <div class="alert alert-warning text-center" role="alert">
                                <h5>Chưa có kết quả cho lịch thi !!</h5>
                            </div>

                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const pieCategoryChart = document.getElementById('pieCategoryChart');

    var pointRate = <?= json_encode($pointRate); ?>;

    new Chart(pieCategoryChart, {
        type: 'doughnut',
        data: {
            labels: [
                'Từ 1 đến 5 điểm',
                'Từ 5 đến 8 điểm',
                'Từ 8 trở lên',
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [
                    pointRate["count_1_to_5"],
                    pointRate["count_5_to_8"],
                    pointRate["count_8_and_above"],
                ],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)',
                    'rgb(54, 162, 235)',
                ],
            }]
        }
    });
</script>