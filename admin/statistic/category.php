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
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách chuyên mục</h6>
                </div>
                <div class="card-body">
                    <!-- Đặt vòng lặp ở đây -->
                    <div class="border p-3 border-1 border-solid rounded">
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold text-primary">Tên chuyên mục</span>
                            <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="collapseButton">Xem thống kê</a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="d-flex p-3 justify-content-evenly">
                                <div>
                                    <p>Số lịch thi được tạo: </p>
                                    <p>Tổng số lượng câu hỏi: </p>
                                </div>
                                <div>
                                    <canvas id="levelRate"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('collapseButton').addEventListener('click', function() {
        // Lấy collapseExample
        const collapse = document.getElementById('collapseExample');

        // Nếu collapse không có lớp 'show' thì làm việc render biểu đồ
        if (!collapse.classList.contains('show')) {
            const levelRate = document.getElementById('levelRate');

            new Chart(levelRate, {
                type: 'doughnut',
                data: {
                    labels: ['Dễ', 'Trung bình', 'Khó'],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [100, 50, 100],
                        backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
                    }]
                }
            });
        }
    });
</script>