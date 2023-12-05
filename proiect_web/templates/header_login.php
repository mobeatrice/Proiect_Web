<?php

include(dirname(__DIR__).'/assets/util.php');
if (isset($_GET['data'])) {
    $receivedData = urldecode($_GET['data']);

} else {
    echo "No data received.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World lately</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/nav.css">
    <link rel="stylesheet" href="assets/styles/forms.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f78ace1ca.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/main.js" defer></script> -->
</head>
<body>
<header class="text-neutral100 bg-primary">
    <nav class="menu">
        <button class="menu-toggler" aria-control="primary-navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger"></span>
        </button>
        <a class="menu__logo text-neutral100" id="logo" href="index.php"> InkTrail </a>
        <ul class="menu__list bg-primary" id="primary-navigation">
            <li class="menu__item">
                <a class="menu__link text-neutral100 fs-link shiny-item" href="home.php?data=<?php echo urlencode($receivedData); ?>"> Acasa </a>
            </li>

            <li class="menu__item">
                <a class="dropdown_btn cat_btn menu__link text-neutral100 fs-link shiny-item" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorii <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="dropdown_menu cat_menu" id="categories_dropdown">
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Artistic
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Tehnic
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Stiinta
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Moda
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <a class="dropdown_btn arhiva_btn menu__link text-neutral100 fs-link shiny-item" data-bs-toggle="dropdown" aria-expanded="false">
                    Articole <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="dropdown_menu arhiva_menu" id="categories_dropdown">
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Aprobate
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Refuzate
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            Draft
                        </a>
                    </li>

                </ul>
            </li>



            <li class="menu__item menu__item--pos sign-in">
                <a class="menu__link framed-item text-neutral100 fs-link b-neutral100 shiny-item" href="#"><i class="fa-solid fa-user"> </i> <?php echo  $receivedData  ?> </a>
            </li>
            <li class="menu__item register">
                <a class="menu__link framed-item text-neutral100 fs-link b-neutral100 shiny-item" href="home_2.php?q=logout"> Log Out </a>
            </li>

            <!--
            <li class="menu__item menu__item--pos user">
                <a class="dropdown_btn user_btn menu__link framed-item b-neutral100 text-neutral100 fs-link shiny-item" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"> </i> <?php echo  $receivedData  ?> <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="dropdown_menu user_menu" id="user_dropdown">
                    <li class="menu__item">


                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            <i class="fa-regular fa-newspaper"></i> Articole
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link text-neutral100 fs-link shiny-item" href="#">
                            <i class="fa-solid fa-arrow-right-from-bracket"> </i> Log Out
                        </a>
                    </li>
                </ul>
            </li> -->


        </ul>
    </nav>
</header>
<main class="my-row">
</body>
</html>
