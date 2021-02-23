<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        background: #e8e7e7;
    }

    .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 15px 0;
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .1em;
        background: #1ab188;
        color: #ffffff;
        transition: all 0.5s ease;
        -webkit-appearance: none;
    }

    .button:hover,
    .button:focus {
        background: #179b77;
    }

    .button-block {
        display: block;
        width: 100%;
        cursor: pointer;
    }

    .center-div {
        margin: auto;
        width: 50%;
    }

    .form {
        background: rgba(19, 35, 47, 0.9);
        padding: 20px;
        max-width: 600px;
        margin: 20% auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgb(19 35 47 / 30%);
    }
    </style>
</head>
<body>
    <div class="center-div">
        <form class="form">
            <input type="hidden" id="input_uname" value="<?=base64_encode($userId);?>" name="username">
            <input type="hidden" id="input_pwd" value="<?=base64_encode($uPass);?>" name="password">
            <button type="button" class="button-block button" id="input_submit">Login as school admin</button>            
        </form>
        <div id="logError" style="text-align:center;text-transform:uppercase;color:red;"></div>
    </div>
</body>
</html>

<script src="<?=base_url('assets/schoolassets/js/jquery-3.3.1.min.js')?>"></script>
<script>
$(document).ready(function() {
    $("#input_submit").click(function() {
        var username = $("#input_uname").val().trim();
        var password = $("#input_pwd").val().trim();
        var base_url = '<?=base_url();?>';
        if (username != "" && password != "") {
            $.ajax({
                url: base_url + '/loginckeck',
                type: 'post',
                data: {
                    accountid: atob(username),
                    accountpassword: atob(password)
                },
                beforeSend: function() {
                    $('#logError').addClass('alert-warning');
                    $('#logError').html("Please wait..");
                    $('#logError').css('display', 'block');
                },
                success: function(response) {
                    // alert(response);
                    if (response == 'Veryfied') {
                        $('#logsuccess').html("success");
                        $('#logError').css('display', 'none');
                        $('#logError').removeClass('alert-warning');
                        $('#logsuccess').addClass('alert-success').delay(7000).fadeOut(500);
                        window.location.replace(base_url + '/school');
                        // location.reload().delay(2000).fadeOut(500);
                    } else {
                        $('#logError').removeClass('alert-warning');
                        $('#logError').addClass('alert-danger');
                        $('#logError').html("Something went wrong.");
                        $('#logError').css('display','block');
                        window.location.replace(base_url).delay(2000).fadeOut(500);
                    }
                }
            });
        }
    });

    setTimeout(function(){
        $("#input_submit").click();
    },1000);
});
</script>