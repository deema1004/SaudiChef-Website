<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<html lang="en">
<head>
<script src="cartFunction.js"></script>
<title>Cart</title>
<?php include 'connection.php'; ?>


<link rel="stylesheet" href="css/css_1.css">
<link rel="stylesheet" href="css/style_1.css">
<link rel="stylesheet" href="css/cart_1.css">
<script src="script/scriptCart.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
</head>

<div class="header">
<div class="header-right">

	
    <section class="header">
        <nav class="navbar">

            <div class="navbar-box">
                <img src="images/logo1.png" alt="logo">
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
  
            
            <style type = "text/css">  
   a:link {color: red;}  
   a:visited {color: red}  
   a:hover {color: #e24620}  
  
   th{
       font-size: 16px;
   }
   td{
       font-size: 15px;
   }

        </style>
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
    
    
    <?php
    
    
    
    ?>

<form>
					
  <div class="row">
  <div class="column">
  
		<table id="cart">
			        
                  <thead>
			          
                     <tr>
                        
			<th>Product</th>
			<th>Name</th>
			<th>Qty</th>
			<th>Price</th>
                        <th>customize</th>
		        <th style="width: 2px;"><!-- Intentionally Blank --></th>		
						
                    </tr>
           
           <?php 
                
           $title;
           $quantity;
             $subTotal=0; 
                    if(isset($_GET['title'])||isset($_GET['Add'])){
                        
                        $title =$_GET['title'];
                    
                        $query1 = "SELECT * FROM meal WHERE title='$title'";
                        
                     /*   $price =$_GET['price'];
                        $quantity = $_GET['quantity'] ; 
                        $img =$_GET['img_url']; */
                        
                        $query2 ="SELECT quantity FROM meal WHERE title='$title'"; 
                        
                        $result1 =mysqli_query($connection,$query2);
                       
                        $row1=mysqli_fetch_assoc($result1);
                        
                        $quantity=$row1['quantity'];
                    
                        
                        $quantity =$quantity+1 ;
                    
                    
                       
                        
                        if(isset($_GET['Add'])){
                            
                        $string = "";
                        if(isset($_GET['c1'])){
                         
                        $string.= $_GET['c1']. " ";
                                
                        }
                        if(isset($_GET['c2'])){
                         
                         $string.= $_GET['c2']. " ";
                            
                        }
                        if(isset($_GET['c3'])){
                         
                         $string.= $_GET['c3']. " ";
                            
                        }
                        if(isset($_GET['c4'])){
                         
                         $string.= $_GET['c4']. " ";
                            
                        }
                            
                             $query1 = "UPDATE meal SET quantity='$quantity', custom='$string' WHERE title='$title'";
                        } else {
                             $query1 = "UPDATE meal SET quantity='$quantity' WHERE title='$title'";
                        }
                       
                        mysqli_query($connection,$query1);
   
                    }

            $query = "SELECT * FROM `meal` WHERE quantity >0;";
            $result = mysqli_query($connection,$query);

             
            while($row =mysqli_fetch_assoc($result)){
                
          
/*

             if(!empty($_SESSION["cart"])){
                foreach($_SESSION["cart"] as $key => $value)
  */              
            ?>	
			        </thead>

			        <tbody>
				
                    <tr>
				<td><img src="<?php echo $row['img_url']; ?>" alt="<?php echo $row['title'];?>"></td>
				<td><?php echo $row['title'];?>  </td>
				<td><?php echo $row['quantity'] ;?>  </td>
                                <?php $quantity =$row['quantity'] ;?>
				<td><?php echo $row['price']*$quantity ;?>  </td>
                                
				<td><?php 
                                if($row['custom']=="")
                                    echo "nothing";
                                else
                                echo $row['custom'];?>  
                                </td>
                                
                              
                                <td>
                                   <!--
                                   <a href="delete2.php?title=<?php echo $row['title'];?>">
                                    delete</a>
                                   -->
                              <button id="deleteB" onclick="del('<?php echo $row['title'];?>');"> delete </button>
                              
                                          
                              
                                </td>
               
                               
                                
                               

                               <?php $subTotal =$subTotal+ $row['price']*$quantity; ?>
		</tr>
					  <?php  } 
                                         
                                         ?>
					     
			        </tbody>
			      </table>
     
      
				  </div>
				  <div class="column">
				  
				  
			<table class="leg">
		
		<tr>	 
        <th> <fieldset>
    <legend></legend>
    <div class="cart-items">


    </div>

  
	<label>Total: </label> <input id="totalPrice"type="text" value=<?php echo $subTotal; ?>> 
	
	<br>
        
        

	<input type="button" id="myBtn-checkout" onclick="clear();" value="Checkout">
	
	
	</fieldset></th>
	</tr>
			</table>
			
			</div>
			</div>
           
			<br>
			<br>
			
			</form>
			
			<footer>
			<label>Accepted payment methods: </label>
				<ul class="paymentMethods">
					<li><img src="https://bit.ly/35I9coM" alt="Apple Pay"></li>
					<li><img src="https://bit.ly/3J2HtMU" alt="Visa"></li>
					<li><img src="https://bit.ly/3DC04P6" alt="Mastercard"></li>
					<li><img src="https://bit.ly/3uRojVd" alt="cod"></li>
				</ul>
		
			</footer>

		
</div>
			
	
</body>
</html>

<script>
    
  

 function del(title){
 
$.ajax({
type: "GET",
url: "delete2.php",
data:{title : title},
success: function(msg){
   
         alert("meal deleted!");
         window.location.href = "cart.php"; 
     
}


});
    }
    

$("#myBtn-checkout").click(function(){
   

$.ajax({
type: "GET",
url: "clearcart.php",
data:{},
success: function(msg){
   
         alert("order received!");
         window.location.href = "cart.php"; 
     
}


});
 });
   
    
   
</script>