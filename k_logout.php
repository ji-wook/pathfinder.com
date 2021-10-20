<?php

session_start();

if(isset($_SESSION['k_id']))
{
      unset($_SESSION['k_id']);
}

header("Location: frame1.php");
die;