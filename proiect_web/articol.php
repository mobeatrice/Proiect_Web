<?php
session_start();
include_once 'templates/User.php';
include("templates/header_cititor.php");
include("templates/conectare.php");
global $mysqli;
$user = new User();

include_once(dirname(__FILE__).'/assets/util.php');

if (isset($_GET['id_articol'])) {
    $receivedData = urldecode($_GET['id_articol']); //luam din link id_articol

} else {
    echo "No data received.";
}

if (isset($_SESSION['id']) && logged_in()) { //daca estee logat verificam daca e editor sau jurnalist
    $uid = $_SESSION['id'];
    $rol = $user->get_Rol($uid);
    if($rol == 'E01' || $rol =='J01') {
        //fiindca este editor sau jurnalist vom redirectiona spree login cu mesajul de eroare
        redirect("login.php?error=Ai nevoie de un cont de cititor pentru a vizualiza articolul.");
    }
}
else {
    //am intrat pe ramura else pentru ca nu este logat deci trebuie sa se logheze
    redirect("login.php?error=Ai nevoie de un cont de cititor pentru a vizualiza articolul.");
}

?>

<div class="read-article container row">
    <section class="article-content col">

        <?php
//$receivedData este id-ul articolului pe care l-am luat din link
        if ($result = $mysqli->query("SELECT * FROM articol WHERE id_articol=$receivedData"))
        {
            //luam articolul caree are id-ul din link si il afisam
            $row = $result->fetch_object();
            $autorValue = $row->autor;
            $categorieValue = $row->id_categorie;
            if ($result->num_rows > 0)
            { ?>
            <h1 class="fs-h1 text-accent300 title"><?php echo $row->titlu ?></h1>
                <!-- functiile get_categorie si get_autor sunt in User.php -->
                <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                <p class="article-author fs-date text-dark"><?php echo $user->get_autor($autorValue)?></p>
                <div class="article-text">
                    <p class="fs-text text-dark"><?php echo $row->continut_articol ?></p>
                </div>
                <p class="fs-date article__date date-bottom"><date> <em><?php echo  'Data: '. $row->data_creare ?></em> </date> </p>
        <?php

            }
        }
        ?>

    </section>


    <!--------------------------------->
    <aside class="latest-articles col">
        <h2 class="fs-h2 title aside-title">Ultimele articole</h2>

        <?php
        //aici afisam articoleele aprobate in partea dreapta
        if ($result = $mysqli->query("SELECT * FROM articol WHERE status='aprobat' ORDER BY data_creare"))
        {
        $row = $result->fetch_object();
        while ($row= $result->fetch_object()) {
            $autorValue = $row->autor;
            $categorieValue = $row->id_categorie;
            ?>


            <article class="col aside-article">
                <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300"><?php echo $row->titlu ?></a></h3>
                <p class="category fs-category"><?php echo $user->get_categorie($categorieValue) ?></p>
                <p class="article__text fs-text"><?php echo $row->continut_articol ?></p>
                <footer class="aside-footer col">
                    <p class="fs-date article__date"><date> <em><?php echo $row->data_creare .' de '. $user->get_autor($autorValue)?></em> </date> </p>

                </footer>
            </article>
            <hr/>

    <?php
        }}
        ?>
    </aside>
</div>



<?php
include 'templates/footer.php';

?>
