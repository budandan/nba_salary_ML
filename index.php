<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<!-- MATT CODE HERE -->

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
        </div>
    </div>
</div>

<!-- END CODE HERE -->

<?php
    $select_all_query = "SELECT * FROM players;";
    if ($players = mysqli_query($con, $select_all_query)) {
        while ($row = mysqli_fetch_assoc($players)) {
            echo $row['name'] . ' has id: ' . $row['id'];
        }
    }
?>

<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
