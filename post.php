<?php

session_start();

      include("connection.php");
    
      if(isset($_POST['submit']))
    {
        //something was posted
        $job_title = $_POST['job_title'];
        $company = $_POST['company'];
        $location = $_POST['location'];
       

              //save to database
           
              $query = "insert into jobpost (job_title,company,location) values ('$job_title','$company','$location')";
             
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



<html>
<head>
<title>job provider</title>
<meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">
 <!-- Bootstrap core CSS-->

  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template-->

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->


<link rel="stylesheet" href="post_css.css">
</head>
<style>
    html 
{
  position: relative;

  min-height: 100%;
}


body {

  overflow-x: hidden;

}


body.sticky-footer
 {

  margin-bottom: 56px;

}


body.sticky-footer .content-wrapper {
  min-height: calc(100vh - 56px - 56px);
}

body.fixed-nav {
  padding-top: 56px;
}

.content-wrapper {
  min-height: calc(100vh - 56px);
  padding-top: 1rem;
}

.scroll-to-top {
  position: fixed;
  right: 15px;
  bottom: 3px;
  display: none;
  width: 50px;
  height: 50px;
  text-align: center;
  color: black;
  background: rgba(52, 58, 64, 0.5);
  line-height: 45px;
}

.scroll-to-top:focus, .scroll-to-top:hover {
  color: white;
}

.scroll-to-top:hover {
  background: #343a40;
}

.scroll-to-top i {
  font-weight: 800;
}

.smaller {
  font-size: 0.7rem;
}

.o-hidden {
  overflow: hidden !important;
}

.z-0 {
  z-index: 0;
}

.z-1 {
  z-index: 1;
}

#mainNav .navbar-collapse {
  overflow: auto;
  max-height: 75vh;
}

#mainNav .navbar-collapse .navbar-nav .nav-item .nav-link {
  cursor: pointer;
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  float: right;
  content: '\f107';
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse.collapsed:after {
  content: '\f105';
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level {
  padding-left: 0;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
  display: block;
  padding: 0.5em 0;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:focus, #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:hover,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:focus,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:hover {
  text-decoration: none;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a {
  padding-left: 1em;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
  padding-left: 2em;
}

#mainNav .navbar-collapse .sidenav-toggler {
  display: none;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
  position: relative;
  min-width: 45px;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  float: right;
  width: auto;
  content: '\f105';
  border: none;
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link .indicator {
  position: absolute;
  top: 5px;
  left: 21px;
  font-size: 10px;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown.show > .nav-link:after {
  content: '\f107';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
  overflow: hidden;
  max-width: none;
  text-overflow: ellipsis;
}

@media (min-width: 992px) {
  #mainNav .navbar-brand {
    width: 250px;
  }
  #mainNav .navbar-collapse {
    overflow: visible;
    max-height: none;
  }
  #mainNav .navbar-collapse .navbar-sidenav {
    position: absolute;
    top: 0;
    left: 0;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: 56px;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item {
    width: 250px;
    padding: 0;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
    padding: 1em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    padding-left: 0;
    list-style: none;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li {
    width: 250px;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
    padding: 1em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a {
    padding-left: 2.75em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
    padding-left: 3.75em;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
    min-width: 0;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
    width: 24px;
    text-align: center;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
    max-width: 300px;
  }
}

#mainNav.fixed-top .sidenav-toggler {
  display: none;
}

@media (min-width: 992px) {
  #mainNav.fixed-top .navbar-sidenav {
    height: calc(100vh - 112px);
  }
  #mainNav.fixed-top .sidenav-toggler {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: calc(100vh - 56px);
  }
  #mainNav.fixed-top .sidenav-toggler > .nav-item {
    width: 250px;
    padding: 0;
  }
  #mainNav.fixed-top .sidenav-toggler > .nav-item > .nav-link {
    padding: 1em;
  }
}

#mainNav.fixed-top.navbar-dark .sidenav-toggler {
  background-color: #212529;
}

#mainNav.fixed-top.navbar-dark .sidenav-toggler a i {
  color: #adb5bd;
}

#mainNav.fixed-top.navbar-light .sidenav-toggler {
  background-color: #dee2e6;
}

#mainNav.fixed-top.navbar-light .sidenav-toggler a i {
  color: rgba(0, 0, 0, 0.5);
}

body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler {
  overflow-x: hidden;
  width: 55px;
}

body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-item,
body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-link {
  width: 55px !important;
}

body.sidenav-toggled #mainNav.fixed-top #sidenavToggler i {
  -webkit-transform: scaleX(-1);
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: 'FlipH';
}

#mainNav.static-top .sidenav-toggler {
  display: none;
}

@media (min-width: 992px) {
  #mainNav.static-top .sidenav-toggler {
    display: flex;
  }
}

body.sidenav-toggled #mainNav.static-top #sidenavToggler i {
  -webkit-transform: scaleX(-1);
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: 'FlipH';
}

.content-wrapper {
  overflow-x: hidden;
  background: white;
}

@media (min-width: 992px) {
  .content-wrapper {
    margin-left: 250px;
  }
}

#sidenavToggler i {
  font-weight: 800;
}

.navbar-sidenav-tooltip.show {
  display: none;
}

@media (min-width: 992px) {
  body.sidenav-toggled .content-wrapper {
    margin-left: 55px;
  }
}

body.sidenav-toggled .navbar-sidenav {
  width: 55px;
}

body.sidenav-toggled .navbar-sidenav .nav-link-text {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item,
body.sidenav-toggled .navbar-sidenav .nav-link {
  width: 55px !important;
}

body.sidenav-toggled .navbar-sidenav .nav-item:after,
body.sidenav-toggled .navbar-sidenav .nav-link:after {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item {
  white-space: nowrap;
}

body.sidenav-toggled .navbar-sidenav-tooltip.show {
  display: flex;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: #adb5bd;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
  color: #adb5bd;
}

#mainNav.navbar-dark .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: #adb5bd;
}

@media (min-width: 992px) {
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
    background: #343a40;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a {
    color: white !important;
    background-color: #495057;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:hover {
    color: white;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    background: #343a40;
  }
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: rgba(0, 0, 0, 0.7);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
  color: rgba(0, 0, 0, 0.7);
}

#mainNav.navbar-light .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: rgba(0, 0, 0, 0.5);
}

@media (min-width: 992px) {
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav {
    background: #f8f9fa;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a {
    color: #000 !important;
    background-color: #e9ecef;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:hover {
    color: #000;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    background: #f8f9fa;
  }
}

.card-body-icon {
  position: absolute;
  z-index: 0;
  top: -25px;
  right: -25px;
  font-size: 5rem;
  -webkit-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  transform: rotate(15deg);
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 1;
  }
}

@media (min-width: 768px) {
  .card-columns {
    column-count: 2;
  }
}

@media (min-width: 1200px) {
  .card-columns {
    column-count: 2;
  }
}

.card-login {
  max-width: 25rem;
}

.card-register {
  max-width: 40rem;
}

footer.sticky-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 56px;
  background-color: #e9ecef;
  line-height: 55px;
}

@media (min-width: 992px) {
  footer.sticky-footer {
    width: calc(100% - 250px);
  }
}

@media (min-width: 992px) {
  body.sidenav-toggled footer.sticky-footer {
    width: calc(100% - 55px);
  }
}

</style>


<body class="bg-dark">

  <div class="container">

    <div class="card card-register mx-auto mt-5">

      <div class="card-header">POST A JOB</div>

      <div class="card-body">


<div class ="header">

</div>
<div class="set">
<span><B>JOB KEEPER</B></span>
<form method="post">
<table cellspacing ="50" cellpadding="20">
<tr>
<td>
<label for="job "> JOB TITLE</label>
</td>
<td>
<select name="job_title" id="job">
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
<tr><td><label for=company>COMPANY</label></td>
<td><input type ="text" name="company" id="company" placeholder="insert company name"></td></tr>
<tr>
<td>
<label for=location>LOCATION</label></td>
<td>
<select  name="location" id="location">
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
<tr><td><label for =gst>GSTIN</label></td>
<td><input type="text" id ="gst" name="gst" placeholder="optional" ></td></tr>
<tr><td>
<label for=PAN>PAN</label></td>
<td><input type ="text" id ="PAN" ><br><br></td>
</tr>
</table>
<div class="gun">
<span><b>JOB DETAIL</b></span>
</div>
<br><br><br>
<p><b>what type of job it is ?</b></p>
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
<p><b>Are there any type of supplement pay offered ?</b></p><br>
<input type ="checkbox" type= name="ts1" id="ts1">
<label for="ts1">commission pay</label><br>
<input type ="checkbox" type= name="ts2" id="ts2">
<label for="ts2">overtime pay</label><br>
<input type ="checkbox" type= name="ts3" id="ts3">
<label for="ts3">shift allowance</label><br>
<input type ="checkbox" type= name="ts4" id="ts4">
<label for="ts4">joining bonus</label><br>
<input type ="checkbox" type= name="ts5" id="ts5">
<label for="ts5">performance bonus</label><br>
<input type ="checkbox" type= name="ts6" id="ts6">
<label for="ts6">quaterly bonus</label><br>
<input type ="checkbox" type= name="ts7" id="ts7">
<label for="ts7">yearly bonus</label><br>
<input type ="checkbox" type= name="ts8" id="ts8">
<label for="ts8">other</label><br><br>
<p> <b>Are any of the following benefits offered ?</b></p> 
<input type ="checkbox" type= name="b1" id="b1" >
<label for="b1">cell phone reimbursement</label><br>
<input type ="checkbox" type= name="b2" id="b2">
<label for="b2">commuter assistance</label><br>
<input type ="checkbox" type= name="b3" id="b3">
<label for="b3">flexible schedule</label><br>
<input type ="checkbox" type= name="b4" id="b4">
<label for="b4">food allowance</label><br>
<input type ="checkbox" type= name="b5" id="b5">
<label for="b5">health insurance</label><br>
<input type ="checkbox" type= name="b6" id="b6">
<label for="b6">internet reimbursement</label><br>
<input type ="checkbox" type= name="b7" id="b7">
<label for="b7">life insurance</label><br>
<input type ="checkbox" type= name="b8" id="b8">
<label for="b8">paid sick time</label><br>
<input type ="checkbox" type= name="b9" id="b9">
<label for="b9">paid time off</label><br>
<input type ="checkbox" type= name="b10" id="b10">
<label for="b10">work from home</label><br>
<input type ="checkbox" type= name="b11" id="b11">
<label for="b11">other</label><br>
<input type ="checkbox" type= name="b12" id="b12">
<label for="b12">none</label><br><br><br>

<label for=j3><b>how many hires do you want to make for this position</b></label><br>
<select id=j3>
<option> 1 hire</option>
<option>2-4 hires</option>
<option>5 to 10 hires</option>
<option>10+ hires</option>
<option><b> i have an ongoing need to fill this role</b></option>
</select><br><br>
<label for = j4><b>how urgently do you need to make this hire?</b></label><br>
<select id="j4">
<option>1 to 3 days</option>
<option>3 to 7 days</option>
<option>1 to 2 weeks</option>
<option>2 to 4 weeks</option>
<option>more than 4 weeks</option>
</select><br><br>
<p><b>what is the schedule for this job ?</b></p>
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
<tr><td><label for =j6><B>what is the industry of hiring company</B> </label></td>
<td><input type ="text" id="j6" name="j6"></td></tr>
<tr><td><button type="submit" name="submit" class="conbtn">continue</button><td></tr>

</table>
</form>
</div>
</div>

      </div>

    </div>

  </div>


</body>
</html>