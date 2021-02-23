<?php include("header.php"); 
  // $her = explode('~',$this->input->get('her'));
  // $nmonth = date("m", strtotime($her[2]));
   ?>
<style>
   .cset{
   color: #fff;
   font-weight: 800;
   font-size: 20px;
   }
   .p10{
   padding: 30px 0;
   }
   .img-set-logo{
   width: 70px;
   }
   .s_s {
   background-position: center center;
   background-size: cover;
   background-repeat: no-repeat;
   position: relative;
   z-index: 1;
   }
   #wrapper_i {
   box-sizing: border-box;
   display: flex;
   align-items: center;
   justify-content: center;
   }
   #wrapper_i h2{
   margin-bottom: 20px !important;    
   }
   .z_i99{
   z-index: 99;
   }
   .single-promo-hover:hover {
   transform: translateY(-5px);
   box-shadow: 0 1rem 3rem rgba(31,45,61,.125)!important;
   }
   .single-promo-hover:hover {
   box-shadow: 0 1rem 3rem rgba(31,45,61,.125)!important;
   }
   .single-viva {
   box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.12);
   border: 6px solid #fff;
   border-radius: 10px;
   }
   .Vp-5 {
   padding: 4vh;
   }
   .bg_3781d4 {
   background: #3781d4;
   }
   .single-promo-hover {
   transition: all .2s ease-out;
   will-change: transform;
   }
   .fb {
   font-family: FuturaStd-Book;
   font-size: calc(1vw + 1vh);
   line-height: calc(1vw + 1vh);
   color: white;
   }
   .fbNum {
   font-family: FuturaStd-Heavy;
   font-size: calc(1.6vw + 1.6vh);
   line-height: calc(1vw + 1vh);
   color: white;
   font-weight: 900;
   }
   .promo-center{
   text-align: center;
   }
   .cactive {
   background: #ff9000 !important;
   }
   .cgradient{
   padding: 50px;
   background: linear-gradient(to top, #cccccc47, #cccccc21 50%, #ff0000 5%, #ff0000 75%);
   }
   .mt20{
   margin-top: 20px;	
   }
   .mt100-b50{
   margin: 50px 0px 20px 0px;
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
    height: 100px;
    margin: auto;
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
    
    
@media screen and (max-width: 676px) { 
.mt100-b50{
margin: 0px 0px 20px 0px;
} 
.mseprater{
border-bottom: 3px dashed #bbb;    
}
.mt36{
margin-top: 36px;
}
    .col-l-offset-5{
        margin-left: 5.5%;
    }
    .col-d-offset-8{
     margin-left: 8.33333333%;    
        
    }
}
    
   
    
</style>
<!-- edution BREADCRUMB AREA -->
<div class="admision_area about_page mt100-b50" id="admission">
   <div class="container">
    <div class="row padding-top" style="display:<?=($moduleData !='')?'block':'none'?> <?=($moduleData=='')?'block':''?>;">
         <div class="col-md-12">
             <div class="section_title_style2" style="text-align: left; padding-top:10px;">
                <div class="breatcome2_content">
               	  <ul>
                    <?php if($getLogin){?>  
                    <li>
                     <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt=""></a>
                     <em class="fa fa-angle-right"></em> 
                     <a href="<?=base_url()?>/theme-months/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>">
                       <?php $class = $db->query("select sub_name from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->sub_name; ?>  
                    </a> 
                    <em class="fa fa-angle-right"></em>
                        
                    <a href="<?=base_url()?>/theme/<?php $class = $db->query("select slug from mastar_subject where sub_id =".session('voltAccountSubject'));$cls = $class->getRow();echo $cls->slug; ?>/<?php  echo $uri->getSegment('3');?>">   
                         
                    Month <?php echo array_search($month, session('finalTermsSession'));?>
                    </a>
                    <em class="fa fa-angle-right"></em> 
                    <?php echo $moduleData->m_name; ?>
					 </li>
                    <?php } else{?>
                    
                    <?php }?>
                  </ul>
                </div>
            </div>
        </div>
      </div>
       <div class="row" style="display:<?=($moduleData!='' )?'block':'none'?> <?=($moduleData=='')?'block':''?>;">
			<div class="col-md-4 col-sm-12 col-xs-12 mseprater">
                <div class="col-md-12 col-sm-10 col-xs-10 col-d-offset-8">
                  <a href="javascript:void();">                       	
					<div class="single-moduls  bgdata1">
                        <div class="category-image">
                              <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/noimage.png">
                                    <?php } ?>
                        </div>
                        <div class="category-title margin-bottom-10">
                          <h4 class="modulsname"><?php echo $moduleData->m_name; ?></h4>
                        </div>
                     </div>
                  </a>
                </div>
                
                <div class="col-md-12 ">
                
            <?php  if ($moduleList) {  
              $i=1; foreach ($moduleList as $getModule) {
                  //print_r($getModule['series']); exit;
                  if($getModule['series']==0){
                     $link =  base_url('theme-category/'.base64_encode("segment34544!!".$getModule['module']).'/'. $uri->getSegment(3)); 
                  }else{
                     $link =  base_url('theme-subjects/' .$getModule['slug'].'/'. $uri->getSegment(3));
                  }
              ?>
                
                  <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 col-l-offset-5 pm5">
                      
                      
                    <a href="<?=$link?>">
                        <div class="single-multicategory-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/noimage.png">
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
                 <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 col-l-offset-5 pm5">
                  <a href="<?php echo $getModule['m_url']; ?>" target="_blank">
                        <div class="single-multicategory-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/noimage.png">
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
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 main-admission mt36">
            <!--<div class="admission_curosel owl-carousel curosel-style">-->
            <?php if (is_array($themeData) && count($themeData) > 0) { ?>
                <?php $i=1; foreach ($themeData as $getthemeData): ?>
                    <div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">
                        <a href="<?=base_url('theme-category/' .base64_encode($getthemeData['slug']).'/'. $uri->getSegment(3));?>" class="my-super-cool-btn">
							 <div class="single-category-item  bgdata<?php echo $i; ?>">
                              <div class="category-image">
                                <?php if(!empty($getthemeData['series_img'])){ ?>
                                   <img src="<?=base_url()?>/master/uploads/themebanner/<?php echo $getthemeData['series_img'];?>">
								<?php }else{ ?> 
                                <img src="<?=base_url()?>/master/uploads/themebanner/noimage.png">
                                <?php } ?>
                                </div>
                            <div class="category-title margin-bottom-10">
                                <h4 class=""><?php echo $getthemeData['series_name'];?></h4>
                            </div>
                            </div>
                        </a>
                    </div>  
                <?php $i++; endforeach ?>     
            <?php }else{ ?>
            <h3 class="text-center">Data not available.</h3>
            <?php } ?>
            <!--</div>-->
           </div>
</div>

</div>
</div>
<?php include("footer.php"); ?>