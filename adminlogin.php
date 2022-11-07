<!DOCTYPE html>

<?php
include_once 'connection.php';
include_once 'login.php';

session_start();

if (isset($_SESSION['id'])) {
     
     header("Location: adminviewmeals.php");
}


$msg="";
         if(isset($_SERVER['REQUEST_METHOD'])&&$_SERVER['REQUEST_METHOD']=="POST"){
         if($_POST['log']=='login')
         $msg = login($connection); 
         }


?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>admin login</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="style.css">
    <script src="java.js" defer></script>
</head>
<body>
      <div class=" fadeInDown " class="logo">
            <img src="images/logo1.PNG" alt="logo" style="width:100px; height:100px; ">
        </div>
    
    <div class="wrapper fadeInDown jol">
        <div class="formContent" style="margin-top: 0px;">
            <!-- Tabs Titles -->
            <h2 class="h2 active" style="background-color:white;"> Log In </h2>
            <div><p style="color:#f36464; font-size:15px;"><?php echo $msg;
            ?><p></div>


            <!-- Login Form -->
            <form action="" method="post" >
                <input type="text" id="usernameprov" class="fadeIn second text1" name="username" placeholder="username" pattern="[A-Za-z0-9 ]{3,30}" required>
                <input type="text" id="passwordprov" class="fadeIn third text1" name="password" placeholder="password" pattern="[A-Za-z0-9 ]{3,30}" required>
                <input type="submit" name="log" class="fadeIn fourth" value="login" />
            </form>



        </div>
    </div>
</body>
</html>