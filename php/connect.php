<?php
    $servername = "mysql-db";
    $database = "nba-salaries";
    $username = "root";
    $password = "my-secret-pw";
$con = mysqli_connect($servername, $username, $password);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
    mysqli_select_db($con, $database);
}

?>