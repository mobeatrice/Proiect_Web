<div class="main-content my-row form__container form__container--login text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Sign In</h1>
    <form class="form my-row" action="login.php" method="post">
        <div class="form__field">
            <label class="form__label fs-text" for="username">Username</label>
            <input class="form__data fs-text b-primary text-dark" type="text" name="username" id="username" required/>
            
        </div>
        <div class="form__field">
            <label class="form__label fs-text" for="parola">Parola</label>
            <input class="form__data fs-text b-primary text-dark" type="password" name="parola" id="parola"  required/>
        </div>
        <div class="form__field btn-field">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="login" value="Sign In">
        </div>
    </form>
</div>

