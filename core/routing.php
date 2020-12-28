<?php

$pages = 
[
    'homepage' => './views/homepage.phtml',
    'article' => './views/article.phtml',
    'connexion' => './views/connexion.phtml',
    'insription' => './views/insription.phtml',
];

$page = $pages['homepage'];

if (isset($_GET['page']) && in_array($_GET['page'], array_keys($pages))) {
    $page = $pages[$_GET['page']];
}
