<?php
session_start();
include_once 'templates/User.php';
$user = new User();
$uid = $_SESSION['id'];
if (!$user->get_session()){
header("location:login.php");
}
if (isset($_GET['q'])){
$user->user_logout();
header("location:login.php");
} ?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
Home
<style><!--
body{
font-family:Arial, Helvetica, sans-serif;
}
h1{
font-family:'Georgia', Times New Roman, Times, serif;
}
--></style>
<div id="container">
<div id="header"><a href="home_2.php?q=logout">LOGOUT</a></div>
<div id="main-body">
<h1>Salut <?php $user->get_username($uid); ?></h1>
</div>
<div id="foot