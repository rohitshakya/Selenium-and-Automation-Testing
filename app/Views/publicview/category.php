   
  
<?php 
    include('header.php'); 
    $hiddenIds = "15";
    $Catdata1 = url($base_url."/VivaApp/trp/intrect/api/categoryy.php?class=".$class."&sub=".$sub."&series=".$series."&chapId=".$_GET['chapId']."&hideId=".$hiddenIds."15-7-16-18");		
    $catData = json_decode($Catdata1, true);
    $Chpdata = url($base_url . "/VivaApp/ExpeditionWeb/api/chapter.php?class=" . $class . "&sub=" . $sub . "&series=" . $series . "");
    $cdata = json_decode($Chpdata, true);
    $c_data = getDataById($cdata['data'], $_GET['chapId']);
    $order = array('23','14', '15','17','11','6','19','18',"7");
	$Type_s = array(
	'Test Your Knowledge' => 'बुद्धि परीक्षण',
	'Listening' => 'सुनना',
	'Terms to Know' => 'शब्द-ज्ञान ',
    'Quick Quiz' => 'अक्षर पहचानो',
	'Activities' => 'गतिविधि',
    'Vocabulary' => 'सही और गलत',
    'Comprehension' => 'मिलान कीजिए'
	);
    $array = $catData['data'];
    usort($array, "custom_compare");
    $catData['data'] = $array;
// echo"<pre>";
// print_r($catData['data']);
// die;
?>

<!--==========================
    Hero Section
  ============================-->
<section id="hero" class="wow fadeIn dot-grid">
    <div class="hero-container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="box-title"><?php print_r(str_replace("पाठ ","",$c_data['chap_name'])); ?>. <?php echo $c_data['chapT_name']; ?></h4> 
                <div class="act-box">
                    <div class="list-type padd-section">
                        <ul class="ul-col cat-list">
                            <?php foreach($catData['data'] as	$catDet){?>
                            <li><a
                                    href="activity.php?chapId=<?php echo $_GET['chapId'] ?>&catId=<?php echo $catDet['cat_id'] ?>"><?php echo $Type_s[$catDet['cat_name']]; ?>
                                </a></li>
                            <?php } ?>
                            <li></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>

                </div>
                <a href="index.php" class="go-back"><i class="fa fa-backward"></i> पिछला</a>
            </div>
        </div>


    </div>
</section><!-- #hero -->

<footer class="footer-bottom header-color">
    <div class="btns">
        <p>&copy; Copyright Viva Education</p>
    </div>
</footer>
<?php include('footer.php'); ?>
<script>
ls.setItem('typeis', 'no');
ls.setItem('idis', '1');
</script>