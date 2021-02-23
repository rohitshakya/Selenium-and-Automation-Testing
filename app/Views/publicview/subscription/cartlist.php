<?php 
	if($allcartlist){
		$subtotal = '0';
		$discount = '0';
		$allQty = 0;
		$disText = '';
		$singleDiscount = '0';
		$couponData=[];
		$discountSet = 0;
		$discountSetType = 0;
		$discountSubids = [];
		if(!empty(session('coupon'))){
			$couponData = $modelData->singledata('vt_coupon_management', ['vc_id' => session('coupon')]);
			if($couponData){
				$discountSet = $couponData->vc_coupon_amount;
				$discountSetType = $couponData->vc_coupon_type;
				$discountSubids = explode(',',$couponData->vc_subject);
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
					}else{
						$singleDiscount = 0;
					}
				}
			}	
			$discount = $discount + $singleDiscount;
		?>
		<tr>
			<td>
				<?php echo $productData->vc_title; ?>
				<p style="line-height: 15px;">
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Terms :</strong> <?php echo ($getCartList->vc_plan=='school')?date('M Y', strtotime($getCartList->vc_pack_start)).'-'.date('M Y', strtotime($getCartList->vc_pack_end)):'1 Year'; ?> </em><br>
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Class :</strong> <?php echo ($classname)?$classname->class_name:''; ?> </em> &nbsp; &nbsp; 
					<em style="font-size: 10px;font-style: normal;color: #d86838;"><strong style="color: #333;">Subjects :</strong> <?php echo trim($subNm, '| ');?> </em>
				</p>
		</td>

			<td><i class="fa fa-inr"></i> <?php echo $productData->vc_yearly; ?></td>

			<td><?php if($getCartList->vc_plan=='school'){?> <input type="number" min="10" value="<?php echo $getCartList->vc_qty; ?>" style="width: 40px; text-align: center;" class="updatecartqty" data-product="<?php echo $getCartList->vc_product; ?>" ><?php } else{ echo $getCartList->vc_qty; }?></td>
<!-- Discount Data -->
			<td><i class="fa fa-inr"></i> <?php echo $singleDiscount; ?></td>
			
			<td><i class="fa fa-inr"></i> <?php echo $productof; ?> &nbsp;  <i style="cursor: pointer;" class="fa fa-times text-danger removeitem" id="<?php echo $getCartList->vc_id; ?>"></i></td>

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
<?php if(empty(session('coupon'))){?>
<div class="couponcodearea">
	<input type="text" class="form-control" id="couponcode"> <span id="couponbutton">Apply Coupon</span>
	<div style="clear: both;"></div>
	<p class="couponerror text-danger">adsf</p>
</div>
<?php }?>
<ul class="cat-post">
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default; font-weight:bold;">Sub Total : <span> <i class="fa fa-inr"></i> <?php echo $subtotal; ?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default;">Discount : <?php echo $disText . $applyView;?> <span> <?php echo $removeCoupon ;?>   <i class="fa fa-inr"></i> <?php echo $discount; ?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default; font-weight:bold">Total : <span> <i class="fa fa-inr"></i> <?php echo $total; ?> </span></a></li>
	<li style="font-size: 14px;"><a href="javascript:;" style="cursor: default;">GST <em style="font-style: initial;color: #d86838;font-size: 12px;font-weight: bold;">( Incl. )</em> :  <span> <i class="fa fa-inr"></i><?php echo gst_calculator($total); ?></span></a></li>
</ul>
<ul class="cat-post">
	<li style="font-size: 14px;"><b><a href="javascript:;" style="cursor: default; color: #d86838; border-top: 1px solid #e7e7e7;">Payable Amount : <span style="color: #d86838"> <i class="fa fa-inr"></i> <?php echo $total; ?> </span></a></b></li>
</ul>
<?php if(session('voltAccountUserName')){ ?>
	<a href="<?php echo base_url('subscription/checkout'); ?>" class="btn btn-success" style="display: block;">Checkout</a >
<?php } else{?>
	<a href="#myModal" class="btn" data-toggle="modal" style="display: block; background-color:#d86838; ">Checkout</a>
<?php } } else{?>
	<div class="emptycartarea">
		<i class="fa fa-shopping-cart"></i>
		<strong>Your cart is empty.</strong>
		<p>Add the products you want. <span style="display: block; color:#d86838;font-size:12px;">Your cart will manage according to selected plan.</span></p>
	</div>

	<a href="javascript:;" data-toggle="modal" data-target="#LoginMVolt" data-whatever="@mdo" class="btn btn-secondary" style="display: block;">Checkout</a >
<?php }?>

<?php if(!empty(session('removecarterror')) && empty($allcartlist) ){ ?>
					<p style="font-size: 12px; color: #f00; text-align: center; padding-top: 10px;"><?php echo session('removecarterror'); ?></p>
			<?php  }?>