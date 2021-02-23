
<style>
.box{ display:none; }
.item{ display:none; }
.active{ display:block!important; }
.cls-btn{ width:60px;
margin-left: 53px;
margin-top: -24px;}
</style>
<div class="order-sm-1 col-md-12 col-xl-4 offset-2">
	<div class="row">
		<div class="col-md-12">
			<div class="row justify-content-center wow fadeInUp">
				<div class="col-lg-4 col-xl-12">
					<div class="container carousel-inner" id="fl">
					</div>
					<?php 
               $activityListVal = array();
               foreach($res as $list){ if($list['type']=="textImgAud"){ 
               
               $activityListVal []= $list;	
               }}
               
               ?>
					<div class="row box" id="fl-view">
						<div class="col-md-2 col-xl-2" style="z-index: 9;">
							<img class="cls-btn" onclick="overlays(this);" src="https://www.vivadigitalindia.net/schooliris/assets/img/Close.png">
							</div>
							<div class="col-md-12 col-xl-10">
								<img id="vi" src=""/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<script>
var dbn = <?=json_encode($activityListVal)?>;

loadIframepageflase();
var ii = 0;
function loadIframepageflase(e) {
    var ff="",vd="",vds="",xs = "";
	ii = 0;
	$.each(dbn, function (zre, pss) {
		if(pss.label=="Label"){
			vds ="Label";
		} 
	});
	
	if(vds == "Label" && $(e).data('id') == undefined){
		xs = "";
		vd ='<div><img class="stnotes-flashcards" data-id="Label" onclick="loadIframepageflase(this)" src="https://www.vivadigitalindia.net/schooliris/assets/img/phonic_btn1.png"></div>';
	} else if(vds=="Label" && $(e).data('id')=='Label'){
		xs = "Label";
		vd ="<div><img class='stnotes-flashcards' onclick='loadIframepageflase(this)' src='https://www.vivadigitalindia.net/schooliris/assets/img/flashcard_btn1.png'></div>";
	}
	
	ff += vd;
	var ys=0;
    $.each(dbn, function(zr, ps) {
		if(ps.label==xs){
			
			console.log(xs);
        var acts = JSON.parse(ps['3d_list']);
        var img = JSON.parse(acts.image);
        var aui = JSON.parse(acts.audio);

        var active = "";
        if (ys == 0) {
			ys++;
            active = "active";
        }
        ff += '<div class="item ' + active + '" >'+
				'<div class="row">';
        $.each(img, function(zrs, sddh) {
			
            ff += '<div class="col-md-6">'+
						'<img onclick="popup(this);" data-url="' + MEDIA_UPLOAD_URL + 'uploads/list_aud/' + aui[zrs] + '" src="' + MEDIA_UPLOAD_URL + 'uploads/list_pic/' + sddh + '"/>'+
					'</div>';

        });
        ff += '</div>'+
			'</div>';
		}
		
    });


    ff += '<div class="row justify-content-center mt-5">'+
				'<div class="col-md-3">'+
					'<a class="flashcardright" onclick="pre()" href="javascript:void(0)" data-slide="prev">'+
						'<img src="https://www.vivadigitalindia.net/schooliris/assets/img/prv.png"/>'+
					'</a>'+
				'</div>'+
				'<div class="col-md-3">'+
					'<a class="flashcardright" onclick="nxt()" href="javascript:void(0)" data-slide="next">'+
						'<img src="https://www.vivadigitalindia.net/schooliris/assets/img/nxt.png"/>'+
					'</a>'+
				'</div>'+
			'</div>';

    $('#fl').html(ff);


}

function nxt() {
	
	if ($('.carousel-inner').children('.item').length - 1 > ii) {
		$('.active').next().addClass('active');
		$('.active').prev().removeClass('active');
		ii++;
	}
}

function pre() {
console.log(ii);
console.log($('.carousel-inner').children('.item').length);
	if ($('.carousel-inner').children('.item').length > ii && ii > 0) {
		$('.active').prev().addClass('active');
		$('.active').next().removeClass('active');
		ii--;
	}
}
</script>