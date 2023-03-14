<?php

    include("backend/connection.php");
    $obj = new GlobalAdmin();
    if(isset($_POST['admin_btn']))
    {
	    $obj->admin_login($_POST);
    }

    session_start();
    if(isset($_SESSION['id']))
    {
	    header('location:dashboard.php');
    }

?>