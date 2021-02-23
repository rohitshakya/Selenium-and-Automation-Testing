<?php
$supported_image = array('gif', 'jpg', 'jpeg', 'png');
$base_url = base_url();
$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$media_url = $base_url . "/master/";

if (!empty($qns_data_mch)) {
    $mchQnsKey = ($this->input->get('mk')) ? $this->input->get('mk') : '0';
    $Cnt_Mch = count($qns_data_mch[$mchQnsKey]['left_col']);
} else {
    $Cnt_Mch = 0;
}

$CI = &get_instance();
$CI->load->helper('custom');

function audio($url)
{
    $aud_url = (strpos($url, '/veb/')) ? $url . "?token=" . $_SESSION['voltAccountToken'] : '';
    if($aud_url!=""){
    ?>
<iframe class="aud" src="<?php echo $aud_url; ?>" style="width: 100%; height: 65px; border: none;"></iframe>

<?php } } ?>

<script>
var base_url = '<?=base_url();?>';
var setId = '<?=$set_Ids;?>';
var starttime = '<?=date('Y-m-d H:i:s');?>';
var cnt_tnf = <?php echo (count($qns_data_tnf)); ?>;
var cnt_mcq = <?php echo (count($qns_data_mcq)); ?>;
var cnt_mch = <?php echo ($Cnt_Mch); ?>;
var cnt_fib = <?php echo (count($qns_data_fib)); ?>;
var type = '<?php echo $this->uri->segment(3); ?>';
</script>
<style>
.mt100-b50 {
    margin: 75px 0px 50px 0px;
}

.choose-image img {
    width: 100%;
    max-width: 100%;
    border-radius: 20px 20px 0px 0px;
}

.boxes-center {
    padding: 50px 20px;
}

.skipbtn {
    background-color: #ea5744;
}

.otpfonts {
    font-size: 20px;
    font-weight: 800;
    color: #0e5a5a;
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
</style>
<style>
.single_cat {
    text-align: center;
    border-radius: 20px;
    position: relative;
    min-height: 180px;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    margin-bottom: 30px;
}

.bor_radius {
    border-radius: 15px;
    font-size: 20px;
}

.bor_radius:hover {}

.lockpayment {
    position: absolute;
    content: "";
    z-index: 9999;
    background: rgba(0, 0, 0, 0.8);
    text-align: center;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #ffaa2a;
    padding: 10% 0 0 0;
}

.s_s:after {
    content: "";
    top: 0px;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
}

.s_s {
    background: url(https://volt.development.vivadevops.com/assets/publicassets/assets/images/bookcover/images.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}

.p10 {
    padding: 30px 0;
}

.mt20 {
    margin-top: 20px;
}

.pr5 {
    padding-left: 5px;
    padding-right: 5px;
}

.mt100-b50 {
    margin: 75px 0px 50px 0px;
}

.opacityclosebtn {
    opacity: .8 !important;
}

.course-item-main {
    margin: 0 0 20px;
    border: 2px solid #a35726;
}

.topic-item-main {
    margin: 0 0 20px;
    border: 2px solid #a35726;
    border-bottom: 5px solid #a35726;
}

.bgdata1 {
    background: #d87913;
}

.bgdata2 {
    background: #277974;
}

.bgdata3 {
    background: #ea5744;
}

.bgdata4 {
    background: #d87913;
}

.bgdata5 {
    background: #277974;
}

.bgdata6 {
    background: #ea5744;
}

.bgdata7 {
    background: #d87913;
}

.bgdata8 {
    background: #277974;
}

.bgdata9 {
    background: #ea5744;
}

.bgdata10 {
    background: #d87913;
}

.bgdata11 {
    background: #277974;
}

.bgdata12 {
    background: #ea5744;
}

.bgPerformance {
    background: #254c64;
    padding: 10px 15px;
    border-radius: 10px;
}

.pm5 {
    padding-right: 5px !important;
    padding-left: 5px !important;
}

.single-multicategory-item {
    text-align: center;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    margin-bottom: 15px;
    border: 1px solid #607d8b69;
    border-radius: 5px;
}

.single-multicategory-item:hover {
    -webkit-box-shadow: 0 20px 40px #eaeaea;
    box-shadow: 0 20px 40px #eaeaea;
}

.single-multicategory-item:hover .feature-round-shape-3 {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.single-multicategory-item h4 a {
    color: #374a5e;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.single-multicategory-item h4 a:hover {
    color: #50be46;
}

.multimodules {
    color: #fff;
}

.bgdata {
    background: #d87913;
}

.single-moduls {
    padding: 20px 20px 10px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    margin-bottom: 30px;
    border: 1px solid #607d8b69;
    min-height: 150px;
    border-radius: 12px;
}

.single-moduls:hover {
    -webkit-box-shadow: 0 20px 40px #eaeaea;
    box-shadow: 0 20px 40px #eaeaea;
}

.single-moduls:hover .feature-round-shape-3 {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.single-moduls .category-image {
    position: relative;
    /*height: 100px;*/
}

.single-moduls .category-image img {
    width: 80%;
    height: auto;
    margin: auto;
    padding: 20px;
}

.single-moduls .category-image .feature-round-shape-3 {
    position: absolute;
    top: -15px;
    left: 50%;
    width: auto;
    height: auto;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.single-moduls span {
    color: #374a5e;
    text-transform: capitalize;
}

.single-moduls h4 a {
    color: #374a5e;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.single-moduls h4 a:hover {
    color: #50be46;
}

.modulsname {
    color: #fff;
    font-size: 30px;
}

.mt36 {
    margin-top: 36px;
}

.pm5 {
    padding-right: 5px !important;
    padding-left: 5px !important;
}

.single-multicategory-item {
    padding: 10px 10px 0px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    margin-bottom: 30px;
    border: 1px solid #607d8b69;
    min-height: 115px;
    border-radius: 5px;
}

.single-multicategory-item:hover {
    -webkit-box-shadow: 0 20px 40px #eaeaea;
    box-shadow: 0 20px 40px #eaeaea;
}

.single-multicategory-item:hover .feature-round-shape-3 {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.single-multicategory-item .category-image {
    position: relative;
    /*height: 100px;*/
}

.single-multicategory-item .category-image img {
    width: auto;
    height: auto;
    margin: auto;
    max-height: 50px;
    max-width: 50px;
}

.single-multicategory-item .category-image .feature-round-shape-3 {
    position: absolute;
    top: -15px;
    left: 50%;
    width: auto;
    height: auto;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.single-multicategory-item span {
    color: #374a5e;
    text-transform: capitalize;
}

.single-multicategory-item h4 a {
    color: #374a5e;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.single-multicategory-item h4 a:hover {
    color: #50be46;
}

.multimodules {
    color: #fff;
}

.boxes-tnf {
    margin: auto;
    margin-bottom: 20px;
}

.boxes-mcq {
    margin: auto;
    margin-bottom: 20px;
}

.mr-30 {
    margin-right: 30px;
}

.mt-20 {
    margin-top: 20px;
}
</style>
<script>
var base_url_practice = "<?=base_url('playactivity')?>";
</script>
<div id="ebook_iframe" style="display:none">
    <i class="fa fa-times" id="close_iframe"></i>
    <iframe width="100%" height="100%" id="ebk" frameborder="0" allowfullscreen></iframe>
</div>
<!-- BREADCRUMB AREA -->
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left; padding-top:10px;">
                    <div class="breatcome2_content">
                        <ul>
                            <li>
                                <a href="<?=base_url()?>"><img class="homebtn"
                                        src="<?=base_url()?>assets/publicassets/assets/images/home.png"
                                        class="img-fluid" alt=""></a>
                                <i class="fa fa-angle-right"></i>
                                <a
                                    href="<?=base_url()?>theme-months/<?php $class = $this->db->query("select slug from mastar_subject where sub_id =" . $this->session->userdata('voltAccountSubject'));
$cls = $class->row();
echo $cls->slug;?>">
                                    <?php $class = $this->db->query("select sub_name from mastar_subject where sub_id =" . $this->session->userdata('voltAccountSubject'));
$cls = $class->row();
echo $cls->sub_name;?>
                                </a>
                                <i class="fa fa-angle-right"></i>
                                <a
                                    href="<?=base_url()?>theme/<?php $class = $this->db->query("select slug from mastar_subject where sub_id =" . $this->session->userdata('voltAccountSubject'));
$cls = $class->row();
echo $cls->slug;?>/<?php echo $month; ?>">
                                    Month <?php echo $time; ?>
                                </a>
                                <?php if (@$module) {?>
                                <i class="fa fa-angle-right"></i>
                                <a
                                    href="<?=base_url()?>theme-subjects/<?php echo $module->slug; ?>/<?php echo $month; ?>">
                                    <?php echo $module->m_name; ?>
                                </a>
                                <?php }?>
                                <?php if ($series) {?>
                                <i class="fa fa-angle-right"></i>
                                <a
                                    href="<?=base_url()?>theme-category/<?php echo base64_encode($series->slug); ?>/<?php $month;?>">
                                    <?php echo $series->series_name; ?>
                                </a>
                                <?php }?>
                                <i class="fa fa-angle-right"></i>
                                <a
                                    href="<?=base_url()?>theme-topic-category/<?php echo base64_encode($chapter->id); ?>/<?php echo $month; ?>"><?=$chapter->chapT_name?></a>
                                <i class="fa fa-angle-right"></i>
                                <?=$catactivity->cat_name?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start Your Coad-->

            <div>
                <div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="main-admission">
                            <a href="javascript:void();">
                                <div class="single-moduls  bgdata1">
                                    <div class="category-image">
                                        <img src="<?=base_url()?>master/uploads/category/<?=$catactivity->cat_img?>">
                                    </div>
                                    <div class="category-title margin-bottom-10">
                                        <h4 class="modulsname"><?=$catactivity->cat_name?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
$int = 0;
$actDatas = $this->db->query("select category,id from question where class=$clid and series=0 and subject = $suid and month=$time and category != $acid and chapterTitle=$chid")->result_array();
foreach ($actDatas as $actData) {

    $urlIs = "#active";
    $category = $this->getModel->singledata('category_type', ['cat_id' => $actData['category']]);
    $getActivityType = API_connector(base_url("api/getqdata/?setId=" . $actData['id']));
    if ($getActivityType->status > 0) {?>
                        <?php $urlIs = strtolower("classclsis" . $chapter->class_id . '~' . $subject->sub_name . 'subis' . $subject->sub_id . '~' . @$series->series_name . 'seris' . @$series->series_id . '~' . $chapter->chapT_name . 'topsis' . $chapter->id . '~activity' . $actData['category'] . '~') . $month;?>
                        <div class="col-lg-4 col-md-4 pm5">
                            <a
                                href="<?=base_url('playactivity/' . $actData['id'] . '/' . $getActivityType->type[0] . '?c=' . preg_replace('/[^A-Za-z0-9~-]/', '', $urlIs))?>">
                                <div class="single-multicategory-item  bgdata1">
                                    <div class="category-image">
                                        <img src="<?=base_url('master/uploads/category/' . $category->cat_img)?>">
                                    </div>
                                    <div class="category-title margin-bottom-10">
                                        <h5 class="multimodules"><?=$category->cat_name?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                    </div>



                    <?php if (count($qns_data_mcq) > 0) {?>
                    <div class="col-md-8 newactivityarea quedivmcq" id="mcq">
                        <div>
                            <?php
$qns_mcq_data = '';
    $mcq_ans = '';
    $mcq_sh = 1;

    foreach ($qns_data_mcq as $k => $qmcqdata) {

        $qns_mcq_title = strip_tags(removeSpace(trim($qmcqdata['question'])), '<ul><ol><span><strong><em><br><i><b><u>');
        $qns_mcq_list = array_filter(json_decode($qmcqdata['mcq']));

        $qns_mcqcrct_ans = @$qns_mcq_list[$qmcqdata['answer']];

        ?>
                            <div class="tnfbgstaudio activity-section <?php if ($mcq_sh == '1') {
            echo 'first-div';
        } else {
            echo 'next-div" style="display:none;';
        }?>">
                                <?=audio($qmcqdata['url'])?>
                                <div class="act-qtion ">
                                    <h3><?php /*<?=$mcq_sh;?>.*/?> <?php echo $qns_mcq_title; ?></h3>
                                </div>

                                <div class="choose-image">
                                    <?php if ($qmcqdata['urlImage']) {
            echo $qmcqdata['urlImage'];
        }?>
                                </div>

                                <div class="boxes-mcq questionOptions shuffle-list-items1">
                                    <?php
#shuffle($qns_mcq_list);
        foreach ($qns_mcq_list as $key => $opt) {
            $mcqqnsId = 'mcq-' . $qmcqdata['id'] . '-' . $key;
            $ans = 'data-answer="' . $qns_mcqcrct_ans . '"';
            echo '<input type="radio" name="' . $qmcqdata['id'] . '" id="box-' . $mcqqnsId . '"/><label class="radio-button__control opt-style quesItem qClick col-md-4 otpfonts" ' . $ans . ' id="' . $mcqqnsId . '" for="box-' . $mcqqnsId . '" data-qid="' . $qmcqdata['id'] . '">' . $opt . '</label>';
        }
        ?>
                                </div>


                                <?php if (count($qns_data_mcq) == $mcq_sh) {
            echo '<div class="row col-md-12 mt-20 qClick viewscore" id="' . $qns_data_mcq[$mcq_sh - 1]['id'] . '">
                           <input type="submit" class="col-md-2 btn blue col-md-offset-5 btn green" value="Submit" />
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
                            <?php #$qmcqdata['solutions'];
        ?>
                            <!-- QN : <?=$mcq_sh;?> -->
                            <?php $mcq_sh++;
    }?>
                        </div>
                    </div>
                    <?php }?>
                    <?php if (count($qns_data_infographics) > 0) {
    ?>
                    <!-- ----------------------Infographics-------------------------------- -->
                    <div class="col-md-8 newactivityarea bdr-rignt" id="imgtext">
                        <div class="imgtextData">
                            <?php
$qns_info_data = '';
    $info_sh = 1;
    foreach ($qns_data_infographics as $qinfodata) {
        $qns_info_title = html_entity_decode($qinfodata['questionHtml']);

        $qns_info_text = strip_tags(removeSpace(trim(replace($qinfodata['text']))), '<ul><ol><li><p><strong><em><br><i><b><u><sup><sub><table><tbody><tr><td><p>');
        ?>
                            <div class="activity-section <?php if ($info_sh == '1') {
            echo 'first-div';
        } else {
            echo 'next-div" style="display:none;';
        }?>">
                                <div class="imgtextDataInner">
                                    <?php if ($qinfodata['image']) {?>
                                    <div class="act-qtion-img">
                                        <img src="<?php echo $media_url . $qinfodata['image']; ?>"
                                            class="questionImgData" />
                                    </div>
                                    <?php }?>
                                    <?php if ($qns_info_title) {?>
                                    <div class="act-qtion">
                                        <!--<?=$info_sh;?>.--> <?php echo $qns_info_title; ?>
                                    </div>
                                    <?php }?>
                                </div>
                                <div style="clear:both;"></div>
                                <?php $showAns = ($curr_type == 'parichay') ? 'style="display: none;"' : '';?>
                                <div class="boxes" id="SolutionBox-<?=$info_sh;?>" style="display: none;">
                                    <?php if ($qns_info_text) {?>
                                    <?php echo $qns_info_text; ?>
                                    <?php }?>
                                </div>
                                <div style="clear:both;"></div>


                                <?php if (count($qns_data_infographics) > 1) {?>
                                <div class="exctedbuttons2 TypeNxt1">
                                    <input type="submit" class="btn green" value="Next" />
                                </div>

                                <?php }?>




                            </div>
                            <?php $info_sh++;
    }?>
                            <input type="hidden" name="infoNum" value="<?=count($qns_data_infographics);?>" />
                        </div>
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
                    <?php if (count($qns_data_tnf) > 0) {?>
                    <!-- ----------------------True and false--------------------- -->

                    <div class="col-md-8 newactivityarea quediv" id="tnf">
                        <?php
$qns_tf_data = '';
    $ans = '';
    $sh = 1;

    foreach ($qns_data_tnf as $k => $qtfdata) {
        if (@array_key_exists('t', json_decode($qtfdata['myans'])) && trim(json_decode($qtfdata['myans'])->t) != '' && trim(json_decode($qtfdata['myans'])->f) != '') {
            if ($qtfdata['answer'] == 't') {
                $ans = trim(json_decode($qtfdata['myans'])->t);
            } elseif ($qtfdata['answer'] == 'f') {
                $ans = trim(json_decode($qtfdata['myans'])->f);
            }
            $qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $qns_tf_list = array(trim(json_decode($qtfdata['myans'])->t), trim(json_decode($qtfdata['myans'])->f));
            $qns_tf_answer = $ans;
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
                        <div class="activity-section tnfbgstaudio <?php if ($sh == '1') {
            echo 'first-div';
        } else {
            echo 'next-div" style="display:none;';
        }?>">
                            <?=audio($qtfdata['url'])?>


                            <div class="act-qtion">
                                <h3><?=$sh;?>. <?php echo $qns_tf_title; ?></h3>
                            </div>
                            <div class="boxes-tnf questionOptions">
                                <?php
#shuffle($qns_tf_list);
        foreach ($qns_tf_list as $tf_key => $opt) {
            $tfansId = 'tnf-' . $qtfdata['id'] . '-' . $tf_key;
            $ans = 'data-answer="' . $qns_tf_answer . '"';
            echo '<input type="radio" name="' . $qtfdata['id'] . '" id="box-' . $tfansId . '"/><label class="quesItem qtfClick col-md-6" ' . $ans . ' id="' . $tfansId . '" for="box-' . $tfansId . '"  data-qid="' . $qtfdata['id'] . '">' . $opt . '</label>';
        }
        ?>
                            </div>

                            <?php if (count($qns_data_tnf) == $sh) {
            echo '<div class="excbuttons qtfClick viewscore" id="' . $qns_data_tnf[$sh - 1]['id'] . '">
                        <input type="submit" class="btn green" value="Submit" />
                        </div>';
        } else {?>
                            <div class="row col-md-12 mt-20">
                                <input type="submit" class="col-md-2 btn blue col-md-offset-4 mr-30 show skip"
                                    value="Skip" id="skip-<?=$qtfdata['id'];?>" />
                                <input type="submit" class="col-md-2 btn show green next" data-id="<?=$qtfdata['id'];?>"
                                    value="Submit" />
                            </div>
                            <?php }?>
                        </div>
                        <!-- QN : <?=$sh;?> -->
                        <?php $sh++;
    }?>
                    </div>
                    <?php }?>
                    <?php if (count($qns_data_fib) > 0) {?>
                    <div class="col-md-8 newactivityarea  bdr-rignt" id="fib">
                        <?php
$qns_fib_data = '';
    $fib_ans = '';
    $fib_sh = 1;
    foreach ($qns_data_fib as $fib_data) {
        $fib_left_title = strip_tags(trim($fib_data['fib_qns'][0]), '<ul><ol><strong><em><br><i><b><u><img>');
        $fib_right_title = strip_tags(trim($fib_data['fib_qns'][1]), '<ul><ol><strong><em><br><i><b><u><img>');
        $fib_ans_list = array_filter(json_decode($fib_data['mcq']));
        $fib_crct_ans = $fib_ans_list[$fib_data['answer']];
        //print_r($fib_ans_list);
        ?>
                        <div class="activity-section  <?php if ($fib_sh == '1') {
            echo 'first-div';
        } else {
            echo 'next-div" style="display:none;';
        }?>">
                            <?=audio($fib_data['url'])?>
                            <div class="act-qtion">
                                <h3><?php echo $fib_left_title; ?> <span class="fillblank"
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
            ?>
                                <?php if (removeSpace(trim($fib_crct_ans)) == removeSpace(trim($fib_value))) {?>
                                <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-answer="' . removeSpace(trim($fib_value)) . '" id="' . $fibqnsId . '"for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>
                                <?php } else {?>
                                <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-text="' . removeSpace(trim($fib_value)) . '" id="' . $fibqnsId . '" for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>
                                </p>
                                <?php }
            $i++;
        }?>
                            </div>

                            <?php if (count($qns_data_fib) == $fib_sh) {
            echo '<div class="excbuttons fibClick viewscore" id="' . $qns_data_fib[$fib_sh - 1]['id'] . '">
                        <input type="submit" class="btn green" value="Submit" />
                         </div>';
        } else {?>
                            <div class="row col-md-10 col-md-offset-1">
                                <input type="submit" class="col-md-3 btn blue show skip" value="Skip"
                                    id="skip-<?=$fib_data['id'];?>" />
                                <input type="submit" class="col-md-3 btn show green next"
                                    data-id="<?=$fib_data['id'];?>" value="Submit" />
                            </div>
                            <?php }?>
                        </div>
                        <!-- QN : <?=$fib_sh;?> -->
                        <?php $fib_sh++;
    }?>
                    </div>
                    <?php }?>
                    <?php if (count($qns_data_mch) > 0) {
    $mchQnsKey = ($this->input->get('mk')) ? $this->input->get('mk') : '0';
    ?>
                    <!-- ----------------------Drag and drop (Matching)---------------------- -->
                    <?=audio($qns_data_mch[$mchQnsKey]['url'])?>
                    <div class="col-md-8 newactivityarea  bdr-rignt" id="mch">
                        <div class="activity-section MchBox">
                            <div class="act-qtion">
                                <h3><?php echo $qns_data_mch[$mchQnsKey]['question']; ?></h3>
                            </div>
                            <div id="cardPile">
                                <div class="questionOptionsMch shuffle-list-items">
                                    <?php
$Lcnt = 1;
    foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
        $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
        ?>
                                    <p class="draggable quesItemMch" id="drag<?=$Lcnt;?>" data-id='<?=$leftKey;?>'>
                                        <?php if (in_array($l_ext, $supported_image)) {
            echo "<img src='" . $base_url . $left_val . "' />";
        } else {
            echo $left_val;
        }?>
                                    </p>
                                    <?php $Lcnt++;
    }?>
                                </div>
                                <div class="questionOptionsMch shuffle-list-items">
                                    <?php
$Rcnt = 1;
    foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
        $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));

        ?>
                                    <p class="droppable quesItemMch mchClr" id="drop<?=$Rcnt;?>"
                                        data-aid='<?=$rightKey;?>'>
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
                                <?php $mchpageurl = $qns_data_mch[0]['set_id'] . '/mch?c=' . $this->input->get('c');?>
                                <?php foreach ($qns_data_mch as $mchkey => $mchdata) {?>
                                <a href="<?=base_url('playactivity/' . $mchpageurl . '&mk=' . $mchkey);?>"
                                    class="btn blue">Excercise <?=$mchkey + 1;?></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div id="mySidebar" class="sidebar" style="background:#FFF">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <?php
$int = 0;
$actDatas = $this->db->query("select chapterTitle,id from question where class=$clid and series=0 and subject = $suid and month=$time and category !=$acid and chapterTitle != $chid group by chapterTitle")->result_array();
foreach ($actDatas as $actData) {
    $urlIs = "#active";
    $chapName = $this->getModel->singledata('chaptername', ['id' => $actData['chapterTitle']]);
    $getActivityType = API_connector(base_url("api/getqdata/?setId=" . $actData['id']));
    if ($getActivityType->status > 0) {?>
                <div class="col-md-12">
                    <a href="<?=base_url('theme-topic-category/' . base64_encode($chapName->id) . '/' . $month)?>"
                        class="inner-prog"
                        style="display:block; padding: 20px 0; box-shadow: 0px 0px 8px #656363; background:#<?=@$getCategory->cat_bg?>">
                        <img src="<?=base_url('master/uploads/chapterbanner/' . $chapName->chap_image)?>"
                            class="center-block" style="width:75px;">
                        <span><?=$chapName->chapT_name?></span>
                    </a>
                </div>
                <?php }
}
?>
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
    <?php if ($this->uri->segment(1) == 'playactivity') {?>
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
                        <div class="col col-md-8"> Solutions</div>
                        <div class="col col-md-4"> Score</div>
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
        echo '
                        <li class="table-row">
                            <p>' . $qns_mcq_result_title . '</p>
                            ';
        if ($qmcqresult['urlImage']) {
            echo $qmcqresult['urlImage'];
        }
        echo '
                            <ul class="attempQalist">
                                ';
        foreach ($qns_mcq_result_list as $mcqkey => $opt) {
            $mcqansId = 'ansmcq-' . $qmcqresult['id'] . '-' . $mcqkey;
            if ($mcq_ans == $opt) {
                echo '
                                <li class="optmcq-crct"> Correct : <strong style="color: #28a745;">' . $opt .
                    '</strong>
                                </li>
                                ';
            } else {
                echo '
                                <li class="optqns" id="' . $mcqansId . '"> Your Answer : <strong
                                        style="color: #ff0303;">' . $opt . '</strong></li>
                                ';
            }
        }
        echo '
                            </ul>
                        </li>
                        ';
    }
}?>
                        <?php if (count($qns_data_tnf) > 0) {
    foreach ($qns_data_tnf as $anstfdata) {
        if (@array_key_exists('t', json_decode($anstfdata['myans'])) && trim(json_decode($anstfdata['myans'])->t) != '' && trim(json_decode($anstfdata['myans'])->f) != '') {
            if ($anstfdata['answer'] == 't') {
                $ans = trim(json_decode($anstfdata['myans'])->t);
            } elseif ($anstfdata['answer'] == 'f') {
                $ans = trim(json_decode($anstfdata['myans'])->f);
            }
            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $ans_tf_list = array(trim(json_decode($anstfdata['myans'])->t), trim(json_decode($anstfdata['myans'])->f));
            $ans_tf_answer = $ans;
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
            $fib_left_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][0])), '<ul><ol><strong><em><br><i><b><u>');
            $fib_right_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][1])), '<ul><ol><strong><em><br><i><b><u>');
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
    }?>
                        <?php if (count($qns_data_mch) > 0) {
        echo '<li class="table-row"><p>' . $qns_data_mch[$mchQnsKey]['question'] . '</p>';
        echo '<div class="row">';
        echo '<ul class="col-md-6">';
        foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
            $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
            if (in_array($l_ext, $supported_image)) {
                $mch_img_left = "<img src='" . $base_url . $left_val . "' />";
                echo ' <li class="badge mch-view alert-success">' . $mch_img_left . '</li> ';
            } else {
                echo ' <li class="badge mch-view alert-success">' . $left_val . '</li> ';
            }
        }
        echo '</ul>';
        echo '<ul class="col-md-6">';
        foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
            $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_image)) {
                $mch_img_right = "<img src='" . $base_url . $right_val . "' />";
                echo ' <li class="badge mch-view alert-success">' . $mch_img_right . '</li> ';
            } else {
                echo ' <li class="badge mch-view alert-success">' . $right_val . '</li> ';
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
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/publicassets/activity/css/audio-player.css');?>">
<?php $main_file = 'js/main_score.js';?>
<script src="<?=base_url('assets/publicassets/activity/' . $main_file);?>"></script>
<script src="<?=base_url('assets/publicassets/activity/js/audio-player.js');?>"></script>
<script>
function maxHeight(size){
	var maxh = Math.max.apply(null,$('.questionOptionsMch p').map(function(){ return $(this).height();}).get());
	$('.questionOptionsMch p').height(maxh);
	$('.questionOptionsMch p').css("font-size",size+"px");
}

	maxHeight('16');
	
	
$(window).on('resize', function(){
	
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