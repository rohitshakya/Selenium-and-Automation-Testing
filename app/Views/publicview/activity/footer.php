<?php   if ($uri->getSegment(1) == 'practice') { $main_file = 'js/main_score.js'; }else{ $main_file = 'js/main.js'; } ?>
<script src="<?= base_url('assets/publicassets/activity/'.$main_file ); ?>"></script>
<script src="<?= base_url('assets/publicassets/activity/'); ?>js/slider.js"></script>

<script>
/*var typeis = getCookie("typeis"); */
var slideNum = ls.getItem("idis")-1;
var myNum = slideNum;
var myPos = myNum*100;
$(".slider_list").css({'transform': 'translateX(-'+myPos+'%)'});
var ls = $.localStorage();
<?php if ($uri->getSegment(1) == 'practice') { ?>
var typeis = ls.getItem("typeis");
if (typeis == 'no') {
    $('#<?php echo $curr_type; ?>').css('display', 'block');
    $("a[data-target='#<?php echo $curr_type; ?>']").css({
        'color': '#fff176'
    });
} else {
    $(typeis).css('display', 'block');
    $("a[data-target='" + typeis + "']").css({
        'color': '#fff176'
    });
    $("a[data-target='" + typeis + "'] span").css({
        'color': '#fff176',
        'background-color': '#0c54a0'
    });
}

var $slider = $('#slider').skySlider({
    interval: 3000,
    items: 1,
    carousel: true,
    loop: true,
    autoplay: false,
    callback: function(number) {
        //console.log('Current slideSet - ' + number);
    }
});   

<?php }else{ ?> 
    $('#<?php echo $ass_curr_type; ?>').css('display', 'block');
<?php } ?>    
</script>     
     
     <div class="scr-error">
      	<div class="error-text" style="">Screen resolution not supported</div>
      </div>
</body>
</html>