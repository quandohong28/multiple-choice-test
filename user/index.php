<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css?h=a36b09c30de7308fcdcc873e9287b73a">
    <link rel="stylesheet" href="../assets/css/styles.min.css?h=5623086526452171cd4d963de7cb2c74">
    <!-- CSS thuần -->
    <link rel="stylesheet" href="../assets/css/styles.user.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mt-5 pt-5">
    <header>
        <?php include "./layouts/header.php"; ?>
    </header>
    <main>
        <div class="container">

            <?php
            if ($_GET['act']) {
                switch ($_GET['act']) {
                    case 'home':
                        include "./utilities/home.php";
                        break;
                    case 'schedule':
                        include "./utilities/schedule.php";
                        break;
                    case 'practice_exam':
                        include "./utilities/practice_exam.php";
                        break;
                    case 'official_exam':
                        include "./utilities/official_exam.php";
                        break;
                    case 'result':
                        include "./results/index.php";
                        break;
                    case 'profile':
                        include "./accounts/profile.php";
                        break;
                    case 'setting':
                        include "./accounts/setting.php";
                        break;
                    case 'logout':
                        unset($_SESSION['user']);
                        var_dump($_SESSION['user']);
                        header("location: ../index.php");
                        break;
                    default:
                        include "./utilities/home.php";
                        break;
                }
            } else {
                include "./utilities/home.php";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include "./layouts/footer.php"; ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="../assets/js/script.min.js?h=4733a5aa722c9ef5669b270bcebbcdbf"></script>
</body>

</html>