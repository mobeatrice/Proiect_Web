<?php
session_start();
include_once 'templates/User.php';
include 'templates/header.php';
$user = new User();
if (isset($_SESSION['id']) && logged_in()) {
    $uid = $_SESSION['id'];
    redirect("home.php?data=" . $user->get_username($uid));
}
include 'templates/footer.php';
