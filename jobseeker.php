
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>JOB SEEKER</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<style>
		*{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Roboto", sans-serif;
  }
  
  body{

     
    background-image:linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)),  url(image/background.jpg);
    height:100vh;
    background-size: cover;
    background-position: center; 
}
     
  }
  
  .wrapper .header{
    z-index: 1;
    background: #2F323A;
    position: fixed;
    width: calc(100% - 0%);
    height: 70px;
    display: flex;
    top: 0;
  }
  
  .wrapper .header .header-menu{
    width: calc(100% - 0%);
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
  }
  
  .wrapper .header .header-menu .title{
    color: #fff;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 900;
  }
  
  .wrapper .header .header-menu .title span{
    color: #4CCEE8;
  }
  
  .wrapper .header .header-menu .sidebar-btn{
    color: #fff;
    position: absolute;
    margin-left: 280px;
    font-size: 22px;
    font-weight: 900;
    cursor: pointer;
    transition: 0.3s;
    transition-property: color;
  }
  
  .wrapper .header .header-menu .sidebar-btn:hover{
    color: #4CCEE8;
  }
  
  .wrapper .header .header-menu ul{
    display: flex;
  }
  .wrapper .header .header-menu 
  
  .logout_btn{
      padding:5px;
  
    background: #19B3D3;
  
    text-decoration: none;
  
    float: right;
  
    margin-top: -10px;
  
    margin-right: 20px;
  
    border-radius: 2px;
  
    font-size: 15px;
  
    font-weight: 600;
  
    color: #fff;
  
    transition: 0.5s;
  
    transition-property: background;
  
  }
  
  
  .wrapper .header .header-menu 
  
  .logout_btn:hover{
    background: #0B87A6;
  }
  
  
  }
  .wrapper .header .header-menu ul li a{
    background: #fff;
    color: #000;
    display: block;
    margin: 0 10px;
    font-size: 18px;
    width: 34px;
    height: 34px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    transition: 0.3s;
    transition-property:  color;
  }
  
  .wrapper .header .header-menu ul li a:hover{
    background: #4CCEE8;
    color: #fff;
  }
  
  .wrapper .sidebar{
    z-index: 1;
    background: #2F323A;
    position: fixed;
    top: 70px;
    width: 250px;
    height: calc(100% - 9%);
    transition: 0.3s;
    transition-property: width;
    overflow-y: auto;
  }
  
  .wrapper .sidebar .sidebar-menu{
    overflow: hidden;
  }
  
  .wrapper .sidebar .sidebar-menu .profile img{
    margin: 20px 0;
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  
  .wrapper .sidebar .sidebar-menu .profile p{
    color: #bbb;
    font-weight: 700;
    margin-bottom: 10px;
  }
  
  .wrapper .sidebar .sidebar-menu .item{
    width: 250px;
    overflow: hidden;
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn{
    display: block;
    color: #fff;
    position: relative;
    padding: 25px 20px;
    transition: 0.3s;
    transition-property: background,color;
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn:hover{
    color: #4CCEE8;
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn i{
    margin-right: 20px;
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn .drop-down{
    float: right;
    font-size: 12px;
    margin-top: 3px;
  }
  
  .wrapper .sidebar .sidebar-menu .item .sub-menu{
    background: #3498DB;
    overflow: hidden;
    max-height: 0;
    transition: 0.3s;
    transition-property: background,max-height;
  }
  
  .wrapper .sidebar .sidebar-menu .item .sub-menu a{
    display: block;
    position: relative;
    color: #fff;
    white-space: nowrap;
    font-size: 15px;
    padding: 20px;
    transition: 0.3s;
    transition-property: background;
  }
  
  .wrapper .sidebar .sidebar-menu .item .sub-menu a:hover{
    background: #55B1F0;
  }
  
  .wrapper .sidebar .sidebar-menu .item .sub-menu a:not(last-child){
    border-bottom: 1px solid #8FC5E9;
  }
  
  .wrapper .sidebar .sidebar-menu .item .sub-menu i{
    padding-right: 20px;
    font-size: 10px;
  }
  
  .wrapper .sidebar .sidebar-menu .item:target .sub-menu{
    max-height: 500px;
  }
  
  .wrapper .main-container{
    width: (100% - 250px);
    margin-top: 70px;
    margin-left: 250px;
    padding: 15px;
    background: url(background.jpg)no-repeat;
    background-size: cover;
    height: 100vh;
    transition: 0.3s;
  }
  
  .wrapper.collapse .sidebar{
    width: 70px;
  }
  
  .wrapper.collapse .sidebar .profile img,
  .wrapper.collapse .sidebar .profile p,
  .wrapper.collapse .sidebar a span{
    display: none;
  }
  
  .wrapper.collapse .sidebar .sidebar-menu .item .menu-btn{
    font-size: 23px;
  }
  
  .wrapper.collapse .sidebar .sidebar-menu .item .sub-menu i{
    font-size: 18px;
    padding-left: 3px;
  }
  
  .wrapper.collapse .main-container{
    width: calc(100% - 70px);
    margin-left: 70px;
  }
  
  .wrapper .main-container .card{
    background: #fff;
    padding: 15px;
    margin-bottom: 10px;
    font-size: 14px;
  }
  
	</style>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title">pathfinder<span>.com</span></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<div class="right_area">
					<a href="#" class="logout_btn">LOGOUT</a></div>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="1.jpg" alt="">
						<p>Jessica</p>
					</center>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-image"></i><span>VIEW PROFILE</span></a>
							<a href="#"><i class="fas fa-address-card"></i><span>UPDATE PROFILE</span></a>
						</div>
					</li>
					<li class="item">
						<a href="search.html" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Jobs</span>
						</a>
					</li>
					<li class="item" id="notification">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-envelope"></i><span>Notification <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
							<a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
							<a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
						</div>
					</li>
					
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>
