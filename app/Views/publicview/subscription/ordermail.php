<!DOCTYPE html>
<html>
<head>
	<title>VIVAVOLT</title>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
<table role="presentation" style="width:100%!important; font-family:Arial"  border="0" cellspacing="0" cellpadding="0">
	<tbody>
		<tr style="background-color: #2464ce;" background="<?php echo base_url('/assets/mailing/topbg.png') ?>">
			<td>
				<table role="presentation" width="750" border="0" cellspacing="0" cellpadding="0" style="width:750px!important;text-align:center;margin:0 auto;">
					<tbody>
						<tr>
							<td>
								<table role="presentation" style="width:750px;max-width:750px;padding: 0 15px;">
									<tbody>
										<tr>
											<td style="width:40%;text-align:left;padding-top:5px">
												<a style="text-decoration:none;outline:none;color:#ffffff;font-size:13px" href="<?php echo base_url(); ?>" target="_blank">
												<img src="<?php echo base_url('/assets/bundles/img/logo.png') ?>" alt="vivavolt.in" style="margin: 0; border: 0; padding: 0; display: block;" width="150"></a>
											</td>
											<td style="width:60%;text-align:right;padding-top:5px">
												<p style="color:rgba(255,255,255,0.8);font-family:Arial;font-size:16px;text-align:right;color:#ffffff;font-style:normal;font-stretch:normal">Order <span style="font-weight:bold">Confirmed</span>
												</p>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>

		<tr>
			<td bgcolor="#f5f5f5">
				<table role="presentation" width="750" border="0" cellspacing="0" cellpadding="0" style="width:750px!important;text-align:center;margin:0 auto;background-color: #FFFFFF;padding: 0 15px;">
					<tbody>
						<tr>
							<td align="left">
								<table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>
												<p style="font-family: Arial; font-size: 13px; color: #878787; line-height: 24px; padding: 15px 0; margin-top: 0px; margin-bottom: 7px;">
    	Hi <strong style="color: #333"><?php echo $details['fname'].' '.$details['lname']; ?></strong><br>
Thank you for shopping with us!<br>
We would like to inform you that your order has been confirmed.<br>
Now you can access your packages from <?php echo anchor(base_url(), 'www.vivavolt.in'); ?>
    </p>
												
											</td>
										</tr>
									</tbody>
								</table>
								<table role="presentation" align="right" border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>
												<p style="font-family: Arial; font-size: 13px; text-align: right; color: #878787; line-height: 24px; padding: 15px 0; margin-top: 0px; margin-bottom: 7px;">Order placed on <strong style="color: #333"><?php echo date('M d, Y', strtotime($orderdate)); ?></strong><br>Order ID <strong style="color: #333"><?php echo $billno; ?></strong><br>

    </p>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>

				<table role="presentation" width="750" border="0" cellspacing="0" cellpadding="0" style="width:750px!important;text-align:center;margin:0 auto;background-color: #FFFFFF;padding: 0 15px;">
					<tbody>
						<tr>
							<td align="left" style="background-color:rgba(245,245,245,0.5);background:rgba(245,245,245,0.5);border:.5px solid #6ed49e;border-radius:2px;padding-top:20px;padding-bottom:20px;border-color:#6ed49e;border-width:.08em;border-style:solid;border:.08em solid #6ed49e">

								<table role="presentation" border="0" cellpadding="0" cellspacing="0" align="right" style="margin-bottom:20px;padding:0 9px;width:700px;">
									<tbody>
										<tr>
											<td valign="top" align="left">
												
													<p style="font-family:Arial;font-size:13px;font-weight:bold;color:#000000;margin:0px;">Bill To</p>
													<p style="font-family:Arial;font-size:12px;line-height:18px;color:#000000;margin: 10px 0 5px 0; font-weight:bold;"> <?php echo $details['fname'].' '.$details['lname']; ?></p><p style="font-family:Arial;font-size:12px;line-height:18px;color:#000000;margin:0px;"><span style="font-family:Arial;font-size:12px;line-height:1.42;color:#000000"><?php echo $details['address'].'<br>'.$details['city'].', '.$details['state'].', '.$details['pincode']; ?> </span></p><p style="font-family:Arial;font-size:12px;line-height:18px;color:#000000;margin:0 0 10px 0;">+91 <?php echo $details['contact']; ?><br><?php echo $details['email']; ?></p>
											</td>
											<td valign="top" align="left">
												
											<p style="margin-bottom:0px;margin-top:0"><a href="<?php echo base_url(); ?>" style="background-color:#2464ce;color:#fff;padding:10px 0px;border:0px;font-size:14px;display:block;margin-top:0px;border-radius:2px;text-decoration:none;width:160px;text-align:center;" target="_blank">Play Activity</a></p>

											</td>
										</tr>
									</tbody>
								</table>
								
							</td>
						</tr>
					</tbody>
				</table>

				<table role="presentation" width="750" border="0" cellspacing="0" cellpadding="0" style="width:750px!important;text-align:center;margin:0 auto;background-color: #FFFFFF;padding: 0 15px;">
					<tbody>
						
						<tr>
							<td align="left">

								<table role="presentation" border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%">
									<tbody>
<tr><td colspan="5">
<p style="font-family:Arial;font-size:12px;color:#000000;margin:0 0 20px 0; padding:20px 0;">A copy of the invoice has been attached along with this email.</p>
</td></tr>

									<tr>
										<td valign="top" align="left" colspan="4" style="padding-top:0px"> 
	<p style="font-family:Arial;font-size:12px;color:#000000;margin:0 0 20px 0">For any queries please contact us at <a style="color: #2979fb; text-decoration: none;" href="mailto:support@vivavolt.net">support@vivavolt.net</a> </p>
											</td>
									</tr>
								</tbody>
							</table>
								
							</td>
						</tr>
					</tbody>
				</table>

				<table role="presentation" width="750" border="0" cellpadding="0" cellspacing="0" style="width:750px!important;text-align:center;margin:0 auto;">
					<tbody>
						<tr>
										<td colspan="4">
											<table role="presentation" style="width: 100%; background: #2464ce; padding: 10px 5px; color: #FFFFFF;" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td style="width: 30%; text-align: left;" valign="top">
														<p style="font-family:Arial;font-size:14px;font-weight:bold;margin: 0;color: #efff00">Follow Us</p>
														<p style="margin: 5px 0 0 0;">
			<a target="_blank" href="https://www.facebook.com/VivaEducation.Ind/" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/f.png" style="border-radius: 100%; border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            <a target="_blank" href="https://twitter.com/VivaEducationIn" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/t.png" style="border-radius: 100%;border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            <a target="_blank" href="https://www.youtube.com/user/VivaBooks" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/y.png" style="border-radius: 100%;border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            <a target="_blank" href="https://www.linkedin.com/company/viva-books-private-limited" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/l.png" style="border-radius: 100%;border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            <a target="_blank" href="https://www.instagram.com/vivaeducation/" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/i.png" style="border-radius: 100%;border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            <a target="_blank" href="https://in.pinterest.com/VivaGroup/" style="display: inline-block;"><img src="<?php echo base_url('assets/mailing'); ?>/p.png" style="border-radius: 100%;border: 1px solid #b0d4ff;display: block;margin: 0;padding: 0;" width="20" height="20"></a>
            </p>
													</td>
													<td style="width: 35%; text-align: left;" valign="top"><p style="font-family:Arial;font-size:14px;font-weight:bold;margin: 0;color: #efff00">Contact Us</p>
													<p style="margin: 5px 0 0 0; line-height: 18px; font-family:Arial;font-size:12px;margin:0 0 10px 0">Email : <a style="color: #FFFFFF; text-decoration: none;" href="mailto:support@vivavolt.net">support@vivavolt.net</a><br>Tel: 011 422 422 93 <br>Mo: 099991 93303 </p>
		</td>
													<td style="width: 35%; text-align: left;" valign="top">
														<p style="font-family:Arial;font-size:14px;font-weight:bold;line-height:18px;margin: 0;color: #efff00">Corporate Office</p>
														<p style="margin: 5px 0 0 0; font-family:Arial;font-size:12px;margin:0 0 10px 0">
				Viva Volt Private Limited,<br>4737/23, Ansari Road, Daryaganj, New Delhi 110002<br>
			</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
					</tbody>
				</table>

			</td>
		</tr>





	</tbody>
</table>

</body>
</html>