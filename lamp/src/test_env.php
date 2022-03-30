<?php

$envList = ['DEBUG', 'MYSQL_DATABASE'];

echo("<pre>");
var_dump($_ENV);
echo("</pre>");

foreach($envList as $env) {
    echo("<li>$env: {$_ENV[$env]}</li>");
}