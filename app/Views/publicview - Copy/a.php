<link rel="stylesheet" href="<?=base_url('assets/bundles/')?>/activity.css">
<?php
$supported_image = array('gif', 'jpg', 'jpeg', 'png');
$base_url = base_url();
$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$media_url = $base_url . "/master/";
if (!empty($qns_data_mch)) {
    $mchQnsKey = ($request->getGet('mk')) ?   $request->getGet('mk') : '0';
    $Cnt_Mch = count($qns_data_mch[$mchQnsKey]['left_col']);
} else {
    $Cnt_Mch = 0;
}
?>
<script>
var base_url = '<?=base_url();?>';
var setId = '<?=$set_Ids;?>';
var starttime = '<?=date('Y-m-d H:i:s');?>';
var cnt_tnf = <?php echo (count($qns_data_tnf)); ?>;
var cnt_mcq = <?php echo (count($qns_data_mcq)); ?>;
var cnt_mch = <?php echo ($Cnt_Mch); ?>;
var cnt_fib = <?php echo (count($qns_data_fib)); ?>;
var type = '<?php echo $uri->getSegment(3); ?>';
</script>
<style>
.mt100-b50 {
    margin: 75px 0px 0px 0px;
}

.choose-image img {
    width: 100%;
    max-width: 100%;
    border-radius: 20px 20px 0px 0px;
}

.boxes-center {
    padding: 0px 20px;
}

.skipbtn {
    background-color: #ea5744;
}

.otpfonts {
    font-size: 18px;
    font-weight: 400;
}

#ebook_iframe {
    background-color: #FFFFFF;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9999999;
}

#close_iframe {
    background-color: #fff;
    position: absolute;
    z-index: 9999999;
    right: 2%;
    top: 2%;
    font-size: 48px;
    padding: 5px;
    border-radius: 9px;
    color: #FF9800;
    cursor: pointer;
}

.mr-30 {
    margin-right: 30px;
}

.Zoombtn {
    position: absolute;
    left: 22px;
    top: 27px;
}

.mt-20 {
    margin-top: 20px;
}
</style>
<script>
var base_url_practice = "<?=base_url('playactivity')?>";
</script>
<!-- BREADCRUMB AREA -->

<div class="text-bread-crumb d-flex align-items-center style-six sc-page-bc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row padding-top" style="display:block ;">
					<div class="col-md-12">
						<div class="section_title_style2">
							<div class="breatcome2_content">
								<ul>
									<li>
										<a href="<?=base_url()?>">
								        <img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
										</a> 
										<em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject">
								        Subject
										</a> 
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $subject->slug; ?>">
								        <?php echo $subject->sub_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $subject->slug; ?>/class<?php echo $class->class_id; ?>/">
								        <?php echo $class->class_name; ?>
										</a> 
                                       
									
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $subject->slug; ?>/class<?php echo $class->class_id; ?>/<?php echo $module->slug; ?>">
								        <?php echo $module->m_name; ?>
										</a> 
                                        
                                        
                                         <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $subject->slug; ?>/class<?php echo $class->class_id; ?>/<?php echo $module->slug; ?>/<?php echo $series->slug; ?>">
								       <?php echo $series->series_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $subject->slug; ?>/class<?php echo $class->class_id; ?>/<?php echo $module->slug; ?>/<?php echo $series->slug; ?>/<?php echo $chapter->slug; ?>">
								       <?php echo $chapter->chapT_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"> <?=$catactivity->cat_name?></span> 
                                    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="blog-page" id="voltbglayout1">
    <div class="container-fluid">
       <div class="row justify-content-center">
               <div class="row col-md-12 col-xl-12">
                   
                
                   
                    <?php if (count($qns_data_mcq) > 0) {?>
                    <div class="col-md-9 newactivityarea  bdr-rignt mcqbg" id="mcq">
                        <div class="">

                        <?php
                        $qns_mcq_data = '';
                        $mcq_ans = '';
                        $mcq_sh = 1;
                        foreach ($qns_data_mcq as $qmcqdata) {
                        $qns_mcq_title = strip_tags(removeSpace(trim($qmcqdata['question'])), '<ul><ol><span><strong><em><br><i><b><u>');
                        $qns_mcq_list = array_filter(json_decode($qmcqdata['mcq']));
                        $qns_mcqcrct_ans = $qns_mcq_list[$qmcqdata['answer']];
                        $qns_mcqimg_ans = @preg_split('/(<img[^>]+\>)/i', strip_tags($qns_mcqcrct_ans, "<img>"), -1, PREG_SPLIT_DELIM_CAPTURE);
                        if (count($qns_mcqimg_ans) >= 2) {
                            preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $qns_mcqimg_ans[1], $imgurlmatch);
                            $qns_mcqcrct_ans = basename($imgurlmatch[0][0]);
                        }
                        ?>
                            <div class="activity-section <?php if ($mcq_sh == '1') {
                                    echo 'first-div';
                                } else {
                                    echo 'next-div" style="display:none;';
                                }?>">
                                <?php if ($qns_mcq_title) {?>
                                <div class="act-qtion">
                                    <h3><?php /*<?=$mcq_sh;?>.*/?> <?php echo $qns_mcq_title; ?></h3>
                                </div>
                                <?php }?>

                                <?php if ($qmcqdata['urlImage']) {?>
                                <div class="choose-image">
                                    <?php echo $qmcqdata['urlImage']; ?>
                                </div>
                                <?php }?>

                                <div class="boxes-center questionOptions shuffle-list-items1">
                                    <?php
                                #shuffle($qns_mcq_list);
                                foreach ($qns_mcq_list as $key => $opt) {

                                    $mcqqnsId = 'mcq-' . $qmcqdata['id'] . '-' . $key;

                                    if (!empty($opt->img)) {
                                        $qns_mcqimg_opt = $opt->img . "<span style='display:none' id='opt-" . $mcqqnsId . "'>" . $opt->filename . "</span>";
                                    } else {
                                        $qns_mcqimg_opt = $opt;
                                    }
                                    #$qns_mcqimg_opt;
                                    $ans = 'data-answer="' . $qns_mcqcrct_ans . '"';
                                    echo '<input type="radio" name="' . $qmcqdata['id'] . '" id="box-' . $mcqqnsId . '"/><label class="radio-button__control opt-style quesItem qClick col-md-4 otpfonts" ' . $ans . ' id="' . $mcqqnsId . '" for="box-' . $mcqqnsId . '" data-qid="' . $qmcqdata['id'] . '">' . $qns_mcqimg_opt . '</label>';
                                }
                                ?>
                                </div>

                                <?php if (count($qns_data_mcq) == $mcq_sh) {
                                    echo '<div class="qClick viewscore row col-md-12 mt-20" id="' . $qns_data_mcq[$mcq_sh - 1]['id'] . '">
								<input type="submit" class="btn green col-md-2 col-md-offset-5" value="Submit" />
								</div>';
                                } else {?>
                                <div class="row col-md-12 mt-20">
                                    <input type="submit" class="col-md-2 btn blue col-md-offset-4 mr-30 show skip"
                                        value="Skip" id="skip-<?=$qmcqdata['id'];?>" />
                                    <input type="submit" class="col-md-2 btn show green next"
                                        data-id="<?=$qmcqdata['id'];?>" value="Submit" />
                                </div>
                                <?php }?>

                            </div>
                            <?php #$qmcqdata['solutions'];?>
                            <!-- QN : <?=$mcq_sh;?> -->
                            <?php $mcq_sh++;}?>
                        </div>
                    </div>
                    <?php }?>


                    <?php if (count($qns_data_tnf) > 0) {?>
                    <!-- ----------------------True and false--------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt tnfbg" id="tnf">
                        <div class="">
                            <?php
                            $qns_tf_data = '';
                                $ans = '';
                                $sh = 1;
                                foreach ($qns_data_tnf as $qtfdata) {
                                if (@array_key_exists('t', @json_decode($qtfdata['myans'])) && trim(json_decode($qtfdata['myans'])->t) != '' && trim(json_decode($qtfdata['myans'])->f) != '') {
                                    if ($qtfdata['answer'] == 't') {
                                        $ans = trim(json_decode($qtfdata['myans'])->t);
                                    } elseif ($qtfdata['answer'] == 'f') {
                                        $ans = trim(json_decode($qtfdata['myans'])->f);
                                    }
                                    $qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
                                    $qns_tf_list = array(trim(json_decode($qtfdata['myans'])->t), trim(json_decode($qtfdata['myans'])->f));

                                    preg_match('@src="([^"]+)"@', $ans, $match);
                                    $src = array_pop($match);
                                    $qns_tf_answer = (basename($src)) ? basename($src) : $ans;
                                } else {
                                    if ($qtfdata['answer'] == 't') {
                                        $ans = "True";
                                    } elseif ($qtfdata['answer'] == 'f') {
                                        $ans = "False";
                                    }
                                    $qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
                                    $qns_tf_list = array("True", "False");
                                    $qns_tf_answer = $ans;
                                }
                                ?>
                                                    <div class="activity-section <?php if ($sh == '1') {
                                    echo 'first-div';
                                } else {
                                    echo 'next-div" style="display:none;';
                                }?>">



                                <div class="act-qtion">
                                    <h3 class=""><?=$sh;?>. <?php echo $qns_tf_title; ?></h3>
                                </div>
                                <!-- <div class="act-qtion-img">
								<img src="http://vivagroupinfo.com/vivavolt/public/uploaded-images/images/viva_15178978747292.JPG">
							     </div> -->

                                <div class="boxes questionOptions row">
                                    <?php
                                #shuffle($qns_tf_list);
                                    foreach ($qns_tf_list as $tf_key => $opt) {
                                        $tfansId = 'tnf-' . $qtfdata['id'] . '-' . $tf_key;
                                        preg_match('@src="([^"]+)"@', $opt, $match);
                                        $opt_src = array_pop($match);

                                        if (!empty($opt_src)) {
                                            $opt_img = "<img src='" . base_url(str_replace('voltv2', '', $opt_src)) . "' width='150px'/>";
                                            $qns_tnfimg_opt = $opt_img . "<span style='display:none' id='opt-" . $tfansId . "'>" . basename($opt_src) . "</span>";
                                        } else {
                                            $qns_tnfimg_opt = $opt;
                                        }

                                        $ans = 'data-answer="' . $qns_tf_answer . '"';
                                        echo '<input type="radio" name="' . $qtfdata['id'] . '" id="box-' . $tfansId . '"/><label class="quesItem qtfClick col-md-6 tnfopt" ' . $ans . ' id="' . $tfansId . '" for="box-' . $tfansId . '"  data-qid="' . $qtfdata['id'] . '">' . $qns_tnfimg_opt . '</label>';
                                    }
                                    ?>
                                </div>

                                <?php if (count($qns_data_tnf) == $sh) {
                                echo '<div class="row col-md-12 mt-20 qtfClick viewscore" id="' . $qns_data_tnf[$sh - 1]['id'] . '">
												<input type="submit" class="col-md-2 col-md-offset-5 btn green" value="Submit" />
											  </div>';
                                } else {?>
                                <div class="row col-md-12 mt-20">
                                    <input type="submit" class="col-md-2 btn col-md-offset-4 mr-30 blue show skip"
                                        value="Skip" id="skip-<?=$qtfdata['id'];?>" />
                                    <input type="submit" class="col-md-2 btn show green next"
                                        data-id="<?=$qtfdata['id'];?>" value="Submit" />
                                </div>
                                <?php }?>
                            </div>
                            <!-- QN : <?=$sh;?> -->
                            <?php $sh++;
                            }?>
                        </div>
                    </div>
                    <?php }?>

                    <?php if (count($qns_data_fib) > 0) {?>
                    <div class="col-md-9 newactivityarea  bdr-rignt fibbg" id="fib">
                        <div class="">
                            <?php
                            $qns_fib_data = '';
                            $fib_ans = '';
                            $fib_sh = 1;
                            foreach ($qns_data_fib as $fib_data) {
                                $fib_left_title = strip_tags(trim($fib_data['fib_qns'][0]), '<ul><ol><strong><em><br><i><b><u><img>');
                                $fib_right_title = strip_tags(trim($fib_data['fib_qns'][1]), '<ul><ol><strong><em><br><i><b><u><img>');
                                $fib_ans_list = array_filter(json_decode($fib_data['mcq']));
                                $fib_crct_ans_array = $fib_ans_list[$fib_data['answer']];
                                if(!empty($fib_crct_ans_array->filename)){
                                    $fib_crct_ans = $fib_crct_ans_array->filename;
                                }else{
                                    $fib_crct_ans = $fib_crct_ans_array;
                                }      
                                ?>
                              <div class="activity-section  <?php if ($fib_sh == '1') {
                                    echo 'first-div';
                                } else {
                                    echo 'next-div" style="display:none;';
                                }?>">
                                <div class="act-qtion">
                                    <h3 class=""><?php echo $fib_left_title; ?> <span class="fillblank"
                                            id="div<?php echo $fib_data['id']; ?>" ondrop="drop(event)"
                                            ondragover="allowDrop(event)"></span><?php echo $fib_right_title; ?></h3>
                                    <input type="hidden" id="ans<?php echo $fib_data['id']; ?>"
                                        value="<?php echo removeSpace(trim($fib_ans_list[$fib_data['answer']])); ?>">
                                </div>

                                <div class="boxes questionOptions shuffle-list-items1">
                                    <?php $i = 1;
                                #shuffle($fib_ans_list);
                                foreach ($fib_ans_list as $key => $fib_value) {
                                    $fibqnsId = 'fib-' . $fib_data['id'] . '-' . $key;

                                    if(!empty($fib_value->img)){
                                        $fib_text_value = $fib_value->filename;
                                        $fib_value = $fib_value->img. '<span style="display:none" id="opt-' . $fibqnsId . '">' . $fib_text_value . '</span>';               
                                    }else{
                                        $fib_text_value = $fib_value;
                                        $fib_value = '<span id="opt-' . $fibqnsId . '">' . $fib_value . '</span>';
                                    }
                                    ?>
                                    <?php if (removeSpace(trim($fib_crct_ans)) == removeSpace(trim($fib_text_value))) {?>
                                    <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                                        echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-answer="' . removeSpace(trim($fib_text_value)) . '" id="' . $fibqnsId . '"for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>
                                    <?php } else {?>
                                    <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                                        echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-text="' . removeSpace(trim($fib_text_value)) . '"  id="' . $fibqnsId . '" for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>

                                                            <?php }
                                    $i++;
                                }?>
                                </div>

                                <?php if (count($qns_data_fib) == $fib_sh) {
                                echo '<div class="row col-md-12 mt-20 fibClick viewscore"  id="' . $qns_data_fib[$fib_sh - 1]['id'] . '">
												<input type="submit" class="col-md-2 col-md-offset-5 btn green" value="Submit" />
											  </div>';
                                } else {?>

                                <div class="row col-md-12 mt-20">
                                    <input type="submit" class="col-md-2 col-md-offset-4 mr-30 btn blue show skip"
                                        value="Skip" id="skip-<?=$fib_data['id'];?>" />
                                    <input type="submit" class="col-md-2 btn show green next"
                                        data-id="<?=$fib_data['id'];?>" value="Submit" />
                                </div>
                                <?php }?>
                            </div>
                            <!-- QN : <?=$fib_sh;?> -->
                            <?php $fib_sh++;}?>
                        </div>
                    </div>
                    <?php }?>

                    <?php if (count($qns_data_mch) > 0) {   ?>
                    <script>
                    var Cnt_Mchid = '<?=$mchQnsKey;?>';
                    console.log(Cnt_Mchid);
                    </script>
                    <!-- ----------------------Drag and drop (Matching)---------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="mch">
                        <div class="activity-section MchBox">
                            <div class="act-qtion">
                                <?php if ($qns_data_mch[$mchQnsKey]['question']) {?>
                                <h3 class="mlmch10"><?php echo $qns_data_mch[$mchQnsKey]['question']; ?></h3>
                                <?php }?>
                            </div>
                            <div id="cardPile" class="row">
                                <div class="questionOptionsMch1 shuffle-list-items col-md-6 col-sm-6 col-xs-6"
                                    id="mchleft">
                                    <?php
                                    $Lcnt = 1;
                                    $mch_color = ['622569', '4e4ed2', '289c4c', '034f84', 'd64161', '547ff9', 'FF5722', '9c27b0'];
                                    shuffle($mch_color);
                                    foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
                                        $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
                                        ?><p class="draggable quesItemMch" id="drag-<?=$Lcnt;?>" data-color='#<?=$mch_color[$leftKey];?>' data-id='<?=$leftKey;?>'>
                                        <?php if (in_array($l_ext, $supported_image)) {
                                            echo "<img src='" . $base_url . $left_val . "' />";
                                        } else {
                                            echo $left_val;
                                        }?></p>
                                       <?php $Lcnt++;
                                    }?>
                                </div>

                                <div class="questionOptionsMch1 shuffle-list-items text-right col-md-6 col-sm-6 col-xs-6"
                                    id="mchright">
                                    <?php
                                    $Rcnt = 1;
                                    foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
                                        $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
                                        ?><p class="droppable quesItemMch mchClr" id="drop<?=$Rcnt;?>" data-aid='<?=$rightKey;?>'>
                                        <?php if (in_array($ext, $supported_image)) {
                                            echo "<img src='" . $base_url . $right_val . "' />";
                                        } else {
                                            echo $right_val;
                                        }?>
                                        </p>
                                        <?php $Rcnt++;
                                    }?>
                                </div>
                            </div>

                            <div style="clear:both;"></div>
                            <div class="excbuttons1" id="buttons">
                                <a href="javascript:location.reload();" class="btn btn-primary mchreload"><i
                                        class="fa fa-refresh"></i></a>
                                <a href="javascript:void(0);" class="btn btn-success submit-ans"
                                    style="display: none;">Submit</a>
                                <?php $mchpageurl = $qns_data_mch[0]['set_id'] . '/mch?c=' . $request->getGet('c');?>
                                <?php if (is_array($qns_data_mch) && count($qns_data_mch) > 1) {?>
                                <?php foreach ($qns_data_mch as $mchkey => $mchdata) {?>
                                <a href="<?=base_url('playactivity/' . $mchpageurl . '&mk=' . $mchkey);?>"
                                    class="btn <?=($mchkey == $request->getGet('mk')) ? 'btn-primary' : 'blue';?>">Exercise
                                    <?=$mchkey + 1;?></a>
                                <?php }?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <?php if (@count(@$qns_data_vid) > 0) {?>
                    <?php if (@count(@$qns_data_vid) > 1) {?>
                    <!-- ----------------------Watch--------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="vid">
                        <?php $pdf_url = (strpos($qns_data_vid[0]['url'], '/veb/')) ? $qns_data_vid[0]['url'] . "?token=" . session('voltAccountToken') : ''; ?>
                        <h2 class="vidtitle"><?=$chapter->chapT_name?></h2>
                        <div class="vidbg" id="vdo">
                            <iframe allowfullscreen style="width: 100%; height: auto; min-height: 434px;"
                                class="vidbradius video-player" src="<?=$pdf_url?>"></iframe>
                        </div>
                    </div>
                    <?php } else {?>
                    <div class="col-md-9 newactivityarea " id="vid">
                        <?php
                        $pdf_url = (strpos($qns_data_vid[0]['url'], '/veb/')) ? $qns_data_vid[0]['url'] . "?token=" . session('voltAccountToken') : '';
                        ?>
                        <h2 class="vidtitle"><?=$chapter->chapT_name?></h2>
                        <div class="vidbg" id="vdo">
                            <iframe allowfullscreen style="width: 100%; height: auto; min-height: 434px;"
                                class="vidbradius video-player" src="<?=$pdf_url?>"></iframe>
                        </div>
                    </div>

                    <?php }?>

                    <?php }?>

                    <?php if (count($qns_data_infographics) > 0) {  ?>
                    <!-- ----------------------Infographics-------------------------------- -->
                    <div class="col-md-9 newactivityarea bdr-rignt" id="imgtext">
                        <?php
                            $qns_info_data = '';
                            $info_sh = 1;
                            foreach ($qns_data_infographics as $qinfodata) {
                                $qns_info_title = html_entity_decode($qinfodata['questionHtml']);
                                #$qns_info_title = strip_tags(removeSpace(trim(replace($qinfodata['question']))), '<ul><ol><li><p><strong><em><br><i><b><u><sup><sub><table><tbody><tr><td><p>');
                                $qns_info_text = strip_tags(removeSpace(trim(replace($qinfodata['text']))), '<ul><ol><li><p><strong><em><br><i><b><u><sup><sub><table><tbody><tr><td><p>');
                                ?>
                                                <div class="activity-section <?php if ($info_sh == '1') {
                                    echo 'first-div';
                                } else {
                                    echo 'next-div" style="display:none;';
                                }?>">
                            <?php if ($qns_info_title) {?>
                            <div class="act-qtion">
                                <!--<?=$info_sh;?>.--> <?php echo $qns_info_title; ?>
                            </div>
                            <?php }?>
                            <?php if ($qinfodata['image']) {?>
                            <div class="act-qtion-img">
                                <img src="<?php echo $media_url . $qinfodata['image']; ?>" class="questionImg" />
                            </div>
                            <?php }?>
                            <div style="clear:both;"></div>
                            <?php $showAns = ($curr_type == 'parichay') ? 'style="display: none;"' : '';?>
                            <button data-id="<?=$info_sh;?>" <?=$showAns?> class="showAns show-ans-oraly">Show
                                Answers</button>
                            <div class="boxes" id="SolutionBox-<?=$info_sh;?>" style="display: none;">
                                <?php if ($qns_info_text) {?>
                                <?php echo $qns_info_text; ?>
                                <?php }?>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="excbuttons TypeNxt1">
                                <input type="submit" class="btn green" value="Next" />
                            </div>
                        </div>
                        <?php $info_sh++;
                        }?>
                        <input type="hidden" name="infoNum" value="<?=count($qns_data_infographics);?>" />
                    </div>
                    <?php }?>
                    <script>
                    $(document).ready(
                        function() {
                            $(".showAns").click(function() {
                                qnsshwid = $(this).data('id');
                                $("#SolutionBox-" + qnsshwid).show("slow");
                                //$("#showAns").hide();
                            });
                        });
                    </script>
                    <?php if (@count(@$qns_data_ebook) > 0) {?>
                    <?php if (@count(@$qns_data_ebook) > 1) {?>
                    <!-- ----------------------ebook--------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="ebook">
                        <?php $pdf_url = $qns_data_ebook[0]['url'] . "?token=" . session('voltAccountToken');?>
                        <iframe allowfullscreen src="<?=$pdf_url?>" id="eb" title=""
                            style="width:100%;height:500px;"></iframe>
                    </div>
                    <?php } else {?>
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="ebook">
                    <?php $pdf_url = $qns_data_ebook[0]['url'] . "?token=" . session('voltAccountToken');
                    ?>
                    <iframe allowfullscreen src="<?=$pdf_url?>" id="eb" title="" style="width:100%;height:500px;"></iframe>
                    </div>
                    <?php }?>
                    <?php }?>
                   
                   
                   
                   
                   

                    <div class="order-sm-2 order-md-1 col-md-4 col-xl-3">
                       <div class="blog-sidebar">  
                            <div class="ex-area">
                            <div class="list-group">
                                <?php if (@count(@$qns_data_vid) > 0) {?>
                                <?php if (@count(@$qns_data_vid) > 1) {?>
                                <span type="button" class="list-group-item-action active vidlist">Video</span>
                                <?php foreach ($qns_data_vid as $video) {
    $vurl = (strpos($video['url'], '/veb/')) ? $video['url'] . "?token=" . session('voltAccountToken') : '';
    echo '<a class="box-a vdo vidlistdata" href="javascript:void(0);" data-id="' . $video['id'] . '"  data-url="' . $vurl . '" ><i class="fa fa-play-circle-o" aria-hidden="true"></i> ' . $video['question'] . '</a>';

}
}
    ?>
                                <?php } elseif (@count(@$qns_data_ebook) > 0) {?>

                                <?php if (@count(@$qns_data_ebook) > 1) {?>
                                <span type="button" class="list-group-item-action active vidlist">Read</span>
                                <?php foreach ($qns_data_ebook as $ebook) {
    $url = $ebook['url'] . "?token=" . session('voltAccountToken');
    echo '<a class="box-a vdo vidlistdata" href="javascript:void(0);" data-type="' . $ebook['type'] . '"  data-url="' . $url . '" ><i class="fa fa-file-text-o" aria-hidden="true"></i> ' . '&nbsp;&nbsp;' . $ebook['question'] . '</a>';

}
}

} else {?>
                                <span type="button" class="list-group-item-action active vidlist">Exercises</span>
                                <?php
if (!empty($act_value)) {
    if (COUNT($act_value) > 1) {
        ?>
                                <?php $navpageurl = 'c=' . $request->getGet('c') . '&subid=' . $request->getGet('subid') . '&catid=' . $request->getGet('catid') . '&sub=' . $request->getGet('sub') . '&cat=' . $request->getGet('cat');?>
                                <?php
$tc = 1;
        foreach (array_unique($act_value) as $value) {
            if (in_array($value, $Type_Array)) {
                $Typas = ($cat_data_type_label[$value]) ? $cat_data_type_label[$value] : $Type_Value[$value];

                $act_cat = ($value == $curr_type) ? 'act-cat' : '';
                echo '<a class="box-a ' . $act_cat . ' box-a vdo vidlistdata" href="javascript:void(0);" id="' . $tc . '" data-setids="' . $set_Ids . '" data-target="#' . $value . '" data-class="' . $navpageurl . '" > ' . $Typas . '</a>';
                $tc++;
            }
        }
        ?>
                                <?php
}
}}?>
                            </div>
                        </div>
                        </div>
                     </div>
                   
                   
                   
                   
           
           </div>
           
           
           
            </div>
        </div>
    </section>






<div id="ebook_iframe" style="display:none">
    <i class="fa fa-times" id="close_iframe"></i>
    <iframe width="100%" height="100%" id="ebk" frameborder="0" allowfullscreen></iframe>
</div>







<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">
         

        <div class="row">
            <!--Start Your Coad-->
        

            <div id="mySidebar" class="sidebar" style="background:#FFF">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <?php if ($allcategories) {
    $int = 0;
    foreach ($allcategories as $getCategory) {
        $urlIs = "#active";
        $checkTopics = API_connector(base_url("api/getcatSet?class=" . $clid . "&subject=" . $suid . "&series=" . $seid . "&chapter=" . $chid . "&category=" . $getCategory->cat_id));
        $getActivityType = API_connector(base_url("api/getqdata?setId=" . $checkTopics->data->setData[0]->setIds));
        $checkList = $modelData->query("SELECT * FROM `list` WHERE `set_id`='" . $checkTopics->data->setData[0]->setIds . "' ")->getRow();

        if (@count($checkList) > 0) {

            $listenPos = strpos($checkTopics->data->setData[0]->actType, 'audioUpload');
            $videoPos = strpos($checkTopics->data->setData[0]->actType, 'vid');
            $dataTypeis = ($listenPos == true) ? "audioUpload" : "vid";

            ?>

                <?php if ($getCategory->cat_name == $catactivity->cat_name) {?>

                <?php } else {


$Usod = (isset($checkTopics->data->setData[0]->setIds))?'/'.$checkTopics->data->setData[0]->setIds:'';
$Utyp = (isset($getActivityType->type[0]))?'/'.$getActivityType->type[0]:'';

//base_url('playactivity/' . $checkTopics->data->setData[0]->setIds . '/' . $getActivityType->type[0] . '?c=' . preg_replace("/activity\d/i", "activity" . $getCategory->cat_id, $request->getGetPost('c')) . '&her=' . $request->getGet('her'))

$activityurl2 = base_url('playactivity' . $Usod . $Utyp . '?c=' . preg_replace("/activity\d/i", "activity" . $getCategory->cat_id));


                    ?>
                <div class="col-md-12">

                    <a href="<?=($listenPos == false) ? $activityurl2 : "javascript:void(0)"?>"
                        data-type="<?=$dataTypeis?>" data-video-url="<?=$checkList->url?>"
                        class="inner-prog <?=($listenPos == true) ? 'playvideo' : ''?>"
                        style="display:block; padding: 20px 0; box-shadow: 0px 0px 8px #656363; background:#<?=$getCategory->cat_bg?>">
                        <img src="<?=base_url('master/uploads/category/' . $getCategory->cat_img)?>"
                            class="center-block" style="width:75px;">
                        <span><?=$getCategory->cat_name?></span>
                    </a>
                </div>

                <?php }?>







                <?php }
    }
}?>

            </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">☰ Go to Resources</button>
            </div>

            <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
            </script>
            <!--end Your Coad-->
        </div>
    </div>
</div>

</div>
</div>


<div class="result" style="display:none;">
    <!-- <div class="result"> -->
    <?php if ($uri->getSegment(1) == 'playactivity') {?>
    <div class="container" id="act_result">
        <div class="card">

            <div class="">

                <button type="button" class="close opacityclosebtn">
                    <a href="javascript:location.reload();" class="label" style="font-size:20px;">
                        <img src="<?=base_url('assets/publicassets/assets/images/closebtn.jpg');?>"
                            style="width: 30px;">
                    </a>
                </button>
                <h2 class="scoreborad">Score Board</h2>
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-md-8 col-sm-8 col-sx-8"> Solutions</div>
                        <div class="col col-md-4 col-sm-4 col-sx-4 text-center"> Score</div>
                    </li>
                </ul>

                <ul class="responsive-table">

                    <div class="col col-md-8 col-sm-8 col-xs-8 attemptQlist">
                        <?php if (count($qns_data_mcq) > 0) {
    foreach ($qns_data_mcq as $qmcqresult) {
        //<strong><em><br><i><b><u>
        $qns_mcq_result_title = strip_tags(removeSpace(trim($qmcqresult['question'])), '<ul><ol><strong><em><br><i><b><u>');
        $qns_mcq_result_title = preg_replace('#(<br */?>\s*)+#i', '<br>', $qns_mcq_result_title);
        $qns_mcq_result_list = array_filter(json_decode($qmcqresult['mcq']));
        $mcq_ans = $qns_mcq_result_list[$qmcqresult['answer']];
        if (!empty($mcq_ans->img)) {         
            $mcq_ans = $mcq_ans->filename;
        }
        echo '<li class="table-row">
                            <p>' . $qns_mcq_result_title . '</p>';
        if ($qmcqresult['urlImage']) {
            echo $qmcqresult['urlImage'];
        }
        echo '<ul class="attempQalist">';
        foreach ($qns_mcq_result_list as $mcqkey => $opt) {
            $mcqansId = 'ansmcq-' . $qmcqresult['id'] . '-' . $mcqkey;
            if (!empty($opt->img)) {
                $opt_data = $opt->img;
                $opt = $opt->filename;
            }else{
                $opt_data = $opt;
            }
           
            if ($mcq_ans == $opt) {
              
                echo ' <li class="optmcq-crct"> Correct : <strong style="color: #28a745;">' . $opt_data .
                    '</strong></li> ';
            } else {
                echo ' <li class="optqns" id="' . $mcqansId . '"> Your Answer : <strong
                                        style="color: #ff0303;">' . $opt_data . '</strong></li> ';
            }
        }
        echo '</ul>
                        </li>';
    }
}?>

                        <?php if (count($qns_data_tnf) > 0) {
    foreach ($qns_data_tnf as $anstfdata) {
        if (@array_key_exists('t', @json_decode($anstfdata['myans'])) && trim(json_decode($anstfdata['myans'])->t) != '' && trim(json_decode($anstfdata['myans'])->f) != '') {
            if ($anstfdata['answer'] == 't') {
                $ans = trim(json_decode($anstfdata['myans'])->t);
            } elseif ($anstfdata['answer'] == 'f') {
                $ans = trim(json_decode($anstfdata['myans'])->f);
            }
            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $ans_tf_list = array(trim(json_decode($anstfdata['myans'])->t), trim(json_decode($anstfdata['myans'])->f));
            #$ans_tf_answer = $ans;

            preg_match('@src="([^"]+)"@', $ans, $match);
            $srcans = array_pop($match);
            $ans_tf_answer = (basename($srcans)) ? basename($srcans) : $ans;
        } else {
            if ($anstfdata['answer'] == 't') {
                $ans = "True";
            } elseif ($anstfdata['answer'] == 'f') {
                $ans = "False";
            }
            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $ans_tf_list = array("True", "False");
            $ans_tf_answer = $ans;
        }

        echo '<li class="table-row"><p>' . $ans_tf_title . '</p>';
        echo '<ul class="attempQalist">';
        foreach ($ans_tf_list as $tfkey => $tf_opt) {
            $tfansId = 'anstnf-' . $anstfdata['id'] . '-' . $tfkey;
            // Image ans check
            preg_match('@src="([^"]+)"@', $tf_opt, $match);
            $src_ans = array_pop($match);
            $tf_opt_answer = (basename($src_ans)) ? basename($src_ans) : $tf_opt;

            if ($ans_tf_answer == $tf_opt_answer) {
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

            
            $fib_left_title_ans = strip_tags(trim($fib_ansdata['fib_qns'][0]), '<ul><ol><strong><em><br><i><b><u><img>');
            $fib_right_title_ans = strip_tags(trim($fib_ansdata['fib_qns'][1]), '<ul><ol><strong><em><br><i><b><u><img>');

            $fib_ans_list_ans = array_filter(json_decode($fib_ansdata['mcq']));
            
            $fib_ans_data = $fib_ans_list_ans[$fib_ansdata['answer']];
            if(!empty($fib_ans_data->filename)){
                $fib_ans = $fib_ans_data->filename;
            }else{
                $fib_ans = removeSpace(trim($fib_ans_list_ans[$fib_ansdata['answer']]));
            }
           
            echo '<li class="table-row"><p>' . $fib_left_title_ans . '_________' . $fib_right_title_ans . '</p>';
            echo '<ul class="attempQalist">';
            foreach ($fib_ans_list_ans as $fibkey => $fib_value) {
                $fibansId = 'ansfib-' . $fib_ansdata['id'] . '-' . $fibkey;

                if(!empty($fib_value->img)){
                    $fib_value_ans = $fib_value->filename;
                    $fib_value_data = $fib_value->img;               
                }else{
                    $fib_value_ans = $fib_value;
                    $fib_value_data =  $fib_value;
                }

                if ($fib_ans == $fib_value_ans) {
                    echo ' <li class="optfib-crct"> Correct : <strong style="color: #28a745;">' . $fib_value_data . '</strong></li> ';
                } else {
                    echo ' <li class="optqns" id="' . $fibansId . '"> Your Answer : <strong style="color: #ff0303;">' . $fib_value_data . '</strong></li> ';
                }
            }
            echo '</ul></li>';
        }
    }?>

                        <?php if (count($qns_data_mch) > 0) {
        echo '<li class="table-row"><p>' . $qns_data_mch[$mchQnsKey]['question'] . '</p>';
        echo '<div class="row mchview">';
        echo '<ul class="col-md-6 col-sm-6 col-xs-6">';
        foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
            $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
            if (in_array($l_ext, $supported_image)) {
                $mch_img_left = "<img src='" . $base_url . $left_val . "' />";
                echo ' <li class="badge mch-view alert-success">' . $mch_img_left . '</li> ';
            } else {
                echo ' <li class="badge mch-view alert-success" id="mch-left-' . $leftKey . '">' . $left_val . '</li> ';
            }
        }
        echo '</ul>';
        echo '<ul class="col-md-6 col-sm-6 col-xs-6">';
        foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
            $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_image)) {
                $mch_img_right = "<img src='" . $base_url . $right_val . "' />";
                echo ' <li class="badge mch-view alert-success">' . $mch_img_right . '</li> ';
            } else {
                echo ' <li class="badge mch-view alert-success" id="mch-right-' . $rightKey . '">' . $right_val . '</li> ';
            }
        }
        echo '</ul></div></li>';
    }?>

                    </div>
                    <div class="col col-md-4 col-sm-4 col-xs-4">
                        <div class="col col-12 scorebox">
                            <img src="<?=base_url('assets/publicassets/activity/img/trophy.png');?>"
                                style="width: 100px; display: block; margin: auto auto 20px auto;">
                            <span class="badge right_qns"
                                style="color: #28a745; background: #FFF; font-size: 25px;">0</span>
                            <span class="badge"
                                style="color: #f9a964; padding: 0; background: #FFF; font-size: 25px;">/</span>
                            <span class="badge total_qns"
                                style="color: #f00; background: #FFF; font-size: 25px;">0</span>
                        </div>
                        <p class="badge" style="color: #000; background: #f0ad4e;">Skipped : <span
                                class="badge skip_qns" style="color: #f00; background: #FFF;">0</span></p>
                        <?php /*
    <div class="col-md-12">
    <a href="javascript:location.reload();" class="label label-warning" style="font-size:20px;">Go Back</a>
    </div>
     */?>
                    </div>

                </ul>



            </div>
        </div>
    </div>
    <?php }?>
    <div class="result-text animated bounce ">
        <a href="javascript:location.reload();" class="btn green playagain">Play again</a>
    </div>
</div>

<?php if (empty($act_value)) {?>
<div class="no-data">
    <p>Data not found</p>
</div>
<?php
}?>

<?php $main_file = 'js/main_score.js';?>
<script src="<?=base_url('assets/publicassets/activity/' . $main_file);?>"></script>
<script>
ls.setItem('typeis', 'no');
ls.setItem('idis', '1');
$('body').on('click', '.vdo', function() {
    $obj = $(this);
    $video_url = $obj.attr('data-url');
    $data_id = $obj.attr('data-id');
    $('#vdo').find('.video-player').attr('src', $video_url);
    $('.vdo').css('background-color', '#afdce5');
    $(this).css('background-color', '#ceeef5');
    // $("#vdo")[0].load();
});
$('body').on('click', '.playvideo', function() {
    $obj = $(this);
    $video_url = $obj.attr('data-video-url');
    $data_type = $obj.attr('data-type');
    if ($data_type == "audioUpload") {
        $(".modal-title").text("Listen to the audio");
        $('#videoframe').css('display', "none");
        $('#audioArea').css('display', "block");
        $('#play_video').find('#audio1').attr('src', $video_url);
        $("#play_video audio")[0].load();
    } else {
        $(".modal-title").text("Play Video");
        $('#audioArea').css('display', "none");
        $('#videoframe').css('display', "block");
        $('#play_video').find('.vid-player').attr('src', $video_url);
        $("#play_video video")[0].load();
    }
    $('#play_video').modal('show');
    //console.log($video_url);
});

$('body').on('click', '.close-video', function() {
    $("#play_video video")[0].pause();
    $('#play_video').find('.vid-player').attr('src', '#');
});

function makeFullScreen() {
    var url = $('#eb').attr('src');
    $('#ebk').attr('src', url);
    $("#ebook_iframe").css("display", "block");
}

$("#close_iframe").click(function() {
    $("#ebook_iframe").css("display", "none");
});


function maxHeight(size) {
    var maxh = Math.max.apply(null, $('.questionOptionsMch1 p').map(function() {
        return $(this).height();
    }).get());
    $('.questionOptionsMch1 p').height(maxh);
    $('.questionOptionsMch1 p').css("font-size", size + "px");
}

maxHeight('16');

$(window).on('resize', function() {

    var win = $(this); //this = window
    if (win.width() < 766) {
        maxHeight('12');

    }
    if (win.width() >= 767) {
        maxHeight('16');
    }
});
if ($(window).width() < 766) {
    maxHeight('12');
}
</script>

<!-- modal -->
<div id="play_video" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Play Video</h4>
            </div>
            <div class="modal-body">
                <video style="width:100%;" id="videoframe" controls>
                    <source class="vid-player" src="#" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <div id="audioArea">
                    <img class="img-custom"
                        src="<?=base_url("assets/publicassets/assets/images/listen_background.gif")?>">
                    <audio autostart="false" preload="" id="audio1" controls="controls" src="#"
                        style="width: 100%; max-height: 300px;">Your browser does not support Audio!</audio>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-video" data-dismiss="modal"
                    style="background: #cecece; margin-top: 0;">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
function replace($str)
{

    // Array containing search string
    $searchVal = array("</li><li><ul>", "</ul></li></ul>");

    // Array containing replace string from  search string
    $replaceVal = array("</li>", "</ul>");

    // Function to replace string
    return str_replace($searchVal, $replaceVal, $str);
}

?>