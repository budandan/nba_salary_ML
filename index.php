<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<!-- CODE HERE -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
                <input type="number" step="any" name='age' class="form-control" placeholder="Player Age"><br>
                <input type="number" step="any" name='bpm' class="form-control" placeholder="Box Plus-Minus (BPM)"><br>
                <input type="number" step="any" name='vorp' class="form-control" placeholder="Value Over Replacement Player (VORP)"><br>
                <input type="number" step="any" name='obpm' class="form-control" placeholder="Offensive Box Plus-Minus (OBPM)"><br>
                <input type="number" step="any" name='per' class="form-control" placeholder="Player Efficiency Rating (PER)"><br>
                <input type="number" step="any" name='orb_pct' class="form-control" placeholder="Offensive Rebound Percentage (ORB%)"><br>
                <input type="number" step="any" name='tov_pct' class="form-control" placeholder="Turnover Percentage (TOV%)"><br>
                <input type="number" step="any" name='ts_pct' class="form-control" placeholder="True Shooting Percentage (TS%)"><br>
                <input type="number" step="any" name='usage_pct' class="form-control" placeholder="Usage Percentage (USG%)"><br><br>
                <input type="submit" value="Calculate Salary" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
<!-- END CODE HERE -->

<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
