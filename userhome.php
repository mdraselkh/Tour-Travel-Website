<?php 

 session_start();
 if(!isset($_SESSION['username'])){
 	header("Location: Tour&Travel.php");
 }

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style_user_dashboard.css">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   

	<div class="sidebar">
		<div class="logo-details">
			<i class='bx bxs-briefcase-alt'></i>
			<span class="logo-name">Tour & Travel</span>
		</div>
		<ul class="nav-links" style="list-style-type:none;">
			<li>
				<a href="#">
					<i class='bx bx-grid-alt'></i>
					<span class="link_name">Dashboard</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bxs-edit-alt' ></i>
					<span class="link_name">Edit Info</span>
				</a>
			</li>

			

			<li>
				<a href="#">
					<i class='bx bx-search-alt'></i>
					<span class="link_name">View Trips</span>
				</a>
			</li>

			<li>
				<a href="logout.php"> 
					<i class='bx bx-log-out'></i>
					<span class="link_name">Log Out</span>
				</a>
			</li>
		</ul>
	</div>

	<!--homecontent-->
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class="bx bx-menu"></i>
				<span  class="dashboard">Dashboard</span>
			</div>
			<div class="search-box">
				<input type="text" placeholder="Search...">
				<i class="bx bx-search"></i>
			</div>
			<div class="profile-details">
				<img src="img-icon.png" alt="">
				<span class="user-name">Rezina Arfin</span>
				<i class="bx bx-chevron-down"></i>
			</div>
		</nav>

        <div class="home-content">
        	<div class="overview-boxes">
        		<div class="box">
        			<div class="left-side">
        				<div class="box-topic">Booked Packages</div>
        				<div class="number">40</div>
        				<div><i class='bx bx-book-content booked'></i></div>
        			</div>
        		</div>

        		<div class="box">
        			<div class="left-side">
        				<div class="box-topic">Total Paid</div>
        				<div class="number">200$</div>
        				<div><i class='bx bx-book-content booked'></i></div>
        			</div>
        		</div>

        		

        		<div class="box">
        			<div class="left-side">
        				<div class="box-topic">Booked Packages</div>
        				<div class="number">40</div>
        				<div><i class='bx bx-book-content booked'></i></div>
        			</div>
        		</div>
        	</div>
        	
        	<!-- tirps info view -->
            <div class="trips-view"></div>
            <div><span>Trips Table</span></div>
        </div>
	</section>

   
   
  
</body>
</html>