<style>

 .modal__inner__letters{
    background-color: #157c5e;
    background-size:100% 100%;
    width:100%;
    height:645px;
    transition:top .25s ease;
    overflow:auto;
    border-radius:44px;
    top:0;
    bottom:0;
    left:0;
    right:0;
    margin:auto;
}

 #videoclipletter{
    
    margin-left: auto;
    margin-right: auto;
    width: 80vh;
    height: 62vh;
    position: absolute;
    top: 1vh;
    bottom: 0;
    left: 0vh;
    right: 0px;
    margin: auto;

}
 .lettersCapitalButton{
      margin-right: auto;
    height: 8vh;
    position: absolute;
    top: 6vh;
    left: 7vh;
    margin: auto;
    z-index: 99;
}
 .lettersSmallButton{
margin-right: auto;
    height: 10vh;
    position: absolute;
    top: 10vh;
    left: 7vh;
    margin: auto;
    z-index: 99;
	}
 .lettersCapitalPosstion{
    width:10vh;
}
 .lettersSmallPosstion{
    width:10vh;
}



</style>
<div class="order-sm-1 order-md-2 col-md-12 col-xl-6 offset-1 vdoltr">
	<div class="row">
		<div class="col-md-12">
			<div class="row justify-content-center wow fadeInUp">
				<div class="col-lg-4 col-xl-12">
<div class="modal__inner__letters">
	
	<label class="lettersCapitalButton">
		<a href="javascript:void(0)" onclick="loadValue('Capital')">
			<img src="https://www.vivadigitalindia.net/schooliris/assets/img/capital.png" alt="Activity" class="lettersCapitalPosstion">
			</a>
		</label>
		<label class="lettersSmallButton">
			<a href="javascript:void(0)" onclick="loadValue('Small')">
				<img src="https://www.vivadigitalindia.net/schooliris/assets/img/small.png" alt="Activity" class="lettersSmallPosstion">
				</a>
			</label>    

				<?php 
			if(!empty($video)){ ?>
				<div id="videoclipletter" class="video">
					<video id="ltrvd" style="width: 100%;height: 77%;" oncontextmenu="return false;" controls="" autoplay="" controlslist="nodownload">
					  <source type="video/mp4">
					  <source type="video/ogg">
					Your browser does not support the video tag.
					</video>
				</div>
			<?php }?>
			</div>
			</div>
			</div>  
		</div>
	</div>
</div>

<script>

var dld = <?=json_encode($video)?>;
var tkn = '<?=$session->voltAccountToken?>';
loadValue("Capital");
function loadValue(ck) {
	
	$.each(dld, function(zrs, sa) {
		var bgd;
		if(sa.url.indexOf("/veb/") != -1){
			bgd = sa.url+"?token="+tkn;
		} else {
			bgd = sa.url;
		}
		if(sa.label==ck){
			document.getElementById("ltrvd").src= bgd;
		}
	});
}
</script>