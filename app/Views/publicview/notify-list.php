<?php include "header.php";?>
<!-- edution BREADCRUMB AREA -->

<style>
	.list-group-item-info {
    color: #31708f;
    background-color: #fff !important;
    margin-top: 15px;
    box-shadow: 0px 0px 5px #e4e4e3;
}
	
	
</style>
<div class="breatcome_area">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="breatcome_title">
                <div class="breatcome_title_inner">
                    <h2>Notification</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="admision_area about_page " id="admission">
    <div class="container" style="max-width:1350px;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php
                        if (count($getNotification) > 0) {
                            echo '<a href="javascript:void(0);" class="btn btn-primary" id="setreadall">Mark all as read</a>';
                            $nids = array();
                            echo "<ul>";
                            foreach ($getNotification as $nData) {
                                $notifyLogs = $modelData->singledata('notify_logs', ['userid' => $getLogin->vc_id, 'pushid' => $nData->id, 'view' => '1']);
                                $notify = $modelData->singledata('notify', ['id' => $nData->notifyid]);

                                $url_notifi = "<a target='_blank' href='".$notify->link."' class='btn-sm btn-warning' style='float:right;'><em class='fa fa-link mr-1'></em></a>";
                                $nurl = ($notify->link) ? $url_notifi : '';

                                if (!empty($notifyLogs)) {           
                                    $mark_read = "list-group-item-light";
                                    $markasread = '';
                                } else {      
                                    $nids[] = $nData->id;       
                                    $mark_read = "list-group-item-info";
                                    $markasread = '<b style="margin-bottom:6px;">Mark as read</b>';
                                }

                                echo "<li class='list-group-item " . $mark_read . "' id='msg-" . $nData->id . "'><h4 style='font-weight: bold;'>" . $nData->notify_title . "<span class='label label-primary' style='float: right;'>" . date('d M Y', strtotime($nData->created_on)) . "</span></h4><a href='javascript:void(0);' onclick='gotourl(" . $nData->id . ");' id=" . $nData->notifyid . "><span>" . substr($nData->notify_desc, 0, 512) . "</span><br/>".$markasread."</a> ".$nurl." </li>";

                            }
                            echo "</ul>";
                            $unreadmsg = implode('-',$nids);
                            echo "<input id='unreadmsg' type='hidden' value='".$unreadmsg."' name='unreadmsg'>";
                        }else{
                            echo "<h3 class='text-center''>No Notification Found</h3>";
                        }
                        ?>
                        <?php echo $links; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('#setreadall').click(function() {
    var urIds = $('#unreadmsg').val();
    $.ajax({
        url: "<?php echo base_url("Publicmodule/update_all_notification"); ?>",
        method: "POST",
        data: {
            view: urIds,            
        },
         dataType: "json",
        success: function(data) {           
            if (data.redirect) {               
                window.location.href = data.redirect;
            }
        }
    });
});
</script>
<?php include "footer.php";?>