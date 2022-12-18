<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();
session_start();
function setLang($which)
{
    if ($which) {
        $_SESSION["support"] = "Destek";
        $_SESSION["theme"] = "Tema";
        $_SESSION["saveBtn"] = "Kaydet";
        $_SESSION["previewBtn"] = "Önizleme";
        $_SESSION["editBtn"] = "Düzenle";
        $_SESSION["downloadBtn"] = "İndir";
        $_SESSION["currentLang"] = "TR";
        $_SESSION["lang"] = "EN";
    } else {
        $_SESSION["support"] = "Support";
        $_SESSION["theme"] = "Theme";
        $_SESSION["saveBtn"] = "Save";
        $_SESSION["previewBtn"] = "Preview";
        $_SESSION["editBtn"] = "Edit";
        $_SESSION["downloadBtn"] = "Download";
        $_SESSION["currentLang"] = "EN";
        $_SESSION["lang"] = "TR";
    }
}
$router->get('/', function () {
    setLang(true);
    require "CV.php";
});
$router->get('/en', function () {
    setLang(false);
    require "CV_en.php";
});
$router->get('/tr', function () {
    header("location: /CV/");
});
$router->get('/support', function () {
    require "support.php";
});

$router->run();
