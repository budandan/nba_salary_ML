<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/connect.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/open_body.php");
    require($_SERVER["DOCUMENT_ROOT"]."/php/navbar.php");
?>

<!-- CODE HERE -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
    /* input[type=text] {
        width: 350px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: ;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.2s ease-in-out;
        transition: width 0.2s ease-in-out;
    }
    input[type=text]:focus {
        width: 40%;
    } */



#searched_player{
    display:none;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#custom_player{
    display:none;
    margin-right: 10px;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#custom_player1{
    display:none;
    margin-right: 10px;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#custom_player2{
    display:none;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#custom_player3{
    display:none;
    margin-right: 10px;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#custom_player4{
    display:none;
    margin-right: 10px;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#custom_player5{
    display:none;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#custom_player6{
    display:none;
    width: 350px;
    margin-right: 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#custom_player7{
    display:none;
    width: 350px;
    margin-right: 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#custom_player8{
    display:none;
    width: 350px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: ;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

#graph_box{
    display:none;
}


</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script>
function current_player(){
    $("#searched_player").show()
}

function hide_current_player(){
    $("#searched_player").hide()
}

function custom_player(){
    $("#custom_player").show()
    $("#custom_player1").show()
    $("#custom_player2").show()
    $("#custom_player3").show()
    $("#custom_player4").show()
    $("#custom_player5").show()
    $("#custom_player6").show()
    $("#custom_player7").show()
    $("#custom_player8").show()
}

function hide_custom_player(){
    $("#custom_player").hide()
    $("#custom_player1").hide()
    $("#custom_player2").hide()
    $("#custom_player3").hide()
    $("#custom_player4").hide()
    $("#custom_player5").hide()
    $("#custom_player6").hide()
    $("#custom_player7").hide()
    $("#custom_player8").hide()

}


</script>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" style="margin-top: 50px;">
            <button id="player" class="btn btn-default" onclick="current_player() & hide_custom_player()" type="submit">Current Player</button>
            <button class="btn btn-default" onclick="custom_player() & hide_current_player()"type="submit">Custom Player</button>

        </div>

        <div class="col-md-12 text-center" style="margin-top: 20px;">
            <input id="searched_player" type="text" placeholder="Search For Your Player">
        </div>

        <div class="col-md-12 text-center" style="">
            <input id="custom_player" type="text"  placeholder="Enter Player's Position">
            <input id="custom_player1" type="text" placeholder="Enter Player's Minutes Per Game">
            <input id="custom_player2" type="text" placeholder="Enter Player's Points Per 48 Minutes">
        </div>
        <div class="col-md-12 text-center" style="margin-top: 20px;">
            <input id="custom_player3" type="text" placeholder="Enter Player's Age">
            <input id="custom_player4" type="text" placeholder="Enter Player's Plus/Minus">
            <input id="custom_player5" type="text" placeholder="Enter Player's Something ">
        </div>
        <div class="col-md-12 text-center" style="margin-top: 20px;">
            <input id="custom_player6" type="text" placeholder="Enter Player's Jaja">
            <input id="custom_player7" type="text" placeholder="Enter Player's Jaja1">
            <input id="custom_player8" type="text" placeholder="Enter Player's Jaja2">
        </div>

        <div class="col-md-12 text-center" style="margin-top: 20px;">
            <button id="get_data" class="btn btn-default" onclick="" type="submit">Get Salary</button>
        </div>
        <div id="graph_box" class="col-md-12 text-center" style="width: 100%; height: 750px; margin-top: 20px; border:solid;">
            <div class="col-md-12 text-center">

            </div>
        </div>

    </div>
</div>

<!-- <?php // CODE HERE
    $select_all_query = "SELECT * FROM player;";
    if ($players = mysqli_query($con, $select_all_query)) {
        while ($row = mysqli_fetch_assoc($players)) {
            echo $row['name'] . ' has id: ' . $row['id'];
        }
    }
?> -->

<?php
    require($_SERVER["DOCUMENT_ROOT"]."/php/close_body.php");
?>
