<?php include "header.php";?>
 <!--Breadcrumb area start-->
<div class="text-bread-crumb d-flex align-items-center style-six sc-page-bc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row padding-top" style="display:block ;">
					<div class="col-md-12">
						<div class="section_title_style2">
							<div class="breatcome2_content">
								<ul>
									<li>
										<a href="<?=base_url()?>">
								        <img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
										</a> 
										<em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="javascript:void(0);">
								        Account
										</a> 
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc">Login</span> 
                                    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb area end-->


<div class="admission-process-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="area-heading font-per style-two">Login</h1>
                <p class="heading-para">we promised you that, we always try to learn better.</p>
            </div>
             <div class="col-md-12 col-xl-4" style="margin: auto;">
               <div class="toggle-form alert col-xl-12" id="logError">
               </div>
            </div>
        </div>
        
         <div class="row">
           
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="row">
                    
                 
                   <div class="admission-form login-page-form col-xl-12">
                            <input name="username" id="txt_uname" placeholder="User name" type="text">
                            <input name="password" id="txt_pwd" placeholder="Password" type="password">
                            <input value="Login" value="Submit" type="submit" id="but_submit">
                    </div>
                   
                      
                    <div class="toggle-form col-xl-12">
                        <span class="text">First time here?</span>
                        <a href="<?=base_url()?>/registration" class="form-toggle" data-type="register">Create an Account.</a>
                    </div>
                
                </div>
              
            </div>
        </div>    
    </div>
</div>
<script>
$(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();
        var base_url =  '<?=base_url()?>';
        if( username != "" && password != "" ){
           $.ajax({
                url: base_url + '/loginckeck',
                type:'post',
                data:{accountid:username,accountpassword:password},
                beforeSend: function() {
                $('#logError').addClass('alert-warning');
                $('#logError').html("please wait..");
                $('#logError').css('display', 'block');
            },
            success: function(response) {
             alert(response);
                if (response == 'Veryfied') {
                      window.location.replace(base_url + '/account');
                      $('#logError').html("success");
                } else {
                    $('#logError').removeClass('alert-warning');
                    $('#logError').addClass('alert-danger');
                    $('#logError').html(response);
                    $('#logError').css('display', 'block').delay(7000).fadeOut(500);
                }
            }
            });
        }
    });
});
</script>

<?php include "footer.php";?>