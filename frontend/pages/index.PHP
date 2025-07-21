<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <?php include("..\asset\Style.php") ?>
</head>

<body class="d-flex flex-column h-100">
    <div class="container-fluid">
        <!-- header -->
        <?php include_once('../partial/SharedHeader.PHP'); ?>
        <!-- end header -->

        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <?php include_once('../partial/partialSideNav.PHP'); ?>
                <!-- end sidebar -->
                <div class="col">
                    <main role="main" class="col-md-10 ml-sm-auto px-4 mb-2">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">DASHBOARD</h1>
                        </div>

                        <!-- Block content -->
                       <li class="nav-item sidebar-heading"><span>Admin</span></li>
                        <li class="nav-item">
                            <a href="/demoshop/backend/pages/dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <hr style="border: 1px solid red; width: 80%;" />
                        <li class="nav-item sidebar-heading">
        <span>Product</span>
      </li>
      <!-- Menu product -->
      <li class="nav-item dropdown">
        <a href="#" role="button" data-toggle="collapse" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">
          Product
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a href="/demoshop/backend/functions/product/index.php">Product List</a>
          </li>
          <li class="dropdown-item">
            <a href="/demoshop/backend/functions/product/create.php">Create</a>
          </li>
        </ul>
      </li>

                        <!-- End block content -->
                    </main>
                </div>

            </div>

            <!-- footer -->
            <?php include_once('../partial/partialFooter.PHP'); ?>
            <!-- end footer -->
        </div>
    </div>

    <!-- Nhúng file quản lý phần SCRIPT JAVASCRIPT -->
    <?php include_once('..\asset\Script.php'); ?>

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