<?php

session_start();

  include("connection.php");
  include("s_function.php");
  
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $s_user_name = $_POST['s_user_name'];
        $s_email = $_POST['s_email'];
        $s_password = $_POST['s_password'];
        $s_confirm_pass = $_POST['s_confirm_pass'];
        $s_phone = $_POST['s_phone'];
        $s_state = $_POST['s_state'];

        if(!empty($s_user_name) && !empty($s_email) && !empty($s_password) && !empty($s_confirm_pass) && !empty($s_phone) && !empty( $s_state) && !is_numeric($s_user_name))
        {
              //save to database
              $s_id = random_num(20);
              $query = "insert into seeker (s_id,s_user_name,s_email,s_password,s_confirm_pass,s_phone,s_state) values ('$s_id','$s_user_name','$s_email','$s_password','$s_confirm_pass','$s_phone','$s_state')";
             
              mysqli_query($con,$query);

              header("Location: s_login.php");
              die;
        }else
        {
             echo "Please enter some valid information!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> registration </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    display:flex;
    color:#ddd;
}

#h1
{
position: absolute;
margin:10px;
left:260px;
font-size:60px;
font-family:sans-serif;

}
.box
{
position: absolute;
top:130px;
left:340px;
width:700px;
height:440px;
padding:20px;
box-shadow:0 5px 15px rgba(0,0,0,5);

}
.box #h2{
    font-size:50px;
    text-align: center;
    color: #ddd;
}

.border {
    width: 300px;
    height: 7px;
    background: #ff4081;
    margin: 10px auto;
}

.box .registerbtn{
    position: absolute;
    right:189px;
    width:130px;
    height:40px;
    padding:0px, 10px;
    border:3px solid #ff4081;
    background:none;
    color: #ddd
}
.registerbtn{
    font-size: 20px;
    opacity:0.9;
}
.box .registerbtn:hover
{
opacity:1;
}


.table{
    position: absolute;
    width:800px;
    height:200px;
    padding:30px;
}
.table input {
    display: block;
    width: 300px;
    height:30px;
    box-sizing: border-box;
    margin: 17px 10px;
    border: 0;
    background: #111;
    padding: 20px 40px;
    outline: none;
    color: #ddd;
    font-size: 20px;
    transition: 0.5s;
}
 select {
    width: 300px;
    height:40px;
    box-sizing: border-box;
    padding-left: 40px;
    margin: 16px 10px;
    border: 0;
    background: #111;
    outline: none;
    color: #ddd;
    font-size: 20px;
}


</style>
<body>
<h1 id="h1"> Create Your Pathfinder Account</h1>


<div class="box">
<h2 id="h2">Register Now</h2>
<div class="border"></div>
<form class="table"  method="post">

<table cellspacing="7" cellpadding="7">
<tr><td>
<div class="form-group">
    <input type="text" placeholder="username" id="s_user_name" name="s_user_name"  class="form-control">
    <span id="usererror" class="text-danger font-weight-bold"></span>
</div></td>

    <td>
    <div class="form-group">    
    <input tpye ="email" placeholder="email"  id="s_email" name="s_email" class="form-control">
    <span id="emailerror" class="text-danger font-weight-bold"></span>
</div></td>

</tr>
<tr><td>
<div class="form-group">    
<input type="password" placeholder="password" id="s_password" name="s_password" class="form-control">
<span id="passworderror" class="text-danger font-weight-bold"></span>
</div></td>

<td><div class="form-group">  
<input type="password" placeholder="confirm password" id="s_confirm_pass" name="s_confirm_pass" class="form-control">
<span id="cpassworderror" class="text-danger font-weight-bold"></span>
</div></td>
</tr>

<tr><td>
<div class="form-group">    
<input type="tel" placeholder="phone" id="s_phone" name="s_phone" class="form-control">
<span id="mobileerror" class="text-danger font-weight-bold"></span>
</div></td>

<td>
<select  name="s_state">
<option value="none" >state</option>
<option>Andhra Pradesh</option>
<option> Assam</option>
<option> Arunachal Pradesh</option>
<option>  Bihar</option>
<option> Goa</option>
<option>  Gujarat</option> 
<option> Jammu and Kashmir</option>
<option>  Jharkhand</option> 
<option> West Bengal</option>
 <option> Karnataka</option>
 <option> Kerala</option>
 <option> Madhya Pradesh</option>
 <option> Maharashtra</option> 
<option> Manipur</option>
<option>  Meghalaya</option>
 <option> Mizoram</option>
<option>  Nagaland</option> 
<option> Orissa</option>
<option>  Punjab</option>
 <option> Rajasthan</option>
 <option> Sikkim</option>
<option>  Tamil Nadu</option> 
<option> Tripura</option>
 <option> Uttaranchal</option> 
<option> Uttar Pradesh</option> 
<option> Haryana</option> 
<option> Himachal Pradesh</option>
<option> Chhattisgarh</option>
<option>  Delhi</option> 
<option> Puducherry</option>
 <option> Chandigarh</option> 
<option> Dadra and nagar haveli</option> 
<option> Daman and Diu</option> 
<option> Lakshadweep</option>
<option> Andaman and Nicobar Islands</option>
<td>
</tr>
</table>
<button type="submit" class="registerbtn" >Register</button">
</form>

</div>

<script>

function validation(){

var s_user_name=document.getElementById('s_user_name').value;
var s_email=document.getElementById('s_email').value;
var s_password=document.getElementById('s_password').value;
var s_confirm_pass=document.getElementById('s_confirm_pass').value;
var s_phone=document.getElementById('s_phone').value;

var usercheck=/^[A-Za-z. ]{3,30}$/;
var emailcheck=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var passwordcheck=/^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
var mobilecheck=/^[789][0-9]{9}$/;

if(usercheck.test(s_user_name)){
document.getElementById('s_user_name').innerHTML="";}
else
{

document.getElementById('usererror').innerHTML="invalid username";
return false;
}

if(emailcheck.test(s_email)){
document.getElementById('s_email').innerHTML="";}
else
{

document.getElementById('emailerror').innerHTML="invalid email";
return false;
}

if(passwordcheck.test(s_password)){
document.getElementById('s_password').innerHTML="";}
else
{
document.getElementById('passworderror').innerHTML="password length must be 6 & atleast 1 numeric";
return false;
}

if(s_confirm_pass.match(s_password)){
document.getElementById('s_confirm_pass').innerHTML="";}
else
{
document.getElementById('cpassworderror').innerHTML="invalid password";
return false;
}

if(mobilecheck.test(s_phone)){
document.getElementById('s_phone').innerHTML="";}
else
{
document.getElementById('mobileerror').innerHTML="mobile no. is invalid";
return false;
}
}
</script>

</body>
</html>

