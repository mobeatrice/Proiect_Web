<?php
global $mysqli;
include("templates/conectare.php");
include 'templates/header.php';
include 'templates/t_register.php';

// Process the registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
    $id_rol = $_POST["id_rol"];

    // Validate input (You may add more validation as needed)
    if (empty($username) || empty($email) || empty($parola)) {
        echo "All fields are required.";
    } else {
        // Check if the username or email already exists in the database
        $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $checkResult = $mysqli->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "Username or email already exists.";
        } else {
            // Insert user into the database
            $insertQuery = "INSERT INTO users (nume, prenume, username, email, parola, id_rol) VALUES ('$nume', '$prenume','$username', '$email', '$parola', '$id_rol')";

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