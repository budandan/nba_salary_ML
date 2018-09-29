<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");

        $name = $_GET['name'];
        $get_player_by_name_query = "SELECT * FROM players WHERE name LIKE '%{$name}%';";
        if ($players = mysqli_query($con, $get_player_by_name_query)) {
            while ($row = mysqli_fetch_assoc($players)) {
                echo '<p>' . $row['name'] . '</p>';
            }
        }
?>