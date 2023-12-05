<?php
session_start();
include_once 'templates/User.php';
include 'templates/header.php';
$user = new User();
if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($username, $parola);
    if ($login) {
        // Inregistrare cu succes
        redirect("home.php?data=" . urlencode($username));
    } else {
        // Inregistrare cu esec
        echo 'username sau password gresit!';
    }
}
?>


<script type="text/javascript" language="javascript">
    function submitlogin() {
        var form = document.login;
        if(form.username.value == ""){
            alert( "Introdu email sau username."
            );
            return false;
        }
        else if(form.parola.value == ""){
            alert( "Introdu password." );
            return false;
        }
    }
</script>

<div class="main-content my-row form__container form__container--login text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Sign In</h1>
    <form class="form my-row" action="" method="post" name="login">
        <div class="form__field">
            <label class="form__label fs-text" for="username">Username</label>
            <input class="form__data fs-text b-primary text-dark" type="text" name="username" id="username" required/>

        </div>
        <div class="form__field">
            <label class="form__label fs-text" for="parola">Parola</label>
            <input class="form__data fs-text b-primary text-dark" type="password" name="parola" id="parola"  required/>
        </div>
        <div class="form__field btn-field">
            <input onclick="return(submitlogin());" class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="submit" value="Sign In">
        </div>
    </form>
</div>



<?php
include 'templates/footer.php';
?>

