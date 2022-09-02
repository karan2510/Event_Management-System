<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>

<?php      
    
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      

      
        $sql = "select * from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           
            header("Location: ../index.php");
        }  
        else{  
            header("Location: ./Login/index.php");
        }     
?>