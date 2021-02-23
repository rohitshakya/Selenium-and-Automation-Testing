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

        <div class="col-md-8">

<?php 
  $ordn = ORD_PREFIX . $billto->vc_orderno;
  $orderdate = $billto->vc_date;
  $billto = unserialize($billto->vc_billinginfo);

?>

          <div id="printBill" style="width:100%; padding: 5px; height: auto; background-color: #fff; font-family: verdana; position: relative; ">
            <div style="padding-bottom: 20px;">
                <span style="position: absolute; font-size: 12px; top: 10px; left: 5px"><img src="<?php echo base_url('assets/bundles/img/logo.png'); ?>" height="30"></span>
                <span style="text-decoration: underline; display: block; text-align: center;">TAX INVOICE - Digital Product(s)</span>
                <span style="position: absolute; font-size: 12px; top: 10px; right: 5px">Original for Recipient</span>
            </div>
            <table border="1" cellspacing="0" cellpadding="5" width="100%" style="font-size: 12px; color: #000000">
                <tbody><tr>
                    <td colspan="17">
                        <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;font-size: 12px; color: #000000">
                            <tbody><tr>
                                <td style="width: 40%">
                                    GSTIN: 07AAACV0230G1ZV<br>
                                    CIN : U52396DL1991PTC042901<br>
                                    PAN :AAACV0230G<br>
                                    STATE : DELHI<br>
                                    CODE : 07
                                </td>
                                <td>
                                    <strong style="text-decoration: underline;">VIVA VOLT PRIVATE LIMITED</strong>
                        <p style="text-align: left; padding-top: 10px;">                        
                            4737/23, Ansari Road, Dariya Ganj, New Delhi, Delhi 110002, Tel.: 011-42242293,<br>Mob.: 09999193303, E-Mail: onlineorders@vivagroupindia.in Web: www.vivadigital.in
                        </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" style="max-width: 500px;"><strong>
                            BILL TO: <br>
                        </strong>
                        <br>
                        <?php echo $billto['fname'].' '.$billto['lname'];?><br>
                        <?php echo $billto['address'];?><br>
                        <?php echo $billto['state'].', '.$billto['city'].', '.$billto['pincode'];?><br>
                        <?php echo $billto['contact'].' &nbsp; &nbsp; '.$billto['email'];?>
                      </td>

                    <td colspan="12" valign="top">
                      <strong>ORDER INFORMATION:</strong><br><br>
                        <strong>Order Number :</strong> &nbsp; &nbsp;  <?php echo $ordn; ?><br>
                        <strong>Order Date :</strong> &nbsp; &nbsp;  <?php echo date("F jS, Y", strtotime($orderdate)); ?><br>
                    </td>
                </tr>

                <tr>
                    <td colspan="20" style="height: 20px; text-align: center;font-weight: bold; padding: 10px 0;">ORDER LIST</td>
                </tr>

                <tr>
                    <td><strong>SNo.</strong></td>
                    <td><strong>HSN/SAC CODE</strong></td>
                    <td><strong>PACKAGE NAME</strong></td>
                    <td><strong>CUR</strong></td>
                    <td><strong>PRICE</strong></td>
                    <td><strong>QTY</strong></td>
                    <td colspan="2" align="center"><strong>DISC</strong></td>
                    <td colspan="2" align="center"><strong>COUPON</strong></td>
                    <td><strong>Taxable Value Of Supply</strong></td>
                    <td colspan="2" align="center"><strong>CGST</strong></td>
                    <td colspan="2" align="center"><strong>SGST/UTGST</strong></td>
                    <td colspan="2" align="center"><strong>IGST</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"></td>
                    <td>%</td>
                    <td>Amt</td>
                    <td>%</td>
                    <td>Amt</td>
                    <td></td>
                    <td>%</td>
                    <td>Amt</td>
                    <td>%</td>
                    <td>Amt</td>
                    <td>%</td>
                    <td>Amt</td>
                </tr>
                <?php if($invoiceorder){ $sn=0; $amountWithoutTax = 0; $totalTax=0; $payebleAmount = 0;  foreach($invoiceorder as $getOrd){ $sn++;
                  $productprice = $getOrd->product_price;
                  $gstDisAmt = gst_calculator($productprice);
                  $taxable_value_amount = number_format($productprice - $gstDisAmt,2);
                  $gstPercentage = gst_discount($productprice,$taxable_value_amount);
                  $realAmount = $productprice*$gstPercentage/100;
                  $amountWithoutTax = $amountWithoutTax + $taxable_value_amount;
                  $totalTax = $totalTax + $realAmount;
                  $payebleAmount = $payebleAmount+$productprice;

                  $classIs = $modelData->singledata('mastar_class', ['class_id'=>$getOrd->product_class]);
                  $subject = json_decode($getOrd->product_sub);
                  $allSubject = "";
                  foreach($subject as $subI){
                    $getSub = $modelData->singledata('mastar_subject', ['sub_id'=>$subI]);
                    $allSubject = $allSubject.$getSub->sub_name.' &nbsp; | &nbsp; ';
                  }

                 ?>
                    <tr>
                        <td width="30px"><?php echo $sn; ?></td>
                        <td>9984</td>
                        <td><?php echo $getOrd->product_name; ?>
                            <p style="padding: 0;"> <strong style="color:#999">Class :</strong> <?php echo $classIs->class_name; ?>  &nbsp; &nbsp; <strong style="color:#999">Subjects :</strong> <?php echo trim($allSubject, '| &nbsp; '); ?>    </p>
                        </td>
                        <td>INR</td>
                        <td><?php echo $productprice; ?></td>
                        <td><?php echo $getOrd->vc_qty; ?></td>
                        <td><?php echo $gstPercentage;?></td>
                        <td>&#8377;  <?php echo $realAmount; ?></td>
                        <td>0</td>
                        <td>&#8377;   0</td>
                        <td>&#8377;   <?php echo $taxable_value_amount; ?></td>
                        <td>0</td>
                        <td>&#8377;   0</td>
                        <td>0</td>
                        <td>&#8377;   0</td>
                        <td>5</td>
                        <td>&#8377;   <?php echo $realAmount; ?></td>
                    </tr>
                <?php } }?>
                <tr style="border:none;">
                    <td colspan="3" rowspan="150"><strong>Terms &amp; Conditions :</strong><br>1. All disputes are subject to Delhi Court Jurisdiction excusively.</td>
                </tr>

                <tr style="border-bottom: 1px solid #999;">
                    <td colspan="7" rowspan="2"></td>
                    <td colspan="6">TOTAL TAXABLE VALUE<br>TOTAL TAX<hr></td>
                    <td>&#8377;  <?php echo $amountWithoutTax; ?><br>&#8377;  <?php echo $totalTax;?><hr></td>
                </tr>

                <tr style="border:none; border-bottom: 1px solid #999;">
                    <td colspan="6"><strong>GRAND TOTAL OF INVOICE</strong></td>
                    <td><strong>&#8377;  <?php echo $payebleAmount;?></strong></td>
                </tr>
            </tbody></table>



            <div style="clear: both;"></div>

        </div>


        <button onclick="printPageArea('printBill', '<?php echo ORD_PREFIX . $request->getGet('oid'); ?>')" type="button" style="float: right;background-color: #d86838; color: #FFF; cursor: pointer; border: none;">Print Bill</button>
          


        </div>
       	<div class="col-md-4">
       		<?php if($myorder){ $i=0; foreach($myorder as $getOrd){ $i++;
            $classIs = $modelData->singledata('mastar_class', ['class_id'=>$getOrd->product_class]);
            $subject = json_decode($getOrd->product_sub);
            $allSubject = "";
            foreach($subject as $subI){
              $getSub = $modelData->singledata('mastar_subject', ['sub_id'=>$subI]);
              $allSubject = $allSubject.$getSub->sub_name.' &nbsp; | &nbsp; ';
            }
            ?>
			<div class="row steprow">
				<div class="col-md-12">
					<p>
					<span class="stepis"><?=$i?></span>
					<span class="steptitle">Order # : <?php echo  ORD_PREFIX . $getOrd->vc_orderno; ?> <span style="font-size: 12px; padding: 0 10px;"><?php echo date("F jS, Y", strtotime($getOrd->vc_date)); ?></span> </span>
					<span style="background: #999; display: inline-block; float: right; padding: 3px 10px; color: #fff; border-radius: 2px; cursor: pointer;">View Order</span>
					</p>
					<p style="padding: 10px 0 10px 40px;"> <strong style="color:#d86838">Package :</strong> <?php echo $getOrd->product_name; ?> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  <strong style="color:#d86838">Class :</strong> <?php echo $classIs->class_name; ?>  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <strong style="color:#d86838">Subjects :</strong> <?php echo trim($allSubject, '| &nbsp; '); ?>    </p>
					<p style="padding: 0 0 0 40px;"> <?php echo $getOrd->product_desc; ?> </p>
				</div>
			</div>
		<?php } } ?>
		</div>

            </div>
            

        </div>
    </section>
<?php include(APPPATH."Views/publicview/footer.php");?>
<script>

  function printPageArea(areaID, title='vivavolt'){

    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', 'test', 'width=900,height=650');
    WinPrint.document.write("<title>"+title+"</title>");
    WinPrint.document.write(printContent.innerHTML);

    WinPrint.document.close();

    WinPrint.focus();

    WinPrint.print();

    WinPrint.close();

}

</script>