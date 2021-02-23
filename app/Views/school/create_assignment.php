<div class="col-xl-12 xl-100">
    <div class="card height-equal">
        <div class="card-header">
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="icofont icofont-simple-left"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="user-status table-responsive products-table">
                <table class="table table-bordernone mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Notification Details</th>
                            <th scope="col">Period Id</th>
                            <th scope="col">Teacher Name</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                       if(!empty($assignment))
                       {
                       if (is_array($assignment) && count($assignment) > 0)  { 
                           $i=1; foreach ($assignment as $key) { 
                            ?>
                       
                                <tr>
                                    <td class="bd-t-none u-s-tb">
                                        <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="" alt="" data-original-title="" title="">
                                            <div class="d-inline-block">
                                                <h6><?php echo $key->assignment_details;?><span class="text-muted digits"></span></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $key->period_id;?></td>
                                    
                                    <td class="digits">                                       
<?php echo $db->query("select vc_name from vt_useraccount where vc_id =" . $key->user_id)->getRow('vc_name'); ?></td>  
                                    
                                </tr>
                                
                                 <?php }}}
                                      else
                            {
                                ?><tr><td><p>No data available</p></td></tr><?php
                            }?>

                                

                      </tbody>
                  </table></div></div>

                  <!-- Container-fluid starts-->
                  <div class="container-fluid">
                    <div class="card tab2-card">
                        
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">Class 1</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <form class="needs-validation" action="<?=base_url()?>/school/assignment/add" enctype="multipart/form-data" method="post">
                                        <h4>Notification</h4>
                                        <div class="form-group row">
                                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Name</label>
                                            <textarea class="form-control col-xl-8 col-md-7" name="name" id="validationCustom0" type="text"></textarea>
                                        </div>
                                        
                                        <div class="form-group row">
                                            
                                            <div class="checkbox checkbox-primary col-xl-8 col-md-7"  >
                                                <input id="checkbox-primary-2"  type="checkbox" data-original-title="" title="">
                                                <label for="checkbox-primary-2">Share by the email</label>
                                            </div>
                                        </div>

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div></div></div>