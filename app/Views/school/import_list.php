<?php 
$attributes = array('class' => 'needs-validation', 'id' => 'frmCSVImport', 'name' => 'frmCSVImport'); 
 ?>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add <?= ucfirst($usertype);?> List</h5>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('schoolmodule/import', $attributes); ?>
                    <div class="form-group row">
                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Select CSV File</label>
                        <input class="form-control col-md-4" type="file" name="file" id="file" accept=".csv" placeholder="Choose CSV">
                        <div class="col-md-4">
                             <a href="<?= base_url('schoolmodule/usercsvsample?ut='.$usertype);?>" class="btn btn-success">Download Sample</a>
                        </div>
                        
                    </div> 
                                     
                    <input type="hidden" name="school_id" value="<?= $schoolIs->id;?>" />
                    <input type="hidden" name="school_state" value="<?= $schoolIs->state;?>" />
                    <input type="hidden" name="school_city" value="<?= $schoolIs->city_id;?>" />
                    <input type="hidden" name="user_type" value="<?= $usertype;?>" />
                    <button type="submit" id="submit" name="import" class="btn btn-primary d-block">Upload CSV</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-6">
                <!-- <div class="alert" id="response" style="display: none">e</div> -->
                <div id="response"
                    class="alert <?php if (!empty($session->getFlashdata('err_type'))) {echo $session->getFlashdata('err_type') . " display-block";}?>">
                    <?php if (!empty($session->getFlashdata('message_csv'))) {echo $session->getFlashdata('message_csv');}?>
                </div>
            </div>

            <?php if (!empty($session->getFlashdata('duplicate_csv'))) { ?>
                <div class="col-md-6">
                    <div id="duplicateCsv">
                        <?php if (!empty($session->getFlashdata('duplicate_csv'))) { echo $session->getFlashdata('duplicate_csv');}?>
                    </div>
                </div>           
            <?php } ?>
        </div>

    </div>
</div>
<!-- Container-fluid Ends-->

</div>

<script>
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function() {
        $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
            $("#response").addClass("alert alert-danger");
            $("#response").css('display', 'block');
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>