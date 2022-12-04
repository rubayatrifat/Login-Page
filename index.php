<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <?php
   
      if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $pass = $_POST['pass'];

         if(empty($name)){
            $nameAlert = "! Name Field Is Emty";
         }
         if(empty($email)){
            $emailAlert = "! Email Field Is Emty";
         }
         if(empty($pass)){
            $passAlert = "! Password Field Is Emty";
         }
         if(empty($name) || empty($email) || empty($pass)){
            $sucsess = "<p class='sucsess-mess'> Your are Sucsess </p>"  ;
         }
         else{
            echo "<p class='sucsess-mess'> Your are Sucsess </p>";
         }
      }
   
   ?>

   <div class="full">
   <h1>Sing Up Now</h1> 
   <form action="" method="post">     
      <div class="single-input">
         <label for="">Name :</label>
         <input type="text" name="name" placeholder="Your Name">
         <p class="alert-style">
            <?php
            if(isset($nameAlert)){
                  echo $nameAlert;
            }
            ?>
         </p>
      </div>
      <div class="single-input">
         <label for="">Email : </label>
         <input type="email" name="email" placeholder="Your Email">
         <p class="alert-style">
            <?php
            if(isset($emailAlert)){
                  echo $emailAlert;
            }
            ?>
         </p>
      </div>
      <div class="single-input">
         <label for="">Password :</label>
         <input type="password" name="pass" placeholder="Your Password">
         <p class="alert-style">
            <?php
            if(isset($passAlert)){
                  echo $passAlert;
            }
            ?>
         </p>
      </div>
      <div class="single-input submit">
         <input type="submit" value="Submit Now" name="submit">
      </div>
   </form>
   </div>

</body>
</html>