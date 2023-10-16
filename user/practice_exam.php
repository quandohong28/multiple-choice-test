<section><!-- Start: Features Cards -->


    <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
            <h3 class="fw-bold">Đăng ký thi thử</h3>
        </div>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5">

        <div class="row">
            <div class="col-md-3">
                <div class="flex-shrink-0 p-3">
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Home
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">Overview</a></li>
                                    <li><a href="#" class="link-dark">Updates</a></li>
                                    <li><a href="#" class="link-dark">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">Overview</a></li>
                                    <li><a href="#" class="link-dark">Weekly</a></li>
                                    <li><a href="#" class="link-dark">Monthly</a></li>
                                    <li><a href="#" class="link-dark">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">New</a></li>
                                    <li><a href="#" class="link-dark">Processed</a></li>
                                    <li><a href="#" class="link-dark">Shipped</a></li>
                                    <li><a href="#" class="link-dark">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">New...</a></li>
                                    <li><a href="#" class="link-dark">Profile</a></li>
                                    <li><a href="#" class="link-dark">Settings</a></li>
                                    <li><a href="#" class="link-dark">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <form class="form mb-4">
                    <input type="search" class="form-control form-control-sm" placeholder="Tìm kiếm..." id="datatable-search-input">
                </form>
                <div class="row gy-4 mb-5">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="col-md-6 col-lg-4 project-sidebar-card">
                            <a href="#">
                                <img class="img-fluid image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMJI2BwvnS1HDbk1_TWB9wlaNjmL2y0JlZPfRA5sx7p0LszCRWEAMBVAtb4GN6ErwVibY&usqp=CAU">
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
                <nav>
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link px-3">
                                <i class="fa-solid fa-caret-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link px-3" href="#">
                                <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


</section>