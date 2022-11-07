<?php

function login($connection){
    
if(isset($_SERVER['REQUEST_METHOD'])&&$_SERVER['REQUEST_METHOD']=="POST"){
            
        
        
        if (isset($_POST['log'])&&$_POST['log'] == 'login'&&isset($_POST['username'])&&isset($_POST['password'])) {
            
            $username = $_POST['username'];
            $password= $_POST['password'];
            
            $sql= "SELECT * FROM `admin` WHERE username ='$username'";
            
            $ph= password_hash($password, PASSWORD_DEFAULT);
            echo $ph;
            
            $result = mysqli_query($connection, $sql);
            $rows = mysqli_num_rows($result);
                                
                          
	if ($rows == 1){
            echo $password;
	$row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
                                        
	$id = $row['adminid'];
	$_SESSION['id'] = $id;
       header("Location: adminviewmeals.php");
        }
        else
            return 'Incorrect username or password!';
                                        
                                        
            
        }
        
        
        }
        else 
            return 'email or password is missing!';
                                   

        }

}//end fun