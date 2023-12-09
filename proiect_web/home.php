<?php
session_start();
include_once 'templates/User.php';
include("templates/header_login.php");
include("templates/conectare.php");
include_once (dirname(__FILE__) . '/assets/util.php');
global $mysqli;
$user = new User();
$uid = $_SESSION['id'];

if (isset($_GET['data']))
{
    $receivedData = urldecode($_GET['data']);
} else {echo "No data received.";}
if ($user->get_Rol($uid)=='E01') {
    $rol='Editor';
}
if($user->get_Rol($uid)=='J01'){
    $rol='Jurnalist';
}
?>

<div class="container col-row">
        <div class="home-header">
            <h1 class="page-title text-h1 text-dark">Articole - <?php  echo $rol?></h1>

            <?php if($user->get_Rol($uid)=='J01') { ?>
                <a href="add_articol.php?data=<?php echo urlencode($receivedData); ?>" class="article_btn article_btn-gold fs-text text-accent300 bg-light b-accent300">
                    <i class="fa-solid fa-plus"></i>
                </a>
           <?php } ?>
        </div>

   <!------------------------------------------- Articolele aprobate ----------------------------------------->
    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Aprobate</h2>

        <?php
        if($user->get_Rol($uid)=='J01') {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">
                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ($row->status == "aprobat") { ?>
                            <h3 class="article__title fs-h3"><a href="#"
                                                                class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue)?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?></p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by ' . $user->get_autor($autorValue) ?></em></date>
                                </p>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "In acest moment nu aveeti articole aprobate!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }
        if ($user->get_Rol($uid)=='E01')
        {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.editor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">
                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;
                        if ($row->status == "aprobat") { ?>
                            <h3 class="article__title fs-h3"><a href="#"
                                                                class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?></p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by ' . $user->get_autor($autorValue) ?></em></date>
                                </p>
                                <div class="btn-group">

                                    <a href="sterge_article.php?id_articol=<?php echo $row->id_articol ?>&data=<?php echo urlencode($receivedData); ?>"
                                       class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                                </div>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "In acest moment nu aveeti articole aprobate!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }

        ?>
    </section>

    <!---------------------------------------- Articolele ce asteapta aprobare ------------------------------------->
    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Asteapta aprobare</h2>

        <?php
        if($user->get_Rol($uid)=='J01') {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">

                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ($row->status == "asteptare") { ?>
                            <h3 class="article__title fs-h3"><a href="#"
                                                                class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?>.</p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by ' . $user->get_autor($autorValue) ?></em></date>
                                </p>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "In acest moment nu  aveti articole ce asteapta aprobare!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }

        if($user->get_Rol($uid)=='E01') {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.editor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">

                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ($row->status == "asteptare") { ?>
                            <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?>.</p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by '. $user->get_autor($autorValue)?></em></date>
                                </p>
                                <div class="btn-group">
                                    <!-- If editor -->
                                    <a href="aproba_articol.php?id_articol=<?php echo $row->id_articol?>&data=<?php echo urlencode($receivedData); ?>" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
                                    <a href="respinge_articol.php?id_articol=<?php echo $row->id_articol?>&data=<?php echo urlencode($receivedData); ?>" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800 rejected">Respinge</a>
                                    <!--  -->
                                </div>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "In acest moment nu  aveti articole ce asteapta aprobare!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }

            ?>

    </section>

    <?php

    if($user->get_Rol($uid)=='J01')
    {
    ?>
    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Schite</h2>

        <?php
        if ($result=$mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare") )
        { // Afisare inregistrari pe ecran
        if ($result->num_rows > 0)
        {
        while ($row = $result->fetch_object())
        { ?>
            <div class="row">
            <div class="col-row article-container">
                <article class="article">

                    <?php
                    $autorValue = $row->autor;
                    $categorieValue = $row->id_categorie;

                    if($row->status == "draft")
                    { ?>
                    <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300"><?php echo $row->titlu ?></a></h3>
                    <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                    <p class="article__text fs-text"> <?php echo $row->continut_articol ?>.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $user->get_autor($autorValue)?></em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php?id_articol=<?php echo $row->id_articol?>&data=<?php echo urlencode($receivedData); ?>" class="edit article_btn article_btn--light fs-text text-neutral100 bg-accent800 b-neutral100">Edit</a>
                            <a href="sterge_article.php?id_articol=<?php echo $row->id_articol?>&data=<?php echo urlencode($receivedData); ?>" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            </div>
            <?php
            }
            }
            } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
            {echo "Nu sunt inregistrari in tabela!";}

            } else  // eroare in caz de insucces in interogare
            { echo "Error: " . $mysqli->error(); }

            ?>
    </section>
 <?php  } ?>

    <!------------------------------------------- Articolele refuzate ----------------------------------------->
  <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Articole refuzate</h2>

        <?php

        if($user->get_Rol($uid)=='J01') {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.autor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">

                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ($row->status == "refuzat") { ?>
                            <h3 class="article__title fs-h3"><a href="#"
                                                                class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?>.</p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by ' . $user->get_autor($autorValue) ?></em></date>
                                </p>
                                <div class="btn-group">
                                    <a href="edit_article.php?id_articol=<?php echo $row->id_articol ?>&data=<?php echo urlencode($receivedData); ?>"
                                       class="edit article_btn article_btn--light fs-text text-neutral100 bg-accent800 b-neutral100">Edit</a>
                                    <a href="sterge_article.php?id_articol=<?php echo $row->id_articol ?>&data=<?php echo urlencode($receivedData); ?>"
                                       class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                                </div>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "Nu sunt inregistrari in tabela!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }

        if($user->get_Rol($uid)=='E01') {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE articol.editor=$uid ORDER BY data_creare")) { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="row">
                        <div class="col-row article-container">
                        <article class="article">

                        <?php
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ($row->status == "refuzat") { ?>
                            <h3 class="article__title fs-h3"><a href="#"
                                                                class="article-link text-accent300"><?php echo $row->titlu ?></a>
                            </h3>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="article__text fs-text"> <?php echo $row->continut_articol ?>.</p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:
                                    <date><em><?php echo $row->data_creare . ' by ' . $user->get_autor($autorValue) ?></em></date>
                                </p>
                                <div class="btn-group">

                                    <a href="sterge_article.php?id_articol=<?php echo $row->id_articol ?>&data=<?php echo urlencode($receivedData); ?>"
                                       class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                                </div>
                            </footer>
                            </article>
                            <hr/>
                            </div>
                            </div>
                            <?php
                        }
                    }
                } else // daca nu sunt inregistrari se afiseaza un rezultat de eroare
                {
                    echo "Nu sunt inregistrari in tabela!";
                }

            } else  // eroare in caz de insucces in interogare
            {
                echo "Error: " . $mysqli->error();
            }
        }
            ?>
  </section>
    <?php  // se inchide
    $mysqli->close();
    ?>
</div>
<?php
include 'templates/footer.php';
?>