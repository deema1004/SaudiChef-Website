
<?php

include_once 'connection.php';

$t=$_GET['title'];
$sql="SELECT * FROM meal where title='$t'";
$result = mysqli_query($connection, $sql);                  
$row = mysqli_fetch_assoc($result);


?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $row['title'];?></title>
    <link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/mealview.css">
   

</head>
<body id='body'>
<script src="searchbar.js"></script>
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
                    <li class="navbar-item active"> <a class="navbar-link" href="Homepage.html">Home</a> </li>
                    <li class="navbar-item"> <a class="navbar-link" href="Shop.php">Shop</a></li>
                    <li class="navbar-item"> <a class="navbar-link" href="cart.php">Cart</a> </li>
                    <li class="navbar-item"> <a class="navbar-link" href="adminlogin.php">Log in</a> </li>
                   
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

    <br />
    <br />
    <br />

    <div class="section-title">

        <h2><?php echo $row['title'];?></h2>
    </div>

    <br>
    <br>
    <br>


			<div class ="imagepos">
            <img src="<?php echo $row['img_url'];?>" alt="<?php echo $row['title'];?>" style="width:250px; height: 200px;">
			
			</div>
			
			<div class ="textstyle">
			<dl>
			<dt> Dish Details </dt>
			<dd><br> <?php echo $row['description'];?></dd>
			<dt> Reciepe </dt>
			<dd> <br> <?php echo $row['recipe'];?> </dd>
			<dt> Ingredients </dt>
			<dd> <br> <?php echo $row['ingredients'];?> </dd>
			<dt> Customize Ingredients </dt>
			</dl>
			</div>
	<form id="customize" action="cart.php" method="get">
            
            <input type="hidden" name="title" value="<?php echo $row['title'];?>" />
            <div>
            <input type="checkbox" name="c1" value="<?php echo $row['c1'];?>" />
            <label for="Ingredient"><?php echo $row['c1'];?> </label>
           </div>
           <div>
           <input type="checkbox" name="c2" value="<?php echo $row['c2'];?>"  />
           <label for="Ingredient"><?php echo $row['c2'];?> </label>
           </div>
		    <div>
           <input type="checkbox" name="c3" value="<?php echo $row['c3'];?>" />
           <label for="Ingredient"><?php echo $row['c3'];?> </label>
           </div>
		   <div>
           <input type="checkbox" name="c4" value="<?php echo $row['c4'];?>"  />
           <label for="Ingredient"><?php echo $row['c4'];?> </label>
           </div>
	
           <div>
             <input type="submit" name="Add" value="Add to cart" id="addtocart"/></a
          </div>
          </form>
		
	<footer>Copyright 2021 - SOSUSHI ! ALL Rights Reserved</footer>
</body>
</html>

