<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = '';
}
$sql_cate = mysqli_query($mysqli, "SELECT * FROM tbl_category, product 
	WHERE tbl_category.category_id = product.category_id AND product.category_id = '$id' 
	ORDER BY product.product_id ASC");

// Lấy tên danh mục thêm vào thẻ h3 VD: Điện thoai;
$sql_category = mysqli_query($mysqli, "SELECT * FROM tbl_category, product 
	WHERE tbl_category.category_id = product.category_id AND product.category_id = '$id' 
	ORDER BY product.product_id ASC");
$sql_title = mysqli_fetch_array($sql_category);
$title = $sql_title['category_name'];

?>

<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<?php echo $title ?>
		</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5 py-3 mb-4">
						<div class="row">
							<?php
							while ($row_product = mysqli_fetch_array($sql_cate)) {
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_product['product_image'] ?>" alt="" class="img-fluid">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanli=chitietsp&id=<?php echo $row_product['product_id'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanli=chitietsp&id=<?php echo $row_product['product_id'] ?>">
													<?php echo $row_product['product_name'] ?>
												</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_product['product_discount']) . ".đ" ?></span>
												<del><?php echo number_format($row_product['product_price']) . ".đ" ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanli=giohang" method="post">
													<fieldset>
														<input type="hidden" name="tensanpham" value="<?php echo $row_product['product_name'] ?>" />
														<input type="hidden" name="sanpham_id" value="<?php echo $row_product['product_id'] ?>" />
														<input type="hidden" name="giasanpham" value="<?php echo $row_product['product_discount'] ?>" />
														<input type="hidden" name="hinhanh" value="<?php echo $row_product['product_image'] ?>" />
														<input type="hidden" name="soluong" value="1" />
														<input type="submit" name="themgiohang" value="Thêm vào giỏ" class="button" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>

						</div>
					</div>
					<!-- //first section -->


				</div>
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="side-bar p-sm-4 p-3">
					<div class="search-hotel border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Các loai sản phẩm</h3>
						<form action="#" method="post">
							<input type="search" placeholder="Tìm kiếm" name="search" required="">
							<input type="submit" value=" ">
						</form>
						<div class="left-side py-2">
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Samsung Galaxy S20</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Iphone 16 Pro</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Laptop Gaming S20</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Macbook i20</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Tai Nghe Airpods 2</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Apple Magic mouse 2</span>
								</li>
								
							</ul>
						</div>
					</div>
					
					
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
</div>
<!-- //top products -->