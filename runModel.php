<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Input Custom Player</h3>
            <form action="runModel.php" method="POST">
                <label for="model_key">Position:</label>
                <select name="model_key" id="model_key" class="form-control">
                    <option value="pg">Point Guard</option>
                    <option value="c">Center</option>
                    <option value="sg">Shooting Guard</option>
                    <option value="sf">Small Forward</option>
                    <option value="pf">Power Forward</option>
                </select><br>
                <input type="number" step="any" value="<?php echo $_POST['age'];?>" name='age' class="form-control" placeholder="Player Age" ><br>
                <input type="number" step="any" value="<?php echo $_POST['bpm'];?>" name='bpm' class="form-control" placeholder="Box Plus-Minus (BPM)"><br>
                <input type="number" step="any" value="<?php echo $_POST['vorp'];?>" name='vorp' class="form-control" placeholder="Value Over Replacement Player (VORP)"><br>
                <input type="number" step="any" value="<?php echo $_POST['obpm'];?>" name='obpm' class="form-control" placeholder="Offensive Box Plus-Minus (OBPM)"><br>
                <input type="number" step="any" value="<?php echo $_POST['per'];?>" name='per' class="form-control" placeholder="Player Efficiency Rating (PER)"><br>
                <input type="number" step="any" value="<?php echo $_POST['orb_pct'];?>" name='orb_pct' class="form-control" placeholder="Offensive Rebound Percentage (ORB%)"><br>
                <input type="number" step="any" value="<?php echo $_POST['tov_pct'];?>" name='tov_pct' class="form-control" placeholder="Turnover Percentage (TOV%)"><br>
                <input type="number" step="any" value="<?php echo $_POST['ts_pct'];?>" name='ts_pct' class="form-control" placeholder="True Shooting Percentage (TS%)"><br>
                <input type="number" step="any" value="<?php echo $_POST['usage_pct'];?>" name='usage_pct' class="form-control" placeholder="Usage Percentage (USG%)"><br><br>
                <input type="submit" value="Calculate Salary" class="btn btn-success">
            </form>
        </div>
    </div>
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
