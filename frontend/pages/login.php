<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <?php include_once("../asset\Style.php"); ?>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- header-->
        <?php include_once('../partial/SharedHeader.PHP'); ?>
        <!-- header-->
        <section class="p-5 w-100">
            <div class="row">
                <div class="col-12">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center text-body h1 fw-bold mb-5 mt-4">Log in</p>

                                    <form action="loginProcess.PHP" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas text-body fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init="" class="form-outline flex-fill mb-0"
                                                data-mdb-input-initialized="true">
                                                <input type="text" id="form3Example1c" name="username"
                                                    class="form-control" required>
                                                <label class="form-label" for="form3Example1c"
                                                    style="margin-left: 0px;">Username</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 71.2px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas text-body fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init="" class="form-outline flex-fill mb-0"
                                                data-mdb-input-initialized="true">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    name="password" required>
                                                <label class="form-label" for="form3Example4c"
                                                    style="margin-left: 0px;">Password</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas text-body fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init="" class="form-outline flex-fill mb-0"
                                                data-mdb-input-initialized="true">
                                                <input type="password" id="form3Example4cd" class="form-control"
                                                    name="repassword" required>
                                                <label class="form-label" for="form3Example4cd"
                                                    style="margin-left: 0px;">Repeat your password</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 134.4px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary">Log in</button>
                                        </div>

                                    </form>
                                    <?PHP
                                    if (isset($_SESSION['err'])) {
                                        if ($_SESSION['err'] == 0) {
                                            echo 'something went wrong';
                                        }
                                        if ($_SESSION['err'] == 1) {
                                            echo 'passwords dont match';
                                        }
                                        if ($_SESSION['err'] == 3) {
                                            echo 'wrong password';
                                        }
                                        if ($_SESSION['err'] == 5) {
                                            echo 'no username found';
                                        }
                                        unset($_SESSION['err']);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <?php include_once('../partial/partialFooter.PHP'); ?>
        <!-- end footer -->
    </div>


</body>

</html>