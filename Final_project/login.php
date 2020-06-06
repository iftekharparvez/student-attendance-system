<?php 

   session_start();

   require_once('functions.php');

   if(user_logged_in()){
      header('location: attend.php');
   }

   if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

   
      if(email_exits()){
         $password_query = mysqli_query($connection, "SELECT password FROM users WHERE email = '$email'");
         $row = mysqli_fetch_assoc($password_query);

         if($password == $row['password']){
            $_SESSION['success'] = "logged in";
            header('location: attend.php');
         }
         else{
            echo "Password does not match";
         }  


      }
      else {
         $exit_mail = "Email does not exit in database";
      }

   }



?>


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Authentication forms">
      <meta name="author" content="Arasari Studio">
      <title>Login Here</title>
      <link rel="shortcut icon" href="img/ss.png" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/common.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&amp;display=swap" rel="stylesheet">
      <link href="css/theme-03.css" rel="stylesheet">
   </head>
   <body>
      <div class="forny-container">
         <div class="forny-inner">
            <div class="forny-form">
               <div class="mb-8 text-center forny-logo">
                  <img src="img/ss.png">
               </div>
               <div class="text-center">
                  <h4>Login into account</h4>
               </div>



               <form action="" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input required  class="form-control" name="email" type="email"
                           placeholder="Email Address">
                     </div>
                  </div>
                  <div class="form-group password-field">
                     <div class="input-group">
                        <input required  class="form-control" name="password" type="password"
                           placeholder="Password">
                     </div>
                  </div>
                  <div>
                     <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                  </div>
                  <div class="text-center">
                     <div class="d-inline-block mr-1">
                     </div>
                     <div class="d-inline-block mr-1">
                     </div>
                     <div class="d-inline-block">
                     </div>
                  </div>
                  <div class="text-center mt-10">
                     Don't have an account? <a href="register.php">Register here</a>
                  </div>
               </form>
               <div class="text-center mt-10 errormail_design">
                  <?php 
                     if(isset($exit_mail)){
                        echo $exit_mail;
                     }
                  ?>                  
               </div>               


            </div>
         </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/demo.js"></script>
   </body>
</html>