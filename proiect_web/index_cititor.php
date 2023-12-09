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
                    ?>
                    <section class="hero text-neutral100 bg-accent800">
                        <article class="hero__article">
                            <h1 class="hero__title fs-h1"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h1>
                            <p class="category fs-category"><?php echo $categorieName ?></p>
                            <p class="hero__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                            <footer class="article__footer">
                                <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p
                                    <!-- if journalist -->
                                <div class="btn-group">
                                    <!-- <a href="edit_article.php" class="edit article_btn article_btn--light fs-text text-neutral100 bg-accent800 b-neutral100">Edit</a> -->
                                    <!--<a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a> -->
                                </div>
                            </footer>
                        </article>
                    </section>
                    <?php
                    while ($row= $result->fetch_object())
                    {
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
                        ?>

                        <section class="col-row main-articles">
                            <div class="row">
                                <div class="col-row article-container">
                                    <article class="article">
                                        <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                        <p class="category fs-category"><?php echo $categorieName ?></p>
                                        <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                        <footer class="article__footer">
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em> </date> </p>
                                            <!-- if editor -->

                                        </footer>
                                    </article>
                                    <hr/>
                                </div>
                                <?php
                                $row = $result->fetch_object();
                                if ($row){
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
                                ?>
                                <div class="col-row article-container">
                                    <article class="article">

                                        <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                        <p class="category fs-category"><?php echo $categorieName ?></p>
                                        <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                        <footer class="article__footer">
                                            <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em>  </date> </p>
                                            <!-- if editor -->

                                        </footer>
                                    </article>
                                    <hr/>
                                </div>
                            </div>
                            <?php
                            }?>

                        </section>

                        <?php
                        $stmt->close();

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
                        if ( $categorieName==$selectedCategory)
                        {
                            ?>
                            <div class="col-row article-container">
                                <article class="article">

                                    <h2 class="article__title fs-h2"><a href="articol.php?data=<?php echo $user->get_username($uid) ?>&id_articol=<?php echo $row->id_articol?>"  target=”_blank” class="article-link text-accent300"><?php echo $row->titlu ?></a></h2>
                                    <p class="category fs-category"><?php echo $categorieName ?></p>
                                    <p class="article__text fs-text-lg"><?php echo substr($row->continut_articol,0,250) ?></p>
                                    <footer class="article__footer">
                                        <p class="fs-date article__date">Last modified:<date> <em><?php echo $row->data_creare  . ' by ' . $fullName?></em>  </date> </p>
                                    </footer>
                                </article>
                                <hr/>
                            </div>
                            <?php
                        }?>
                        </section>
                        <?php
                        $stmt->close();
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