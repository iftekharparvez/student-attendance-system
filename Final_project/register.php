<?php 
   
   session_start();
   require_once('functions.php');

   if(user_logged_in()){
      header('location: admin.php');
   }


   if(isset($_POST['registration'])){

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!email_exits()){

         if($email == NULL){
            if($password == NULL){
               echo "Input field empty!";
            }  
         }
         else{
            $insert = mysqli_query($connection, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");

            $success = "Registration successfully!";
         }
      }
      else {
         $errormail = "Email already exits! try another email";
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
      <title>Registration Here</title>
      <link rel="shortcut icon" href="img/ss.png" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/common.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
      <link href="css/theme-03.css" rel="stylesheet">
   </head>
   <body>
      <div class="forny-container">
         <div class="forny-inner">
            <div class="forny-form">
               <div class="text-center">
                  <h4>Create an account</h4>
               </div>


               <form action="" method="POST">
                  <div class="form-group">
                     <div class="input-group">
                        <input required  class="form-control" name="username" type="text"
                           placeholder="Username">
                     </div>
                  </div>
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
                     <button type="submit" name="registration" class="btn btn-primary btn-block">Register</button>
                  </div>
                  <div class="text-center">
                     <div class="d-inline-block mr-4">
                     </div>
                     <div class="d-inline-block mr-4">
                     </div>
                     <div class="d-inline-block mr-4">
                     </div>
                  </div>
                  <div class="text-center mt-10">
                     Already have an account? <a href="login.php">Login here</a>
                  </div>
               </form>
               <div class="success">
                  <?php 
                     if(isset($success)){
                        echo $success;    
                     }
                   
                  ?>
                  

               </div>
               <div class="errormail_design">
                  <?php 
                     if(isset($errormail)){
                        echo $errormail;
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