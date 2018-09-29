<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    $get_selected_player_query = "SELECT * FROM players WHERE name = '" . $name . "';";
    if ($players = mysqli_query($con, $get_player_by_name_query)) {
        echo json_encode($players);
    }

?>