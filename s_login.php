<?php

session_start();

  include("connection.php");
  include("s_function.php");
  
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        
        $s_email = $_POST['s_email'];
        $s_password = $_POST['s_password'];

        if(!empty($s_email) && !empty($s_password))
        {
              //read database
              $s_id = random_num(20);
              $query = "select * from seeker where s_email = '$s_email' limit 1";
             
             $result = mysqli_query($con,$query);
              
             if($result)
             {
                if($result && mysqli_num_rows($result) >0)
                {
        
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['s_password'] === $s_password)
                    {
                        
                        $_SESSION['s_id'] =  $user_data['s_id'];
                        header("Location: s_dashboard.php");
                        die;
                    }
                }
             }
             echo "Wrong email or password!"; 
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
    <title>login</title>
   
</head>
<style>
    @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
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
}

.login-box{
    width:350px;
    height:370px;
    padding: 30px;
    position: absolute;
    top:40%;
    left:50%;
    transform:translate(-50%,-50%);
    color:#ddd;
    box-sizing:border-box;
    box-shadow: 8px 8px 50px #000000 ;
}

.login-box h1{
    font-size:50px;
    text-align: center;
    color: #ddd;
    
}

.border {
    width: 150px;
    height: 7px;
    background: #ff4081;
    margin: 10px auto;
   
}

.login-box a{
    position:absolute;
    left:240px;
    margin:5px;
    color:#ddd;
    cursor: pointer;
    font-size: 18px;
    text-decoration: none;

}

.textbox{
    width:100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #ff4081;
}

.textbox i{
    width: 26px;
    float: left;
    text-align: center;
  
}
.textbox input {
    border:1px solid transparent;
    outline: none;
    background: none;
    color:#ddd;
    font-size: 18px;
    width:80%;
    float:left;
    margin:0 10px;

}
.login-box button{
    width: 100%;
    background: none;
    border: 2px solid #ff4081;
    color:#ddd;
    padding:5px;
    font-size: 20px;
    cursor: pointer;
    margin: 18px 0;
    transition: .5s;
}

.login-box button:hover{
    border:2px solid #f48fb1
}

.login-box #email_error,
.login-box #pass_error,
.login-box #pass_num_error{
    margin-top: 5px;
    width: 275px;
    font-size: 15px;
    color:#d50000;
    background: rgba(240, 5, 5, 0.1);
    text-align: center;
    padding: 4px 8px;
    border-radius: 3px;
    border: 1px solid  #ff6f60;
    display:none;
}


</style>
<body>
    
    <form class="login-box" method="post" name="form"   onsubmit="return validated()" >
        <h1>Login</h1>
        <div class="border"></div>
        <div class="textbox">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input autocomplete="off" type="text" placeholder="Email" name="s_email" value="" >
        </div>
        <div id="email_error">Please fill up your Email</div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="s_password" value="">
        </div>
        <div id="pass_error">Please fill up your Password</div>
        <div id="pass_num_error">Password cannot be less then 6 digits</div>
        
        <button type="submit" >Login</button><br>
        <a href="s_registration.php">Register?</a><br><br>
    </form>

 <script >
        

var s_email = document.form.s_email;
var s_password = document.form.s_password;

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');
var pass_num_error = document.getElementById('pass_num_error');

s_email.addEventListener('textInput' , email_Verify);
s_password.addEventListener('textInput' , pass_Verify);

function validated(){
      if(s_email.value == null || s_email.value == ""){
          s_email.style.border = "1px solid #d50000";
           email_error.style.display = "block";
           s_email.focus();
           return false;
       }
     
       if(s_password.value == null || s_password.value == ""){
        s_password.style.border = "1px solid #d50000";
        pass_error.style.display = "block";
        s_password.focus();
        return false;
    }else{
        pass_error.style.display = "none";
    }
      if(s_password.value.length < 6){
        s_password.style.border = "1px solid #d50000";
        pass_num_error.style.display = "block";
        s_password.focus();
        return false;
     }
     
}

function email_Verify(){
   if(s_email.value.length >=8 ){
         s_email.style.border = "1px solid transparent"
         email_error.style.display = "none";
           return true;
   }
}

function pass_Verify(){
   if(s_password.value != null || s_password.value != "" || s_password.value.length >= 6 ){
           s_password.style.border = "1px solid transparent";
           pass_error.style.display = "none";
           s_pass_num_error.style.display = "none";
           return true;
   }
}

</script>
</body>
</html>