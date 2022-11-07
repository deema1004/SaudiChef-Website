<?php

include_once 'connection.php';

session_start();
 if (!isset($_SESSION['id'])) {

    header("Location: Homepage.html");
}



?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Edit meal</title>
    <link rel="stylesheet" href="css/css.css">
 
    <script src="java.js" defer></script>
</head>
<body>



   

            <div class="navbar-box">
                <img src="images/logo1.PNG" alt="logo">
            </div>


    <div class="wrapper fadeInDown ">
        <div class="formContent">

            <h2 class="h2 active" style="background-color:white;"> Edit Meal Form </h2>

            <br />
            <br />

           <?php
           
             $t= $_GET['title'];
            
             $sql = "SELECT *FROM `meal` where title = '$t'";
            
            $result = mysqli_query($connection,$sql);
            
            $row = mysqli_fetch_assoc($result);
            
           ?>

            <form action="edit2.php" method="POST" enctype="multipart/form-data">
                
                <input  type="text" id="fn" class="fadeIn third text1" name='name' value="<?php echo $row['title'];?>" placeholder="Meal name" pattern="[A-Za-z]{3,30}" title="name should be at least 3 letters" required>


                <br />
                <br />
                <h4 class="fadeIn third lang">Upload Meal Photo :  </h4>
                <br />
                <input type="hidden" name="hid" value="<?php echo $row['title'];?>">
                <input type="file" id="fn" class="fadeIn third" name='photo' placeholder="Upload Meal Photo" />

                <br />
                <br />
                <br />
                <textarea class="fadeIn third" name="Description" placeholder="Description" pattern="[A-Za-z]{3,300}" title="should be at least 3 letters" required><?php echo  $row['description'];?> </textarea>
                <br />
                <br />
                <textarea class="fadeIn third" name="Ingredients"  placeholder="Ingredients" pattern="[A-Za-z]{3,300}" title="should be at least 3 letters" required><?php echo $row['ingredients'];?></textarea>
                <br />
                <br />
                <textarea class="fadeIn third" name="Recipe" placeholder="Recipe" pattern="[A-Za-z]{3,300}" title="should be at least 3 letters" required><?php echo $row['recipe'];?></textarea>
                <br />
                <br />
                <input  type="text" id="fn" class="fadeIn third text1" name='c1' value="<?php echo $row['c1'];?>" placeholder="Custom#1" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c2' value="<?php echo $row['c2'];?>" placeholder="Custom#2" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c3' value="<?php echo $row['c3'];?>" placeholder="Custom#3" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c4' value="<?php echo $row['c4'];?>"placeholder="Custom#4" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required> 
                    
                <br />
                <br />
                
                <input  type="number" id="fn" class="fadeIn third text1" name='price' value="<?php echo $row['price'];?>" placeholder="price" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <br />
                 <br />
                
                    <input type="submit" class="fadeIn fourth" name='edit' value="submit">


            </form>



        </div>
    </div>
</body>
</html>
