 <?php

 include_once 'connection.php';
 
 session_start();
 
 if (!isset($_SESSION['id'])) {

    header("Location: Homepage.html");
}

      if (isset($_POST['edit'])){
         
 #save to DB
     $ogtitle = $_POST['hid'];                 
     $title = $_POST['name'];
     $des = $_POST['Description'];
     $ing = $_POST['Ingredients'];
     $rec = $_POST['Recipe'];
     $c1 = $_POST['c1'];
     $c2 = $_POST['c2'];
     $c3 = $_POST['c3'];
     $c4 = $_POST['c4'];
     $price = $_POST['price'];
     
     
     if(isset($_FILES['photo'])&&$_FILES['photo']['name']!=''){
         
     
     $imgname = $_FILES['photo']['name'];
     $img_ex= pathinfo($imgname, PATHINFO_EXTENSION);
     
     $img_name = $_FILES['photo']['name'];
     $img_size = $_FILES['photo']['size'];
     $tmp_name = $_FILES['photo']['tmp_name'];
     $error = $_FILES['photo']['error'];

			        echo $img_name;
				$img_upload_path = 'images/'.$img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
     
             echo 'tt';
           $sql = "UPDATE `meal` SET `title`='$title',`img_url`='$img_upload_path',`description`='$des',`ingredients`='$ing',`recipe`='$rec',`c1`='$c1',`c2`='$c2',`c3`='$c3',`c4`='$c4',`price`='$price' WHERE title = '$ogtitle' ";
          } else {
               echo 'ff';
              $sql = "UPDATE `meal` SET `title`='$title',`description`='$des',`ingredients`='$ing',`recipe`='$rec',`c1`='$c1',`c2`='$c2',`c3`='$c3',`c4`='$c4',`price`='$price'  WHERE title = '$ogtitle' ";
          }
      
           $result = mysqli_query($connection, $sql);
           
     if (mysqli_query($connection, $sql)) 
     echo "<p> New record created successfully </p>";
      header('Location: adminviewmeals.php');
       }
           
           ?>