<?php
require_once 'vendor/autoload.php';

// Faker Example 
$faker = Faker\Factory::create();

$fakeName = $faker->name();
$fakeEmail = $faker->email();
$fakeText = $faker->text();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Docker Php</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>PHP Site with Docker V2</h1>
        <hr>
        <h2>FakerPhp Examples</h2>
        <p><a href="https://fakerphp.github.io/">Visit Faker PHP</a></p>
        Fake Data:<br>
        <ul>
            <li>Fake Name: <?=$fakeName?></li>
            <li>Fake Email: <?=$fakeEmail?></li>
            <li>Fake Text:<br> <?=$fakeText?></li>
        </ul>
        
        <hr>
        <h2>Various PHP Resources</h2>
        <ul>

            <li><a href="info.php">My PHP Info</a></li>
            <li><a href="https://www.php.net/" target="_blank">PHP.net</a></li>
            <li><a href="https://www.docker.com/" target="_blank">Docker</a></li>
            <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
        </ui>
    </div>
</body>

</html>