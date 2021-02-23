<?php include "header.php";?>
<span class="bgcover">
<div class="slider-wrapper">
    <div class="homepage-s  owl-carousel owl-theme">
        <div class="item bg-slider-jr">
         
        </div>
        
    </div>
</div>
<!-- Slides end -->


 <section class="infant-cares feature-area-wrapper style-two">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                <!--h1 class="area-heading font-red" style="font-size: 35px;">CHILD CARE AND <span class="font-per">CURRICULUM FOR BABIES</span> </h1-->
             </div>
         </div>
         <div class="infant-care-inner">
            <div class="row ">
			<?php foreach($classes as $class){ ?>
                 <div class="col-md-4 single-to-do cls" data-id="<?=encrypt($class['class_id'])?>">
                     <div class="sin-inf-care wow fadeInUp" data-wow-delay=".3s">
                     <div class="to-do-img ">
                                    <img src="<?=MEDIA_UPLOAD_URL."uploads/classimage/".$class['c_img'];?>" alt="">
                                </div>
                         <div class="care-content">
                             <h6></h6>
                           
                         </div>
                     </div>
                 </div>
			<?php } ?>
                 
                
               
         </div>
             
         </div>
         
     </div>
 </section>

 <div class="wellcome-area-wrappers ht-75"></div>
   
  
 <section class="call-to-action-area" style="padding: 17px 0px;">
         <div class="container-fluid ">
             <div class="row justify-content-center">
                   <div class="row col-sm-12 col-lg-10">
               
                   <div class="col-sm-12 col-lg-9">
                     <h4>Get Volt for your school</h4>
                   
                 </div>
                 <div class="col-sm-12 col-lg-3 text-right">
                     <a href="<?php echo base_url('/book-a-demo');?>" class="kids-care-btn bg-red">Book a Demo</a>
                 </div>
                        </div>
             </div>
         </div>
     </section>
	</span>
 <script>
 $(".cls").click(function(){
	 window.location.href = BASE_URL_JR+"/modules/"+$(this).data("id");
 })
 </script>
<?php include "footer.php";?>
