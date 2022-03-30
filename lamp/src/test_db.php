
<?php

// not working: showing 'Connection failed: Connection refused'
// $servername = "host.docker.internal";
// $db = "test";
// $username = "test_user";
// $password = "Abcd1234";

$servername = "db"; // name of the service in docker-compose
// $db = "my_db";
// $username = "dbuser";
// $password = "dbpassword";
$db = $_ENV['MYSQL_DATABASE'];
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];


// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";

// 
$sql = "SELECT * FROM tbl_user";
$result = $mysqli->query($sql);

// if ($result) {
//     die("Fail to load the table" . $mysqli->connect_error);
// }

//var_dump($result);
// Dump all rows to and array
$resultTable = [];
while($row = $result->fetch_object()) {
    //var_dump($row);
    $resultTable[] = $row;
}

// var_dump($resultTable);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<div class="container">
<h2>Database Result</h2>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultTable as $user) { ?>
        <tr>
        <th scope="row"><?=$user->userID?></th>
        <td><?=$user->username?></td>
        <td><?=$user->email?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>
</div>

</body>
</html>