<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
        <?php
            $id = $_POST['player_id'];
            $get_selected_player_query = "SELECT * FROM players WHERE id = '" . $id . "';";
            if ($players = mysqli_query($con, $get_selected_player_query)) {
                while ($row = mysqli_fetch_assoc($players)) {
                    echo "<h1>{$row['name']} - {$row['team']} - {$row['year_started']}</h1>";
                }
            }
        ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.13.0"> </script>
<script src="https://cdn.rawgit.com/BrainJS/brain.js/master/browser.js"> </script>
<script>
    var net = new brain.recurrent.LSTMTimeStep();
    let params_array = [];
    let salary_array = [];
    <?php
        $get_selected_player_query = "SELECT * FROM players WHERE id = '" . $id . "';";
        if ($players = mysqli_query($con, $get_selected_player_query)) {
            $player = mysqli_fetch_assoc($players);
            $position = $player['position'];
            $get_players_in_position_query = "SELECT * FROM players WHERE position = '" . $position . "';";
            if ($players_in_position = mysqli_query($con, $get_players_in_position_query)) {
                echo "net.train([";
                while ($row = mysqli_fetch_assoc($players_in_position)) {
                    echo "[
                            {$row['value_over_replacement_player']},
                            {$row['offensive_box_plus_minus']},
                            {$row['player_efficiency_rating']},
                            {$row['offensive_rebound_pct']},
                            {$row['box_plus_minus']},
                            {$row['age']},
                            {$row['turnover_pct']},
                            {$row['usage_pct']},
                            {$row['true_shooting_pct']},
                            {$row['salary']}
                        ],";
                }
                echo "]);";
            }
        }
    ?>
    var output = net.run([0.2, 0.2, 10.0, 5.0, -3.0, 25, 10.0, 20.0, 0.5]);
    console.log(output.toString());
    // const model = tf.model({inputs: params_array, outputs: salary_array});
    // model.fit(params_array, salary_array, {epochs: 10}).then(() => {
    //     model.predict(tf.tensor2d([5], [1, 1])).print();
    // });
        
</script>


<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
