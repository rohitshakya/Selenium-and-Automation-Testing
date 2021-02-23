<?php
$ordn = ORD_PREFIX . $billto->vc_orderno;
$orderdate = $billto->vc_date;
$billto = unserialize($billto->vc_billinginfo);
?>

<div style="width:100%;padding: 5px; margin: auto; height: auto; background-color: #fff; font-family: verdana; position: relative; ">
            <div style="padding-bottom: 20px;">
                <span style="position: absolute; font-size: 12px; top: 10px; left: 5px"><img src="data:image/png;base64,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" height="30"></span>
                <span style="text-decoration: underline; display: block; text-align: center;">TAX INVOICE - Digital Product(s)</span>
                <span style="position: absolute; font-size: 12px; top: 10px; right: 5px">Original for Recipient</span>
            </div>
            <table border="0" cellspacing="0" cellpadding="10" style="width: 100%;border: 1px solid #000; border-bottom: none; font-size: 12px;table-layout:fixed; color: #000000">
              <tbody>
                <tr>
                    <td style="width: 400px;">
                        GSTIN: 07AAACV0230G1ZV<br>
                        CIN : U52396DL1991PTC042901<br>
                        PAN :AAACV0230G<br>
                        STATE : DELHI<br>
                        CODE : 07
                      </td>
                    <td valign="top">
                      <strong style="text-decoration: underline;">VIVA VOLT PRIVATE LIMITED</strong><br>                        
                          4737/23, Ansari Road, Dariya Ganj, New Delhi, Delhi 110002, Tel.: 011-42242293,<br>Mob.: 09999193303, E-Mail: info@vivavolt.in Web: www.vivavolt.in
                    </td>
                </tr>
              </tbody>
            </table>
            <table border="0" cellspacing="0" cellpadding="10" style="width: 100%;border: 1px solid #000; border-bottom: none; font-size: 12px;table-layout:fixed; color: #000000">
              <tbody>
                <tr>
                    <td style="max-width: 600px; border-right: 1px solid #000;"><strong>BILL TO: <br></strong><br>
                        <?php echo $billto['fname'].' '.$billto['lname'];?><br>
                        <?php echo $billto['address'];?><br>
                        <?php echo $billto['state'].', '.$billto['city'].', '.$billto['pincode'];?><br>
                        <?php echo $billto['contact'].' &nbsp; &nbsp; '.$billto['email'];?>
                      </td>
                    <td valign="top">
                      <strong>ORDER INFORMATION:</strong><br><br>
                        <strong>Order Number :</strong> &nbsp; &nbsp;  <?php echo $ordn; ?><br>
                        <strong>Order Date :</strong> &nbsp; &nbsp;  <?php echo date("F jS, Y", strtotime($orderdate)); ?><br>
                    </td>
                </tr>
              </tbody>
            </table>

            <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; border: 1px solid #000; border-bottom: none;  font-size: 12px;table-layout:fixed; color: #000000">
              <tbody>
                <tr>
                  <td>
                      <p style="text-align: left; padding: 0px; text-align: center; font-weight: bold;">ORDER LIST</p>
                  </td>
                </tr>
              </tbody>
            </table>

            <table border="1" cellspacing="0" cellpadding="5" width="100%" style="font-size: 12px; width: 100%; color: #000000; table-layout:fixed;">
                <tbody>

                <tr>
                    <td><strong>SNo.</strong></td>
                    <td><strong>HSN Code</strong></td>
                    <td colspan="3"><strong>PACKAGE NAME</strong></td>
                    <td><strong>CUR</strong></td>
                    <td><strong>PRICE</strong></td>
                    <td><strong>QTY</strong></td>
                    <td colspan="2"><strong>DISC</strong></td>
                    <td colspan="2"><strong>COUPON</strong></td>
                    <td colspan="2"> <strong> Taxable Value </strong> </td>
                    <td colspan="2"> <strong>CGST</strong> </td>
                    <td colspan="2"> <strong> SGST / UTGST </strong> </td>
                    <td colspan="2"><strong>IGST</strong></td>
                </tr>

                <tr style="height: 20px;">
                        <td colspan="8"></td>
                        <td colspan="2">
                            <table cellpadding="5" cellspacing="2" width="100%" style="font-size: 12px; color: #000000;">
                                <tr>
                                    <td>%</td>
                                    <td>Amt</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px;  color: #000000;">
                                <tr>
                                    <td>%</td>
                                    <td>Amt</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; color: #000000;">
                                <tr>
                                    <td>%</td>
                                    <td>Amt</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; color: #000000;">
                                <tr>
                                    <td>%</td>
                                    <td>Amt</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; color: #000000;">
                                <tr>
                                    <td>%</td>
                                    <td>Amt</td>
                                </tr>
                            </table>
                        </td>
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
                        <td><?php echo $sn; ?></td>
                        <td>9984</td>
                        <td colspan="3"><?php echo $getOrd->product_name; ?><br><strong style="color:#999">Class :</strong> <?php echo $classIs->class_name; ?><br><strong style="color:#999">Subjects :</strong> <?php echo trim($allSubject, '| &nbsp; '); ?>
                        </td>
                        <td>INR</td>
                        <td><?php echo $productprice; ?></td>
                        <td><?php echo $getOrd->vc_qty; ?></td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; height: 80px; color: #000000;">
                                <tr>
                                    <td><?php echo $gstPercentage;?></td>
                                    <td>Rs. <?php echo $realAmount; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; height: 80px; color: #000000;">
                                <tr>
                                    <td>0</td>
                                    <td>Rs. 0</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">Rs. <?php echo $taxable_value_amount; ?></td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; height: 80px; color: #000000;">
                                <tr>
                                    <td>0</td>
                                    <td>Rs. 0</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; height: 80px; color: #000000;">
                                <tr>
                                    <td>0</td>
                                    <td>Rs. 0</td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; height: 80px; color: #000000;">
                                <tr>
                                    <td>5</td>
                                    <td>Rs. <?php echo $realAmount; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                <?php } }?>
                <tr>
                  <td colspan="18" align="right"><strong>TOTAL TAXABLE VALUE</strong> &nbsp; </td>
                  <td colspan="2"><strong>Rs. <?php echo $amountWithoutTax; ?></strong></td>
                </tr>
                <tr>
                  <td colspan="18" align="right"><strong>TOTAL TAX</strong> &nbsp; </td>
                  <td colspan="2"><strong>Rs. <?php echo $totalTax; ?></strong></td>
                </tr>
                <tr>
                  <td colspan="18" align="right"><strong>GRAND TOTAL OF INVOICE</strong> &nbsp; </td>
                  <td colspan="2"><strong>Rs. <?php echo $payebleAmount;?></strong></td>
                </tr>
            </tbody></table>

            <table border="0" cellspacing="0" cellpadding="10" style="width: 100%;border: 1px solid #000; border-top: none; font-size: 12px;table-layout:fixed; color: #000000">
              <tbody>
                <tr>
                    <td style="max-width: 600px; border-right: 1px solid #000;">
                        <p style="text-align: left; padding: 10px 0; text-align: left;">
                      <strong style="text-decoration: underline;">Terms & Conditions :</strong><br> <br>                        
                          1. All disputes are subject to Delhi Court Jurisdiction excusively.
                      </p>
                    </td>
                </tr>
              </tbody>
            </table>

            <div style="clear: both;"></div>

        </div>