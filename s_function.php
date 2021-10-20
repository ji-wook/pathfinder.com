<?php

  function check_login($con)
  {

     if(isset($_SESSION['s_id']))
     {

        $id = $_SESSION['s_id'];
        $query = "select * from seeker where s_id = '$id' limit 1";

            $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) >0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
     }

     //redirect to login
     header("Location: s_login.php");
     die;

  }

  function random_num($length)
  {

    $text ="";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i< $len; $i++)
    {
        $text .= rand(0,9);
    }

    return $text;

  }