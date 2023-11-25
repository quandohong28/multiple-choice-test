<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng số lượng chuyên mục</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
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
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold text-primary">Câu hỏi 31: Ai là người đẹp trai nhất?</span>
                        <small>Tổng số lựa chọn: 30</small>
                    </div>
                    <div class="collapse show" id="collapseExample">
                        <div class="d-flex p-3 justify-content-between">
                            <div>
                                <canvas id="horizontalAnswerChart" style="height: 300px; width: 200%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const horizontalAnswerChart = document.getElementById('horizontalAnswerChart').getContext('2d');
    const data = [12, 19, 3, 5];
    const answerContent = [
        'Quân là người đẹp trai nhất',
        'Không có ai đẹp trai bằng Quân',
        'Quân là người đẹp thứ hai, nhưng không ai dám đứng đầu',
        'Cả ba đáp án trên'
    ]
    new Chart(horizontalAnswerChart, {
        type: 'bar',
        data: {
            labels: answerContent,
            datasets: [{
                label: 'Đáp án đúng',
                data,
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