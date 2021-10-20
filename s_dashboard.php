<?php

session_start();

      include("connection.php");
      include("s_function.php");

      $user_data = check_login($con); //this is the function who checks that the user is logged in or not
    
      if(isset($_POST['submit']))
    {
        //something was posted
        $m_user_name =  $user_data['s_user_name'];
        $m_email =  $user_data['s_email'];
        $m_job_title = $_POST['m_job_title'];
        $m_location = $_POST['m_location'];
        $m_phone =  $user_data['s_phone'];

       

              //save to database
           
              $query = "insert into moreinfo (m_user_name,m_email,m_job_title,m_location,m_phone) values ('$m_user_name','$m_email','$m_job_title','$m_location','$m_phone')";
             
              $res= mysqli_query($con,$query);
            
           if($res){
             ?>
             <script>
               alert("data inserted properly");
             </script>
             <?php
           }else{
             ?>
                 <script>
               alert("data not inserted ");
             </script>
             <?php
           }
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<style>
      *{
    margin:0px;
    padding:0px;
    font-family: 'Century Gothic';
}

body{
    background-image:linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)),  url(image/background.jpg);
    height:100vh;
    background-size: cover;
    background-position: center;
}

.wrapper .header{
    z-index: 1;
     background:#2F323A;
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
    font-size: 15px;
    font-weight: 900;
  }
  
  .wrapper .header .header-menu .title span{
    color: #4CCEE8;
  }

  .c{
    font-size: 50px;
    font-family: 'Gabriola';
}
.e{
    font-size: 15px;
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
  .wrapper .header .header-menu  .logout_btn{
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

  .wrapper .header .header-menu .logout_btn:hover{
    background: #0B87A6;
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
  .wrapper .main-container{
  width: (100% - 250px);
  margin-top: 70px;
  margin-left: 250px;
  padding: 15px;
  background: #fff;
  background-size: cover;
  height: 100vh;
  transition: 0.3s;
  overflow:auto;
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
  
  .wrapper .sidebar .sidebar-menu .profile i{
    color: #fff;
  font-size:100px;
  }
  
  .wrapper .sidebar .sidebar-menu .profile span{
    color: #bbb;
    font-weight: 700;
    margin-bottom: 10px;
  }
  
  .wrapper .sidebar .sidebar-menu .item{
    width: 250px;
    overflow: hidden;
    color:#fff;
  }

  .wrapper .sidebar .sidebar-menu .item .text{
    display: block;
    top:-45px;
    left:50px;
    position: relative;
    color: #fff;
    white-space: nowrap;
    font-size: 25px;
    transition: 0.3s;
    text-decoration:none;
   
  }
  .wrapper .sidebar .sidebar-menu .item .text:hover{
    color: #4CCEE8;
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn{
   
    display: block;
    position: relative;
    color: #fff;
    white-space: nowrap;
    font-size: 15px;
    padding: 20px;
    transition: 0.3s;
  
  }
  
  .wrapper .sidebar .sidebar-menu .item .menu-btn:hover{
    color: #4CCEE8;
  }
  
 /* .wrapper .sidebar .sidebar-menu .item .menu-btn i{
    margin-right: 20px;
  }
 
  .wrapper .sidebar .sidebar-menu .item .menu-btn .drop-down{
    float: right;
    font-size: 12px;
    margin-top: 3px;
  }
  
.wrapper .sidebar .sidebar-menu .item  span{
   color:#fff;
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
  }*/
.wrapper.collapse .main-container{
  width: calc(100% - 70px);
  margin-left: 70px;
  overflow:auto;
  
}

.wrapper .main-container .card{
  background: #0000;
  padding: 15px;
  margin-bottom: 10px;
  font-size: 14px;
}


</style>
<body>
    <div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
                    <div class=title>
                        <h1>path<span class="c">f</span>inder.<span class="e">com</span></h1>
                    </div>
					<div class="right_area">
					<a href="s_logout.php" class="logout_btn">LOGOUT</a></div>
				</div>
            </div>
            	<!--header menu end-->
			<!--sidebar start-->
            <div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<i class="fas fa-user-circle"></i>
						<span><?php echo $user_data['s_user_name'];   ?></span>
					</center>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-desktop"></i><span><a class="text" href="#">Dashboard</a></span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<i class="fas fa-user-circle"></i><span><a class="text" href="#">Profile</a> </span>
						</a>
					<!--	<div class="sub-menu">
							<a href="#"><i class="fas fa-image"></i><span>VIEW PROFILE</span></a>
							<a href="#"><i class="fas fa-address-card"></i><span>UPDATE PROFILE</span></a>
						</div>-->
					</li>
					<li class="item">
          <a href="#" class="menu-btn">
							<i class="fas fa-desktop"></i><span><a class="text" href="s_search_job.php">Search Job</a></span>
						</a>
					</li>
										
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span><a class="text" href="aboutus.php">About</a></span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
				<div class="card">
					
				<center><h2><b>!! Give us some more information about you  :)</b></h2></center></div>

      
<span><B>YOUR CURRENT INFO</B></span>
<form method="post">
<table cellspacing ="40" cellpadding="20">
<tr>
<td>
<label for="job "> JOB TITLE</label>
</td>
<td>
<select name="m_job_title" id="job">
<option value="none" >select</option>
<option>sales assistant</option>
<option> shop assistant</option>
 <option> care assistant</option>
<option>  retail assistant</option>
<option> health care assistant</option>
<option>  food and beverage attendant</option> 
<option> buisness development executive</option>
<option>  buisness analyst</option> 
<option> branch manager</option>
 <option> food and beverage assistant </option>
 <option> customer service</option>
 <option> care assistant </option>
 <option> health care assistant</option> 
<option> computer operator</option>
<option>  customer service adviser</option>
 <option> software developer</option>
<option>  data entry operator</option> 
<option> delivery driver</option>
<option>  deli assistant</option>
 <option> chef de partie</option>
 <option> Sales executive</option>
<option>  software engineer</option> 
<option> site engineer</option>
 <option> data entry operator</option> 
<option> accounts executive</option> 
<option> floor staff</option> 
<option> factory hand</option>
<option> factory worker</option>
<option>  store incharge</option> 
<option> general operative</option>
<option> general assistant</option> 
<option> graphic designer</option> 
<option> security guard</option> 
<option> assistant in nursing</option>
<option> interior designer</option>
<option>zonal sales manager </option>
 <option>zonal manager </option>
 <option> zonal buisness manager</option>
 <option> zonal coordinator </option>
 <option> zumba instructor</option> 
<option> youth worker</option>
<option>  transition year work experience</option>
 <option> youth leader</option>
<option>  early years practtioner</option> 
<option> early years educator</option>
<option>  x-ray technician</option>
 <option> XML operator </option>
 <option> XML programmer</option>
<option>  XML developer</option> 
<option> warehouse operative </option>
 <option> process worker</option> 
<option> work experience</option> 
<option> disability support worker </option> 
<option>volunteer work</option>
<option> volunteer worker</option>
<option> vedio editor </option> 
<option> ui developer</option>
<option> unit manager</option> 
<option> uber driver</option> 
<option> US IT recruiter</option> 
<option> teaching assistant</option>
<option> trades assistant</option>
</select>
</td>
</tr>

<tr><td><label for=mobile_no>MOBILE NO</label></td>
<td><input type ="text" name="mobile_no" id="mobile_no" placeholder=" "></td></tr>
<tr>
<td>
<label for=location>LOCATION</label></td>
<td>
<select name="m_location" id="location">
<option value="none" >select</option>
<option>ANDHRA PRADESH</option>
<option>ARUNACHAL PRADESH</option>
<option>ASSAM</option>
<option>BIHAR</option>
<option>CHHATTISGARH</option>
<option>GOA</option>
<option>GUJRAT</option>
<option>HARIYANA</option>
<option>HIMACHAL PRADESH</option>
<option>JHARKHAND</option>
<option>KARNATAKA</option>
<option>KERALA</option>
<option>MADHYA PRADESH</option>
<option>MAHARASHTRA</option>
<option>MANIPUR</option>
<option>MEGHALAYA</option>
<option>MIZORAM</option>
<option>NAGALAND</option>
<option>ODISHA</option>
<option>PUNJAB</option>
<option>RAJASTHAN</option>
<option>SIKKIM</option>
<option>TAMIL NADU</option>
<option>TELANGANA</option>
<option>TRIPURA</option>
<option>UTTAR PRADESH</option>
<option>UTTARAKHAND</option>
<option>WEST BENGAL</option>
</select></td>
</tr>
<tr>
<td>
<label for=pincode>PINCODE</label></td>
<td><input type="text" id="pincode" name="pincode" placeholder="enter pincode"></td></tr>
</table>
<div class="gun">
<span><b>JOB DETAIL</b></span>
</div>
<br><br><br>
<p><b>what type of job you want ?</b></p>
<td><input type ="checkbox" type= name="tj1" id="tj1" >
<label for="tj1">full-time</label><br>
<input type ="checkbox" type= name="tj2" id="tj2">
<label for="tj2">part-time</label><br>
<input type ="checkbox" type= name="tj3" id="tj3">
<label for="tj3">temporary</label><br>
<input type ="checkbox" type= name="tj4" id="tj4" >
<label for="tj4">contract</label><br>
<input type ="checkbox" type= name="tj5" id="tj5" >
<label for="tj5">internship</label><br>
<input type ="checkbox" type= name="tj6" id="tj6">
<label for="tj6">commission</label><br>
<input type ="checkbox" type= name="tj7" id="tj7">
<label for="tj7">volunteer</label><br>
<input type ="checkbox" type= name="tj8" id="tj8">
<label for="tj8">fresher</label><br>
<input type ="checkbox" type= name="tj9" id="tj9">
<label for="tj9">walk-in</label><br><br><br>

<label for=j3><b>your work exprience..</b></label><br>
<select id=j3>
<option> 1 year</option>
<option>2-4 year</option>
<option>5 to 10 year</option>
<option>none or less than 1 year</option>
</select><br><br>
<p><b>schedule that you want for job...</b></p>
<input type ="checkbox" type= name="sj1" id="sj1" >
<label for="sj1">morning shift</label><br>
<input type ="checkbox" type= name="sj2" id="sj2">
<label for="sj2">day shift</label><br>
<input type ="checkbox" type= name="sj3" id="sj3">
<label for="sj3">evening shift</label><br>
<input type ="checkbox" type= name="sj4" id="sj4">
<label for="sj4">night shift</label><br>
<input type ="checkbox" type= name="sj5" id="sj5">
<label for="sj5">flexible shift</label><br>
<input type ="checkbox" type= name="sj6" id="sj6">
<label for="sj6">rotational shift</label><br>
<input type ="checkbox" type= name="sj7" id="sj7">
<label for="sj7">monday to friday</label><br>
<input type ="checkbox" type= name="sj8" id="sj8">
<label for="sj8">weekend</label><br>
<input type ="checkbox" type= name="sj9" id="sj9">other
<label for="sj9">morning shift</label><br>
<table cellspacing="40" cellpadding="20">

<tr><td><button type="submit" name="submit" class="subbtn">SUBMIT</button><td></tr>

</table>
</form>
</div>
</div>

      </div>

    </div>


				</div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

</body>
</html>