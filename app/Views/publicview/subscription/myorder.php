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
    				Vivavolt <span> / My Orders</span>
    			</span>
    			<hr class="toplinner">
    		</div>
    	</div>

       <div class="row justify-content-center">

<?php 
if(!empty($orderlist)){ $i=0; foreach($orderlist as $getOrd){ $i++;
       			$classIs = $modelData->singledata('mastar_class', ['class_id'=>$getOrd->product_class]);
       			$subject = json_decode($getOrd->product_sub);
       			$allSubject = "";
       			foreach($subject as $subI){
       				$getSub = $modelData->singledata('mastar_subject', ['sub_id'=>$subI]);
       				$allSubject = $allSubject.$getSub->sub_name.' &nbsp; | &nbsp; ';
       			}
       			?>
       	<div class="col-md-6">
       		
			<div class="row steprow">
				<div class="col-md-12">
					<p>
					<span class="stepis"><?=$i?></span>
					<span class="steptitle">Order # : <?php echo  ORD_PREFIX . $getOrd->vc_orderno; ?></span>
          <a href="<?php echo base_url('subscription/downloadinvoice?oid='.$getOrd->vc_orderno); ?>" style="background: #554d4a; display: inline-block; float: right; padding: 3px 10px; color: #fff; border-radius: 2px; cursor: pointer;"><i class="fa fa-download"></i> Invoice</a>
					<?php /* ?>
          <a href="<?php echo base_url('subscription/myorder?oid='.$getOrd->vc_orderno); ?>" style="background: #999; display: inline-block; float: right; padding: 3px 10px; color: #fff; border-radius: 2px; cursor: pointer;">View Order</a>
          <?php */?>
					</p>
					<p style="padding: 10px 0 10px 35px;">
					<span style="font-size: 12px; padding: 0 10px;">
					From : <?php echo date("F jS, Y", strtotime($getOrd->vc_pack_start)); ?> &nbsp; &nbsp; &nbsp;
					To : <?php echo date("F jS, Y", strtotime($getOrd->vc_pack_end)); ?>
				</span></p>
					<p style="padding: 10px 0 10px 40px;"> <strong style="color:#d86838">Package :</strong> <?php echo $getOrd->product_name; ?> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  <strong style="color:#d86838">Class :</strong> <?php echo $classIs->class_name; ?>  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <strong style="color:#d86838">Subjects :</strong> <?php echo trim($allSubject, '| &nbsp; '); ?>    </p>
					<p style="padding: 0 0 0 40px;"> <?php echo $getOrd->product_desc; ?> </p>
				</div>
			</div>
		
		</div>
<?php } } ?>
            </div>
            

        </div>
    </section>
<?php include(APPPATH."Views/publicview/footer.php");?>