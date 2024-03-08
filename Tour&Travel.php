<?php 
 include 'databaseConnect.php';

  session_start();
  error_reporting(0);
  
   
  
 
 if(isset($_SESSION['username'])){
 	header("Location: userhome.php");
 }

 if(isset($_POST['submit'])){
  
   
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   $sql="SELECT * FROM user_register WHERE email='$email' AND password='$password'";
   $result=mysqli_query($conn,$sql);

    if($result-> num_rows >0){
		 $email="";
   $password="";
		
       
       $row=mysqli_fetch_assoc($result);
       $_SESSION['username']=$row['username'];
        header("Location: userhome.php");
        echo "<script>alert('Login Succesfully.')</script>";

        }else{
        	echo "<script>alert('Email or Password is wrong.')</script>";
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

	  

   
   
  
   
   
 <!-- home section starts  -->

  <section class="home">
      <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1 class="title">Wonderful.<br><span>Island</span></h1>
                          <p>-A journey of a thousand miles begins with a single step.<br><br>
   		                   Travel is the movement of people between distant geographical <br>locations.
   		                   Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
   		                   ship or other means, with or without luggage,<br> and can be one way or round trip.</p>
         <button class="contentbtn"><a href="packages.php">Discover More</a></button>
		 
		   <div class="form">
   			<form action="" method="POST" >
             <button class="adminbtn" name="login"><a href="adminpage.php">Admin Login<a></button>			
   			<h2>User Login Here</h2>
            <input type="email" name="email" placeholder="Enter an Email Address" value="<?php echo $email; ?>" required>

            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" >

            <button name="submit" class="loginbtn">Login</button><br>
            

            <p class="link">Don't have an account?<br><br>
            <a href="register.php"><span>Register </span>here</a><br><br>
            Log in with <br><br>
			    <a class="icons" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			    <a class="icons" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-google"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-skype"></ion-icon></a>
			
			</p>
      
            </form>
       	</div>		
		 
		 
		 
      </div>
      <div class="content">
        <h1 class="title">Camping.<br><span>Enjoy</span></h1>
        <p>-A journey of a thousand miles begins with a single step.<br><br>
   		                   Travel is the movement of people between distant geographical <br>locations.
   		                   Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
   		                   ship or other means, with or without luggage,<br> and can be one way or round trip.</p> 
						   
        <button class="contentbtn"><a href="packages.php">Discover More</a></button>	


        <div class="form">
   			<form action="" method="POST" > 
   			<h2>Login Here</h2>
            <input type="email" name="email" placeholder="Enter an Email Address" value="<?php echo $email; ?>" required>

            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" >

            <button name="submit" class="loginbtn">Login</button><br>
            

            <p class="link">Don't have an account?<br><br>
            <a href="register.php"><span>Register </span>here</a><br><br>
            Log in with <br><br>
			    <a class="icons" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			    <a class="icons" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-google"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-skype"></ion-icon></a>
			
			</p>

            </form>
       	</div>		
						   
       
      </div>
      <div class="content">
        <h1 class="title">Adventures.<br><span>Off Road</span></h1>
        <p>-A journey of a thousand miles begins with a single step.<br><br>
   		                   Travel is the movement of people between distant geographical <br>locations.
   		                   Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
   		                   ship or other means, with or without luggage,<br> and can be one way or round trip.</p>
         <button class="contentbtn"><a href="packages.php">Discover More</a></button>
		 
		   <div class="form">
   			<form action="" method="POST" > 
   			<h2>Login Here</h2>
            <input type="email" name="email" placeholder="Enter an Email Address" value="<?php echo $email; ?>" required>

            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" >

            <button name="submit" class="loginbtn">Login</button><br>
            

            <p class="link">Don't have an account?<br><br>
            <a href="register.php"><span>Register </span>here</a><br><br>
            Log in with <br><br>
			    <a class="icons" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			    <a class="icons" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-google"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-skype"></ion-icon></a>
			
			</p>

            </form>
       	</div>		
		 
		 
      </div>
      <div class="content">
        <h1 class="title">Road Trip.<br><span>Together</span></h1>
		<p>-A journey of a thousand miles begins with a single step.<br><br>
   		                   Travel is the movement of people between distant geographical <br>locations.
   		                   Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
   		                   ship or other means, with or without luggage,<br> and can be one way or round trip.</p>
         <button class="contentbtn"><a href="packages.php">Discover More</a></button>
		 
		   <div class="form">
   			<form action="" method="POST" > 
   			<h2>Login Here</h2>
            <input type="email" name="email" placeholder="Enter an Email Address" value="<?php echo $email; ?>" required>

            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" >

            <button name="submit" class="loginbtn">Login</button><br>
            

            <p class="link">Don't have an account?<br><br>
            <a href="register.php"><span>Register </span>here</a><br><br>
            Log in with <br><br>
			    <a class="icons" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			    <a class="icons" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-google"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-skype"></ion-icon></a>
			
			</p>

            </form>
       	</div>		
		 
      </div>
      <div class="content">
        <h1 class="title">Feel Nature.<br><span>Relax</span></h1>
		<p>-A journey of a thousand miles begins with a single step.<br><br>
   		                   Travel is the movement of people between distant geographical <br>locations.
   		                   Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
   		                   ship or other means, with or without luggage,<br> and can be one way or round trip.</p>
         <button class="contentbtn"><a href="packages.php">Discover More</a></button>
		 
		 
		   <div class="form">
   			<form action="" method="POST" > 
   			<h2>Login Here</h2>
            <input type="email" name="email" placeholder="Enter an Email Address" value="<?php echo $email; ?>" required>

            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" >

            <button name="submit" class="loginbtn">Login</button><br>
            

            <p class="link">Don't have an account?<br><br>
            <a href="register.php"><span>Register </span>here</a><br><br>
            Log in with <br><br>
			    <a class="icons" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			    <a class="icons" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-google"></ion-icon></a>
            	<a class="icons" href="#"><ion-icon name="logo-skype"></ion-icon></a>
			
			</p>   	
            
            </form>
       	</div>		
		 
      </div>
    
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    
<section>

</section>












<div class="heading" style="background:url(packagebg2.jpg) no-repeat">
   <h1>SERVICES</h1>
  </div>






<section class="services">


  <h1 class="heading-title">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
		<span>S</span>
    </h1>
  
             
   <div class="box-container">
   <div class="boxes">
      <div class="icon">
        <i class='bx bx-hotel'></i>
      </div>
	  
	  <div class="title"> 
        <h5 align="center">Accomodation Services</h5>      
      </div> 
        
      <div class="description">
         <p>Accomodation services in the nearest hotels making your stay comfortable.</p>
      </div>
       
   </div>     
   
   <div class="boxes">
      <div class="icon">
        <i class='bx bx-bus' ></i>
      </div>
       
      <div class="title"> 
        <h5 align="center">Transportation Service</h5>      
      </div> 
        
      <div class="description">
         <p>Wherever you want to go get our safe and fast transportation services.</p>
      </div>     
   </div>  

   <div class="boxes">
      <div class="icon">
        <i class='bx bxs-package' ></i>
      </div>
       
      <div class="title"> 
        <h5 align="center">Delivery Services</h5>      
      </div> 
        
      <div class="description">
         <p>Be stress free in delivering or getting delivered anything when you're on the go.</p>
      </div>     
   </div>

   <div class="boxes">
      <div class="icon">
        <i class='bx bx-food-tag'></i>
      </div>
       
      <div class="title"> 
        <h5 align="center">Catering Services</h5>      
      </div> 
        
      <div class="description">
         <p>What's for the next meal? We got you. Enjoy your meals and rest in your vaccation.</p>
      </div>     
   </div>     
   
   <div class="boxes">
      <div class="icon">
        <i class='bx bx-map-alt' ></i>
      </div>
       
      <div class="title"> 
        <h5 align="center">Tour Guide Services</h5>      
      </div> 
        
      <div class="description">
         <p>Uknown places can be adventurous but a little help from the guide won't hurt.</p>
      </div>     
   </div>  

   <div class="boxes">
      <div class="icon">
        <i class='bx bxs-bell'></i>
      </div>
       
      <div class="title"> 
        <h5 align="center">Emergency Services</h5>      
      </div> 
        
      <div class="description">
         <p>Always on our customer's service our hotline and services are available.</p>
      </div>     
   </div>
   
   </div>
 
 </section>
	 
   
    
   
   


   
  <div class="heading" style="background:url(packagebg1.jpg) no-repeat">
   <h1>PACKAGES</h1>
   </div> 
  


   <!-- packages section starts  -->
   
 <section class="packages">

    <h1 class="heading-title">
        <span>D</span>
        <span>E</span>
        <span>S</span>
        <span>T</span>
        <span>I</span>
        <span>N</span>
        <span>A</span>
		<span>T</span>
		<span>I</span>
        <span>O</span>
		<span>N</span>
		<span>S</span>
    </h1>

    <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="packageimg1.jpg" alt="">
         </div>
         <div class="content">
		   <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sajek Velly</h2>
		   <p>&nbsp;  Sajek Tripuri Valley is known as the Queen of <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;Hills & Roof of Rangamati.</p>
			 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 3000tk <span>3500tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg2.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cox's Bazar</h2>
		   <p>&nbsp; Cox's Bazar is famous mostly for its long <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;natural sandy beach. </p>
			<div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 4500tk <span>5000tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg3.jpg" alt="">
         </div>
         <div class="content">
           <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panam Nagar</h2>
		   <p>&nbsp; Panam City was an ancient city, which is located at Sonargaon in Bangladesh. </p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">600tk <span>800tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg4.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bandarban</h2>
		   <p>&nbsp;  Bandarban is regarded as one of the most attractive travel destinations in Bangladesh.</p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">4000tk <span>4500tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg5.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saint Martin</h2>
		   <p>&nbsp;St. Martin's Island is a small island in the north eastern part of the Bay of Bengal.</p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">5000tk <span>5600tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg6.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sundarban</h2>
		   <p>&nbsp;Sundarbans is a mangrove area in the delta formed by the
		   confluence of the Padma.</p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 3000tk <span>3300tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg7.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lalbagh Kella</h2>
		   <p>&nbsp; Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th-century Mughal fort complex. </p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 500tk <span>700tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg8.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sreemangal</h2>
		   <p>&nbsp;Sreemangal is often referred to as the 'tea capital'  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;of Bangladesh.</p>
			<div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2800tk <span>3000tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>
	  
	  <div class="box">
         <div class="image">
            <img src="packageimg9.jpg" alt="">
         </div>
         <div class="content">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahsan Manzil</h2>
		   <p>&nbsp; Ahsan Manzil is the erstwhile official residential palace and seat of the Nawab of Dhaka.</p>
		   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 550tk <span>700tk</span> </div>
           <button class="btn"><a href="book.php">Book Now</a></button>
         </div>
      </div>


   </div>
   
   
       

 

</section>  


<section class="home-offer">
   <div class="hmcontent">
      <h3 align="center">UPTO 40% OFF</h3>
      <p align="center">Included an offer our packages now , If you want to book for your good trip!</p>
       <a href="book.php" class="btn">BOOK NOW</a>
   </div>
</section>


        
	 
		 


 








<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="#home"> <i class="fas fa-angle-right"></i> home</a>
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
   
    
	 
	
	 

   
  
   <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
   <script type="text/javascript">
   

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>
   
   
   
</body>
</html>