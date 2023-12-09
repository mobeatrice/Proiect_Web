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
public function reg_user($nume, $prenume,$user,$password,$email)
{
    $sql="SELECT * FROM users WHERE username='$user' OR
    email='$email'";
    //verific dacae username or email sunt in bd
    $check = $this->db->query($sql) ;
    $count_row = $check->num_rows;
    //daca username nu este in tabel
    if ($count_row == 0){
    $sql1="INSERT INTO users SET
    username='$user', parola='$password', nume='$nume', prenume= '$prenume', email='$email'";
    $result = mysqli_query($this->db,$sql1) or  die(mysqli_connect_errno()."Nu pot insera");
    return $result;
    }
        else { return false;}
}

/*** Login ***/
public function check_login($user, $password){
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


/*** afisare username sau fullname ***/
public function get_username($id){
    //afisam username in functie de id
    $sql3="SELECT username FROM users WHERE id = $id";
    $result = mysqli_query($this->db,$sql3);
    $user_data = mysqli_fetch_array($result);
    return $user_data['username'];
}

public function get_idRol($user){
    //afisam id_rol in functie de username
        $sql4="SELECT id_rol FROM users WHERE username = '$user'";
        $result2 = mysqli_query($this->db,$sql4);
        $user_data = mysqli_fetch_array($result2);
        return $user_data['id_rol'];
    }

 public function get_Rol($id){
    //afisam id rol in functie de id
        $sql4="SELECT id_rol FROM users WHERE id = '$id'";
        $result2 = mysqli_query($this->db,$sql4);
        $user_data = mysqli_fetch_array($result2);
        if($user_data) {
            return $user_data['id_rol'];
        }
        else {return false; }
    }


public function get_autor($id)
{
//luam numele complet al autorului in functie de id
    $sql5="SELECT nume, prenume FROM users WHERE users.id = '$id'";
    $result3=mysqli_query($this->db, $sql5);
    $user_data = mysqli_fetch_array($result3);
    $fullname=$user_data['nume']. ' '.$user_data['prenume'];
    return $fullname;
}

    public function get_categorie($id)
    {
//luam categoria in functie de id
        $sql6="SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = '$id'";
        $result4=mysqli_query($this->db, $sql6);
        $user_data=mysqli_fetch_array($result4);
        $categorie=$user_data['nume_categorie'];
        return $categorie;
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