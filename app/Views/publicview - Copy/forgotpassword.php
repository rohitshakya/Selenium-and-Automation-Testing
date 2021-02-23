                <div style="max-width:500px; background-color: #f9f9f9; font-family: Georgia,serif; ">
                    <div
                        style="font-weight: bold; background-color: #FFF; padding: 10px; color: #0089c0; font-size: 28px; border-bottom:1px solid red;">
                        <img src="<?=base_url('assets/publicassets/assets/images/logo2.png');?>"
                            style="width:180px; height:80px; margin:auto; display:block;" />
                    </div>
                    <p style="margin-top: 0; padding:10px 10px 0 10px; font-size: 18px;">Dear
                        <?php echo $userdata['name']; ?>,</p>
                    <p style="padding:0 10px 10px 10px; font-size: 14px;">A request has been received to change the
                        password for your Viva Volt account.<br><br>
                        <a style="text-align: center;background: #0c719e;padding: 10px;color: #fff;text-decoration: none;"
                            href="<?=base_url().'reset-password?vid='.base64_encode($userdata['vcode']).'&vcode='.base64_encode($userdata['email']);?>">Reset
                            Password</a>
                        <br>
                        <br>
                        if you did not initiate this request, please contact us immediately at support@vivavolt.net
                        <br><br>
                        Best regards,
                        <br>
                    </p>
                    <p style="padding:10px; font-size: 16px;">Viva Volt @ <?=date('Y')?></p>
                </div>