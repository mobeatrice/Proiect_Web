<?php
session_start();
include_once 'templates/User.php';
global $mysqli;
include("templates/conectare.php");
include 'templates/header_login.php';
$user = new User();
$uid = $_SESSION['id'];


if (isset($_GET['id_articol']) && isset($_GET['data']))
{
    $receivedId = urldecode($_GET['id_articol']);
    $receivedData = urldecode($_GET['data']);

} else {echo "No data received.";}

if (isset($_GET['id_articol']) && is_numeric($_GET['id_articol']))
{ // preluam variabilele din URL/form
    $id_articol=$receivedId;
    $status='refuzat';
    // stergem inregistrarea cu ibstudent=$id
    if ($stmt = $mysqli->prepare("UPDATE articol SET status=? WHERE id_articol=$id_articol"))
    {
        $stmt->bind_param("s",$status);
        $stmt->execute();
        $stmt->close();
    }
    else
    {
        echo "ERROR: Nu se poate refuza articolul.";
    }
    $mysqli->close();
    echo "<div>Articolul a fost refuzat cu succes!!!!</div>";
}

include 'templates/footer.php';
?>
<?php
