<?php

session_start();

require "classes/utils.php";

if (!isset($_GET["id"]) or !is_numeric($_GET["id"])) {
    header("Location: " . Utils::$projectFilePath . "/feed.php");
    exit;
}

require "classes/components.php";

Components::pageHeader("Books", ["main"], []);

require "classes/books.php";

$book = Books::getSingleBook($_GET["id"]);
Components::displaySingleBook($book);
Components::pageFooter();