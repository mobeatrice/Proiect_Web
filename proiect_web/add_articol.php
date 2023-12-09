<?php
session_start();
include_once 'templates/User.php';
global $mysqli;
include("templates/conectare.php");
include 'templates/header_login.php';
include 'templates/t_add_article.php';
$user = new User();
$uid = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // luam din t_add_article datele pe care le-am pus cu metoda POST
    $titlu = $_POST["titlu"];
    $continut_articol = $_POST["continut_articol"];
    $id_categorie = $_POST["id_categorie"];
    $tip_articol=$_POST['publish']; //luam tipul articolului in functie de butonul pe care l-a apasat

    // Validam sa aveem titlu completat
    if (empty($titlu)) {
        echo "All fields are required.";
    } else {

            $numbers = array(4, 5, 10); //setam pentru editorId un random dintre 4,5 si 10
            $randomKey = array_rand($numbers);
            $editorId = $numbers[$randomKey];

            $result2=$mysqli->query("SELECT id_categorie FROM users WHERE id=$uid"); //cautam categoria in care are voie userul sa incarce articole
            $row2 = $result2->fetch_assoc(); //luam in row2 toata coloana
            $categorie = $row2['id_categorie']; //punem in categorie doar id_categorie
            if($categorie == $id_categorie) { //daca pune in categoria buna
                if ($tip_articol == 'Draft') {  //daca a apasat pe Draft se vor insera in articol datele si tipul va fi draft
                    $insertQuery = "INSERT INTO articol (titlu, data_creare, data_modificare, continut_articol, autor, editor, status, id_categorie) VALUES ('$titlu',NOW(), NOW(), '$continut_articol','$uid', '$editorId','draft', '$id_categorie')";
                }
                if ($tip_articol == 'Publica') {
                    $insertQuery = "INSERT INTO articol (titlu, data_creare, data_modificare, continut_articol, autor, editor, status, id_categorie) VALUES ('$titlu',NOW(), NOW(), '$continut_articol','$uid', '$editorId','asteptare', '$id_categorie')";
                }
            }
            else
            {
                echo "Nu poti incarca in aceasta categorie.";
            }
            if ($mysqli->query($insertQuery) === TRUE) {
                echo "Articol incarcat cu succes.";
            } else {
                //echo "Error: " . $insertQuery . "<br>" . $mysqli->error;
            }
        }
}

$mysqli->close();

include 'templates/footer.php';
?>