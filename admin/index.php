<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - Pos admin template</title>
		 
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body class="account-page">

        <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper bg-img">
                    <div class="login-content">
 <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                   <img src="assets/img/logo.png" alt="img">
                               </div>
                               <a href="index.php" class="login-logo logo-white">
                                   <img src="assets/img/logo-white.png"  alt="">
                               </a>
                               <div class="login-userheading">
                                   <h3>Sign In</h3>
                                   <h4>Access the Dreamspos panel using your email and passcode.</h4>
                               </div>
                               <div class="form-login mb-3">
                                   <label class="form-label">Mobile Number</label>
                                   <div class="form-addons">
                                       <input type="text" class="form- control" name="mobile" value="1234567890">
                                       <img src="assets/img/icons/mail.svg" alt="img">
                                   </div>
                               </div>
                               <div class="form-login mb-3">
                                   <label class="form-label">Password</label>
                                   <div class="pass-group">
                                       <input type="password" class="pass-input form-control" name="password" value="Vijayas@3">
                                       <span class="fas toggle-password fa-eye-slash"></span>
                                   </div>
                               </div>
                               <div class="form-login authentication-check">
                                   <div class="row">
                                       <div class="col-12 d-flex align-items-center justify-content-between">
                                           <div class="custom-control custom-checkbox">
                                               <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                   <input type="checkbox" class="form-control">
                                                   <span class="checkmarks"></span>Remember me
                                               </label>
                                           </div>
                                           <div class="text-end">
                                               <a class="forgot-link" href="forgot-password.php">Forgot Password?</a>
                                           </div>
                                       </div>                                    
                                   </div>
                               </div>
                               <div class="form-login">
                                   <button name="submit"   class="btn btn-login">Sign In</button>
                               </div>
                               <div class="signinform">
                                   <h4>New on our platform?<a href="register.php" class="hover-a"> Create an account</a></h4>
                               </div>
                               <!-- <div class="form-setlogin or-text">
                                   <h4>OR</h4>
                               </div> -->
                               <div class="form-sociallink">
                                  <!--  <ul class="d-flex">
                                       <li>
                                           <a href="javascript:void(0);" class="facebook-logo">
                                               <img src="assets/img/icons/facebook-logo.svg" alt="Facebook">
                                           </a>
                                       </li>
                                       <li>
                                           <a href="javascript:void(0);">
                                               <img src="assets/img/icons/google.png" alt="Google">
                                           </a>
                                       </li>
                                       <li>
                                           <a href="javascript:void(0);" class="apple-logo">
                                               <img src="assets/img/icons/apple-logo.svg" alt="Apple">
                                           </a>
                                       </li>
                                       
                                   </ul> -->
                                   <!-- <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                       <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                                   </div> -->
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		<div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
						data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div>
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>

         <!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS --><script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

	
    </body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$mobile_search = " select * from admin where mobile='$mobile' ";
$query = mysqli_query($con,$mobile_search);

$mobile_count = mysqli_num_rows($query);

if($mobile_count){
$mobile_pass = mysqli_fetch_assoc($query);

$db_pass = $mobile_pass['password'];

$_SESSION['username'] = $mobile_pass['username'];

$_SESSION['email'] = $mobile_pass['email'];
$_SESSION['mobile'] = $mobile_pass['mobile'];
 

$pass_decode = password_verify($password, $db_pass);

if($pass_decode){

 ?>
    <script>
        alert("login Sucessfully");
         window.location.href = "home.php";
    </script>
    <?php

}else{
 ?>
    <script>
        alert("Password Invalid");
     </script>
    <?php
}

}else{
 ?>
    <script>
        alert("Mobile Number does not match in our database");
     </script>
 <?php
}

}

?>

