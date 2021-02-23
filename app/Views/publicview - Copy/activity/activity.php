<?php
$supported_image = array('gif', 'jpg', 'jpeg', 'png');
$base_url = 'http://vivavolt.vivadigitalindia.net';
$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$media_url = $http . "://vivavolt.vivadigitalindia.net/";

if (!empty($qns_data_mch)) {
    $Cnt_Mch = count($qns_data_mch[0]['left_col']);
} else {
    $Cnt_Mch = 0;
}
?>
<script>
    var base_url = '<?= base_url(); ?>';
    var setId = '<?= $set_Ids; ?>';
    var starttime = '<?= date('Y-m-d H:i:s'); ?>';
    var cnt_tnf = <?php echo (count($qns_data_tnf)); ?>;
    var cnt_mcq = <?php echo (count($qns_data_mcq)); ?>;
    var cnt_mch = <?php echo ($Cnt_Mch); ?>;
    var cnt_fib = <?php echo (count($qns_data_fib)); ?>;
</script>
<!--==========================
    Main Section
  ============================-->

<div id="loader">
    <em class="fa fa-spinner fa-pulse fa-3x fa-fw"></em>
</div>

<section id="hero" class="dot-grid">
    <div class="hero-container container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9 float_left">
                    <h4 class="box-title"><?php echo $topic_name; ?></h4>
                </div>
                <div class="col-md-3 float_left">
                    <?php 
/*$pageurl = $this->input->get('c') . '/' . $this->input->get('subid') . '/' . $this->input->get('catid') . '/' . $this->input->get('sub') . '/' . $this->input->get('cat');*/
$pageurl = $this->input->get('c');
                     ?>
                    <a href="<?= base_url('seriestopics/' . $pageurl) ?>" class="go-back"><em class="fa fa-backward"></em> BACK</a>
                </div>
            </div>


            <div class="col-md-12">
                <!--<h4 class="box-title"><?php echo $topic_name; ?></h4> -->




                <?php if (count($qns_data_tnf) > 0) { ?>
                    <!-- ----------------------True and false--------------------- -->
                    <div class="act-box act-box-2" id="tnf">
                        <div class="varticle_set">
                            <div class="section-heading">Click the correct answer (True or False).</div>
                            <?php
                            $qns_tf_data = '';
                            $ans = '';
                            $sh = 1;
                            foreach ($qns_data_tnf as $qtfdata) {
                                if (array_key_exists('t', json_decode($qtfdata['myans'])) && trim(json_decode($qtfdata['myans'])->t) != '' && trim(json_decode($qtfdata['myans'])->f) != '') {
                                    if ($qtfdata['answer'] == 't') {
                                        $ans = trim(json_decode($qtfdata['myans'])->t);
                                    } elseif ($qtfdata['answer'] == 'f') {
                                        $ans = trim(json_decode($qtfdata['myans'])->f);
                                    }
                                    $qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<strong><em><br><i><b><u>');
                                    $qns_tf_list = array(trim(json_decode($qtfdata['myans'])->t), trim(json_decode($qtfdata['myans'])->f));
                                    $qns_tf_answer = $ans;
                                } else {
                                    if ($qtfdata['answer'] == 't') {
                                        $ans = "True";
                                    } elseif ($qtfdata['answer'] == 'f') {
                                        $ans = "False";
                                    }
                                    $qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<strong><em><br><i><b><u>');
                                    $qns_tf_list = array("True", "False");
                                    $qns_tf_answer = $ans;
                                }
                            ?>
                                <div class="activity-section <?php if ($sh == '1') {
                                                                    echo 'first-div';
                                                                } else {
                                                                    echo 'next-div" style="display:none;';
                                                                } ?>">
                                    <p class="questionTitle"><?php echo $qns_tf_title; ?></p>
                                    <div class="questionOptions">
                                        <?php

                                        foreach ($qns_tf_list as $tf_key => $opt) {
                                            $tfansId = 'tnf-' . $qtfdata['id'] . '-' . $tf_key;
                                            $ans = 'data-answer="' . $qns_tf_answer . '"';
                                            echo '<p class="quesItem qtfClick" ' . $ans . ' id="' . $tfansId . '">' . $opt . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <input type="submit" class="customeNextGame next" value="Next" />
                                </div>
                            <?php $sh++;
                            } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if (count($qns_data_mcq) > 0) { ?>
                    <!-- ----------------------MCQ-------------------------------- -->
                    <div class="act-box act-box-2" id="mcq">
                        <div class="varticle_set">
                            <div class="section-heading">Click the correct answer.</div>
                            <?php
                            $qns_mcq_data = '';
                            $mcq_ans = '';
                            $mcq_sh = 1;

                            foreach ($qns_data_mcq as $qmcqdata) {

                                $qns_mcq_title = strip_tags(removeSpace(trim($qmcqdata['question'])), '<strong><em><br><i><b><u>');
                                $qns_mcq_list = array_filter(json_decode($qmcqdata['mcq']));
                            ?>
                                <div class="activity-section <?php if ($mcq_sh == '1') {
                                                                    echo 'first-div';
                                                                } else {
                                                                    echo 'next-div" style="display:none;';
                                                                } ?>">
                                    <p class="questionTitle"><?php echo $qns_mcq_title; ?></p>
                                    <?php if ($qmcqdata['urlImage']) {
                                        echo $qmcqdata['urlImage'];
                                    } ?>
                                    <div class="questionOptions shuffle-list-items">
                                        <?php
                                        foreach ($qns_mcq_list as $key => $opt) {
                                            $mcqqnsId = 'mcq-' . $qmcqdata['id'] . '-' . $key;
                                            $ans = 'data-answer="' . $qns_mcq_list[$qmcqdata['answer']] . '"';
                                            echo '<p class="quesItem qClick" ' . $ans . ' id="' . $mcqqnsId . '">' . $opt . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!--input type="submit" class="btn next" value="Next"/--->
                                    <input type="submit" class="customeNextGame next" value="Next" />
                                </div>
                                <!-- <p><?= $qmcqdata['solutions']; ?></p> -->
                            <?php $mcq_sh++;
                            } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if (count($qns_data_mch) > 0) { ?>
                    <!-- ----------------------Drag and drop (Matching)---------------------- -->
                    <div class="act-box act-box-2" id="mch">
                            <div class="varticle_set">
                        <div class="section-heading">Click each box on the left and also click on the matching box of the right.
                        </div>
                        <div class="activity-section MchBox">
                            <p class="questionTitle"><?php echo $qns_data_mch[0]['question']; ?></p>
                            <div id="cardPile">
                                <div class="questionOptionsMch shuffle-list-items">
                                    <?php
                                    $Lcnt = 1;
                                    foreach ($qns_data_mch[0]['left_col'] as $leftKey => $left_val) {
                                        $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
                                    ?>
                                        <p class="draggable quesItemMch" id="drag<?= $Lcnt; ?>" data-id='<?= $leftKey; ?>'>
                                            <?php if (in_array($l_ext, $supported_image)) {
                                                echo "<img src='" . $base_url . $left_val . "' />";
                                            } else {
                                                echo $left_val;
                                            } ?>
                                        </p>
                                    <?php $Lcnt++;
                                    } ?>
                                </div>
                                <div class="questionOptionsMch shuffle-list-items">
                                    <?php
                                    $Rcnt = 1;
                                    foreach ($qns_data_mch[0]['right_col'] as $rightKey => $right_val) {
                                        $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));

                                    ?>
                                        <p class="droppable quesItemMch mchClr" id="drop<?= $Rcnt; ?>" data-aid='<?= $rightKey; ?>'>
                                            <?php if (in_array($ext, $supported_image)) {
                                                echo "<img src='" . $base_url . $right_val . "' />";
                                            } else {
                                                echo $right_val;
                                            } ?>
                                        </p>
                                    <?php $Rcnt++;
                                    } ?>
                                </div>
                            </div>
                        </div>
                </div>
                    </div>
                <?php } ?>

                <?php if (count($qns_data_fib) > 0) { ?>
                    <!-- -------------- Fill IN THE BLANKS ---------------- -->
                    <div class="act-box act-box-2" id="fib">
                          <div class="varticle_set">
                        <div class="section-heading">Click the correct option.</div>
                        <?php
                        $qns_fib_data = '';
                        $fib_ans = '';
                        $fib_sh = 1;
                        foreach ($qns_data_fib as $fib_data) {
                            $fib_left_title = strip_tags(removeSpace(trim($fib_data['fib_qns'][0])), '<strong><em><br><i><b><u>');
                            $fib_right_title = strip_tags(removeSpace(trim($fib_data['fib_qns'][1])), '<strong><em><br><i><b><u>');
                            $fib_ans_list = array_filter(json_decode($fib_data['mcq']));
                            //print_r($fib_ans_list);
                        ?>
                            <div class="activity-section  <?php if ($fib_sh == '1') {
                                                                echo 'first-div';
                                                            } else {
                                                                echo 'next-div" style="display:none;';
                                                            } ?>">
                                <p class="questionTitle"> <?php echo $fib_left_title; ?> <span class="fillblank" id="div<?php echo $fib_data['id']; ?>" ondrop="drop(event)" ondragover="allowDrop(event)"></span><?php echo $fib_right_title; ?></p>
                                <input type="hidden" id="ans<?php echo $fib_data['id']; ?>" value="<?php echo removeSpace(trim($fib_ans_list[$fib_data['answer']])); ?>">
                                <div class="questionOptionsFib shuffle-list-items">
                                    <?php $i = 1;
                                    foreach ($fib_ans_list as $key => $fib_value) {
                                        $fibqnsId = 'fib-' . $fib_data['id'] . '-' . $key;
                                    ?>
                                        <?php if (removeSpace(trim($fib_ans_list[$fib_data['answer']])) == removeSpace(trim($fib_value))) { ?>
                                            <p class="quesItemFib fibClick" data-id="<?php echo $fib_data['id']; ?>" data-answer="<?= removeSpace(trim($fib_value)); ?>" id="<?php echo $fibqnsId; ?>"><?= removeSpace(trim($fib_value)); ?></p>
                                        <?php } else { ?>
                                            <p class="quesItemFib fibClick" data-id="<?php echo $fib_data['id']; ?>" data-text="<?= removeSpace(trim($fib_value)); ?>" id="<?php echo $fibqnsId; ?>"><?= removeSpace(trim($fib_value)); ?></p>
                                    <?php }
                                        $i++;
                                    } ?>
                                </div>
                                <!--input type="submit" class="btn next" value="Next"/--->
                                <input type="submit" class="customeNextGame next" value="Next" />
                            </div>
                        <?php $fib_sh++;
                        } ?>
                </div>
                    </div>
                <?php } ?>
                <?php $pageurl = $this->input->get('c') . '/' . $this->input->get('subid') . '/' . $this->input->get('catid') . '/' . $this->input->get('sub') . '/' . $this->input->get('cat'); ?>
                <!-- <a href="<?= base_url('seriestopics/' . $pageurl) ?>" class="go-back"><em class="fa fa-backward"></em> BACK</a> -->
            </div>
        </div>
    </div>




    </div>
</section><!-- #End -->

<div class="result" style="display:none;">
    <!-- <div class="result"> -->
    <?php if ($uri->getSegment(1) == 'practice') { ?>
        <div class="container">
            <div class="card">
                <div class="container">
                    <h2 style="padding:10px;text-transform: uppercase;">Score Board</h2>
                    <ul class="responsive-table">
                        <li class="table-header">
                            <div class="col col-8"> Solutions</div>
                            <div class="col col-4"> Score</div>
                        </li>
                    </ul>

                    <ul class="responsive-table">
                        <div class="row">
                            <div class="col col-8 attemptQlist">
                                <?php if (count($qns_data_mcq) > 0) {
                                    foreach ($qns_data_mcq as $qmcqresult) {
                                        //<strong><em><br><i><b><u>
                                        $qns_mcq_result_title = strip_tags(removeSpace(trim($qmcqresult['question'])), '<strong><em><br><i><b><u>');
                                        $qns_mcq_result_title = preg_replace('#(<br */?>\s*)+#i', '<br>', $qns_mcq_result_title);
                                        $qns_mcq_result_list = array_filter(json_decode($qmcqresult['mcq']));
                                        $mcq_ans = $qns_mcq_result_list[$qmcqresult['answer']];
                                        echo '<li class="table-row">
                                             <p>' . $qns_mcq_result_title . '</p>';
                                       if ($qmcqresult['urlImage']) {   echo $qmcqresult['urlImage'];}
                                        echo '<ul class="attempQalist">';
                                        foreach ($qns_mcq_result_list as $mcqkey => $opt) {
                                            $mcqansId = 'ansmcq-' . $qmcqresult['id'] . '-' . $mcqkey;
                                            if ($mcq_ans == $opt) {
                                                echo ' <li class="optmcq-crct"> Correct : <strong style="color: #28a745;">' . $opt . '</strong></li> ';
                                            } else {
                                                echo ' <li class="optqns" id="' . $mcqansId . '"> Your Answer : <strong style="color: #ff0303;">' . $opt . '</strong></li> ';
                                            }
                                        }
                                        echo '</ul>
                                </li>';
                                    }
                                } ?>

                                <?php if (count($qns_data_tnf) > 0) {
                                    foreach ($qns_data_tnf as $anstfdata) {
                                        if (array_key_exists('t', json_decode($anstfdata['myans'])) && trim(json_decode($anstfdata['myans'])->t) != '' && trim(json_decode($anstfdata['myans'])->f) != '') {
                                            if ($anstfdata['answer'] == 't') {
                                                $ans = trim(json_decode($anstfdata['myans'])->t);
                                            } elseif ($anstfdata['answer'] == 'f') {
                                                $ans = trim(json_decode($anstfdata['myans'])->f);
                                            }
                                            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<strong><em><br><i><b><u>');
                                            $ans_tf_list = array(trim(json_decode($anstfdata['myans'])->t), trim(json_decode($anstfdata['myans'])->f));
                                            $ans_tf_answer = $ans;
                                        } else {
                                            if ($anstfdata['answer'] == 't') {
                                                $ans = "True";
                                            } elseif ($anstfdata['answer'] == 'f') {
                                                $ans = "False";
                                            }
                                            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<strong><em><br><i><b><u>');
                                            $ans_tf_list = array("True", "False");
                                            $ans_tf_answer = $ans;
                                        }

                                        echo '<li class="table-row"><p>' . $ans_tf_title . '</p>';
                                        echo '<ul class="attempQalist">';
                                        foreach ($ans_tf_list as $tfkey => $tf_opt) {
                                            $tfansId = 'anstnf-' . $anstfdata['id'] . '-' . $tfkey;
                                            if ($ans_tf_answer == $tf_opt) {
                                                echo ' <li class="opttnf-crct"> Correct : <strong style="color: #28a745;">' . $tf_opt . '</strong></li> ';
                                            } else {
                                                echo ' <li class="optqns" id="' . $tfansId . '"> Your Answer : <strong style="color: #ff0303;">' . $tf_opt . '</strong></li> ';
                                            }
                                        }
                                        echo '</ul></li>';
                                    }
                                }
                                ?>

                                <?php if (count($qns_data_fib) > 0) {
                                    foreach ($qns_data_fib as $fib_ansdata) {
                                        $fib_left_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][0])), '<strong><em><br><i><b><u>');
                                        $fib_right_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][1])), '<strong><em><br><i><b><u>');
                                        $fib_ans_list_ans = array_filter(json_decode($fib_ansdata['mcq']));
                                        $fib_ans = removeSpace(trim($fib_ans_list_ans[$fib_ansdata['answer']]));

                                        echo '<li class="table-row"><p>' . $fib_left_title_ans . '_________' . $fib_right_title_ans . '</p>';
                                        echo '<ul class="attempQalist">';
                                        foreach ($fib_ans_list_ans as $fibkey => $fib_value_ans) {
                                            $fibansId = 'ansfib-' . $fib_ansdata['id'] . '-' . $fibkey;
                                            if ($fib_ans == $fib_value_ans) {
                                                echo ' <li class="optfib-crct"> Correct : <strong style="color: #28a745;">' . $fib_value_ans . '</strong></li> ';
                                            } else {
                                                echo ' <li class="optqns" id="' . $fibansId . '"> Your Answer : <strong style="color: #ff0303;">' . $fib_value_ans . '</strong></li> ';
                                            }
                                        }
                                        echo '</ul></li>';
                                    }
                                } ?>

                                <?php if (count($qns_data_mch) > 0) {
                                    echo '<li class="table-row"><p>' . $qns_data_mch[0]['question'] . '</p>';
                                    echo '<div class="row">';
                                    echo '<ul class="">';
                                    foreach ($qns_data_mch[0]['left_col'] as $leftKey => $left_val) {
                                        $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
                                        if (in_array($l_ext, $supported_image)) {
                                            $mch_img_left =  "<img src='" . $base_url . $left_val . "' />";
                                            echo ' <li class="badge badge-success">' . $mch_img_left . '</li> ';
                                        } else {
                                            echo ' <li class="badge badge-success">' . $left_val . '</li> ';
                                        }
                                    }
                                    echo '</ul>';
                                    echo '<ul class="">';
                                    foreach ($qns_data_mch[0]['right_col'] as $rightKey => $right_val) {
                                        $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
                                        if (in_array($ext, $supported_image)) {
                                            $mch_img_right =  "<img src='" . $base_url . $right_val . "' />";
                                            echo ' <li class="badge badge-success">' . $mch_img_right . '</li> ';
                                        } else {
                                            echo ' <li class="badge badge-success">' . $right_val . '</li> ';
                                        }
                                    }
                                    echo '</ul></div></li>';
                                } ?>

                            </div>
                            <div class="col col-4">
                                <div class="col col-12 scorebox">
                                    <img src="<?= base_url('assets/publicassets/activity/img/trophy.png'); ?>" style="width: 100px; display: block; margin: auto auto 20px auto;">
                                    <span class="badge right_qns" style="color: #28a745;">0</span>
                                    <span class="badge" style="color: #f9a964; padding: 0;">/</span>
                                    <span class="badge total_qns" style="color: #6c757d;">0</span>
                                </div>

                                <!-- <div class="col col-12 scorebox" style="border-color:#dc3545 ">
                                    <h2 style="color:#dc3545 ">Wrong</h2>
                                    <span class="badge badge-danger wrng_qns">0</span>
                                    <!-- <span class="badge badge-secondary total_qns">0</span> -- >
                                </div> -->
                                <!-- <p style="color: #6c757d; font-size: 18px; font-weight: bold;"> Out of <span class="badge badge-warning total_qns"></span> </p> -->
                            </div>
                        </div>
                    </ul>



                </div>
            </div>
        </div>
    <?php } ?>
    <div class="result-text animated bounce ">
        <a href="javascript:location.reload();">Play again</a>
    </div>
</div>

<?php if (empty($act_value)) { ?>
    <div class="no-data">
        <p>Data not found</p>
    </div>
<?php
} ?>

<style>
    .optqns,
    .opttnf,
    .optfib {
        display: none ! important;
    }

    .scorebox h2 {
        color: #28a745;
        font-family: 'Gloria Hallelujah', cursive;
    }

    .txt-shdw {
        text-shadow: 0 1px 0 #cccccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbbbbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaaaaa, 0 6px 1px rgba(0, 0, 0, 0.0980392), 0 0 5px rgba(0, 0, 0, 0.0980392), 0 1px 3px rgba(0, 0, 0, 0.298039), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.247059), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.14902);
    }

    .scorebox {
        width: 100%;
        height: auto;
        padding: 25px;
        border: 1px solid #28a745;
        border-radius: 10px;
        margin-bottom: 15px;
    }


    .attemptQlist {
        height: 400px;
        overflow: auto;
    }

    .attemptQlist .table-row {
        padding: 5px;
        display: block;
        margin-bottom: 15px;
        box-shadow: none !important;
        border-bottom: 1px solid #e6e0e0;
        padding-bottom: 15px;
    }
    .attemptQlist .table-row .questionImg{ margin: inherit;}

    .attemptQlist .table-row p {
        display: block;
        margin: 0;
        text-align: left;
        font-size: 22px;
        padding-bottom: 25px;
    }

    .attemptQlist .attempQalist {
        display: block;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .attemptQlist .attempQalist li {
        display: block;
        margin: 0;
        /* padding: 0; */
        color: #000;
        font-size: 15px;
        /* background-color: #25587a; */
        padding: 0px ! important;
        margin-bottom: 5px;
    }

    .qns-attempt {
        color: #fff;
        background: #f75013e3;
        border: 1px solid #ccb27b;
        transform: scale(1.1);

    }

    .card {
        background: #fff;
        border-radius: 25px;
        display: inline-block;
        height: auto;
        margin: 1rem;
        position: relative;
        width: 60vw;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .responsive-table {
        padding: 0;
    }

    .responsive-table li {
        border-radius: 3px;
        padding: 10px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .responsive-table .table-header {
        font-size: 25px;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-family: 'Gloria Hallelujah', cursive;
        text-align: left;
        cursor: pointer;
        transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
        color: #245678;
        background: #f7f7f7;
        font-weight: 600;
    }

    .responsive-table .table-row {
        background-color: #ffffff;
        color: #000;
        font-size: 20px;
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
    }

    .responsive-table .col-1 {
        flex-basis: 10%;
    }

    .responsive-table .col-2 {
        flex-basis: 40%;
    }

    .responsive-table .col-3 {
        flex-basis: 25%;
    }

    .responsive-table .col-4 {
        flex-basis: 25%;
    }

    @media all and (max-width: 767px) {
        .responsive-table .table-header {
            display: none;
        }

        .responsive-table li {
            display: block;
        }

        .responsive-table .col {
            flex-basis: 100%;
        }

        .responsive-table .col {
            display: flex;
            padding: 10px 0;
        }

        .responsive-table .col:before {
            color: #6C7A89;
            padding-right: 10px;
            content: attr(data-label);
            flex-basis: 50%;
            text-align: right;
        }
    }

    @media all and (min-width: 500px) {
        .scr-error {
            display: none;
        }
    }
</style>

<footer class="footer-bottom header-color">
    <div class="container">
        <div class="row">
            <?php if (!empty($act_value)) {
                if (COUNT($act_value) > 1) {
                    if ($uri->getSegment(1) == 'practice') { ?>
                        <span class="excbottomtext">Exercises :</span>
                        <!-- Second slider. Carousel -->
                        <div class="slider slider_first" id="slider">
                            <div class="slider_viewport">
                                <div class="slider_list bottomChangeExc">
                                    <?php $navpageurl = 'c=' . $this->input->get('c') . '&subid=' . $this->input->get('subid') . '&catid=' . $this->input->get('catid') . '&sub=' . $this->input->get('sub') . '&cat=' . $this->input->get('cat'); ?>
                                    <?php
                                    $tc = 1;
                                    foreach (array_unique($act_value) as $value) {
                                        if (in_array($value, $Type_Array)) {
                                            $Typas = ($cat_data_type_label[$value]) ? $cat_data_type_label[$value] : $Type_Value[$value];
                                            echo ' <div class="slider_item"><a class="box-a" href="javascript:void(0);" id="' . $tc . '" data-setids="' . $set_Ids . '" data-target="#' . $value . '" data-class="' . $navpageurl . '" > <span>' . $tc . '</span>' . $Typas . '</a></div>';
                                            $tc++;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="slider_nav">
                                <div class="slider_arrow slider_arrow__left">
                                </div>
                                <div class="slider_arrow slider_arrow__right">
                                </div>
                            </div>
                        </div>
                        <!-- Second slider End Carousel -->
            <?php }
                }
            } ?>
            <!--
            <div class="btns">
                <p>&copy; Copyright Viva Education</p>
            </div>
            -->
        </div>
    </div>
</footer>