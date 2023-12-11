<?php
session_start();
include_once 'templates/User.php';
global $mysqli;
include("templates/conectare.php");
include 'templates/header_login.php';
include 'templates/t_edit_article.php';
$user = new User();
$uid = $_SESSION['id'];

//acest fisier modifica ce afisam in t_edit_article.php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ // preluam variabilele din URL/form
            if (isset($receivedId))
            {
                $id_articol = $receivedId;
            }
            //preluam dateele din formularul de editare
                $titlu = htmlentities($_POST['titlu'], ENT_QUOTES);
                $continut_articol = htmlentities($_POST['continut_articol'], ENT_QUOTES);
                $tip_articol = htmlentities($_POST['submit'], ENT_QUOTES);
                // verificam daca titlul si continutul nu sunt goale
                if ($titlu == '' || $continut_articol == '' )
                { // daca sunt goale afisam mesaj de eroare
                    echo "<div> ERROR: Completati campurile obligatorii!</div>";
                }
            else {
                // daca nu sunt erori se face update
                if ($tip_articol == 'Draft') {
                    $tip = 'draft';
                    if ($stmt = $mysqli->prepare("UPDATE articol SET titlu=?, continut_articol=?, status=? WHERE id_articol = $id_articol")) {
                        $stmt->bind_param("sss", $titlu, $continut_articol, $tip);
                        $stmt->execute();

                    } else {
                        echo "ERROR: nu se poate executa update.";
                    }
                }
                if ($tip_articol == 'Public')
                {
                    $tip='asteptare';
                    if ($stmt = $mysqli->prepare("UPDATE articol SET titlu=?,continut_articol=?, status=? WHERE id_articol=$id_articol"))
                    {
                        $stmt->bind_param("sss", $titlu, $continut_articol, $tip);
                        $stmt->execute();
                        $stmt->close();
                    } // mesaj de eroare in caz ca nu se poate face update
                    else {
                        echo "ERROR: nu se poate executa update.";
                    }
                }

            }
        }

include 'templates/footer.php';
?>


