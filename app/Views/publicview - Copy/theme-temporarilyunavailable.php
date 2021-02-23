<?php include "header.php";?>
<?php echo link_tag('assets/publicassets/assets/css/modulspage.css');?>
<?php echo link_tag('assets/publicassets/course.css');?>
<?php echo link_tag('assets/publicassets/circle.css');?>
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">

        <!-- breadcrumbs -->
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left;">
                    <div class="breatcome2_content">
                        <ul>
                            <?php if($getLogin){?>
                            <li>
                                <a href="<?=base_url()?>/">
                                <img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt="">
                                </a>
                              
                                <em class="fa fa-angle-right"></em>
                               Temporarily unavailable
                            </li>
                            <?php } else{?>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="row">
            <div class="col-md-3">
                <!-- User Class details  -->
                <div class="main-admission">
                    <a href="javascript:void();">
                        <div class="promo-center">
                            <?php  $cid = session('voltAccountClass');
                        $classData = $modelData->singledata('mastar_class', ['class_id' => $cid]);
                        if(!empty($classData->c_img)){
                        	$CLassImgName = ($classData->c_img)?$classData->c_img:'';
                        	$classImg = base_url('master/uploads/classimage/'.$CLassImgName);
                        }else{
                        	$classImg = base_url('master/uploads/classimage/dummyclass.png');
                        }										
                        ?>
                            <img class="w100" src="<?=$classImg;?>" alt="class" />
                        </div>
                    </a>
                </div>
                <!-- -->
                 <?php /*
                <?php if($getLogin){?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <h4 class="progrssgraphs">Show Progress Graphs</h4>
                            <div class="switchbar">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 hideme">
                    <div class="col-md-12 col-sx-12 col-sm-12 m-10">
                        <div class="c100 p25 actsetn">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Activities attempted</span>
                    </div>
                    <div class="col-md-6 col-sx-6 col-sm-6">
                        <div class="c100 p25 green">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Growth rate</span>
                    </div>
                    <div class="col-md-6 col-sx-6 col-sm-6">
                        <div class="c100 p25 orange">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Right answers</span>
                    </div>
                </div>
               
               <div class="bgPerformance mt-5">
               <div class="">
               <h5 class="titlePerformance">Student Performance</h5>
                          <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                              40%
                     </div>
                  </div>
               </div>
               <div class="">
                  <h5 class="titlePerformance">Program Performance</h5>
                    <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                              70%
                        </div>
                    </div>
                </div>
               <div class="">
                   <h5 class="titlePerformance">School Performance</h5>
                     <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                              90%
                            </div>
                          </div>
                    </div>
               </div>
         
                <?php } else{?>
                <?php } ?>
                   */?>
            </div>


<div class="col-md-9 main-admission">
                                    <div class="col-md-12 main-admission cmset">
                        <h4>Temporarily unavailable</h4>
                    </div>   
                            </div>


        </div>
    </div>
</div>
<script>
$('select').on('change', function() {
    //alert( this.value );
    window.location.href = this.value;
});


$(document).ready(function() {
    $(".switch input").on("change", function(e) {
        const isOn = e.currentTarget.checked;

        if (isOn) {
            $(".hideme").show();

        } else {
            $(".hideme").hide();
        }
    });
});
</script>
<?php include "footer.php";?>