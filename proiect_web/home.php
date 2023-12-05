<?php
// connectare bazadedate
session_start();
include_once 'templates/User.php';
$user = new User();
$uid = $_SESSION['id'];
global $mysqli;
include("templates/conectare.php");

include("templates/header_login.php");
// se preiau inregistrarile din baza de date

if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
{ // Afisare inregistrari pe ecran


    if ($result->num_rows > 0)
    {
        // afisarea inregistrarilor intr-o table
        echo "<table border='1' cellpadding='10'>";

        // antetul tabelului
        echo
        "<tr><th>Titlu</th><th>Creat la:</th><th>Modificat la:</th><th>Continut:</th><th>Autor:</th></tr>";

        while ($row = $result->fetch_object())
        {

            $autorValue = $row->autor;
            $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
            $stmt->bind_param("s", $autorValue);
            $stmt->execute();
            $result2 = $stmt->get_result();
            if ($result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $fullName = $row2['nume'] . ' ' . $row2['prenume'];
            } else {echo "Author not found";}
            if($row->status == "aprobat")
            {
            // definirea unei linii pt fiecare inregistrare

                echo "<tr>";
                echo "<td>" . $row->titlu . "</td>";
                echo "<td>" . $row->data_creare . "</td>";
                echo "<td>" . $row->data_modificare . "</td>";
                echo "<td>" . $row->continut_articol . "</td>";
                echo "<td>" . $fullName . "</td>";
                echo "</tr>";
            }
            $stmt->close();
        }
        echo "</table>";
    }
    // daca nu sunt inregistrari se afiseaza un rezultat de eroare
    else
    {
        echo "Nu sunt inregistrari in tabela!";
    }
}
// eroare in caz de insucces in interogare
else
{ echo "Error: " . $mysqli->error(); }

// se inchide

$mysqli->close();

include 'templates/t_index.php';

include 'templates/footer.php';
?>