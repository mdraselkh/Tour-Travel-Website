<?php 
 include 'databaseConnect.php';

 session_start();
  error_reporting(0);

 if(isset($_POST['username'])){
  
   
   $username=$_POST['username'];
   $password=$_POST['password'];
   $qry="SELECT * FROM admin_login WHERE username='".$username."' AND password='".$password."' limit 2";
   $result=mysqli_query($conn,$qry);

    if(mysqli_num_rows($result)==1){
		 $username="";
         $password="";
		
        
       
    
        header("Location: adminDashboard.php");
        echo "<script>alert('SignIn Succesfully.')</script>";

        }else{
		  echo "<script>alert('SignIn failed.')</script>";	
		}
     }
	 
	 
?>






<!DOCTYPE html>
<html>
<head>
	
	<title>Tour & Travel Website</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
	 
</head>
<body>
	
   <header class="header">
   	<div class="navbar">
   		<div class="icon">
   		 <h3 class="logo">Tou<span>R & Tra</span>Vel</h3>
   		</div>
   		<div class="menu">
   			<ul>
   				<a href="Tour&Travel.php">HOME</a>
   				<a href="services.php">SERVICES</a>
   				<a href="packages.php">DESTINATION</a>
   		     	<a href="book.php">BOOK</a>
   		    	<a href="gallery.php">GALLERY</a>
   		    	<a href="contact.php">CONTACT</a>
   		  		<a href="about.php">ABOUT&nbsp;US</a>	   				   				
   			</ul>
   		</div>

   		<div class="search">
   			<input class="srch" type="search" name="" placeholder="type to text">
   			<a href="#"><button class="btn">Search</button></a>
   		</div>
   		
   	</div>
	</header>
	
	
	<section class="admin">
	
	 <div class="adminform">
   			<form action="" method="POST" >			
   			<h2>Admin Login Here</h2>
            <input type="username" name="username" placeholder="Enter Username" required>

            <input type="password" name="password" placeholder="Enter Password"  >

            <button type="submit" name="signin" class="signinbtn">Sign In</button><br>
            

             <p><a href="#">Forget Password?</a></p>
			 
			 </form>
			 </div>
	
	</section>
	
	
</body>
</html>	