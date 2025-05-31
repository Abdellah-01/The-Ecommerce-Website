<?php
require '../admin/dbcon.php';




  $username = mysqli_real_escape_string($con, $_POST['username']) ;
  $email = mysqli_real_escape_string($con, $_POST['email']) ;
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
  $password = mysqli_real_escape_string($con, $_POST['password']) ;
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;



  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = " select * from users where email='$email' ";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>1){
    echo "email already exists";
  }else{
    if($password === $cpassword){

      $insertquery = "INSERT INTO users (username, email, mobile, password, cpassword, register_date) VALUES ('$username','$email','$mobile','$pass','$cpass',NOW())";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
          ?>
            <script>
              alert("Register Successful");


      window.location.href="index.php";   
            </script>
          <?php
        }else{

          ?>
            <script>
              alert("NO Inserted ");
            </script>
          <?php
        }

    }else{
      ?>
        <script>
          alert("Password are not matching ");
            </script>
          <?php
    }
  }






?>
