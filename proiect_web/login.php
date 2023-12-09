<?php
session_start();
include_once 'templates/User.php';
include 'templates/header.php';
$user = new User();  //in fisierul User.php mi-am declarat o clasa User si aici imi creezi un user de tipul User


if(logged_in()) {
    $uid = $_SESSION['id'];
}
if (isset($_GET['error'])) {
    echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
}

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($username, $parola); //verific daca e logged in
    if ($login) {
        // Inregistrare cu succes - ma duc la pagina de home cu username-ul lui
            //redirect("home.php?data=" . urlencode($username));

        $rol = $user->get_idRol($username);
        // redirect("home.php?data=" . $user->get_username($uid));
        if($rol != 'C01') {
            redirect("home.php?data=" . urlencode($username));
        }else
        {
            redirect("index_cititor.php?data=" . urlencode($username));
        }

        }
     else {
        // Inregistrare cu esec - s-a gresit user sau parola
        echo 'Username sau password gresit!';
    }
}
?>

<script type="text/javascript" language="javascript">
    function submitlogin() { //functia de login depe butonul delog in onclick="return(submitlogin());"
        var form = document.login;
        if(form.username.value == ""){ //in caz ca nu am introdus usernameul primes eroaree
            alert( "Introdu email sau username."
            );
            return false;
        }
        else if(form.parola.value == ""){ //in caz ca nu am introdus parola primes eroaree
            alert( "Introdu password." );
            return false;
        }
    }
</script>


<div class="main-content col-row form__container form__container--login text-dark b-primary bg-neutral100">
    <h1 class="form__title fs-h1">Sign In</h1>
    <form class="form col-row" action="" method="post">
        <div class="form__field">
            <label class="form__label fs-text" for="username">Username</label>
            <input class="form__data fs-text b-primary text-dark" type="text" name="username" id="username" required/>
        </div>
        <div class="form__field">
            <label class="form__label fs-text" for="parola">Parola</label>
            <input class="form__data fs-text b-primary text-dark" type="password" name="parola" id="parola" required/>
        </div>
        <div class="form__field btn-field">
            <input onclick="return(submitlogin());" class="form__btn text-dark fs-btn bg-neutral300 b-neutral800" type="submit" name="submit" value="Sign In">
        </div>
    </form>
</div>

<?php
include 'templates/footer.php';
?>

