<div class="col-md-12">
				<?php if($packages){ $q=0; $isSubscribed=[]; foreach($packages as $getPackage){ $q++;
						$others = $modelData->singledata('vt_package_info', ['packageid'=>$getPackage->vc_id]);
						$classname = $modelData->singledata('mastar_class', ['class_id'=>$getPackage->vc_class]);
						$subjectdata = ($others)?implode(',', json_decode($others->sublist)):'';
						$subQ = $db->query(" SELECT `sub_name` FROM `mastar_subject` WHERE `sub_id` in($subjectdata) ")->getResultArray();
						$qtyname = "qty_".$q;
						$subNm = "";
						foreach($subQ as $subname){ $subNm = $subNm.$subname['sub_name'].' | ';}
						if($getLogin && session('voltAccountType')==STUDENT){
							$isSubscribed = $modelData->singledata('vt_premium_package_order', ['vc_user'=>$getLogin->vc_id, 'vc_product'=>$getPackage->vc_id, 'vc_package_status!='=>'Expired']);
						}
						else{
							$isSubscribed = [];
						}
					?>


              <div class="row steprow">
				<div class="col-md-10">
					<p>
						<span class="steptitle"><?php echo $getPackage->vc_title; ?></span><br>
						<span style="color: #d86838; font-weight: bold; float: right;font-size: 18px;"><i class="fa fa-inr"></i> <?php echo $getPackage->vc_yearly; ?></span>
					</p>
					
					<p style="padding: 5px 0;">   <strong style="color:#d86838">Class :</strong> <?php echo ($classname)?$classname->class_name:''; ?>  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <strong style="color:#d86838">Subjects :</strong> <?php echo trim($subNm, '| ');?>    </p>
					
					<p style="padding:0;"> <?php echo $getPackage->vc_package_desc; ?> </p>
				</div>
				<div class="col-md-2">
					<?php if($plan=='school'){?>
							<span class="cart-plus-minus-button schoolqty">
								<input type="text" value="10" name="qtybutton" class="cart-plus-minus" id="<?php echo $qtyname; ?>">
							</span>
					<?php } else{?>
							<input type="number" readonly="" name="qty" align="center" class="studentqty" id="<?php echo $qtyname; ?>" value="1" style="display: none;"><br>
					<?php } if($isSubscribed){?>
						<span class="addedcartbtn mb-3" style="background: #777777;"><i class="fa fa-check "></i>Subscribed</span>
					<?php } else{?>

				<span class="addcartbutton mb-3" id=<?php echo $qtyname; ?>  data-id="<?php echo $qtyname; ?>" data-product="<?php echo $getPackage->vc_id; ?>"><i class="fa fa-shopping-cart "></i> <em>Add</em> </span>
				<?php }?>
				</div>
			   </div>
				
				


					<?php } } else{?>

				<div class="col-md-12">
					<p style="text-align:center; padding:10px 0; color: #d86838" >Product not available.</p>
				</div>

			<?php }?>
				</div>

				<!-- Modal HTML -->
<div id="termsModel" class="modal fade">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title" style="padding: 0;margin: 0;font-size: 18px;width: 100%;text-align:center">Select Your School Term.</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">       

					<div class="row">
						<?php if($termsdropdown){ foreach($termsdropdown as $getTerms){?>
							<div class="col-md-6"><span class="termsbutton" id="<?php echo $getTerms->id; ?>"><?php echo $getTerms->title;  ?></span></div>
						<?php } }?>
					</div>
					
			
			</div>
			<div class="modal-footer"><p style="margin: auto; text-align: center;">Your package will activate in you selected school terms.</p></div>
		</div>
	</div>
</div> 
<!-- End login Modal --> 

<!-- Continue Other Class Cart Model -->
<div id="continueModel" class="modal fade">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title" style="padding: 0;margin: 0;font-size: 18px;width: 100%;text-align:center">Cart Updation</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">       
							<p>You are trying to add package of different class in cart.</p>
							<p>You have added package of other class.</p>
					<div class="row">
					<div class="col-md-6"><span class="continuebutton" id="continue">Continue</span></div>
					<div class="col-md-6"><span class="continuebutton" id="skip">Skip</span></div>
					</div>
					
			
			</div>
			<div class="modal-footer"><p style="margin: auto; text-align: center;">Your cart will update according to class.</p></div>
		</div>
	</div>
</div> 
<!-- End continue Modal -->
				


<script type="text/javascript">
	$(".cart-plus-minus-button").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
        $(".qtybutton").on("click", function () {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 10) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 10;
                }
            }
            $button.parent().find("input").val(newVal);
        });

		$(".cart-plus-minus").on('keyup', function(){
			if($(this).val()<10){
				$(this).val('10');
			}
		});

        $(".addcartbutton").click(function(){
			//$('#continueModel').modal('show');
			$(".addcartbutton").attr('id','');
        	currentadd = $(this);
        	plan = $('.activearea').data('plan');
        	var cartid = currentadd.data('id');
        	var packcartid = currentadd.data('product');
        	var qtyis = $("#"+cartid).val();
			var terms = $('#terms').val();
        	$.ajax({
			type:'POST',
			url:'subscription/productaddincart',
			data:{plan:plan,qtyis:qtyis,productis:packcartid,terms:terms},
			beforeSend:function(){
				$(currentadd).css('background-color', '#868e96');
				$(currentadd).html('<i class="fa fa-shopping-cart "></i> Adding');
			},
			success:function(response){
				$(currentadd).attr('style','');
				$(currentadd).html('<i class="fa fa-shopping-cart "></i> Add');
				if(response=="Terms"){
					$(currentadd).attr('id','addthiscart');
					//alert("Please select your terms.");
					$('#termsModel').modal('show');
				}
				else{
					cartdatalist();
				}
				console.log(response);
			}
		});
        });
        
</script>