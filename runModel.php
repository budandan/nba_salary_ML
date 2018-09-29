<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<div class="container">
    <div class="col-md-12 text-center">
    <?php
        $model_key = $_POST['model_key'];
        $get_model_query = "SELECT * FROM models WHERE string_key LIKE '%" . $model_key . "%';";
        if ($result = mysqli_query($con, $get_model_query)) {
            $model = mysqli_fetch_assoc($result);
        }
        $salary = $model['w_age'] * $_POST['age'] +
                    $model['w_bpm'] * $_POST['bpm'] + 
                    $model['w_vorp'] * $_POST['vorp'] +
                    $model['w_obpm'] * $_POST['obpm'] +
                    $model['w_per'] * $_POST['per'] +
                    $model['w_orb_pct'] * $_POST['orb_pct'] +
                    $model['w_tov_pct'] * $_POST['tov_pct'] +
                    $model['w_ts_pct'] * $_POST['ts_pct'] +
                    $model['w_usg_pct'] * $_POST['usage_pct'];
                    echo '<h2>$' . $salary . '</h2>';
        ?>
    </div>
</div>



<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
