<!doctype html>
<html lang="en">

<head>
    <title>Trang quản trị</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CSS thuần -->
    <link rel="stylesheet" href="../assets/css/styles.admin.css">
    <!-- Goole font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="d-flex">
        <?php include "./sidebar.php" ?>
        <section>
            <header>
                <?php include "./header.php" ?>
            </header>
            <main>
                <?php
                if ($_GET['act']) {
                    switch ($_GET['act']) {
                        case 'home':
                            include "./dashboard.php";
                            break;
                        case 'account':
                            include "./account.php";
                            break;
                        case 'add_account':
                            include "./add_account.php";
                            break;
                        case 'edit_account':
                            include "./edit_account.php";
                            break;
                        case 'delete_account':
                            include "./delete_account.php";
                            break;
                        case 'category':
                            include "./category.php";
                            break;
                        case 'add_category':
                            include "./add_category.php";
                            break;
                        case 'edit_category':
                            include "./edit_category.php";
                            break;
                        case 'delete_category':
                            include "./delete_category.php";
                            break;
                        default:
                            include "./dashboard.php";
                            break;

                    }
                }

                ?>
                <?php include "./logoutmodal.php" ?>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#">
                    <i class="fas fa-angle-up"></i>
                </a>
            </main>
        </section>
    </div>
    <footer>
        <?php include "./footer.php" ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/script.admin.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>
</body>

</html>