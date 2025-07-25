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
        <!-- body-->
         <?php 
         if(isset($_SESSION['Cart']))
         {
            include_once('../asset/Class/classCart.php');
            $cart = array(new Cart);
            $cartjson = json_decode($_SESSION['Cart'], true);
            $cart = $cartjson;
         }
         ?>
        <h1 class="text-center">Cart</h1>
        <div class="row">
            <div class="col col-md-12">
                <?php if (!empty($cart)): ?>
                    <table id="tblCart" class="table tablebordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <?php $no = 1; ?>
                            <?php foreach($cart as $item):?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <?php if
                                        (empty($item['image'])): ?>
                                            <img src="/demoshop/frontend/asset/images/default-image_600.png" class="imgfluid image" />
                                        <?php else: ?>
                                            <img src="/demoshop/frontend/asset/images/<?= $item['image'] ?>" class="img-fluid image" />
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $item['prodname'] ?></td>
                                    <td>
                                        <input type="number" class="form-control" id="quantity_<?= $item['id'] ?>"
                                            name="quantity" value="<?= $item['quantity'] ?>" />
                                        <button class="btn btnprimary btn-sm btn-update-quantity" data-id="<?= $item['id']
                                            ?>">Update</button>
                                    </td>
                                    <td>
                                        <?=
                                            number_format($item['price'], 2, ".", ",") ?> vnđ
                                    </td>
                                    <td>
                                        <?=
                                            number_format($item['quantity'] * $item['price'], 2, ".", ",") ?>
                                        vnđ
                                    </td>
                                    <td>
                                        <a id="delete_<?= $no ?>" data-id="<?= $item['id'] ?>"
                                            class="btn btn-danger btn-deleteproduct">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h2>Cart Empty</h2>
                <?php endif; ?>
                <a href="/demoshop/frontend" class="btn btnwarning btn-md"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i>
                    Continue Shopping</a>
                <a href="/demoshop/frontend/pages/checkout.php" class="btn btn-primary btn-md"><i
                        class="fa fa-shopping-cart" ariahidden="true"></i> Checkout</a>
            </div>
        </div>
    </div>



    <!--end body-->
    <!-- footer -->
    <?php include_once('../partial/partialFooter.PHP'); ?>
    <!-- end footer -->
    </div>


</body>

</html>