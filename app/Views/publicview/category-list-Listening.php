<?php include("header.php");
$CI =& get_instance();
$CI->load->helper('custom');
?>
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
.bor_radius:hover {
    
}
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
	.mt20{
		
		margin-top:20px;
	}
	
	.pr5{
		padding-left: 5px;
    padding-right: 5px;
		
	}
        .mt100-b50{
    margin: 75px 0px 50px 0px;
} 
    .opacityclosebtn{
           opacity: .8 !important; 
    }
    .course-item-main {
    margin: 0 0 20px;
    border: 2px solid #a35726;
}
    .topic-item-main{
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
      
    .pm5{
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
     .modulsname{
    color: #fff;
    font-size: 30px;
    }
    .mt36{
       margin-top: 36px;
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
    
    
    
</style>
<link href="<?=base_url()?>/assets/publicassets/course.css" rel="stylesheet" type="text/css" />
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container" style="max-width:1350px">
		<div class="row padding-top">
			<div class="col-md-12">
                <div class="section_title_style2" style="text-align: left; padding-top:10px;">
				   <div class="breatcome2_content">
				     <ul>
                         <li>
                             <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt="viva-volt"></a>
                             <em class="fa fa-angle-right"></em> 
                             <a href="<?=base_url()?>/theme-months/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>">
                               <?php $class = $db->query("select sub_name from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->sub_name; ?>  
                             </a> 
                             <em class="fa fa-angle-right"></em>
                             <a href="<?=base_url()?>/theme/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>/<?php  echo $uri->getSegment('3');?>">   
                             Month <?php echo array_search($month, session('finalTermsSession'));?>
                             </a>
                             <?php if($module){ ?>
                             <em class="fa fa-angle-right"></em>
                             <a href="<?=base_url()?>/theme-category/c2VnbWVudDM0NTQ0ISEzMA==/<?php  echo $uri->getSegment('3');?>">   
                             <?php echo $module->m_name; ?>
                             </a>     
                             <?php } ?>
                             <?php if($series){ ?>
                             <em class="fa fa-angle-right"></em>
                             <a href="<?=base_url()?>/theme-category/<?php echo base64_encode($series->slug); ?>/<?php  echo $uri->getSegment('3');?>">   
                             <?php echo $series->series_name; ?>
                             </a>     
                             <?php } ?>
                             <em class="fa fa-angle-right"></em>  <?=$chapter->chapT_name?>
                            </li>
                      	 </ul>
				    </div>
				</div>
    		</div>
		</div>

		<!-- section title -->
		<div class="row">
          
            
		<div class="col-md-4 col-sm-4 col-xs-12" >
		 
             <div class="main-admission">
                  <a href="javascript:void();">                       	
					<div class="single-moduls  bgdata1">
                        <div class="category-image">
                          <img src="<?=base_url('master/uploads/chapterbanner/'.$chapter->chap_image);?>" alt="viva-volt">
                        </div>
                        <div class="category-title margin-bottom-10">
                          <h4 class="modulsname"><?=$chapter->chapT_name?></h4>
                        </div>
                     </div>
                  </a>
                </div>
            
            
            
            
             <?php  if ($ChapterList) { $i=1; foreach ($ChapterList as $getChapterList) { ?> 
                 <div class="col-lg-4 col-md-4 pm5">
                    <a href="<?=base_url()?>/theme-topic-category/<?php echo base64_encode($getChapterList['id']); ?>/<?php  echo $uri->getSegment('3');?>">
                        <div class="single-multicategory-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getChapterList['chap_image'])){ ?>
                                    <img src="<?=base_url()?>/master/uploads/chapterbanner/<?php echo $getChapterList['chap_image'];?>" alt="viva-volt">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/chapterbanner/icon.png" alt="viva-volt">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <h5 class="multimodules"><?=$getChapterList['chapT_name']?></h5>
                                </div>
                        </div>
                    </a>
                </div>
            
                    
               <?php $i++;} }else{    ?>
               <?php } ?> 
            </div>
			
		<div class="col-md-8 col-sm-8 col-xs-12" >
		<div class="mb20" >
           <?php if($allcategories){ $int=0; $i=1; foreach($allcategories as $getCategory){
            $urlIs = "#active";
			$checkTopics = API_connector(base_url("api/getcatSet?class=" . session('voltAccountClass') . "&subject=" . $subject->sub_id . "&series=" . $series->series_id . "&chapter=" . $chapter->id . "&category=" . $getCategory->cat_id));
			$getActivityType = API_connector(base_url("api/getqdata/?setId=" . $checkTopics->data->setData[0]->setIds));
			$checkList = $db->query("SELECT * FROM `list` WHERE `set_id`='".$checkTopics->data->setData[0]->setIds."' " )->getRow();
         	if($checkList){
			    $listenPos = strpos($checkTopics->data->setData[0]->actType, 'audioUpload');
			    $videoPos = strpos($checkTopics->data->setData[0]->actType, 'vid');
			    $dataTypeis = ($listenPos==true)?"audioUpload":"vid";
			?>
			<div class="col-md-4 col-sm-6 col-xs-12" >
				<div class="single_cat ">
					<div class="feature_content_wrap bor_radius" style="background: #<?=$getCategory->cat_bg?>!important;">
						<div class="feature_content_inner" style="color:#FFF">
							<div id="wrapper">
								<?php if($checkTopics->status==1) { //if($videoPos==false){ 
									
										$act_link = ($getCategory->cat_id == 50) ? 'playgame' : 'playactivity'; 
									
				         ?>	
                     
                        <?php  $urlIs = strtolower("classclsis".$chapter->class_id.'~'.$subject->sub_name.'subis'.$subject->sub_id.'~'.$series->series_name.'seris'.$series->series_id.'~'.$chapter->chapT_name.'topsis'.$chapter->id.'~activity'.$getCategory->cat_id.'~').$uri->getSegment(3);?>
                                
                         <a style="width: 100%;" href="<?=base_url($act_link.'/' . $checkTopics->data->setData[0]->setIds . '/' . $getActivityType->type[0] . '?c='.preg_replace('/[^A-Za-z0-9~-]/','',$urlIs))?>" class="my-super-cool-btn">
									<div class="icon">
						    <!--<em class=""></em>-->
							<img src="<?=base_url('master/uploads/category/'.$getCategory->cat_img)?>" class="center-block" style="width:85px;" alt="viva-volt">
							</div>
							<div class="feature_content">
									<h2><?=$getCategory->cat_name?></h2>
							</div>
				        </a>         
                        <?php //} else{?>
                        <!--a href="javascript:void(0)" data-type="<?=$dataTypeis?>" data-video-url="<?=$checkList->url;?>" data-activity-url="<?=base_url('playactivity/' . $checkTopics->data->setData[0]->setIds . '/' . $getActivityType->type[0] . '?c=' . $uri->getSegment(2).'&her='.$this->input->get('her'))?>" class="my-super-cool-btn playvideo">
									<div class="icon">
						<!--<em class=""></em>-->
						<!--img src="<?=base_url('master/uploads/category/'.$getCategory->cat_img)?>" class="center-block" style="width:75px;">
						</div>
						<div class="feature_content">
						<h2><?=$getCategory->cat_name?></h2>
						</div>
				        </a-->
                        <?php }?>
				        </div>
						</div>
					</div>
				</div>
			</div>
			<?php $int++; } $i++; } }?>
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
		$data_type = $obj.attr('data-type');
		if($data_type=="audioUpload"){
		    $(".modal-title").text("Listen to the audio");
		    $('#videoframe').css('display', "none");
		    $('#audioArea').css('display', "block");
		    $('#pactivebtn').attr('href', $obj.attr('data-activity-url'));
		    $('#pactivebtn').css('display', "inline-block");
		    $('#play_video').find('#audio1').attr('src', $video_url); 
		    $("#play_video audio")[0].load();
		}
		else{
		    $(".modal-title").text("Play Video");
		    $('#audioArea').css('display', "none");
		    $('#videoframe').css('display', "block");
		    $('#pactivebtn').css('display', "none");
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
</script>
<!-- modal -->
<div id="play_video" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close opacityclosebtn" data-dismiss="modal">
                <img src="<?=base_url("assets/publicassets/assets/images/closebtn.jpg")?>" style="width: 30px;" alt="viva-volt">
                </button>
                <h4 class="modal-title">Play Video</h4>
            </div>
            <div class="modal-body">
				<video style="width:100%;" id="videoframe" controls>
					<source class="vid-player" src="#" type="video/mp4">                       
					Your browser does not support HTML5 video.
				</video>
				<div id="audioArea">
				    <img class="img-custom" src="<?=base_url("assets/publicassets/assets/images/listen_background.gif")?>" alt="viva-volt">
				    <audio autostart="false" preload="" id="audio1" controls="controls" src="#" style="width: 100%; max-height: 300px;">Your browser does not support  Audio!</audio>
				</div>
            </div>
            <div class="modal-footer">
                <?/*
                <a  href="#" id="pactivebtn" class="btn btn-default" style="background: #3c3b7b; display:none;">Play Activity</a>                
                <button type="button" class="btn btn-default close-video" data-dismiss="modal" style="background: #cecece; margin-top: 0;">Close</button>
                */?>
            </div>
        </div> 
    </div>
</div>
<?php include("footer.php"); ?>