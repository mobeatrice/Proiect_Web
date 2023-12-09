<?php
session_start();
include_once 'templates/User.php';
global $mysqli;
include("templates/conectare.php");
include 'templates/header_login.php';
$user = new User();
$uid = $_SESSION['id'];


if (isset($_GET['id_articol']) && isset($_GET['data'])) {
    $receivedId = urldecode($_GET['id_articol']);
    $receivedData = urldecode($_GET['data']);

} else {echo "No data received.";}

if (isset($_GET['id_articol']) && is_numeric($_GET['id_articol']))
{ // preluam variabilele din URL/form
    $id_articol=$receivedId;
    // stergem inregistrarea cu ibstudent=$id
    if ($stmt = $mysqli->prepare("DELETE FROM articol WHERE id_articol = ? LIMIT 1"))
    {
        $stmt->bind_param("i",$id_articol);
        $stmt->execute();
        $stmt->close();
    }
    else
    {
        echo "ERROR: Nu se poate executa delete.";
    }
    $mysqli->close();
    echo "<div>Inregistrarea a fost stearsa!!!!</div>";
}

include 'templates/footer.php';
?>
