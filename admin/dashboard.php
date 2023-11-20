<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
        <div class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i>
            <span>Tải dữ liệu</span>
        </div>
    </div> -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <span>Lịch thi đã tạo</span>
                                <p class="filter-name">(Tuần này)</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-gray-800 fw-bold"><?= $number_of_schedules_this_month['value'] ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <span>Bài thi đã hoàn thành</span>
                                <p class="filter-name">(Tuần này)</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-gray-800 fw-bold"><?= $number_of_finished_exams_this_month['number'] ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <span>Bộ lọc</span>
                            </div>
                            <form action="">
                                <div class="mb-3">
                                    <small for="" class="form-label text-center">Chọn thời gian hiển thị</small>
                                    <div class="input-group mb-3">
                                        <select name="interval" id="" class="form-control form-control-sm mb-3">
                                            <option value="this-week">Tuần này</option>
                                            <option value="this-month">Tháng này</option>
                                            <option value="this-year">Năm này</option>
                                            <option value="custom-date">Thời gian tuỳ chỉnh</option>
                                        </select>
                                        <button type="submit" class="btn btn-sm btn-info h-100">Xác nhận</button>
                                    </div>
                                    <div class="custom-date d-none justify-content-between">
                                        <div class="">
                                            <small>Từ ngày</small>
                                            <input type="date" class="form-control form-control-sm">
                                        </div>
                                        <div class="">
                                            <small>Đến ngày</small>
                                            <input type="date" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thống kê điểm</h6>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Exam code</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                <button class="btn btn-sm btn-primary">Thực hiện</button>
                            </div>
                            <small id="helpId" class="text-muted">Nhập vào mã đề thi để xem thống kê chi tiết</small>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Hệ thống TechQuiz Hero</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Menu:</div>
                            <a class="dropdown-item" href="#">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <p>Người dùng: </p>
                    <p>Chuyên mục: </p>
                    <p>Câu hỏi: </p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sáu tháng gần đây</h6>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4 min-vh-100">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lịch thi gần đây</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Menu:</div>
                            <a class="dropdown-item" href="#">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Nội dung viết ở đây -->
                    <ul class="list-group list-group-flush">
                        <?php foreach ($schedules as $key => $value) : ?>
                            <div class="card text-start mb-3">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold text-success"><?= $value['name'] ?></h6>
                                    <a href="?act=statistic_schedule&schedule_id=<?= $value['id'] ?>" class="card-text">Xem chi tiết &rarr;</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4 min-vh-100">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Chuyên mục</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Menu:</div>
                            <a class="dropdown-item" href="?act=statistic_category">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php foreach ($categories as $key => $value) : ?>
                        <div class="card text-start mb-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold text-success"><?= $value['name'] ?></h6>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const interval = document.querySelector('select[name="interval"]');
    const customDate = document.querySelector('.custom-date');
    const filterNames = document.querySelectorAll('.filter-name');
    console.log(filterNames);
    interval.addEventListener('change', function() {
        if (this.value === 'custom-date') {
            customDate.classList.add('d-flex');
        } else {
            customDate.classList.remove('d-flex');
        }

        filterNames.forEach(element => {
            element.textContent = `(${this.options[this.selectedIndex].text})`;
        });
    });

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Năm tháng', 'Bốn tháng', 'Ba Tháng', 'Hai Tháng', 'Tháng trước', 'Tháng này'],
            datasets: [{
                label: 'Số lượng lịch thi được tạo',
                data: [2, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>