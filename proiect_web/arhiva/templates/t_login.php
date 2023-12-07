<div class="main-content my-row form__container form__container--login text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Sign In</h1>
    <form class="form my-row" action="login.php" method="post">
        <div class="form__field">
            <label class="form__label fs-text" for="user">Username or email address</label>
            <input class="form__data fs-text b-primary text-dark" type="text" name="user" id="user" value= ""<?php ?> required/>
            
        </div>
        <div class="form__field">
            <label class="form__label fs-text" for="password">Password</label> 
            <input class="form__data fs-text b-primary text-dark" type="password" name="password" id="password" value= ""<?php ?> required/>
        </div>
        <div class="form__field btn-field">
            <input class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="login" value="Sign In">
        </div>
    </form>
</div>

