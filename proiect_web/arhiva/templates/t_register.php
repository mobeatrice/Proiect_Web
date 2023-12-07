<div class="main-content my-row form__container form__container--register text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Register</h1>
    <form class="form my-row" action="register.php" method="post">
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="nume">Nume</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="nume" id="nume" value= ""<?php ?> required/>
            
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="prenume">Prenume</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="prenume" id="prenume" value= ""<?php ?> required/>
            
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="user">Username</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="user" id="user" value= ""<?php ?> required/>
            
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="email">Email</label>
                <input class="form__data fs-text b-primary text-dark" type="email" name="email" id="email" value= ""<?php ?> required/>
            
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <p class="form__label fs-text">Rol</p>
                <div class="form__choices">
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="cititor">Cititor</label>
                        <input class="option" type="radio" id="cititor" name="rol" value="cititor">
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="jurnalist">Jurnalist</label>
                        <input class="option" type="radio" id="jurnalist" name="rol" value="jurnalist">
                    </div>
                    
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="editor">Editor</label>
                        <input class="option" type="radio" id="editor" name="rol" value="editor">
                    </div>
                </div>
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="password">Password</label>
                <input class="form__data fs-text b-primary text-dark" type="password" name="password" id="password" value= ""<?php ?> required/>
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="password">Confirm password</label>
                <input class="form__data fs-text b-primary text-dark" type="password" name="password" id="password" value= ""<?php ?> required/>
            </div>
        </div>
        <div class="form__field btn-field">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="login" value="Register">
        </div>
    </form>
</div>

