<?php

if (isset($_GET['data'])) {
    $receivedData = urldecode($_GET['data']);

} else {
    echo "No data received.";
}
?>

<div class="main-content col-row form__container form__container--article text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Articol nou</h1>
    <form class="form col-row" action="add_articol.php?data=<?php echo urlencode($receivedData); ?>" method="post">
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="titlu">Titlu</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="titlu" id="titlu"
                       value= ""<?php if(isset($_POST['titlu'])) { echo($_POST['titlu']);} ?> required/>
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <p class="form__label fs-text">Categorie</p>
                <div class="form__choices">
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="tech">Tech</label>
                        <input class="option" type="radio" id="tech" name="id_categorie"
                               value="102" <?php if(isset($_POST['id_categorie']) && $_POST['id_categorie'] === '102') { echo 'checked'; } ?> >
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="science">Science</label>
                        <input class="option" type="radio" id="science" name="id_categorie"
                               value="103" <?php if(isset($_POST['id_categorie']) && $_POST['id_categorie'] === '103') { echo 'checked'; } ?>>
                    </div>

                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="moda">Moda</label>
                        <input class="option" type="radio" id="moda" name="id_categorie"
                               value="104" <?php if(isset($_POST['id_categorie']) && $_POST['id_categorie'] === '104') { echo 'checked'; } ?>>
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="artistic">Artistic</label>
                        <input class="option" type="radio" id="artistic" name="id_categorie"
                               value="101" <?php if(isset($_POST['id_categorie']) && $_POST['id_categorie'] === '101') { echo 'checked'; } ?>>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form__field">
                <label class="form__label fs-text" for="content">Continut</label>
                <textarea class="form__data fs-text b-primary text-dark" cols="50" rows="15" name="continut_articol" id="content"
                          value= ""<?php if(isset($_POST['continut_articol'])) { echo($_POST['continut_articol']);} ?> required>
                </textarea>
            </div>
        </div>
        <div class="form__field btn-field">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="publish" value="Draft">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="publish" value="Publica">
        </div>
    </form>
</div>