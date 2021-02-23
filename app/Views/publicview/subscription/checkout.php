<?php include(APPPATH."Views/publicview/header.php");?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cartstyle.css'); ?>">
<!--Breadcrumb area start-->
<!--Breadcrumb area end-->
<section class="blog-page" id="voltbglayout1" style="margin-bottom: 200px;">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<span class="toptitle">
    				Vivavolt <span> / Subscription / Checkout</span>
    			</span>
    			<hr class="toplinner">
    		</div>
    	</div>

       <div class="row justify-content-center">

       	<div class="col-md-6">
       		<form action="#" method="POST" id="billingform" onsubmit="return false">
			<div class="row steprow">
				<div class="col-md-12 steparea">
					<span class="stepis">1</span>
					<span class="steptitle">Billing Information</span>
					<span id="editinformation">Edit</span>
				</div>
				<div class="col-md-12" id="informationarea" style="display: block;">
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
							    <label>First Name <span class="text-danger">*</span> </label>
							    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $getLogin->vc_name; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>Last Name <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $getLogin->vc_lastname; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>Contact Number <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $getLogin->vc_contact; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>Email Id <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="email_address" name="email_address" value="<?php echo $getLogin->vc_email; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>State <span class="text-danger">*</span></label>
							    <select class="form-control" id="state" name="state">
							    	<option value="">Select State</option>
							    	<?php if($statelist){foreach($statelist as $getState){ ?>
							    		<option value="<?php echo $getState->id; ?>" <?=($getLogin->vc_state==$getState->id)?'selected':''?> ><?php echo ucwords(strtolower($getState->name)); ?></option>
							    	<?php }} ?>
							    </select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>City <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="city" name="city" value="<?php echo ($city)?$city->city:''; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label>Pincode <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="pincode" name="pincode" value="">
							</div>
						</div>

						<div class="col-md-8">
							<div class="form-group">
							    <label>Address <span class="text-danger">*</span></label>
							    <input type="text" class="form-control" id="address" name="address" >
							</div>
						</div>

						<div class="col-md-12">
							<span id="continuebtn">Continue</span>
							<div id="errorinfo" class="text-secondary"></div>
						</div>


					</div>
				</div>
			</div>


			<div class="row steprow">
				<div class="col-md-12 steparea" style="border-bottom: 1px dotted #bfbfbf; padding-bottom: 20px;">
					<span class="stepis">2</span> <span class="steptitle">Confirm Order</span>
				</div>

				<div class="col-md-12" id="confirmrmationarea" style="display: none;">
					<div class="row justify-content-center">
						
						<div class="col-md-6" style="text-align: center;">
							<div class="form-group" style="text-align: center; display: inline-block;">
							    <div class="g-recaptcha" data-sitekey="6Lc8aFAaAAAAAD3TgiJmWU9Ky7pT61Tp4CXI9zpX"></div>
							</div>
						</div>

						<div class="col-md-12">
							<button class="btn btn-success" style="cursor: pointer; margin: auto; display: block;">Confirm Order</button>
							<div id="veryfyerrorinfo" class="text-secondary">adsf</div>
						</div>


					</div>
				</div>

			</div>
		</form>
		</div>


		<div class="col-md-6">

			<div class="sin-sidebar bdr-8">
				<span class="toptitle">Your Cart Details <?php echo anchor('subscription', 'Edit', 'style="float: right; font-weight: normal; font-size: 14px; color: #666;"') ?> </span>
    			<hr class="toplinner">

				<div class="viva-show">
					

					<?php 
	if($allcartlist){
		$subtotal = '0.00';
		$discount = '00';
		$allQty = 0;
		$disText = '';
		$singleDiscount = '0';
		$couponData=[];
		$discountSet = 0;
		$discountSetType = 0;
		$discountSubids = [];
		$coupon_id = 0;
        $coupon_code = 0;
        $coupon_type = 0;
        $coupon_amount = 0;
		if(!empty(session('coupon'))){
			$couponData = $modelData->singledata('vt_coupon_management', ['vc_id' => session('coupon')]);
			if($couponData){
				$discountSet = $couponData->vc_coupon_amount;
				$discountSetType = $couponData->vc_coupon_type;
				$discountSubids = explode(',',$couponData->vc_subject);
				$coupon_id = $couponData->vc_id;
				$coupon_code = $couponData->vc_coupon_code;
				$coupon_type = $couponData->vc_coupon_type;
			}
		}
?>


<table class="carttable">
	<thead>
		<tr>
		<th>Package</th>
		<th>Price</th>
		<th>Qty</th>
		<th>Disc</th>
		<th>Total</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($allcartlist as $getCartList){
		$productData = $modelData->singledata('vt_package', ['vc_id' => $getCartList->vc_product]);
		$productof = $getCartList->vc_qty*$productData->vc_yearly;
		$subtotal=$subtotal+$productof;
		$allQty = $allQty+$getCartList->vc_qty;
		//CLASS SUBJECT
		$classname = $modelData->singledata('mastar_class', ['class_id'=>$getCartList->product_class]);
		$cartSub = json_decode($getCartList->product_sub);
		$subjectdata = ($getCartList->product_sub)?implode(',', $cartSub):'';
		$subQ = $db->query(" SELECT `sub_name` FROM `mastar_subject` WHERE `sub_id` in($subjectdata) ")->getResultArray();
		$subNm = "";
		foreach($subQ as $subname){ $subNm = $subNm.$subname['sub_name'].' | ';}
			if($couponData){
				if($couponData->vc_subject==0){
					$singleDiscount = coupon_discount($productof,$discountSet,$discountSetType);
				}
				else{
					$checkSubDiscount = array_intersect($discountSubids,$cartSub);
					if(count($discountSubids)>0 && count($cartSub) == 1 && count($checkSubDiscount)>0 ){
						$singleDiscount = coupon_discount($productof,$discountSet,$discountSetType);
						$coupon_amount = $couponData->vc_coupon_amount;
					}else{
						$singleDiscount = 0;
						$coupon_amount = 0;
					}
				}
			}	
			$discount = $discount + $singleDiscount;

			$uCdata = [
				'product_name'  =>  $productData->vc_title,
				'product_desc'  =>  $productData->vc_package_desc,
				'product_price' =>  $productData->vc_yearly,
				'vc_coupon_id'      =>  $coupon_id,
                'vc_coupon_code'	=>  $coupon_code,
                'vc_coupon_type'    =>  $coupon_type,
                'vc_coupon_amount'  =>  $coupon_amount,
				'vc_gst'            =>  gst_calculator($productof - $singleDiscount),
                'vc_discount'       =>  $singleDiscount,
                'vc_payable'        =>  $productof-$singleDiscount,
			];
			$modelData->dataupdate('vt_live_cart', ['vc_id' => $getCartList->vc_id], $uCdata);

			
		?>
		<tr>
			<td>
				<?php echo $productData->vc_title; ?>
				<p style="line-height: 15px;">
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Terms :</strong> <?php echo date('M Y', strtotime($getCartList->vc_pack_start)); ?> - <?php echo date('M Y', strtotime($getCartList->vc_pack_end)); ?> </em><br>
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Class :</strong> <?php echo ($classname)?$classname->class_name:''; ?> </em> &nbsp; &nbsp; 
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Subjects :</strong> <?php echo trim($subNm, '| ');?> </em>
				</p>
		</td>

			<td><i class="fa fa-inr"></i> <?php echo $productData->vc_yearly; ?></td>

			<td><?php if($getCartList->vc_plan=='school'){?> <input type="number" min="10" value="<?php echo $getCartList->vc_qty; ?>" style="width: 40px; text-align: center;" class="updatecartqty" data-product="<?php echo $getCartList->vc_product; ?>" ><?php } else{ echo $getCartList->vc_qty; }?></td>
<!-- Discount Data -->
			<td> <i class="fa fa-inr"></i> <?php echo $singleDiscount; ?></td>
			
			<td><i class="fa fa-inr"></i> <?php echo $productof; ?></td>

		</tr>
		<?php }
if(!empty(session('coupon'))){
	$applyView = '';
	$removeCoupon = '<i id="removecoupon">Remove</i>';
	$couponData = $modelData->singledata('vt_coupon_management', ['vc_id' => session('coupon')]);
	if($couponData){
		if($couponData->vc_coupon_type=='percentage'){
			//$discount = $subtotal*$couponData->vc_coupon_amount/100;
			$disText = '<em style="font-size: 12px; color: #d86838">( '.$couponData->vc_coupon_amount.'% )</em>';
		}
		else{
			//$discount = $couponData->vc_coupon_amount;
			$disText = '<em style="font-size: 12px; color: #d86838">( <i class="fa fa-inr"></i>'.$couponData->vc_coupon_amount.' )</em>';
		}
	}
}
else{
	$applyView = '(<i id="applyview">Apply Code</i>)';
	$removeCoupon = "";
}
$total = $subtotal-$discount;
?>

	</tbody>
</table>


<hr>
<ul class="cat-post">
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default; font-weight:bold;">Subtotal <em style="font-size: 12px; color: #d86838">( <?php echo $allQty; ?> Items )</em> <span> <i class="fa fa-inr"></i> <?php echo $subtotal;?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default;">Discount : <?php echo $disText;?>  <span> <i class="fa fa-inr"></i>  <?php echo $discount; ?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default; font-weight:bold;">Total<span> <i class="fa fa-inr"></i> <?php echo $total;?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default;">GST  <em style="font-style: initial;color: #d86838;font-size: 12px;font-weight: bold;">( Incl. )</em>  : <span> <i class="fa fa-inr"></i><?php echo gst_calculator($total); ?></span></a></li>
</ul>
<ul class="cat-post">
	<li style="font-size: 14px;"><b><a href="javascript:;" style="cursor: default; color: #d86838; border-top: 1px solid #e7e7e7;">Payable Amount : <span style="color: #d86838"> <i class="fa fa-inr"></i> <?php echo $total; ?> </span></a></b></li>
</ul>
<?php  } ?>

				</div>
		</div>       
	</div>
           
           
            </div>
            

        </div>
    </section>
<?php 

// Generate random transaction id
$grand_subtotal = 100;
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$surl = $surl;
$furl = $furl;
$key_id = RAZOR_KEY_ID;
$currency_code = 'INR';
$name = APPLICATION_NAME;
?>
<form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
<input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
<input type="hidden" name="merchant_order_id" id="merchant_order_id" value="" />
<input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="" />
<input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="" />
<input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>" />
<input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>" />
<input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="" />
<input type="hidden" name="merchant_total" id="merchant_total" value="" />
<input type="hidden" name="merchant_amount" id="merchant_amount" value="" />
</form>
<!--Testimonial one area end-->
<?php include(APPPATH."Views/publicview/footer.php");?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
   var razorpay_options = {
      key: "<?php echo $key_id; ?>",
      amount: "0",
      name: "<?php echo $name; ?>",
      description: "",
      netbanking: true,
      currency: "INR",
      prefill: {
         name: "",
         email: "",
         contact: ""
      },
      notes: {
         soolegal_order_id: "",
      },

      handler: function(transaction) {
         document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
         document.getElementById('razorpay-form').submit();
      },

      "modal": {
         "ondismiss": function() {
            location.reload()
         }
      }
   };

   var razorpay_submit_btn, razorpay_instance;

   function razorpaySubmit(el) {
      if (typeof Razorpay == 'undefined') {
         setTimeout(razorpaySubmit, 200);
         if (!razorpay_submit_btn && el) {
            razorpay_submit_btn = el;
            el.disabled = true;
            el.value = 'Please wait...';
         }

      } else {
         if (!razorpay_instance) {
            razorpay_instance = new Razorpay(razorpay_options);
            if (razorpay_submit_btn) {
               razorpay_submit_btn.disabled = false;
               razorpay_submit_btn.value = "Pay Now";
            }
         }
         razorpay_instance.open();
      }
   }
function CheckBilingInformation(){
	var errorinfo = $("#errorinfo");
	errorinfo.removeClass('text-secondary');
	errorinfo.removeClass('text-danger');
	$.ajax({
			type:'POST',
			url:'billinginformation',
			data:{fname:$('#first_name').val(),lname:$('#last_name').val(),contact:$('#contact_number').val(),email:$('#email_address').val(),state:$('#state').val(),city:$('#city').val(),pincode:$('#pincode').val(),address:$('#address').val(),},
			beforeSend:function(){
				errorinfo.addClass('text-secondary');
				$(errorinfo).css('display', 'block');
				$(errorinfo).html('Please wait! Your data is validating!');
			},
			success:function(response){
				$(errorinfo).css('display', 'block');
				if(response=='success'){
					$(errorinfo).css('display', 'none');
					$(errorinfo).html('');
					$("#informationarea").css('display', 'none');
					$("#confirmrmationarea").css('display', 'block');
					$("#editinformation").css('display', 'block');
					return true;
				}
				else{
					errorinfo.removeClass('text-secondary');
					errorinfo.addClass('text-danger');
					$(errorinfo).html(response);
				}
				//console.log(response);
			}
		});
}
$("#continuebtn").click(function(){
	CheckBilingInformation();
});

$("#editinformation").click(function(){
	$(this).css('display', 'none');
	$("#informationarea").css('display', 'block');
	$("#confirmrmationarea").css('display', 'none');
});

$("#billingform").submit(function(e){
	e.preventDefault();
	errorinfo=$("#veryfyerrorinfo");
	errorinfo.removeClass('text-secondary');
	errorinfo.removeClass('text-danger');
	$.ajax({
			type:'POST',
			url:'confirmpackageorder',
			data:{fname:$('#first_name').val(),lname:$('#last_name').val(),contact:$('#contact_number').val(),email:$('#email_address').val(),state:$('#state').val(),city:$('#city').val(),pincode:$('#pincode').val(),address:$('#address').val(),recaptcha:$('#g-recaptcha-response').val()},
			beforeSend:function(){
				errorinfo.addClass('text-secondary');
				$(errorinfo).css('display', 'block');
				$(errorinfo).html('Please wait! Your data is validating!');
			},
			success:function(response){
				var returndata = JSON.parse(response);
				$(errorinfo).css('display', 'block');
				if(returndata.status==1){

					$("#merchant_order_id").val(returndata.data.orderid);
					$("#merchant_trans_id").val(returndata.data.txnid);
					$("#merchant_product_info_id").val(returndata.data.productinfo);
					$("#card_holder_name_id").val(returndata.data.name);
					$("#merchant_total").val(returndata.data.mtotal);
					$("#merchant_amount").val(returndata.data.mamount);
					razorpay_options.prefill.name = returndata.data.name;
					razorpay_options.prefill.email = returndata.data.email;
					razorpay_options.prefill.contact = returndata.data.phone;
					razorpay_options.notes.soolegal_order_id = returndata.data.orderid;
					razorpay_options.description = returndata.data.orderid;
					razorpay_options.amount = returndata.data.amount;

					$(errorinfo).css('display', 'none');
					$(errorinfo).html('');
					$("#informationarea").css('display', 'none');
					$("#confirmrmationarea").css('display', 'block');
					$("#editinformation").css('display', 'block');
					$("#confirmrmationarea").css('display', 'none');
					$("#editinformation").css('display', 'none');
					razorpaySubmit();
					return true;
				}
				else{
					errorinfo.removeClass('text-secondary');
					errorinfo.addClass('text-danger');
					$(errorinfo).html(returndata.message);
				}
				console.log(response);
			}
		});
});

</script>
