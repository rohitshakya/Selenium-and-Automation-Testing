<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
<div style="width: 600px; ">
	<h2><?php echo ucfirst("Hi ".$this->input->post('fullname')); ?></h2>
	<h4>Welcome to VIVA Volt .</h4>
	<p>Please verify your account to access you VIVA VOLT account Using below link.</p>
	<a href="<?php echo base_url('verify-reg?u='.base64_encode($this->input->post('emailid'))); ?>" style="padding: 10px; display: block; width: 150px; text-align: center; color: #FFF; background-color: #fd3550">Verify Account</a>
</div>
</body>
</html>