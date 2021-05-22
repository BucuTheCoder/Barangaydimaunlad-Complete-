<?php      
include('connect.php');  
    
session_start();

if($_SESSION['loggedIn'] == 'true'){
     echo  "<script> window.location='index.php'; </script>";
}

if(isset($_POST['login'])){
    //get uname and password
    $username= $_POST['uname'];
    $password= $_POST['password'];

    if(empty($username) || empty($password)){
               echo "<script> alert('Please fill up password and username'); window.location='login.php'; </script>";
                exit();
    }
    else{
       $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
                 $result = mysqli_query($connection, $sql);    
                 $count = mysqli_num_rows($result);  
                 $unvalidate= mysqli_fetch_array($result);

          
        if($count > 0){ 

            if($unvalidate['usertype'] == 'admin'){
                $_SESSION['loggedIn'] = 'true';
                $_SESSION['username'] = $unvalidate['username'];
                header("location: admin.php");

            }else{
                  $_SESSION['loggedIn'] = 'true';
                $_SESSION['username'] = $unvalidate['username'];
                header("location: index.php");
        
            }
        } else{
                $_SESSION['loggedIn'] = 'false';
             echo  "<script> alert('Check Username and Password'); window.location='login.php'; </script>";
        }
    }    
} 
?>