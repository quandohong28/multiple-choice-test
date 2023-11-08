<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
}
$action = isset($_GET['act']) ? $_GET['act'] : 'dashboard';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang quản trị</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.admin.css">
    <!-- CSS thuần -->
    <!-- Goole font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="overflow-x-hidden">
    <div class="row">
        <div class="col-2">
            <?php include "./layouts/sidebar.php" ?>
        </div>
        <section class="col">
            <header>
                <?php include "./layouts/header.php" ?>
            </header>
            <div>
                <?php switch ($action) {
                    case 'dashboard':
                    case 'home':
                        include "./dashboard.php";
                        break;
                    case 'search':
                        include "./search.php";
                        break;
                    case 'notification':
                        include "./notification.php";
                        break;
                    case 'message':
                        include "./message.php";
                        break;
                    case 'profile':
                        include "./profile.php";
                        break;
                    case 'setting':
                        include "./setting.php";
                        break;
                    case 'userlog':
                        include "./userlog.php";
                        break;
                    case 'signout':
                        unset($_SESSION['user']);
                        echo '<meta http-equiv="refresh" content="0;url=../index.php">';
                        break;
                    case 'signin':
                        include "./signin.php";
                        break;
                    case 'signup':
                        include "./signup.php";
                        break;
                    case 'tables':
                        include "./tables/index.php";
                        break;
                    default:
                        include "./dashboard.php";
                        break;
                } ?>
                <?php include "./logoutmodal.php" ?>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#">
                    <i class="fas fa-angle-up"></i>
                </a>
            </div>
        </section>
    </div>
    <footer>
        <?php include "./layouts/footer.php" ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/script.admin.js"></script>
    <script src="../assets/js/script.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>
    <script>
        function openFullscreen(element) {
            if (element.requestFullscreen) {
                element.requestFullscreen();
            } else if (element.mozRequestFullScreen) {
                /* Firefox */
                element.mozRequestFullScreen();
            } else if (element.webkitRequestFullscreen) {
                /* Chrome, Safari, and Opera */
                element.webkitRequestFullscreen();
            } else if (element.msRequestFullscreen) {
                /* IE/Edge */
                element.msRequestFullscreen();
            }
        }

        const images = document.querySelectorAll('img');

        images.forEach((image) => {
            image.addEventListener('click', () => {
                openFullscreen(image);
            })
        })
    </script>
</body>

</html>