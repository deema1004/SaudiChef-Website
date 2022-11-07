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
    <title>Add meals</title>
    <link rel="stylesheet" href="css/css.css">
 
    <script src="java.js" defer></script>
</head>
<body>



    <section class="header">
        <nav class="navbar">

            <div class="navbar-box">
                <img src="images/logo1.PNG" alt="logo">
            </div>

            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>

            <div class="navbar-list">
                <ul>

                    <li class="navbar-item"> <a class="navbar-link" href="adminadd.php">Add Meal</a></li>
                    <li class="navbar-item"> <a class="navbar-link" href="adminviewmeals.php">View Meals</a> </li>
                    <li class="navbar-item "> <a class="navbar-link" href="logout.php">Logout</a> </li>
                </ul>
            </div>

        </nav>

        <div>
            <div class="video">
                <video loop muted autoplay id="video">
                    <source src="images/video.mp4" type="video/mp4">
                    This file type is not supported
                </video>
            </div>

            <div class="header-box">
                <h1 class="heading-primary">
                    Prepare <br> <span id="sushi">FRESH </span> <br> meals in home
                </h1>

            </div>
        </div>
    </section>

    <div class="wrapper fadeInDown ">
        <div class="formContent">

            <h2 class="h2 active" style="background-color:white;"> Add Meal Form </h2>

            <br />
            <br />



            <form action="add.php" method="post" enctype="multipart/form-data">
                <input  type="text" id="fn" class="fadeIn third text1" name='name' placeholder="Meal name" pattern="[A-Za-z ]{3,30}" title="name should be at least 3 letters & no numbers" required>


                <br />
                <br />
                <h4 class="fadeIn third lang">Upload Meal Photo :  </h4>
                <br />

                <input type="file" id="fn" class="fadeIn third" name='photo' placeholder="Upload Meal Photo" required/>

                <br />
                <br />
                <br />
                <textarea class="fadeIn third" name="Description" placeholder="Description" pattern="[A-Za-z0-9 ]{3,2000}" title="should be at least 3 letters" required></textarea>
                <br />
                <br />
                <textarea class="fadeIn third" name="Ingredients"  placeholder="Ingredients" pattern="[A-Za-z0-9 ]{3,2000}" title="should be at least 3 letters" required></textarea>
                <br />
                <br />
                <textarea class="fadeIn third" name="Recipe" placeholder="Recipe" pattern="[A-Za-z0-9 ]{3,2000}" title="should be at least 3 letters" required></textarea>
                <br />
                <br />
                
                <input  type="text" id="fn" class="fadeIn third text1" name='c1' placeholder="Custom#1" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c2' placeholder="Custom#2" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c3' placeholder="Custom#3" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <input  type="text" id="fn" class="fadeIn third text1" name='c4' placeholder="Custom#4" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required> 
                    
                <br />
                <br />
                
                <input  type="number" id="fn" class="fadeIn third text1" name='price' placeholder="price" pattern="[A-Za-z0-9 ]{3,30}" title="name should be at least 3 letters & no numbers" required>
                <br />
                <br />
                            <input type="submit" class="fadeIn fourth" name='add' value="submit">


            </form>



        </div>
    </div>
</body>
</html>
