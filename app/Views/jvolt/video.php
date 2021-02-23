
				<div class="order-sm-1 order-md-2 col-md-8 col-xl-6">
					<div class="row">
						<div class="col-md-12">
                        <div class="row justify-content-center wow fadeInUp">
                    <div class="col-lg-6 col-xl-10">
                        <div class="ebookbg" id="ebookbgdo">
                      <iframe allowfullscreen src="<?=$res[0]['url']?>" id="eb" title="" style="width: 100%; height: auto; min-height: 500px;"></iframe>
                        </div>
                        <h4 id="vtitel"><?=$res[0]['question']?></h4>
                    </div>
                    </div>  
						</div>
					</div>
				</div>
                <div class="order-sm-1 order-md-2 col-md-8 col-xl-3">
				<div class="blog-sidebar">
						<div class="sin-sidebar bradius10 border1">
							<ul class="cat-post border1 padding15">
							<?php foreach($res as $r){ ?>
								<li><a href="javascript:;" data-url="<?=$r['url']?>" class="fsize-18 vl"><?=$r['question']?></a></li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
	
<script>
jQuery(document).ready(function($) {
  $('.vl').click(function(){
	  $("#vtitel").text($(this).text());
	  $("#eb").attr("src", $(this).data('url'));
  });
});
</script>