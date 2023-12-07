<?php
global $mysqli;
include("templates/conectare.php");
include 'templates/header.php';
include 'templates/t_register.php';

// Luam din t_register datele pe care le-am introdus
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
    $id_rol = $_POST["id_rol"];


    // Verificam sa avem introdus username, email si parola
    if (empty($username) || empty($email) || empty($parola)) {
        echo "All fields are required.";
    } else {
        // verificam sa vedem daca nu sunt deja folosite usernameeul sau parola
        $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $checkResult = $mysqli->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "Username-ul sau parola deja exista.";
        } else {
            // inseram userul in baza de date
            if  ($id_rol='J01') //verificat daca useruk e jurnalist
            {
                $numbers = array(101, 102, 103, 104);
                $randomKey = array_rand($numbers);//iau un random intre 101-104 pentru a adauga o categorie jurnalistului
                $randomNumber = $numbers[$randomKey];
                $insertQuery = "INSERT INTO users (nume, prenume, username, email, parola, id_rol, id_categorie) VALUES ('$nume', '$prenume','$username', '$email', '$parola', '$id_rol', '$randomNumber')";

            }else //daca nu e jurnalist adaug dateele pentru cititor sau editor
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

$mysqli->close();
include 'templates/footer.php';
?>