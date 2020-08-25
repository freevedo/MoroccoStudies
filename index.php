<?php
    require ('models/model.php');
    $contact = getContact();
    $article1 = getArticle1();
    $article2 = getArticle2();
    $article3 = getArticle3();
    $article4 = getArticle4();
    $article5 = getArticle5();
    $article6 = getArticle6();
    $image1   = getImage1();
    $image2   = getImage2();
    $image3   = getImage3();
    $image4   = getImage4();
    $aboutlists  = getAboutLists();
    $services  = getServices();
    $web      = getImageWeb();
    $app      = getImageApp();
    $card     = getImageCard();
    $team1    = getTeam1();
    $team     = getTeam();
    $faqs     = getFaq();
    require ('views/viewIndex.php');
?>


