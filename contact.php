<?php
    
	error_reporting(0);
	session_start();

    if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   
   $txt="\r Name: " . $name . "\r\n\n Email: ". $email . "\r\n\n Message:" . $message ;
	
	$to=$email;

   $headers = "From: jihadkhan7142@gmail.com";

if (mail($to, $subject, $txt, $headers)) {
    echo "<script>alert('Email sent succesfully.')</script>";
} else {
    echo "<script>alert('Email sending failed!')</script>";
}
  
	}
        
?>



<html>
<head>
	
	<title>Tour & Travel Website</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    
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
	
	
	
 <section class="contact">
 <div class="content2">
   <h2> Contact Us</h2>
   <p>If you want to contact with us, please send a maasage</p>
    </div>
<div class="Formcontainer">
   <div class="contactInfo">
     <div class="box">
	    <div class="icons"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		<div class="text">
		  <h3>Address</h3>
		  <p>Tejgoan ,Turag ,Dhaka</p>
		  </div>
	  </div>
	  
	   <div class="box">
	    <div class="icons"><i class="fa fa-phone" aria-hidden="true"></i></div>
		<div class="text">
		  <h3>Phone</h3>
		  <p>0193266464</p>
		  </div>
	  </div>
	  
	   <div class="box">
	    <div class="icons"><i class="fa fa-envelope" aria-hidden="true"></i></div>
		<div class="text">
		  <h3>Email</h3>
		  <p>jihadkhan7142@gmail.com</p>
		  </div>
	  </div> 
    </div>
	
	<div class="contactform">
	  <form action="" method="post">
	    <h2>Send Message</h2>
		<div class="inputbox">
		<input type="text" name="name" required="required">
		<span>Name</span>
		</div>
		
		<div class="inputbox">
		<input type="text" name="email" required="required">
		<span>Your Email</span>
		</div>
		
		<div class="inputbox">
		<input type="text" name="subject" required="required">
		<span>Subject</span>
		</div>
		
		<div class="inputbox">
		<textarea name="message" required="required"></textarea>
		<span>Type your Message...</span>
		</div>
		
		<div class="inputbox">
		<button type="submit"  name="submit" value="Submit">Submit</button>
		
		</div>
		
	  </form>
	  </div>
	  
  </div>	
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