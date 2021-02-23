<?php include("header.php");
//$her2 = explode('~',$uri->getSegment(2));
//$her = explode('~',$this->input->get('her'));
//$nmonth = date("m", strtotime($her[2]));
 ?>
<style type="text/css">
    .lockpayment{
            position: absolute;
    content: "";
    z-index: 9999;
    background: rgba(0,0,0,0.8);
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
    background: url(<?=base_url('assets/publicassets/')?>assets/images/bookcover/images.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}
.p10 {
    padding: 30px 0;
}
    .mt100-b50{
    margin: 50px 0px 20px 0px;
}  
    .progressreport{
      background: #d87913;
        padding: 10px;
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

.single-moduls .category-image {
    position: relative;
    /* height: 100px; */
}
.single-moduls .category-image img {
       width: auto;
    height: 150px;
    margin: auto;
    padding: 10px;
}
    .modulsname {
    color: #fff;
    font-size: 36px;
}
.bgdata1 {
    background: #d87913;
} 
     
    .pm5{
       padding-right: 5px !important;
       padding-left: 5px !important;
    }
    
    .single-multicategory-item {
    padding: 10px 10px 0px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    margin-bottom: 15px;
    border: 1px solid #607d8b69;
    min-height: 100px;
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
    .snamefont{
    font-size: 12px;
    font-weight: 600;
    }
    
    
      .side_title{
       border: 2px solid #ea5744;
    text-align: left;
    color: #ea5744;
    font-weight: 600;
    font-size: 20px;
    padding: 10px 15px;
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
   
   
   .titlePerformance{
	color:#fff;   
   }
   .mt-5{
	   margin-top:20px;
   }
    .single-category-item {
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
       
       
    .single-category-item:hover {
    -webkit-box-shadow: 0 20px 40px #eaeaea;
    box-shadow: 0 20px 40px #eaeaea;
    }
    .single-category-item:hover .feature-round-shape-3 {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1); 
    }
       
    .single-category-item .category-image {
    position: relative;
    /*height: 100px;*/ 
    }
       
       
    .single-category-item .category-image img {
          width: auto;
    height: auto;
    margin: auto;
    max-width: 60px;
    max-height: 60px;
    }
       
    .single-category-item .category-image .feature-round-shape-3 {
      position: absolute;
      top: -15px;
      left: 50%;
      width: auto;
      height: auto;
      -webkit-transition: all 0.3s ease-in;
      -o-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in; 
    }
       
   .single-category-item span {
    color: #374a5e;
    text-transform: capitalize; 
    }
       
   .single-category-item h4 a {
    color: #374a5e;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    }
    .single-category-item h4 a:hover {
      color: #50be46;
    }
    
</style>
<link href="<?=base_url()?>/assets/publicassets/course.css" rel="stylesheet" type="text/css" />
<div class="admision_area about_page mt100-b50" id="admission" style="position:relative;">
<?php if($days>15 && $getLogin->vc_paymentinfo==0){ ?>
<div class="lockpayment">
    <p>Your 15 day's free trial has been expired.</p>
    <p>Purchase your package</p>
    <br>
    <p><a href="<?=base_url('volt-package')?>" class="link_button">Purchase Package</a></p>
</div>
<?php }?>
	<div class="container" style="max-width:1350px">

		<div class="row padding-top">
			<div class="col-md-12">
				<div class="section_title_style2" style="text-align: left; padding-top:10px;">
				<div class="breatcome2_content">
					<ul>
						<li>
                             <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt=""></a>
                             <i class="fa fa-angle-right"></i> 
                             <a href="<?=base_url()?>/theme-months/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>">
                             <?php $class = $db->query("select sub_name from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->sub_name; ?>  
                             </a> 
                             <i class="fa fa-angle-right"></i>
                             <a href="<?=base_url()?>/theme/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>/<?php  echo $uri->getSegment('3');?>">   
                             Month <?php echo array_search($month, session('finalTermsSession'));?>
                             </a>    
                             <i class="fa fa-angle-right"></i>
                                
                             <?php echo $moduleData->m_name; ?>
                               
                             
                        </li>
				    </ul>
				</div>
				</div>
				
			
				
				
			</div>
		</div>

		<!-- section title -->
		<div class="row">
			<div class="col-md-4">
		
						
               
                <div class="main-admission">
                  <a href="javascript:void();">                       	
					<div class="single-moduls  bgdata1">
                       <div class="category-image">
                       <?php $serImg = ($moduleData->m_img)?$moduleData->m_img:'noimage.png'; ?>
                               <img src="<?=base_url('master/uploads/modulebanner/'.$serImg)?>">
				       </div>
                        <div class="category-title margin-bottom-10">
                                <h4 class="modulsname"><?=$moduleData->m_name?></h4>
                        </div>
                     </div>
                  </a>
                 </div>
                <?php  if ($moduleList) {
              $i=1; foreach ($moduleList as $getModule) {
                     if($getModule['series']==0){
                     $link =  base_url('theme-category/c2VnbWVudDM0NTQ0ISEzMA==/'. $uri->getSegment(3)); 
                  }else{
                     $link =  base_url('theme-subjects/' .$getModule['slug'].'/'. $uri->getSegment(3));
                  }
              ?>
                
                  <div class="col-lg-4 col-md-4 pm5">
                    <a href="<?=$link;?>">
                        <div class="single-multicategory-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/icon.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <h5 class="multimodules"><?=$getModule['m_name']?></h5>
                                </div>
                        </div>
                    </a>
                </div> 
                 <?php $i++;} }else{    ?>
                <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                <?php } ?>
                
                
                <?php  if ($bloglist) { $i=1; foreach ($bloglist as $getModule) { ?>   
                 <div class="col-lg-4 col-md-4 pm5">
                  <a href="<?php echo $getModule['m_url']; ?>" target="_blank">
                        <div class="single-multicategory-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/icon.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <h5 class="multimodules"><?=$getModule['m_name']?></h5>
                                </div>
                            </div>
                        </a>
                </div>         
               <?php $i++;} }else{    ?>
               <?php } ?>    
             
   		
			</div>
			
				
            <div class="col-md-8 course-item-wrapper gap-20">
					<div class="GridLex-grid-noGutter-equalHeight">
					
		
                        
                        
			<?php if($chapData){ $i=1; foreach($chapData as $getchapData){ 
			    $showis = ($getLogin->vc_paymentinfo==1)?count($getchapData):3;
			    if(@$int < $showis){ ?>
		
             
               
			      <div class="GridLex-col-3_mdd-4_sm-4_xs-6_xss-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="course-item-main">
							<div class="course-item course-item-style cuadro_intro_hover">
                                <a href="<?=base_url()?>/theme-topic-category/<?php echo base64_encode($getchapData['id']); ?>/<?php  echo $uri->getSegment('3');?>">
							      <div class="course-item-image">
    								  <img src="<?=base_url('master/uploads/chapterbanner/'.$getchapData['chap_image'])?>" alt=" Image " class="img-responsive">
    								</div>
    							  <div class="caption">
    							 <div class="blur"></div>
								<div class="course-item-content caption-text">
									<h3 class="text-primary"><?=$getchapData['chapT_name']?></h3>
									<p style="margin-top:4px;"><?=$getchapData['chap_content']?></p>
									 
								</div>
								</div>
								<div class="ellipsis"></div>
								</a>
								
							</div>
                            <div class="progressreport">
                             <div class="themeprogress">
							<?php 
							$activities_attempted=0;
							
						  $progressbar = API_connector(base_url("api/progressbar?class=" . session('voltAccountClass') . "&subject=" . $moduleData->subject_id."&month=" . $mid."&chapterTitle=" . $getchapData['id']."&user=". $getLogin->vc_id));
						  
							if($progressbar->status==1){
								$reportAPI = @$progressbar->data->totalM;
								$totalQ = @$progressbar->data->totalQ;
							if($totalQ>0 && $reportAPI!=null){
								$activities_attempted =($reportAPI->allattempt)*100/$totalQ;
							}else{
								$activities_attempted =0;  	
							}}
							?>
                              <div class="themeprogress-bar themeprogress-bar-info" role="progressbar" aria-valuenow="<?=round((float)$activities_attempted)?>"
                              aria-valuemin="0" aria-valuemax="100" style="width:<?=(round((float)$activities_attempted))?round((float)$activities_attempted):'10'?>%">
                                <?=round((float)$activities_attempted)?>% 
                              </div>
                            </div>
                            </div>
                        </div>
               </div>         
                        
                        
                        
			
			
			<?php $i++; } } }
			if($getLogin->vc_paymentinfo==0){
			?>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single_feature">
					<div class="feature_content_wrap" style="background:#1f3f82;">
						<div class="feature_content_inner">
							<div class="feature_content">
								<h2>Purchase Package<br>For Learn More</h2>
								<ul class="activitytypelist showid1 disphide listof602"></ul>
							</div>
							<div id="wrapper">

							<a href="#" class="my-super-cool-btn">
									<div class="dots-container">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
									<span>Subscribe</span>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php }?>
				</div>
			</div>
        </div>
	</div>


</div>
<script>
ls.setItem('typeis', 'no');
ls.setItem('idis', '1');
$('body').on('click', '.playvideo', function() {
  		$obj = $(this);  		
		$video_url = $obj.attr('data-video-url');	
		$('#play_video').find('.vid-player').attr('src', $video_url);
		$('#play_video').modal('show'); 
		$("#play_video video")[0].load(); 		
  		//console.log($video_url);
});
$('body').on('click', '.close-video', function() {	
	$("#play_video video")[0].pause(); 
	$('#play_video').find('.vid-player').attr('src', '#');
});
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
				<video style="width:100%;" controls>
					<source class="vid-player" src="#" type="video/mp4">                       
					Your browser does not support HTML5 video.
				</video>				
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-default close-video" data-dismiss="modal">Close</button>
            </div>
        </div> 
    </div>
</div>
<?php include("footer.php"); ?>