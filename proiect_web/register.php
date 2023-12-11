<?php
global $mysqli;
include("templates/conectare.php");
include 'templates/header.php';
include 'templates/t_register.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
    $parola_confirm = $_POST["parola_confirm"];
    $id_rol = $_POST["id_rol"];


    if (empty($username) || empty($email) || empty($parola)) {
        echo "All fields are required.";
    } else {
        if ($parola != $parola_confirm) {
            echo "Parolele trebuie sa coincida.";
        } else {
            $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
            $checkResult = $mysqli->query($checkQuery);

            if ($checkResult->num_rows > 0) {
                echo "Username-ul sau email-ul deja exista.";
            } else {

                if ($id_rol == 'J01')
                {
                    $numbers = array(101, 102, 103, 104);
                    $randomKey = array_rand($numbers);
                    $randomNumber = $numbers[$randomKey];
                    $insertQuery = "INSERT INTO users (nume, prenume, username, email, parola, id_rol, id_categorie) VALUES ('$nume', '$prenume','$username', '$email', '$parola', '$id_rol', '$randomNumber')";

                } else
                {
                    $insertQuery = "INSERT INTO users (nume, prenume, username, email, parola, id_rol) VALUES ('$nume', '$prenume','$username', '$email', '$parola', '$id_rol')";

                }

                if ($mysqli->query($insertQuery) === TRUE) {
                    echo "Registration successful.";
                } else {
                    echo "Error: " . $insertQuery . "<br>" . $mysqli->error;
                }
            }
        }
    }
}

$mysqli->close();
include 'templates/footer.php';
?>