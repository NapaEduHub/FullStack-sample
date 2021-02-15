<?php

// mysqli

$hostname = 'localhost';
$password = 'napa';
$username = 'napa';
$database = 'napa';

//error_reporting(0);

$connection = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    exit("Database bilan bog'lanib bo'lmadi");
}

sleep(20);

$id = intval($_GET['id']);
if ($id > 0) {
    $sql = "
DELETE FROM users 
WHERE id=$id
";

    echo $sql;
    $user = mysqli_query($connection, $sql);
    if (mysqli_error($connection)) {
        echo "uzr";
    } else {
        echo mysqli_affected_rows($connection);
    }
}


mysqli_close($connection);

