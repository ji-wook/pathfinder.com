<?php

session_start();

  include("connection.php");
  include("k_function.php");
  
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $k_user_name = $_POST['k_user_name'];
        $k_email = $_POST['k_email'];
        $k_password = $_POST['k_password'];
        $k_confirm_pass = $_POST['k_confirm_pass'];
        $k_phone = $_POST['k_phone'];
        $k_state = $_POST['k_state'];

        if(!empty($k_user_name) && !empty($k_email) && !empty($k_password) && !empty($k_confirm_pass) && !empty($k_phone) && !empty( $k_state) && !is_numeric($k_user_name))
        {
              //save to database
              $k_id = random_num(20);
              $query = "insert into keeper (k_id,k_user_name,k_email,k_password,k_confirm_pass,k_phone,k_state) values ('$k_id','$k_user_name','$k_email','$k_password','$k_confirm_pass','$k_phone','$k_state')";
             
              mysqli_query($con,$query);

              header("Location: k_login.php");
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
    <title> registration</title>

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
    background: #3d5afe;
    margin: 10px auto;
}

.box .registerbtn{
    position: absolute;
    right:189px;
    width:130px;
    height:40px;
    padding:0px, 10px;
    border:3px solid #3d5afe;
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

.box .registerbtn:hover
{
opacity:1;
}
</style>
<body>
<h1 id="h1"> Create Your Pathfinder Account</h1>


<div class="box">
<h2 id="h2">Register Now</h2>
<div class="border"></div>
<form class="table"  method="post">

<table cellspacing="7" cellpadding="7">
<tr>
<td><input type="text" placeholder="username"  name="k_user_name"></td>
<td><input tpye ="email" placeholder="email"  name="k_email"></td>
</tr>
<tr>
<td><input type="password" placeholder="password"  name="k_password"></td>
<td><input type="password" placeholder="confirm password"  name="k_confirm_pass"></td>
</tr>
<tr>
<td><input type="tel" placeholder="phone"  name="k_phone"></td>
<td>
<select  name="k_state">
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
</select>
<td>
</tr>
</table>
<button type="submit" class="registerbtn" >Register</button">
</form>

</div>

</body>
</html>

