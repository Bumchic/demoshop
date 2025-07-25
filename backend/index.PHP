<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <?php include("asset\Style.php") ?>
</head>

<body class="d-flex flex-column h-100">
    <div class="container-fluid">
        <!-- header -->
        <?php include_once('partial/SharedHeader.PHP'); ?>
        <!-- end header -->

        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <?php include_once('partial/partialSideNav.PHP'); ?>
                <!-- end sidebar -->
                <div class="col">
                    <main role="main" class="col-md-10 ml-sm-auto px-4 mb-2">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">DASHBOARD</h1>
                        </div>

                        <!-- Block content -->
                        <a href="pages/dashboard.PHP">dashboard</a>
                        <a href="pages/ProductPage.PHP">product list</a>
                        <!-- End block content -->
                    </main>
                </div>

            </div>

            <!-- footer -->
            <?php include_once('partial/partialFooter.PHP'); ?>
            <!-- end footer -->
        </div>
    </div>

    <!-- Nhúng file quản lý phần SCRIPT JAVASCRIPT -->
    <?php include_once('asset\Script.php'); ?>

    <!-- Các file Javascript sử dụng riêng cho trang này, liên kết tại đây -->
    <!-- Liên kết thư viện ChartJS -->
    <!-- <script src="/php/myhand/assets/vendor/Chart.js/Chart.min.js"></script> -->
    </div>

    <script>
        $(document).ready(function () {
        });
    </script>
</body>

</html>