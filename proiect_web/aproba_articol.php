<?php
session_start();
include_once 'templates/User.php';
global $mysqli;
include("templates/conectare.php");
include 'templates/header_login.php';
$user = new User(); //am creat un user de tipul User - avem clasa User.php
$uid = $_SESSION['id']; //luam id-ul userului care a intrat


if (isset($_GET['id_articol']) && isset($_GET['data'])) //in momentul in care am apasat pe aprobare articol am avut pus data si id_articol in link
    //acum vom lua aceste date
{
    $receivedId = urldecode($_GET['id_articol']);
    $receivedData = urldecode($_GET['data']);

} else {echo "No data received.";}

if (isset($_GET['id_articol']) && is_numeric($_GET['id_articol']))
{ // preluam variabilele din URL/form
        $id_articol=$receivedId;
        $status='aprobat';
    // acum facem update cu noul status APROBAT
    if ($stmt = $mysqli->prepare("UPDATE articol SET status=? WHERE id_articol=$id_articol"))
    {
        $stmt->bind_param("s",$status); //updatam baza de date cu status de tipul s=string
        $stmt->execute();
        $stmt->close();
    }
    else
    {
        echo "ERROR: Nu se poate aproba articolul.";
    }
    $mysqli->close();
    echo "<div>Articolul a fost aprobat cu succes!!!!</div>";
}

include 'templates/footer.php';
?>
<?php
