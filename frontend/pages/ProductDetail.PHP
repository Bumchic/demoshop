<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("../asset\Style.php"); ?>
    <?php
    include_once('../../connectDB.PHP');
    $connection = connectDb();
    $id = $_GET['id'];
    $result = $connection->query("select * from products where idproducts = $id");
    $product = $result->fetch_assoc();
    $connection->close();
    ?>
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <!-- header-->
        <?php include_once('../partial/SharedHeader.PHP'); ?>
        <!-- header-->
        <div class="row border rounded p-2 shadow">
            <!-- Product Images -->
            <div class="col-md-6 mb-4">
                <img src="/demoshop/frontend/asset/images/<?php echo $product['Image_Url'] ?>" id="mainImage">
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2 class="mb-3"><?php echo $product['Name'] ?></h2>
                <div class="mb-3">
                    <span class="h4 me-2"><?php echo $product['Price'] ?> VND</span>
                </div>
                <p class="mb-4"><?php echo $product['Description'] ?></p>
                <div class="mb-4">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1" style="width: 80px;">
                </div>
                <button class="btn btn-primary btn-lg mb-3 me-2" id="btnadd">
                    <i class="bi bi-cart-plus"></i> Add to Cart
                </button>
                <button class="btn btn-outline-secondary btn-lg mb-3">
                    <i class="bi bi-heart"></i> Add to Wishlist
                </button>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include_once('../partial/partialFooter.PHP'); ?>
    <!-- end footer -->
            <?php include_once('../asset/Script.PHP'); ?>
    <script>
        $(document).ready(function () {
            $('#btnadd').click(function(){
                AddToCart();
            });
        });

        function AddToCart() {
            var data = {
                id: <?php echo $product['idproducts'] ?>,
                prodname: "<?php echo $product['Name'] ?>",
                price:<?php echo $product['Price'] ?>,
                image: '<?php echo $product['Image_Url'] ?>',
                category: '<?php echo $product['Category'] ?>',
                quantity: $('#quantity').val(),
            };
            $.ajax({
                url: "/demoshop/frontend/pages/AddToCartProcess.PHP",
                method: "post",
                datatype: 'json',
                data: data,
                success: function (data) {
                   
                },
                error: function () {

                }
            })

        }
    </script>

</body>


</html>