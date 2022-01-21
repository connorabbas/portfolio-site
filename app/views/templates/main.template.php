<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="resources/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="resources/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="resources/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="resources/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="resources/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="resources/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="resources/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="resources/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="resources/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="resources/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="resources/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="resources/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Resources -->
    <link href="<?=App::path('/resources/css/bootstrap/mdb.dark.min.css')?>" rel="stylesheet">
    <link href="<?=App::path('/resources/css/styles.css')?>" rel="stylesheet">
    <link href="<?=App::path('/resources/css/animate.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src='<?=App::path('/resources/js/jquery.min.js')?>' type='text/javascript'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Page Title -->
    <title>Connor Abbas - <?= $pageTitle ?></title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="resources/images/CONNOR-LOGO-header.png" alt="" width="30" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="<?=App::path('/')?>">Home</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="<?=App::path('/about')?>">About Me</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="<?=App::path('/experience')?>">Experience</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="<?=App::path('/projects')?>">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=App::path('/contact')?>">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a title="View My Github" id="git_icon" class="nav-link nav_icn" href="https://github.com/connorabbas" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a title="LinkedIn" id="linked_icon" class="nav-link nav_icn" href="https://www.linkedin.com/in/connorabbas/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div id="contentContainer" class="animate__animated animate__fadeIn">
        <?php
        // Content View
        App::view($view, $data, null);
        ?>
        <div class="area">
            <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>
    </div>


    <!-- Script Resources -->
    <script src="<?=App::path('/resources/js/bootstrap/bootstrap.bundle.min.js')?>"></script>

    </body><!-- CLose body from header.php -->

</html><!-- CLose html from header.php -->