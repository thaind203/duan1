<?php
include('../db/connect.php');
?>

<?php
session_start();
//Đăng nhập
$errors = '';
if (isset($_POST['login_admin'])) {
	$taikhoan = $_POST['email_admin'];
	$matkhau = $_POST['password_admin'];

	$select_admin = mysqli_query($mysqli, "SELECT * FROM quanli_user WHERE role='1' ");
    $row_count = mysqli_num_rows($select_admin);
	$row_admin = mysqli_fetch_array($select_admin);
	$row_email = $row_admin['user_email'];
	$row_password = $row_admin['user_password'];

    if($row_count == 0) {
        $errors .= "Tài khoản không tồn tại !<br>";
    }elseif($taikhoan != $row_email) {
        $errors .= "Sai tên đăng nhập !<br>";
    }

    if($matkhau != $row_password) {
        $errors .= "Sai mật khẩu admin ! <br>";
    }

	if ($taikhoan == '' || $matkhau  == '') {
		echo "<script> alert('Vui lòng nhập đầy đủ tài khoản và password')  </script>";
	} else {
		if (($taikhoan == $row_email) && ($matkhau == $row_password)) {
            $_SESSION['admin'] = $row_admin['role'];
			$_SESSION['login_email'] = $row_admin['user_email'];
			$_SESSION['login_name'] = $row_admin['user_name'];
			$_SESSION['login_admin_id'] = $row_admin['user_id'];

            header('location: index.php');
			exit();			
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include('./common/head.php')
?>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-3">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng nhập ADMIN</h1>
                                    </div>
                                    <p class="h6 text-danger mb-4 text-center">Vui lòng đăng nhập để vào trang quản lí</p>
                                    <?php
                                    if ($errors != '') {
                                        echo '
                                            <div class="alert alert-danger p-2"> 
                                                ' . $errors . '
                                            </div> 
                                        ';
                                    }
                                    
                                    
                                    ?>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input style="font-size: 1rem; border-radius: 0.35rem;" type="email" name="email_admin" value="<?php if(isset($taikhoan)) echo $taikhoan ?>" class="form-control form-control-user" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input style="font-size: 1rem; border-radius: 0.35rem;" type="password" name="password_admin" value="<?php if(isset($matkhau)) echo $matkhau ?>" class="form-control form-control-user" placeholder="Mật khẩu" required>
                                        </div>
                                        
                                        <input style="font-size: 1rem; border-radius: 0.35rem;" type="submit" name="login_admin" class="btn btn-primary btn-user btn-block" value="Đăng nhập">
                                            
                                        <hr>
                                        
                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="#1">Quên mật khẩu?</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>