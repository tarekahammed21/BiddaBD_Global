<?php
include("backend/connection.php");
session_start();
$adminID = $_SESSION['id'];
$admin_email = $_SESSION['admin_email'];
if($adminID==null)
{
	header('location:index.php');
}
if(isset($_GET['adminLogout']))
{
	$obj = new GlobalAdmin();
	$obj->adminLogout();
} 
?>