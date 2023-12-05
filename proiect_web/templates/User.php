<?php
include 'conection.php';
class User{
    public $db;
    public function __construct(){
    $this->db = new mysqli(DB_SERVER, DB_USERNAME,
    DB_PASSWORD, DB_DATABASE);
    if(mysqli_connect_errno()) {
        echo "Error: Nu se poate conecta la bd.";
    exit;
    }
}
/*** inregistrare ***/
public function reg_user($nume, $prenume,$user,$password,$email){
$parola = md5($password);
$sql="SELECT * FROM users WHERE username='$user' OR
email='$email'";
//verific dacae username or email sunt in bd
$check = $this->db->query($sql) ;
$count_row = $check->num_rows;
//daca username nu este in tabel
if ($count_row == 0){
$sql1="INSERT INTO users SET
username='$user', parola='$password', nume='$nume', prenume= '$prenume', email='$email'";
$result = mysqli_query($this->db,$sql1) or
die(mysqli_connect_errno()."Nu pot insera");
return $result;
}
else { return false;}
}
/*** Login ***/
public function check_login($user, $password){
    $parola = md5($password);
    $sql2="SELECT id from users WHERE username='$user' and parola='$password'";
    //verific daca username exista
    $result = mysqli_query($this->db,$sql2);
    $user_data = mysqli_fetch_array($result);
    $count_row = $result->num_rows;
    if ($count_row == 1) {
    // folosesc sesiune
    $_SESSION['login'] = true;
    $_SESSION['id'] = $user_data['id'];
    return true;
    }
    else{
        return false;}
}


/*** afisare username sau fulname ***/
public function get_username($id){
    $sql3="SELECT username FROM users WHERE id = $id";
    $result = mysqli_query($this->db,$sql3);
    $user_data = mysqli_fetch_array($result);
    return $user_data['username'];
}


/*** start session ***/
public function get_session(){
    return $_SESSION['login'];
}
public function user_logout() {
    $_SESSION['login'] = FALSE;
    session_destroy();
    }
}