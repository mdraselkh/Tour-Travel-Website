
<?php 
 include 'databaseConnect.php';


  error_reporting(0);
  session_start();
  if(isset($_SESSION['username'])){
   header("Location: Tour&Travel.php");
 }


 if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   $cpassword=md5($_POST['cpassword']);

   if($password== $cpassword){
     $sql="SELECT * FROM user_register WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    if(!$result-> num_rows >0){
       
       $sql="INSERT INTO user_register(username,email,password)VALUES('$username','$email','$password')";
       $result=mysqli_query($conn,$sql);
        if($result){
              echo "<script>alert('User Registration succesfully.')</script>";
              $username="";
              $email="";
              $_POST['password']="";
              $_POST['cpassword']="";

         }else{
           echo "<script>alert('Something went wrong.')</script>";
        }
    }else{
      echo "<script>alert('Email already exists.')</script>";
    }
 }else{
      echo "<script>alert('Password not matched.')</script>";
   }
 }
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Registration form</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

   	
   <div class="main">
      <div class="navbar">
         <div class="icon">
          <h3 class="logo">Tou<span>R & Tra</span>Vel</h3>
         </div>
         <div class="menu">
            <ul>
               <a href="Tour&Travel.php">HOME</a>
               <a href="packages.php">DESTINATION</a>
               <a href="services.php">SERVICES</a>
               <a href="gallery.php">GALLERY</a>
               <a href="book.php">BOOK</a>
               <a href="contact">CONTACT</a>
               <a href="about.php">ABOUTUS</a>                               
            </ul>
         </div>

         <div class="search">
            <input class="srch" type="search" name="" placeholder="type to text">
            <a href="#"><button class="btn">Search</button></a>
         </div>
      </div>
      <div class="regcontent">
         <h2 class="title">The <span>World </span>is Yours<br>To<span> Explore</span></h2><br>
         <p class="seemore">-A journey of a thousand miles begins with a single step.<br><br>
                            Travel is the movement of people between distant geographical <br>locations.
                            Travel can be done by foot, bicycle, automobile, train,<br> boat, bus, airplane,
                            ship or other means, with or without luggage,<br> and can be one way or round trip.</p>

         <button class="contentbtn"><a href="packages.php">Discover More</a></button>
          
            <div class="regform">
            <form action="" method="POST" >   
            <h2>Register Here</h2>
            <input type="usrename" name="username"  placeholder="Username"  value="<?php echo $username; ?>" required>
            <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            <button name="submit" class="registerbtn"><a href="#">Register</a></button>

            <p class="link">I have an account!<br>
            <a href="Tour&Travel.php"><span>Login </span>here</a></p><br>
            </form>
         </div> 
         
      </div>
   </div>
  
</body>
</html>