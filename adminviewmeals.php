<?php 

include_once 'connection.php';

session_start();
 if(!isset($_SESSION['id'])) {

    header("Location: Homepage.html");
}

?>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>view meals</title>
   
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
    <br />
    <br />
    <br />
    <table class=" fadeIn second ">

        <thead class=" fadeIn second ">
            <tr>
                <th style="width: 2px;">Meal name</th>
                <th style="width: 2px;">Photo</th>
                <th style="width: 4px;">Description</th>
                <th>Ingredients</th>
                <th>Recipe</th>
                <th style="width: 3px;">Customizable</th>
                 <th style="width: 2px;">Price</th>

                <th style="width: 4px;"><!-- Intentionally Blank --></th>
                <th style="width: 2px;"><!-- Intentionally Blank --></th>

            <tr>
        </thead>
        <tbody class=" fadeIn third ">
            
            <?php 
            
            
            $sql = "SELECT * FROM `meal`";
            
            $result = mysqli_query($connection,$sql);
            
            while ($row = mysqli_fetch_assoc($result)) { ?>
                
              <tr>
                <th><?php echo $row['title']; ?></th>
                <td> <img src="<?php echo $row['img_url']; ?>" alt="<?php echo $row['title'];?>"></td>
                <td>
                 <?php echo $row['description'];  ?>
                </td>
                <td>
                     <?php echo $row['ingredients'];  ?>
                </td>
                <td>
                     <?php echo $row['recipe'];  ?>
                </td>

                <td><?php 
                          echo "1-".$row['c1']."</br>";
                          echo "2-".$row['c2']."</br>";
                          echo "3-".$row['c3']."</br>";
                          echo "4-".$row['c4']."</br>";
                ?></td>
                <td><?php echo $row['price']; ?></td>
                    
                <form action="edit.php" method="GET">
                    
                <input type="hidden" name="title" value="<?php echo $row['title']?>"> 
                <a href="edit.php?title=<?php $row['title']?>"><td >
                <button class="buttonS" name="ed"> edit</button></a> </td>
       
                </form>
               
                
                <form action="delete.php" method="GET">
                    
                <input type="hidden" name="title" value="<?php echo $row['title']?>"> 
                <a href="delete.php?title=<?php $row['title']?>"><td >
                <button class="buttonSD" name="ed"> delete</button></a> </td>
       
                </form>
              
            </tr>
                
           <?php } ?>
         
            
        </tbody>
    </table>


</body>
</html>

