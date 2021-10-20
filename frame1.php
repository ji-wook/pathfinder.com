
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frame1</title>
   
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

.main{
    max-width: 1450px;
   
}

ul{
    float:right;
   margin:0;
   padding:0;
   display:flex;
}

ul li{
    display:inline-block;
    list-style: none;
   
}

ul li a{
    position:relative;
    display:block;
    margin:20px 0;
    padding:10px 20px;
    text-decoration: none;
    text-transform: uppercase;
    color: #18ffff;
    font-weight: bold;
    font-size:20px;
    transition: .5s;
}

ul li a:hover{
    color: #000000;
}

ul li a:before{
    content:'';
    position: absolute;
    top:0px;
    left:0px;
    width: 100%;
    height:100%;
    border-top: 1px solid #18ffff;
    border-bottom: 1px solid #18ffff;
    transform: scaleY(2);
    opacity:0;
    transition: .5s;
    z-index: -1;
}

ul li a:hover:before{
    transform: scaleY(1.2);
    opacity:1;
}


ul li a:after{
    content:'';
    position: absolute;
    top:1px;
    left:0px;
    width: 100%;
    height:100%;
    background:  #18ffff;
    transform: scale(0);
    transition: .5s;
    z-index: -1;
}

ul li a:hover:after{
    transform: scale(1);
}

.logo{
    position:absolute;
    top:10px;
    left: 30px;
    width:200px;
    height:30px;
}
.logo h1{
    display:block;
     white-space: nowrap; 
     color:#18ffff;
     padding-left:10px;
     font-size:29px;
     box-sizing: border-box;
     border: 4px solid #18ffff;
     overflow: hidden;
     text-overflow: clip;
      
}

.c{
    font-size: 50px;
    font-family: 'Gabriola';
}
.e{
    font-size: 15px;
}

.container{
    position: absolute;
    top:50px;
    left:25px;
    width:1200px;
    height:170px;
    margin:240px auto;
}
.container .box{
    position: relative;
    width:250px;
    height:170px;
    float:left;
    top:-50px;
    margin-left:318px;
    box-sizing: border-box;
    overflow:hidden;
    border-radius:15px;
    color:#18ffff;
    box-shadow: 2px 2px 4px #ddd;
}

.container .box .text {
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    transition:.5s;
    z-index: 1;
    background: #000000;
    border:2px solid #18ffff;
    border-radius:12px;
}

.container .box:hover .text{
    top:20px;
    left:calc(50% - 40px);
    width:80px;
    height:80px;
    border-radius:50%;
    background: #000051;
    border:2px solid #18ffff;
}


.container .box .text .a{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    font-size: 90px;
    transition:.5s;
    color:#18ffff;
    font-family: 'Gabriola'
}

.container .box .text .f{
    position: absolute;
    top:67%;
    left:52%;
    transform: translate(-50%, -50%);
    transition:.5s;
    color:#18ffff;
    font-size: 20px;
    font-family: 'Ink Free'
}

.container .box:hover .text .a{
    font-size: 45px;
}

.container .box:hover .text .f{
    font-size: 10px;
}


.container .box .text1{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    transition:.5s;
    z-index: 1;
    background: #000000;
    border:2px solid #18ffff;
    border-radius:12px;
}

.container .box:hover .text1{
    top:20px;
    left:calc(50% - 40px);
    width:80px;
    height:80px;
    border-radius:50%;
    background:#b61827;
    border:2px solid #18ffff;
}

.container .box .text1 .a{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    font-size: 90px;
    transition:.5s;
    color:#18ffff;
    font-family: 'Gabriola'
}

.container .box .text1 .f{
    position: absolute;
    top:67%;
    left:52%;
    transform: translate(-50%, -50%);
    transition:.5s;
    color:#18ffff;
    font-size: 20px;
    font-family: 'Ink Free'
}

.container .box:hover .text1 .a{
    font-size: 45px;
}

.container .box:hover .text1 .f{
    font-size: 10px;
}

.container .box .content .link1{
       position: absolute;
       top:100%;
       height:calc(100%-80%);
       box-sizing: border-box;
       color:#ddd;
       transition: .5s;
       margin-left: 15px;
       opacity:0;

}
.container .box:hover .content .link1{
    top:80%;
    opacity:1;
}

a.link1:hover, a.link1:active {font-size: 120%;}
a.link2:hover, a.link2:active {font-size: 120%;}

.container .box .content .link2{
    position: absolute;
    top:100%;
    height:calc(100%-80%);
    box-sizing: border-box;
    color:#ddd;
    transition: .5s;
    margin-left: 195px;
    opacity:0;

}
.container .box:hover .content .link2{
    top:80%;
    opacity:1;
}
 


.container .box:nth-child(1){
     border:3px solid #18ffff;
}

.container .box:nth-child(2){
    border:3px solid #18ffff;
}

.image .logo3{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 20s linear alternate infinite; 
  }

  .image .logo4{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 15s linear alternate infinite; 
  }
  
  .image .logo5{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 21s linear alternate-reverse infinite; 
  }

  .image .logo6{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 16s linear alternate-reverse infinite; 
  }

  .image .logo7{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 26s linear alternate infinite; 
  }
  .image .logo8{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 24s linear alternate-reverse infinite; 
  }
  .image .logo9{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 10s linear alternate infinite; 
  }

  .image .logo10{
    position:absolute;
    bottom:20px;
    width:150px;
    height:75px;
    animation: example 11s linear alternate-reverse infinite; 
  }
 
  @keyframes example {
    from{left:0px;}
    to {left:1175px;}

    0% {
        opacity:1;
      }

    25% {
        opacity:1;
      }

    50%{
        opacity:0;
     }   
    75% {
        opacity:1;
      }  
     
    100% {
        opacity:1;
      }
}
</style>
<body>
    <div class="main">
        <ul>
            <li><a href="frame1.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="contactus.php">CONTACT-US</a></li>
            <li><a href="how_it_work.php">HOW IT WORKS</a></li>
            <li><a href="registration.php">REGISTER NOW</a></li>
            
        </ul>
        </div>
        <div class=logo>
            <h1>path<span class="c">f</span>inder.<span class="e">com</span></h1>
        </div>
        <div class="container">
            <div class="box">
               <div class="text"><p><span class="a">Job</span> <span class="f">Keeper</span></p></div>
               <div class="content">
                    <a class="link1" href="k_registration.php" >Register now</a> <a class="link2" href="k_login.php">Login</a>
               </div>
            </div>
            <div class="box">
                <div class="text1"><p><span class="a">Job</span> <span class="f">Seeker</span></p></div>
                <div class="content">
                     <a class="link1" href="s_registration.php" >Register now</a> <a class="link2" href="s_login.php">Login</a>
                </div>
             </div>
        </div> 
        <div class="image">
            <img class="logo3"  src="image/logo3.jpg">
            <img class="logo4"  src="image/logo4.png">
            <img class="logo5"  src="image/logo5.jpg">
            <img class="logo6"  src="image/logo6.jpg">
            <img class="logo7"  src="image/logo7.jpg">
            <img class="logo8"  src="image/logo8.jpg">
            <img class="logo9"  src="image/logo9.jpg">
            <img class="logo10"  src="image/logo10.jpg">
        </div>
 </body>
</html>

