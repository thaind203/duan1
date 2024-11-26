<style>
    .text-roboto {
        font-family: 'Roboto', sans-serif;
    }
</style>

<h2 class="h2-text text-center text-dark">Sản phẩm tương tự</h2>
<div class="container d-flex justify-content-center mt-50 mb-50">

    <?php
    if (isset($_GET['category']) && $_GET['id'] ) {
        $id_category = $_GET['category'];
        $id_product = $_GET['id'];
    } else {
        $id_category = '';
    }

    $sql_products = mysqli_query($mysqli, "SELECT * FROM product 
    WHERE category_id = '$id_category' AND product_id != '$id_product' LIMIT 4")
    ?>

    <div class="row col-12 text-roboto">
        <?php
        while ($row_product = mysqli_fetch_array($sql_products)) {
        ?>
            <div class="col-md-3 col-sm-12 mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="?quanli=chitietsp&id=<?php echo $row_product['product_id'] ?>&category=<?php echo $row_product['category_id'] ?>" class="card-img-actions">

                            <img src="images/<?php echo $row_product['product_image'] ?>" class="card-img img-fluid" width="96" height="350" alt="">


                        </a>
                    </div>

                    <div class="card-body bg-light text-center">
                        <div class="item-info-product mb-2">
                            <h4 class="pt-1">
                                <a href="?quanli=chitietsp&id=<?php echo $row_product['product_id'] ?>&category=<?php echo $row_product['category_id'] ?>" class="card-img-actions">
                                    <?php echo $row_product['product_name'] ?>
                                </a>
                            </h4>
                        </div>

                        <div class="info-product-price my-2">
                            <span class="item_price"><?php echo number_format($row_product['product_discount']) . ".đ" ?></span>
                            <del><?php echo number_format($row_product['product_price']) . ".đ" ?></del>
                        </div>

                        <form action="?quanli=giohang" method="post">
                            <input type="hidden" name="tensanpham" value="<?php echo $row_product['product_name'] ?>" />
                            <input type="hidden" name="sanpham_id" value="<?php echo $row_product['product_id'] ?>" />
                            <input type="hidden" name="giasanpham" value="<?php echo $row_product['product_discount'] ?>" />
                            <input type="hidden" name="hinhanh" value="<?php echo $row_product['product_image'] ?>" />
                            <input type="hidden" name="soluong" value="1" />

                            <button type="submit" name="themgiohang" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Thêm vào giỏ</button>
                        </form>

                    </div>
                </div>
            </div>
        <?php
        }
        ?>








    </div>
</div>