<?php
session_start();
include_once 'templates/User.php';
include("templates/header_login.php");
include("templates/conectare.php");
global $mysqli;
$user = new User();
$uid = $_SESSION['id'];


include(dirname(__DIR__) . '/assets/util.php');
if (isset($_GET['data'])) {
    $receivedData = urldecode($_GET['data']);

} else {
    echo "No data received.";
}


$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';

if ($selectedCategory  == 'all')

{
    echo '<div class="container">';
    if ($result = $mysqli->query("SELECT * FROM articol ORDER BY data_creare")) { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0) {
            echo '<div class="container col-row">';
            echo '<section class="col-row main-articles">';
            while ($row = $result->fetch_object()) {

                echo '<div class="row">';
                echo '<article class="article">';

                $autorValue = $row->autor;
                $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
                $stmt->bind_param("s", $autorValue);
                $stmt->execute();
                $result2 = $stmt->get_result();
                if ($result2->num_rows > 0) {
                    $row2 = $result2->fetch_assoc();
                    $fullName = $row2['nume'] . ' ' . $row2['prenume'];
                } else {
                    echo "Author not found";
                }

                $categorieValue = $row->id_categorie;
                $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
                $stmt->bind_param("s", $categorieValue);
                $stmt->execute();
                $result3 = $stmt->get_result();
                if ($result3->num_rows > 0) {
                    $row3 = $result3->fetch_assoc();
                    $categorieName = $row3['nume_categorie'];
                } else {
                    echo "Category not found";
                }


                if ($row->status == "aprobat") {

                    echo '<h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300">' . $row->titlu . '</a></h2>';
                    echo ' <p class="category fs-category">' . $categorieName . '</p>';
                    echo '<p class="article__text fs-text-lg">' . $row->continut_articol . '</p>';
                    echo '<p class="fs-date article__date">Last modified:<date> <em>' . $row->data_creare . ' by ' . $fullName . '</em> </date> </p>';
                    echo '<hr/>';
                }
                $stmt->close();
                echo '</article>';
                echo '</div>';
                echo '</section>';
            }
            echo '</div>';
        } // daca nu sunt inregistrari se afiseaza un rezultat de eroare
        else {
            echo "Nu sunt inregistrari in tabela!";
        }
    } // eroare in caz de insucces in interogare
    else {
        echo "Error: " . $mysqli->error();
    }
}
else {
    echo '<div class="container">';
    if ($result = $mysqli->query("SELECT * FROM articol ORDER BY data_creare")) { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0) {
            echo '<div class="container col-row">';
            echo '<section class="col-row main-articles">';
            while ($row = $result->fetch_object()) {

                echo '<div class="row">';
                echo '<article class="article">';

                $autorValue = $row->autor;
                $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
                $stmt->bind_param("s", $autorValue);
                $stmt->execute();
                $result2 = $stmt->get_result();
                if ($result2->num_rows > 0) {
                    $row2 = $result2->fetch_assoc();
                    $fullName = $row2['nume'] . ' ' . $row2['prenume'];
                } else {
                    echo "Author not found";
                }

                $categorieValue = $row->id_categorie;
                $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
                $stmt->bind_param("s", $categorieValue);
                $stmt->execute();
                $result3 = $stmt->get_result();
                if ($result3->num_rows > 0) {
                    $row3 = $result3->fetch_assoc();
                    $categorieName = $row3['nume_categorie'];
                } else {
                    echo "Category not found";
                }


                if ($row->status == "aprobat" && $categorieName==$selectedCategory) {

                    echo '<h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300">' . $row->titlu . '</a></h2>';
                    echo ' <p class="category fs-category">' . $categorieName . '</p>';
                    echo '<p class="article__text fs-text-lg">' . $row->continut_articol . '</p>';
                    echo '<p class="fs-date article__date">Last modified:<date> <em>' . $row->data_creare . ' by ' . $fullName . '</em> </date> </p>';
                    echo '<hr/>';
                }
                $stmt->close();
                echo '</article>';
                echo '</div>';
                echo '</section>';

            }
            echo '</div>';
        } // daca nu sunt inregistrari se afiseaza un rezultat de eroare
        else {
            echo "Nu sunt inregistrari in tabela!";
        }
    } // eroare in caz de insucces in interogare
    else {
        echo "Error: " . $mysqli->error();
    }
}
// se inchide
$mysqli->close();
echo '</div>';
include 'templates/footer.php';
?>