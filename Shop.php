<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Shop </title>
    
   
    <link rel="stylesheet" href="css/css.css">
   

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
                    <li class="navbar-item"> <div class="header-search"> <input type="text" class="header-search input" placeholder="Search..." id="search-item" onkeyup="search()"> </div></li>
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

        <h2>Our Meals</h2>
    </div>

    <br>
    <br>
    <br>

    
  

				
			
<div class="product-list" id="product-list">
    <div class="row">
           
          <?php
              include_once 'connection.php';
              $sql = "SELECT * FROM meal";
              $result = mysqli_query($connection, $sql);
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                    
                    ?>
		   <div class = "product">
            <div class="card">
                <img src="<?php echo $row['img_url']; ?>" alt="<?php echo $row['title']; ?>" style="width:250px; height: 200px;">
                <h1><?php echo $row['title']; ?></h1>
                <div> 
				
				
				
				<p class="price"><?php echo $row['price']." riyals"; ?></p>
                <a href="view.php?title=<?php echo $row['title']; ?>"   id="buttonS" >View</a>
            
  
                
               <a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=TITLE&p%5Bsummary%5D=DESC&p%5Burl%5D=URL&p%5Bimages%5D%5B0%5D=IMG_PATH" target="_blank" onclick="return Share.me(this);" id="buttonS">share</a> 
				</div>
               
                
                <p><a href="cart.php?title=<?php echo $row['title'];?>"><button>Add to Cart</button></a></p>
              </div>
</div>
        
         <?php
                    }
                
                ?>
        
          <script src="app.js"></script>
        
    
        
    
        <script>
        Share = {
facebook: function(purl, ptitle, pimg, text) {
url = 'http://www.facebook.com/sharer.php?s=100';
url += '&p[title]=' + encodeURIComponent(ptitle);
url += '&p[summary]=' + encodeURIComponent(text);
url += '&p[url]=' + encodeURIComponent(purl);
url += '&p[images][0]=' + encodeURIComponent(pimg);
Share.popup(url);
},

popup: function(url) {
window.open(url,'','toolbar=0,status=0,width=626, height=436');
}
};
        </script> 
    

             

        </div>
    </div>





    <footer>Copyright 2021 - SOSUSHI ! ALL Rights Reserved</footer>
</body>
</html>

