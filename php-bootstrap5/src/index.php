<?php

$themeColors = [
    "primary",
    "secondary",
    "success",
    "info",
    "warning",
    "danger",
    "light",
    "dark"
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/main.css">
</head>

<body>
    <div class="container">
        <h1>Boostrap powered site</h1>
        <hr>
        <h2 class='bg-dark text-light p-1'>Colors</h2>
        <div class='d-flex'>
            <?php foreach ($themeColors as $color) { ?>
                <div class='col-1 mx-2'>
                    <div class='w-100 bg-<?= $color ?>'>&nbsp;</div>
                    <div class='text-center'><?= $color ?></div>
                </div>
            <?php } ?>
        </div>
        <hr>

        <h2 class='bg-dark text-light p-1'>Headings & Displays</h2>
        <div class='d-flex'>
            <div class='col-6'>
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <h<?= $i ?>> Heading <?= $i ?></h<?= $i ?>>
                <?php } ?>
            </div>
            <div class='col-6'>
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <h<?= $i ?> class='display-<?= $i ?>'> Display <?= $i ?></h<?= $i ?>>
                <?php } ?>
            </div>
        </div>
        <hr>

        <h2 class='bg-dark text-light p-1'>Alerts</h2>
        <div class=''>
            <?php foreach ($themeColors as $color) { ?>
                <div class="alert alert-<?=$color?>" role="alert">
                    A simple <?=$color?> alert—check it out!
                </div>
            <?php } ?>
        </div>
        <hr>
    </div>

</body>

</html>