<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
        $select_all_query = "SELECT * FROM player;";
        if ($players = mysqli_query($con, $select_all_query)) {
            while ($row = mysqli_fetch_assoc($players)) {
                echo $row['name'] . ' has id: ' . $row['id'];
            }
        }
    ?>
</body>
</html>