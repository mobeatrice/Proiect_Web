<?php

global $mysqli;
if (isset($_GET['id_articol']) && isset($_GET['data'])) {
    $receivedId = urldecode($_GET['id_articol']);
    $receivedData = urldecode($_GET['data']);

} else {echo "No data received.";}
?>

<div class="main-content col-row form__container form__container--article text-dark b-primary bg-neutral100">

    <form class="form col-row" action="edit_article.php?id_articol=<?php echo urlencode($receivedId); ?>&data=<?php echo urlencode($receivedData); ?>" method="post">
        <?php
        if ($result = $mysqli->query("SELECT * FROM articol where id_articol='" . $_GET['id_articol'] . "'"))
        {
            if ($result->num_rows > 0)
            {
                $row = $result->fetch_object(); ?>


                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label fs-text" for="titlu">Doreesti sa stergi articolul?</label>
                     </div>
                </div>


                <div class="form__field btn-field">
                    <div class="form__field btn-field">
                        <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="submit" value="da">
                        <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="submit" value="Public">
                    </div>
                </div>

            <?php }} ?>
    </form>
</div>