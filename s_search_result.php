<?php
     session_start();

     include("connection.php");

 ?>    
    
    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
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

#h1{
    position: absolute;
    margin:10px;
    left:20px;
    font-size:60px;
    font-family:sans-serif;
   
}

.employee-container{
    position:absolute;
    margin:50px;
    top:50px;
    left:30px;
    font-size:20px;
    color:#fff;
}

.employee-container h3{
    color:#19B3D3;
    margin-top:30px;
    font-size:30px;
}

</style>
<body>
<h1 id="h1">All Avaliable Jobs</h1>
<div class="employee-container">
 
 <?php

            if(isset($_POST['search_job-btn']))
            {
                 //something was posted
                 $search_job_job_title = $_POST['search_job_job_title'];
                 $search_job_location = $_POST['search_job_location'];
             
                 $query = "select * from jobpost where p_job_title ='$search_job_job_title' and p_location ='$search_job_location'";
                      
                 $result = mysqli_query($con,$query);
       
                 $queryResult = mysqli_num_rows($result);
       
                 if($queryResult > 0){
       
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='result-box'>
                        <h3>".$row['p_company']."</h3>
                        <p>".$row['p_user_name']."</p>
                         <p>".$row['p_email']."</p>
                        <p>".$row['p_job_title']."</p>
                        <p>".$row['p_location']."</p>
                        <p>".$row['p_phone']."</p>
                        </div>";
                    }
       
                 }else{
                     echo "There are no results maching your search!";
                 }
       
            }

?>

</div>
</body>
</html>