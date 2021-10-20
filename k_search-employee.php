<?php
     session_start();

     include("connection.php");
      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employee</title>
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
    left:320px;
    font-size:60px;
    font-family:sans-serif;
}

.card{
    position:absolute;
    top:100px;
    left:340px;
    width:700px;
    height:440px;
    padding:20px;
   /*box-shadow:0 5px 15px rgba(0,0,0,5);*/
}

.card .title{
    position: absolute;
    top:70px;
    left:100px;
    font-size:25px;
   
}

 .card #job{
    position:absolute;
    top:50px;
    left:300px;
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

.card .title-location{
    position: absolute;
    top:150px;
    left:100px;
    font-size:25px;
   
}

.card #location{
    position:absolute;
    top:130px;
    left:300px;
}

.card .search-btn{
    position:absolute;
    top:250px;
    left:300px;
    width:120px;
    height:40px;
    padding:5px;
    margin-top: -10px;
    margin-right: 20px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;
    color:#fff;
    background:#19B3D3;
    cursor:pointer;
    transition:.5s;
}

.card .search-btn:hover{
    background: #0B87A6;
}

#search-result{
    position:absolute;
    top:450px;
    left:500px;
    color:#fff;
   

}
</style>
<body>
    <h1 id="h1">Search Employee Here</h1>
    <form action="k_search_result.php" method="POST">
    <div class="card">
        <p class="title">Job Title:</p>
        <select name="search_employee_job_title" id="job">
            <option value="none">select</option>
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

            <p class="title-location">Location:</p>  
            <select name="search_employee_location" id="location">
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
             <button id="search-btn" name="search_employee-btn" type="submit" class="search-btn">Search</button>
        </div>
        </form>
      
</body>
</html>

