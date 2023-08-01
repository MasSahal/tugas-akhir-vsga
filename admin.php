<!-- <?php

if (!isset($_SESSION['is_login'])) {
    // header('location:login.php');
};
include_once('koneksi.php');

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - SEO Dashboard</title>
    <?php include('components/htmlheader.php'); ?>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('components/sidebar.php'); ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include('components/header.php'); ?>

            <!-- header area end -->

            <?php

            $page = $_GET['page'] ?? null;

            switch ($page) {
                case 'view_lomba':
                    include('pages/lomba/view.php');
                    break;
                case 'edit_lomba':
                    include('pages/lomba/edit.php');
                    break;
                case 'tambah_lomba':
                    include('pages/lomba/tambah.php');
                    break;
                case 'detail_lomba':
                    include('pages/lomba/detail.php');
                    break;

                case 'view_select':
                    include('pages/select/view.php');
                    break;
                case 'edit_select':
                    include('pages/select/edit.php');
                    break;
                case 'tambah_select':
                    include('pages/select/tambah.php');
                    break;

                case 'view_user':
                    include('pages/user/view.php');
                    break;
                case 'edit_user':
                    include('pages/user/edit.php');
                    break;
                case 'tambah_user':
                    include('pages/user/tambah.php');
                    break;

                default:
                    include('pages/dashboard.php');
                    break;
            } ?>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <?php include('components/htmlfooter.php'); ?>

</body>

</html> -->