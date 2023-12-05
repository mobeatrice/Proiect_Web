<?php

global $mysqli;
include("templates/conectare.php");

include 'templates/header.php';

include 'templates/t_login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST["username"];
    $parola = $_POST["parola"];


    // SQL query to retrieve user from the database
    $query = "SELECT * FROM users WHERE username = '$username' ";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // User found, check the password
        $row = $result->fetch_assoc();
        $parola_database = $row["parola"];
        // Verify the password
        if ($parola == $parola_database) {
            // Authentication successful
            $dataUsername = $username;
            redirect("home.php?data=" . urlencode($dataUsername));
            echo "Authentication successful!";
        } else {
            // Authentication failed (invalid password)
            echo "Authentication failed. Invalid password.";
        }
    } else {
        // User not found in the database
        echo "Authentication failed. User not found.";
    }
}

$mysqli->close();

include 'templates/footer.php';


