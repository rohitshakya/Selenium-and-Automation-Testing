<div class="order-sm-2 order-md-1 col-md-8 svd">
<div class="row">
	<div class="col-md-12">
		<div class="row justify-content-center wow fadeInUp">
			<div class="col-lg-6 col-xl-10">
			<?php 
			if(!empty($video)){ 
			$video_url = (strpos($video['url'], '/veb/')) ? $video['url'] . "?token=" . $session->voltAccountToken : $video['url'];
			?>
				<div class="video">
					
					<video id="startEnd" src="<?=$video_url?>" style="width: 100%;height: 77%;" oncontextmenu="return false;" controls="" autoplay="" controlslist="nodownload">
					  <source type="video/mp4">
					  <source type="video/ogg">
					Your browser does not support the video tag.
					</video>
				</div>
				
				
			<?php } else { ?>
			<div class="col-md-12">
			<script>
			loadIframepages('<?php echo $qid; ?>');
			</script>
			</div>
			<?php } ?>
			</div>
		</div>  
	</div>
</div>
</div>
<script>
  $(document).ready(function(){
    $("#startEnd").on('ended',function(){
	  loadIframepages('<?php echo $qid; ?>');
    });
  });
</script>