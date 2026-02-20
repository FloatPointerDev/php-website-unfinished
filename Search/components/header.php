<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($pageTitle))
        echo $pageTitle; ?></title>

    <?php

    // If a stylesheet array is supplied, create a link for each item.
    if (!empty($stylesheets)) {
        foreach ($stylesheets as $sheet) {
            echo "<link rel=\"stylesheet\" href=\"css/$sheet.css\">";
        }
    }

    // If a scripts array is supplied, create a script link for each item.
    if (!empty($scripts)) {
        foreach ($scripts as $script) {
            echo "<script src=\"js/$script.js\" defer></script>";
        }
    }

    ?>
</head>

<body>
    <div class="page-wrapper">
        <header class="page-header">
            <h1 class="page-title"><a href="index.php">BOOKS</a></h1>
        </header>

        <main>