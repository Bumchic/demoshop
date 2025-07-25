<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <?php include_once("asset\Style.php"); ?>
    <title>Document</title>


</head>

<body class="d-flex flex-column">
    <?php
    include("../connectDB.PHP");
    $connection = connectDb();
    $result = $connection->query("SELECT *, Image_url, Category FROM products ORDER BY idproducts DESC");
    $prod = [];
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        $prod[] = $row;
    }
    $connection->close();
    ?>
    <div class="container-fluid">
        <!-- header -->
        <?php include_once('partial/SharedHeader.PHP'); ?>
        <!-- end header -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="asset/images/carousel.jpg" alt="First slide"
                        data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="asset/images/carousel2.jpg" alt="Second slide"
                        data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="asset/images/carousel3.jpg" alt="Third slide"
                        data-holder-rendered="true">
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <!-- Block content -->
                    <main>
                        <div class="container marketing"> <!-- Three columns of text below the carousel -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="icon">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                    </div>

                                    <h2 class="fw-normal">Purchase Subscription</h2>
                                    <p>Select a plan that fits your needs and get access to exclusive features.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="icon">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                    </div>
                                    <h2 class="fw-normal">Add Products</h2>
                                    <p>Upload new products with descriptions, prices, and images to expand your
                                        offerings and attract customers.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="icon">
                                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                                    </div>
                                    <h2 class="fw-normal">Manage Orders</h2>
                                    <p>Track, process, and update customer orders efficiently to ensure timely
                                        fulfillment and satisfaction.</p>
                                </div><!-- /.col-lg-4 -->
                            </div><!-- /.row --> <!-- START THE FEATURETTES -->
                            <hr class="featurette-divider">
                            <div class="row featurette">
                                <div class="col-md-7">
                                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                                            class="text-body-secondary">It’ll blow your mind.</span></h2>
                                    <p class="lead">Some great placeholder content for the first featurette here.
                                        Imagine some exciting prose here.</p>
                                </div>
                                <div class="col-md-5"> <svg aria-label="Placeholder: 500x500"
                                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                        height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text
                                            x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                                    </svg> </div>
                            </div>
                            <hr class="featurette-divider">
                            <div class="row featurette">
                                <div class="col-md-7 order-md-2">
                                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                                            class="text-body-secondary">See for yourself.</span></h2>
                                    <p class="lead">Another featurette? Of course. More placeholder content here to
                                        give you an idea of how this layout would work with some actual real-world
                                        content in place.</p>
                                </div>
                                <div class="col-md-5 order-md-1"> <svg aria-label="Placeholder: 500x500"
                                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                        height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text
                                            x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                                    </svg> </div>
                            </div>

                            <hr class="featurette-divider"> <!-- /END THE FEATURETTES -->
                        </div><!-- /.container -->


                    </main>
                    <section style="background-color: #eee;">
                        <div class="container py-5">
                            <H1 class="d-flex justify-content-center">Products</H1>

                            <?php for ($i = 0; $i < sizeof($prod); $i++) {
                                ?>
                                <div class="row">
                                    <?php for ($j = 0; $j < 3 && $i < sizeof($prod); $j++) { ?>
                                        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                                            <div class="card text-black">
                                                <img src="/demoshop/frontend/asset/images/<?php echo $prod[$i][5] ?>"
                                                    class="card-img-top" />
                                                <div class="card-body">
                                                    <div class="text-center mt-1">
                                                        <h4 class="card-title"><?php echo $prod[$i][1] ?></h4>
                                                        <h6 class="text-primary mb-1 pb-3">Price: <?php echo $prod[$i][3] ?>
                                                        </h6>
                                                    </div>

                                                    <div class="text-center">
                                                        <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                                                            <h5 class="mb-0">Quick Look</h5>
                                                        </div>
                                                        <div class="d-flex flex-column mb-4">
                                                            <span><?php echo $prod[$i][2] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row">
                                                        <a type="button" data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-danger flex-fill ms-1" href="pages/ProductDetail.PHP?id=<?php echo $prod[$i][0] ?>">Buy now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                    } ?>

                                </div>
                            <?php }
                            ?>


                        </div>
                    </section>
                </div>
            </div>
            <!-- End block content -->
        </div>
        <!-- footer -->
        <?php include_once('partial/partialFooter.PHP'); ?>
        <!-- end footer -->


        <!-- Nhúng file quản lý phần SCRIPT JAVASCRIPT -->

        <!-- Các file Javascript sử dụng riêng cho trang này, liên kết tại đây -->
        <!-- Liên kết thư viện ChartJS -->
        <!-- <script src="/php/myhand/assets/vendor/Chart.js/Chart.min.js"></script> -->
    </div>
</body>
<?php include_once("asset\Script.PHP"); ?>
<script>
    $(document).ready(function () {
    });
</script>

</html>