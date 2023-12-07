<div class="main-content col-row form__container form__container--article text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Modifica articol</h1>
    <form class="form col-row" action="login.php" method="post">
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="titlu">Titlu</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="titlu" id="titlu" value= ""<?php ?> required/>
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <p class="form__label fs-text">Categorie</p>
                <div class="form__choices">
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="tech">Tech</label>
                        <input class="option" type="radio" id="tech" name="categorie" value="tech">
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="science">Science</label>
                        <input class="option" type="radio" id="science" name="categorie" value="science">
                    </div>

                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="moda">Moda</label>
                        <input class="option" type="radio" id="moda" name="categorie" value="moda">
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="artistic">Artistic</label>
                        <input class="option" type="radio" id="artistic" name="categorie" value="artistic">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form__field">
                <label class="form__label fs-text" for="content">Continut</label>
                <textarea class="form__data fs-text b-primary text-dark" cols="50" rows="15" name="content" id="content" value= ""<?php ?> required>
                </textarea>
            </div>
        </div>
        <div class="form__field btn-field">
            <div class="btn-group">
                <a href="home.php" class="form__btn add-btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="save" >Salveaza</a>
                <a href="home.php" class="form__btn add-btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="send">Trimite</a>
            </div>
        </div>
    </form>
</div>