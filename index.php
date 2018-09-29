<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<!-- CODE HERE -->

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            SUUUUU DUDE
        </div>
    </div>
</div>

<?php // CODE HERE
    $select_all_query = "SELECT * FROM player;";
    if ($players = mysqli_query($con, $select_all_query)) {
        while ($row = mysqli_fetch_assoc($players)) {
            echo $row['name'] . ' has id: ' . $row['id'];
        }
    }
?>

<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
