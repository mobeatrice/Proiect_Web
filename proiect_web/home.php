<?php
session_start();
include_once 'templates/User.php';
include("templates/header_login.php");
include("templates/conectare.php");
global $mysqli;
$user = new User();
$uid = $_SESSION['id'];


include(dirname(__DIR__).'/assets/util.php');
if (isset($_GET['data'])) {
    $receivedData = urldecode($_GET['data']);

} else {
    echo "No data received.";
}

?>
<div class="container">
    <div class="home-header">
    <h1 class="page-title text-h1 text-dark">Articole</h1>
    <!-- If journalist add this button -->
    <a href="add_articol.php?data=<?php echo urlencode($receivedData); ?>" class="article_btn article_btn-gold fs-text text-accent300 bg-light b-accent300">
        <i class="fa-solid fa-plus"></i>
    </a>
    </div>
    <h2 class="page-subtitle-h2">Aprobate</h2>

    <?php
    if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
    { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0)
        {?>
        <div class="container col-row">
         <section class="col-row main-articles">

        <?php while ($row = $result->fetch_object())
            { ?>

            <div class="row">
                <article class="article">

           <?php $autorValue = $row->autor;
            $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
            $stmt->bind_param("s", $autorValue);
            $stmt->execute();
            $result2 = $stmt->get_result();
            if ($result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $fullName = $row2['nume'] . ' ' . $row2['prenume'];
            } else {echo "Author not found";}

            $categorieValue = $row->id_categorie;
            $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
            $stmt->bind_param("s", $categorieValue);
            $stmt->execute();
            $result3 = $stmt->get_result();
            if ($result3->num_rows > 0) {
                $row3 = $result3->fetch_assoc();
                $categorieName = $row3['nume_categorie'] ;
            } else {echo "Category not found";}

            if($row->status == "aprobat")
            { ?>
                <div class="col-row article-container">
                    <article class="article">
                        <h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300"><?php echo $row->titlu ?></a></h2>
                        <p class="category fs-category"><?php echo $categorieName ?></p>
                        <p class="article__text fs-text-lg"> <?php echo $row->continut_articol ?>.</p>
                        <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p>
                    </article>
                    <hr/>
                </div>
           <?php }
                $stmt->close(); ?>
                </article>
            </div>
            <?php } ?>
            </section>
        </div>
    <?php }
    // daca nu sunt inregistrari se afiseaza un rezultat de eroare
    else
    {echo "Nu sunt inregistrari in tabela!";}
}
// eroare in caz de insucces in interogare
else
{ echo "Error: " . $mysqli->error(); }

?>

    <h2 class="page-subtitle-h2">In asteptare </h2>

    <?php
    if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
    { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0)
        {?>
            <div class="container col-row">
                <section class="col-row main-articles">

                    <?php while ($row = $result->fetch_object())
                    { ?>

                        <div class="row">
                            <article class="article">

                                <?php $autorValue = $row->autor;
                                $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
                                $stmt->bind_param("s", $autorValue);
                                $stmt->execute();
                                $result2 = $stmt->get_result();
                                if ($result2->num_rows > 0) {
                                    $row2 = $result2->fetch_assoc();
                                    $fullName = $row2['nume'] . ' ' . $row2['prenume'];
                                } else {echo "Author not found";}

                                $categorieValue = $row->id_categorie;
                                $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
                                $stmt->bind_param("s", $categorieValue);
                                $stmt->execute();
                                $result3 = $stmt->get_result();
                                if ($result3->num_rows > 0) {
                                    $row3 = $result3->fetch_assoc();
                                    $categorieName = $row3['nume_categorie'] ;
                                } else {echo "Category not found";}

                                if($row->status == "asteptare")
                                { ?>
                                    <div class="col-row article-container">
                                        <article class="article">
                                            <h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300"><?php echo $row->titlu ?></a></h2>
                                            <p class="category fs-category"><?php echo $categorieName ?></p>
                                            <p class="article__text fs-text-lg"> <?php echo $row->continut_articol ?>.</p>
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p>
                                        </article>
                                        <hr/>
                                    </div>
                                <?php }
                                $stmt->close(); ?>
                            </article>
                        </div>
                    <?php } ?>
                </section>
            </div>
        <?php }
        // daca nu sunt inregistrari se afiseaza un rezultat de eroare
        else
        {echo "Nu sunt inregistrari in tabela!";}
    }
// eroare in caz de insucces in interogare
    else
    { echo "Error: " . $mysqli->error(); }

    ?>

    <h2 class="page-subtitle-h2">Schite -</h2>

    <?php
    if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
    { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0)
        {?>
            <div class="container col-row">
                <section class="col-row main-articles">

                    <?php while ($row = $result->fetch_object())
                    { ?>

                        <div class="row">
                            <article class="article">

                                <?php $autorValue = $row->autor;
                                $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
                                $stmt->bind_param("s", $autorValue);
                                $stmt->execute();
                                $result2 = $stmt->get_result();
                                if ($result2->num_rows > 0) {
                                    $row2 = $result2->fetch_assoc();
                                    $fullName = $row2['nume'] . ' ' . $row2['prenume'];
                                } else {echo "Author not found";}

                                $categorieValue = $row->id_categorie;
                                $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
                                $stmt->bind_param("s", $categorieValue);
                                $stmt->execute();
                                $result3 = $stmt->get_result();
                                if ($result3->num_rows > 0) {
                                    $row3 = $result3->fetch_assoc();
                                    $categorieName = $row3['nume_categorie'] ;
                                } else {echo "Category not found";}

                                if($row->status == "draft")
                                { ?>
                                    <div class="col-row article-container">
                                        <article class="article">
                                            <h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300"><?php echo $row->titlu ?></a></h2>
                                            <p class="category fs-category"><?php echo $categorieName ?></p>
                                            <p class="article__text fs-text-lg"> <?php echo $row->continut_articol ?>.</p>
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p>
                                        </article>
                                        <hr/>
                                    </div>
                                <?php }
                                $stmt->close(); ?>
                            </article>
                        </div>
                    <?php } ?>
                </section>
            </div>
        <?php }
        // daca nu sunt inregistrari se afiseaza un rezultat de eroare
        else
        {echo "Nu sunt inregistrari in tabela!";}
    }
// eroare in caz de insucces in interogare
    else
    { echo "Error: " . $mysqli->error(); }

    ?>


    <h2 class="page-subtitle-h2">Refuzate</h2>

    <?php
    if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
    { // Afisare inregistrari pe ecran

        if ($result->num_rows > 0)
        {?>
            <div class="container col-row">
                <section class="col-row main-articles">

                    <?php while ($row = $result->fetch_object())
                    { ?>

                        <div class="row">
                            <article class="article">

                                <?php $autorValue = $row->autor;
                                $stmt = $mysqli->prepare("SELECT nume, prenume FROM users WHERE users.id = ?");
                                $stmt->bind_param("s", $autorValue);
                                $stmt->execute();
                                $result2 = $stmt->get_result();
                                if ($result2->num_rows > 0) {
                                    $row2 = $result2->fetch_assoc();
                                    $fullName = $row2['nume'] . ' ' . $row2['prenume'];
                                } else {echo "Author not found";}

                                $categorieValue = $row->id_categorie;
                                $stmt = $mysqli->prepare("SELECT nume_categorie FROM categorie WHERE categorie.id_categorie = ?");
                                $stmt->bind_param("s", $categorieValue);
                                $stmt->execute();
                                $result3 = $stmt->get_result();
                                if ($result3->num_rows > 0) {
                                    $row3 = $result3->fetch_assoc();
                                    $categorieName = $row3['nume_categorie'] ;
                                } else {echo "Category not found";}

                                if($row->status == "refuzat")
                                { ?>
                                    <div class="col-row article-container">
                                        <article class="article">
                                            <h2 class="article__title fs-h2"><a href="#" class="article-link text-accent-300"><?php echo $row->titlu ?></a></h2>
                                            <p class="category fs-category"><?php echo $categorieName ?></p>
                                            <p class="article__text fs-text-lg"> <?php echo $row->continut_articol ?>.</p>
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p>
                                        </article>
                                        <hr/>
                                    </div>
                                <?php }
                                $stmt->close(); ?>
                            </article>
                        </div>
                    <?php } ?>
                </section>
            </div>
        <?php }
        // daca nu sunt inregistrari se afiseaza un rezultat de eroare
        else
        {echo "Nu sunt inregistrari in tabela!";}
    }
// eroare in caz de insucces in interogare
    else
    { echo "Error: " . $mysqli->error(); }

    // se inchide
    $mysqli->close();
    ?>
</div>
<?php
include 'templates/footer.php';
?>