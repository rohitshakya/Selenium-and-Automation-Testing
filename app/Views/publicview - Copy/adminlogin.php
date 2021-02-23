
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <?=link_tag('assets/adminassets/images/favicon.png', 'shortcut icon', 'image/png')?>
    <title>VIVA VOLT Admin Login</title>
    <!-- Custom CSS -->
    <?=link_tag('assets/adminassets/css/style.min.css')?>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?=base_url('assets/adminassets/images/auth-bg.jpg')?>) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><?=img(['src'=>'assets/adminassets/images/logo-icon.png'])?></span>
                        <h5 class="font-medium mb-3">Sign In to Admin</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <?=form_open('#', ['class'=>'form-horizontal mt-3', 'id'=>'adminloginform'])?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><em class="ti-user"></em></span>
                                    </div>
                                    <?=form_input(['type'=>'text', 'class'=>'form-control form-control-lg', 'placeholder'=>'Username', 'name'=>'accountid'])?>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><em class="ti-pencil"></em></span>
                                    </div>
                                    <?=form_password(['class'=>'form-control form-control-lg', 'placeholder'=>'Password', 'name'=>'accountpassword'])?>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <button class="btn btn-block btn-lg btn-info" type="submit"><em class="fa fa-refresh fa-spin" style="font-size:24px"></em> Log In</button>
                                    </div>
                                </div>
                                <div class="alert" id="loginError" style="display: none"></div>
                            <?=form_close()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('assets/adminassets/js/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $(".preloader").fadeOut();
    $("#adminloginform").submit(function(e){
        e.preventDefault();
        $("#loginError").removeClass('alert-danger');
        $("#loginError").removeClass('alert-success');
        $.ajax({
            type : 'POST',
            url : 'getadmin',
            data : $(this).serialize(),
            beforeSend : function(){
                $("#loginError").addClass('alert-warning');
                $("#loginError").html('Please wait.. <strong>Checking Account</strong>');
                $("#loginError").css('display', 'block');
            },
            success : function(response){
                $("#loginError").removeClass('alert-warning');
                if(response=='verified'){
                    $("#loginError").addClass('alert-success');
                    $("#loginError").html('Account Verified.');
                    $("#loginError").css('display', 'block');
                    window.location='dashboard';
                }
                else{
                    $("#loginError").addClass('alert-danger');
                    $("#loginError").html(response);
                    $("#loginError").css('display', 'block');
                }
            }
        });
    });
    </script>
</body>

</html>