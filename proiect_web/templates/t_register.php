<div class="main-content my-row form__container form__container--register text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Register</h1>
    <form class="form my-row" action="register.php" method="post">
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="nume">Nume</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="nume" id="nume"
                       value= "<?php if(isset($_POST['nume'])) { echo($_POST['nume']);}?>" />
            
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="prenume">Prenume</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="prenume" id="prenume"
                       value= "<?php if(isset($_POST['prenume'])) { echo($_POST['prenume']);}?>"/>
            
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="user">Username</label>
                <input class="form__data fs-text b-primary text-dark" type="text" name="username" id="username"
                       value= "<?php if(isset($_POST['username'])) { echo($_POST['username']);}?>"/>
            
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="email">Email</label>
                <input class="form__data fs-text b-primary text-dark" type="email" name="email" id="email"
                       value= "<?php if(isset($_POST['email'])) { echo($_POST['email']);}?>"/>
            
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <p class="form__label fs-text">Rol</p>
                <div class="form__choices">
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="cititor">Cititor</label>
                        <input class="option" type="radio" id="cititor" name="id_rol"
                               value="C01" <?php if(isset($_POST['id_rol']) && $_POST['id_rol'] === 'C01') { echo 'checked'; } ?> >
                    </div>
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="jurnalist">Jurnalist</label>
                        <input class="option" type="radio" id="jurnalist" name="id_rol"
                               value= "J01" <?php if(isset($_POST['id_rol']) && $_POST['id_rol'] === 'J01') { echo 'checked'; } ?> >
                    </div>
                    
                    <div class="form__option">
                        <label class=" form-label form__label--radio fs-text" for="editor">Editor</label>
                        <input class="option" type="radio" id="editor" name="id_rol"
                               value= "E01" <?php if(isset($_POST['id_rol']) && $_POST['id_rol'] === 'E01') { echo 'checked'; } ?> >
                    </div>
                </div>
            </div>
        </div>
        <div class="form__row">
            <div class="form__field">
                <label class="form__label fs-text" for="parola">Password</label>
                <input class="form__data fs-text b-primary text-dark" type="password" name="parola" id="parola"
                       value= "<?php if(isset($_POST['parola'])) { echo($_POST['parola']);}?>"/>
            </div>
            <div class="form__field">
                <label class="form__label fs-text" for="parola_confirm">Confirm password</label>
                <input class="form__data fs-text b-primary text-dark" type="password" name="parola_confirm" id="parola_confirm"
                       value= "<?php if(isset($_POST['parola_confirm'])) { echo($_POST['parola_confirm']);}?>"/>
            </div>
        </div>
        <div class="form__field btn-field">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="login" value="Register">
        </div>
    </form>
</div>

