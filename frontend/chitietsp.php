<?php
    // Lấy ID
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    else{
        $id = '';
    }
    $sql_chitiet = mysqli_query($mysqli , "SELECT * FROM product  WHERE product_id ='$id'" );
?>

<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Trang chủ</a>
                    <i>|</i>
                </li>
                <li>Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>

<?php
    while($row_chitiet = mysqli_fetch_array($sql_chitiet)) {
?>
<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/<?php echo $row_chitiet['product_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['product_image'] ?>" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="images/<?php echo $row_chitiet['product_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['product_image'] ?>" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="images/<?php echo $row_chitiet['product_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['product_image'] ?>" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h2 class="mb-1"><?php echo $row_chitiet['product_name'] ?></h2>
                <p class="mb-1">
                    <span class="item_price2"><?php echo number_format($row_chitiet['product_discount']).'đ' ?></span>
                    <del class="del2 mx-2 font-weight-light"><?php echo number_format($row_chitiet['product_price']).'đ' ?></del>
                    <label>Giao hàng miễn phí</label>
                </p>
                <div class="product-single-w3l">
                    <p class="my-3">
                        <?php echo ($row_chitiet['product_details']) ?>
                    </p>
                    <p class="my-3">
                        <?php echo ($row_chitiet['product_description']) ?>
                    </p>
                   
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <!-- formaction_lydulieu -->
                        <form action="?quanli=giohang" method="post">
                            <fieldset>
                                <input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['product_name'] ?>" />
                                <input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['product_id'] ?>" />
                                <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['product_discount'] ?>" />
                                <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['product_image'] ?>" />
                                <input type="hidden" name="soluong" value="1"/>
                                
                                <div class="d-flex">
                                    <input type="number" class="p-1 mr-2" style="width: 40px;" min="1" value="1">
                                    <input type="submit" name="themgiohang" value="Thêm vào giỏ" class="button mr-2" />
                                    <input type="submit" name="themgiohang" value="Mua ngay" class="button-buy" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Single Page -->
<?php
    }
?>