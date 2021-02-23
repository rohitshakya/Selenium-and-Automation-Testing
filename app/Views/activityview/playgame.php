<?php
#$gatGameJson = file_get_contents('https://www.vivadigitalindia.net/lotus/VivaApp/trp/intrect/api/game.php?class=1&sub=3&series=23&category=18');
$questionsData = [];
$levelData = [];
if ($gameData['status'] == 0) {
    $questionsData = array_values($gameData['data']['questions']);
    $levelData = array_values($gameData['data']['leveldecoration']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="pragma" content="no-cache">
    <title>Play The Game</title>
    <?php
		echo link_tag('assets/publicassets/animate.css');
		echo link_tag('assets/publicassets/assets/css/font-awesome.min.css');
		echo link_tag('assets/publicassets/game/style.css'); 
	?>
    <script type="text/javascript" src="<?=base_url('assets/publicassets/assets/js/vendor/jquery-3.2.1.min.js')?>"></script>
    <script>
        var questions = <?=json_encode($questionsData)?>;
        var leveldecoration = <?=json_encode($levelData)?>;
        var game_url = '<?=base_url('assets/publicassets/game/')?>';
    </script>
</head>

<body>

    <div class="loader">
        <span class="playButton"> </span>
    </div>

    <div class="game_container" style="background-image: url(<?=base_url('assets/publicassets/game/')?>charectors/level_1.gif);">
        <a href="" class="restart"> <i class="fa fa-repeat"></i> Reset </a>
        <!-- TOP COUNTERS  -->
        <div class="scorecard" style="left:1%">
            <div class="life"><strong style="display: block; font-size: 24px;" class="life_count">0</strong>Life Line</div>
            <!--<div class="level"><strong style="display: block; font-size: 24px;" class="level_count">0</strong>Level</div>-->
            <div class="level"><a href="<?=base_url('topicscategory/'.$this->input->get('c'))?>" style="display: block; font-size: 24px; padding: 6px 0; text-decoration: none; color: #098777;">Back</a></div>
        </div>
        <div class="scorecard">
            <div class="score"><strong style="display: block; font-size: 24px;"><span id="viewscore">0</span> / <span id="totalscore">0</span></strong>Score</div>
            <div class="timer"> <strong style="display: block; font-size: 24px;"><span id="viewtimer">00:00</span></strong><i class="fa fa-clock-o" aria-hidden="true"></i> Timer</div>
        </div>
        <!-- END TOP COUNTERS  -->
        <div class="questionArea animated bounceInDown">
            <div class="questionBoard">
                <p id="questionTitle">Where is New Delhi ?</p>
            </div>

            <div class="questionOptionArea">
                <ul class="questionOptions"></ul>
            </div>
            <div class="currentResult">
                <img src="<?=base_url('assets/publicassets/game/')?>charectors/wrong.gif" class="ansImg">
                <p class="ansText">Hello World!</p>
                <span class="nextBtn"> Next </span>
            </div>
        </div>

        <div class="runtracker">
            <img src="<?=base_url('assets/publicassets/game/')?>charectors/front.gif" id="charectorholder" draggable="false">
        </div>
    </div>
</body>
<!-- <script src="assets/mycontrollers.js"></script> -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/game/mycontrollers.js')?>"></script>
</html>