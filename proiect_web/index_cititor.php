<?php
session_start();
include_once 'templates/User.php';
include("templates/header_cititor.php");
include("templates/conectare.php");
global $mysqli;
$user = new User();
$uid = $_SESSION['id'];

include_once(dirname(__FILE__) . '/assets/util.php');
if (isset($_GET['data'])) {
    $receivedData = urldecode($_GET['data']);

} else {echo "No data received.";}

$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

    <div class="container">
        <?php
        if ($selectedCategory  == 'all')
        {
            if ($result = $mysqli->query("SELECT * FROM articol WHERE status='aprobat' ORDER BY data_creare"))
            { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_object();
                    $autorValue = $row->autor;
                    $categorieValue = $row->id_categorie;
                    ?>
                    <section class="hero text-neutral100 bg-accent800">
                        <article class="hero__article">
                            <h1 class="hero__title fs-h1"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h1>
                            <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                            <p class="hero__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $user->get_autor($autorValue)?></em> </date> </p
                            </footer>
                        </article>
                    </section>
                    <?php
                    while ($row= $result->fetch_object())
                    {
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;
                        ?>

                        <section class="col-row main-articles">
                            <div class="row">
                                <div class="col-row article-container">
                                    <article class="article">
                                        <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                        <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                                        <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                        <footer class="article__footer">
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $user->get_autor($autorValue)?></em> </date> </p>

                                        </footer>
                                    </article>
                                    <hr/>
                                </div>
                                <?php
                                $row = $result->fetch_object();
                                if ($row){
                                $autorValue = $row->autor;
                                $categorieValue = $row->id_categorie;

                                ?>
                                <div class="col-row article-container">
                                    <article class="article">

                                        <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                        <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                                        <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                        <footer class="article__footer">
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $user->get_autor($autorValue)?></em>  </date> </p>


                                        </footer>
                                    </article>
                                    <hr/>
                                </div>
                            </div>
                            <?php
                            }?>

                        </section>

                        <?php
                    }
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
            if ($result = $mysqli->query("SELECT * FROM articol WHERE status='aprobat' ORDER BY data_creare"))
            { // Afisare inregistrari pe ecran
                if ($result->num_rows > 0)
                {
                    while ($row = $result->fetch_object())
                    {
                        $autorValue = $row->autor;
                        $categorieValue = $row->id_categorie;

                        if ( $user->get_categorie($categorieValue)==$selectedCategory)
                        {
                            ?>
                            <div class="col-row article-container">
                                <article class="article">

                                    <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                    <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                                    <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                    <footer class="article__footer">
                                        <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $user->get_autor($autorValue)?></em>  </date> </p>
                                    </footer>
                                </article>
                                <hr/>
                            </div>
                            <?php
                        }?>
                        </section>
                        <?php
                    }
                }// daca nu sunt inregistrari se afiseaza un rezultat de eroare
                else {echo "Nu sunt inregistrari in tabela!";}
            } // eroare in caz de insucces in interogare
            else {
                echo "Error: " . $mysqli->error();}
        }
        // se inchide
        $mysqli->close();
        ?>

    </div>

<?php
include 'templates/footer.php';
?>