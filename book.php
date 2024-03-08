<?php 
   
         include 'databaseConnect.php';
         error_reporting(0);
		 
   
   if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $location=$_POST['location'];
   $guests=$_POST['guests'];
   $arrivals=$_POST['arrivals'];
   $leaving=$_POST['leaving'];
   
   
   
       $qry="INSERT INTO book_table(name, email, phone, address, location, guests, arrivals,leaving) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
       $res=mysqli_query($conn,$qry);
	   
	   if(!$res){

		   echo "<script>alert('Something Wrong.')</script>";
	   }else{
		   $name="";
             $email="";
             $phone="";
             $address="";
             $location="";
             $guests="";
             $arrivals="";
             $leaving="";
           
		   echo "<script>alert('Booked Succesfully.')</script>";
             		   
		    
	   }
	   
     
   }
 


?>



<html>
<head>
	
	<title>Tour & Travel Website</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
	
	
	
	<div class="heading" style="background:url(bookbg2.jpg) no-repeat">
   <h1>book now</h1>
   </div>

<!-- booking section starts  -->

<section class="booking" id="book">
   
    <h1 class="heading-title">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>T</span>
        <span>R</span>
        <span>I</span>
		<span>P</span>
    </h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name"  required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email"  required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone"   required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address"   required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location"  required>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests"   required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals"  required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving"  required>
         </div>
      </div>
	  
       <div class="submit">
      <input type="submit" name="submit" value="Submit" class="btn" >
	  </div>

   </form>

</section>



<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="Tour&Travel.php"> <i class="fas fa-angle-right"></i> home</a>
		 <a href="services.php"> <i class="fas fa-angle-right"></i> services</a>
         <a href="packages.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about&nbsp;us</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +019-456-78900 </a>
         <a href="#"> <i class="fas fa-phone"></i> +017-222-33330 </a>
         <a href="#"> <i class="fas fa-envelope"></i> webdesigner@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh - 1230 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

	
	
	
	
</body>
</html>	