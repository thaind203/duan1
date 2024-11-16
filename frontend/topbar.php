

<!--header -->
<div class="agile-main-top">
	<div class="container-fluid">
		<div class="row main-top-w3l py-2">
			<div class="col-lg-4 header-most-top">
				<p class="text-white text-lg-left text-center">Ưu đãi & Giảm giá hàng đầu
					<i class="fas fa-shopping-cart ml-1"></i>
				</p>
			</div>
			<div class="col-lg-8 header-right mt-lg-0 mt-2">
				<!-- header lists -->
				<ul>
					<li class="text-center border-right text-white">
						<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
							<i class="fas fa-map-marker mr-2"></i>Hệ thống</a>
					</li>
					<li class="text-center border-right text-white">
						<a href="index.php?quanli=dondamua"class="text-white">
							<i class="fas fa-truck mr-2"></i>Đơn mua</a>
					</li>
					<li class="text-center border-right text-white">
						<i class="fas fa-phone mr-2"></i> 0344821623
					</li>
					<li class="text-center border-right text-white">
						<a href="#" data-toggle="modal" data-target="#loginModal" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
					</li>
					<li class="text-center text-white">
						<a href="#" data-toggle="modal" data-target="#registerModal" class="text-white">
							<i class="fas fa-sign-out-alt mr-2"></i>Đăng ký </a>
					</li>
				</ul>
				<!-- //header lists -->
			</div>
		</div>
	</div>
</div>
<!-- Button trigger modal(select-location) -->
<div id="small-dialog1" class="mfp-hide">
	<div class="select-city">
		<h3>
			<i class="fas fa-map-marker"></i> Vui lòng chọn vị trí của bạn
		</h3>
		<select class="list_of_cities">
			<optgroup label="Popular Cities">
				<option selected style="display:none;color:#eee;">Chọn địa điểm</option>
				<option>TP. Hồ Chí Minh</option>
				<option>Hà Nội</option>
				<option>Đà Nẵng</option>
				<option>Thái Bình</option>
				<option>Vĩnh Phúc</option>

			</optgroup>

		</select>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //shop locator (popup) -->
<!-- modals -->
<!-- modals -->
<!-- log in -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center">Đăng nhập</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="text" class="form-control" placeholder=" " name="email_login" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="password_login" required="">
					</div>
					<div class="form-group">
						<a href="index.php?quanli=quenmatkhau" class="text-danger">Quên mật khẩu?</a>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" name="login_home" value="Đăng nhập">
					</div>
					
					<p class="text-center dont-do mt-3">Bạn chưa có tài khoản?
						<a href="#" data-toggle="modal" data-target="#registerModal">
							Đăng ký</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- register -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Đăng ký</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="col-form-label">Họ tên</label>
						<input type="text" class="form-control" placeholder=" " name="register_name" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder=" " name="register_email" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Số điện thoại</label>
						<input type="text" class="form-control" placeholder=" " name="register_phone" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Địa chỉ</label>
						<input type="text" class="form-control" placeholder=" " name="register_address" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="register_password" required="">
					</div>

					<div class="right-w3l">
						<input type="submit" name="register" class="form-control" value="Đăng ký">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //modal -->
<!-- //top-header -->
<!-- header-bottom-->
<div class="header-bot">
	<div class="container">
		<div class="row header-bot_inner_wthreeinfo_header_mid d-flex align-items-center justify-content-between">
			<!-- logo -->
			<div class="col-md-3 logo_agile">
				<a class="text-center" href="index.php">
					<img src="images/logo_cellphone.png" style="z-index: 1000;" class="img-fluid" alt="">
				</a>
			</div>
			<!-- //logo -->
			<!-- header-bot -->
			<div class="col-md-9 header mt-4 mb-md-0 mb-5">
				<div class="row d-flex align-items-center">
					<!-- search -->
					<div class="col-9 agileits_search">
						<form class="form-inline" action="index.php?quanli=timkiem" method="post">
							<input class="form-control mr-sm-2" name="seach_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
							<button class="btn my-2 my-sm-0" name="seach_btn" type="submit">Tìm kiếm</button>
						</form>
					</div>
					<!-- //search -->
					<!-- cart details -->
						<?php 
							$sql_cart = mysqli_query($mysqli, "SELECT * FROM cart");
							$countCart = mysqli_num_rows($sql_cart);
						?>
						<div class="col-1 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="?quanli=giohang" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down position-relative">
											<span class="position-absolute quantity_cart">
												<?php echo $countCart ?>
											</span>
										</i>
									</button>
								</form>
								
							</div>
							
						</div>
					
					
					<div class="col-1 dropdown top_nav_right mt-sm-0 mt-2">
						<?php if (isset($_SESSION['login_home']) || isset($_SESSION['admin_home'])) : ?>
							<!-- <div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="?quanli=userinfor" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-user"></i>
									</button>
									
								</form>
							</div>
							
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?quanli=userinfor">Tài khoản</a>
								<a class="dropdown-item" href="?quanli=dondamua">Đơn mua</a>
								<a class="dropdown-item" href="?quanli=thanhtoan">Thanh toán</a>
								<a class="dropdown-item" href="?logout=1">Đăng xuất</a>
							</div> -->
								<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">	
									<div class="nav-item dropdown no-arrow">
										<a class="nav-link dropdown-toggle d-flex align-items-center rounded" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img class="img-profile rounded-circle" src="./images/user1.png" width="40px">
											<span class="mx-2 d-none d-lg-inline text-gray-600" style="color: #111;">
												<?php if(isset($_SESSION['login_home'])) {
													$username = strstr($_SESSION['login_home'], "@", true);
													if ($username !== false) {
														echo $username; 
													}
													
												}else {
													echo 'ADMIN';
												}

												?>
											</span>
										</a>
										<!-- Dropdown - User Information -->
										<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
											<a class="dropdown-item" href="?quanli=userinfor">
												<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
												Hồ sơ
											</a>

											<a class="dropdown-item" href="?quanli=dondamua">
											<i class="fas fa-truck fa-sm fa-fw mr-2 text-gray-400"></i> 
												Đơn mua
											</a>
											<a class="dropdown-item" href="?quanli=thanhtoan">
												<i class="fas fa-credit-card fa-sm fa-fw mr-2 text-gray-400"></i>
												Thanh toán
											</a>
											
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="?logout=1">
												<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
												Đăng xuất
											</a>
										</div>
									</div>
								</nav>	
						<?php else : ?>
							<button class="btn w3view-cart" onclick="alert('Vui lòng đăng nhập trước khi sử dụng chức năng này.');">
								<i class="fas fa-user"></i>
							</button>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->
<!-- navigation -->
