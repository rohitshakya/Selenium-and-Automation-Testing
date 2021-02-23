<div class="col-md-12">
				<?php if($packages){ $q=0; foreach($packages as $getPackage){ $q++;
						$others = $modelData->singledata('vt_package_info', ['packageid'=>$getPackage->vc_id]);
						$classname = $modelData->singledata('mastar_class', ['class_id'=>$getPackage->vc_class]);
						$subjectdata = ($others)?implode(',', json_decode($others->sublist)):'';
						$subQ = $db->query(" SELECT `sub_name` FROM `mastar_subject` WHERE `sub_id` in($subjectdata) ")->getResultArray();
						$qtyname = "qty_".$q;
					?>
				<div class="col-md-12 packagelistdetail">
					<div class="listbox">
						<?php echo $getPackage->vc_title; ?>
					</div>
					<div class="listbox">
						<?php echo ($classname)?$classname->class_name:''; ?>
					</div>
					<div class="listbox">
						<?php $subNm = "";
						foreach($subQ as $subname){ $subNm = $subNm.$subname['sub_name'].' | ';}
						echo trim($subNm, '| ');
						?>
					</div>
					<div class="listbox">
						<span style="color: #d86838;"><i class="fa fa-inr"></i> <?php echo $getPackage->vc_yearly; ?></span>
						<span style="vertical-align: super; font-size: 10px;">Yearly</span>
					</div>
					<div class="listbox">
						<?php if($plan=='school'){?>
							<div class="cart-plus-minus-button schoolqty">
								<input type="text" value="1" name="qtybutton" class="cart-plus-minus" id="<?php echo $qtyname; ?>">
							</div>
					<?php } else{?>
							<input type="number" readonly="" name="qty" align="center" class="studentqty" id="<?php echo $qtyname; ?>" value="1">
					<?php }?>
					</div>
					<div class="listbox">
						<span class="addcartbutton" data-id="<?php echo $qtyname; ?>" data-product="<?php echo $getPackage->vc_id; ?>"><i class="fa fa-shopping-cart "></i> Add To Cart</span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="shortdesc"><?php echo $getPackage->vc_package_desc; ?></div>
			<?php } } else{?>

				<div class="col-md-12">
					<p style="text-align:center; padding:10px 0; color: #d86838">Product not available.</p>
				</div>

			<?php }?>
				</div>

<script type="text/javascript">
	$(".cart-plus-minus-button").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
        $(".qtybutton").on("click", function () {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
        });

        $(".addcartbutton").click(function(){
        	currentadd = $(this);
        	plan = $('.activearea').data('plan');
        	var cartid = currentadd.data('id');
        	var packcartid = currentadd.data('product');
        	var qtyis = $("#"+cartid).val();
        	$.ajax({
			type:'POST',
			url:'subscription/productaddincart',
			data:{plan:plan,qtyis:qtyis,productis:packcartid},
			beforeSend:function(){
				$(currentadd).css('background-color', '#868e96');
				$(currentadd).html('<i class="fa fa-shopping-cart "></i> Please Wait');
			},
			success:function(response){
				$(currentadd).attr('style','');
				$(currentadd).html('<i class="fa fa-shopping-cart "></i> Add To Cart');
				console.log(response);
				cartdatalist();
			}
		});
        });
        
</script>