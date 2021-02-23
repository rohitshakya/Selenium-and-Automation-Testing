<?PHP
header('Access-Control-Allow-Origin: *');
?>

<!-- Right sidebar Start-->
<!-- Right sidebar Ends-->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards grow">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Total Classes</span>
                            <h3 class="mb-0"><span class="counter">  
                                <?php 


                                if(!empty($period))
                                {
                                    echo count($period);
                                }
                                else
                                    echo 0;
                            ?>
                                
                            </span><small> Total</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden  widget-cards grow">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Video Watch</span>
                            <h3 class="mb-0"><span class="counter">0
                            </span><small> Total</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards grow">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Quiz Score</span>
                            <h3 class="mb-0"><span class="counter">8</span><small> Jan</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards grow">
                <div class="bg-danger card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="message-square" class="font-danger"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Notifications</span>
                            <h3 class="mb-0"><span class="counter">
                                <?php 
                            if(!empty($notificationarray))
                            {
                                echo count($notificationarray);
                            }
                            else
                            {
                                echo "0";
                            }
                            ?></span><small> Total</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 xl-100">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Classes</h5>
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
                            <th>SUBJECT</th>
                            <th>CLASS</th>
                            <th>TEACHER</th>
                            <th>SECTION</th>
                            <th>REMARK</th>
                                </tr>
                            </thead>
                            <tbody>

                                 



                         <?php 
                         if(!empty($period))
                         {


                           if (is_array($period) && count($period) > 0)  { 
                            $i=1; foreach ($period as $key) {?>
                              <tr>


                               <td>                                       
                                <?php 
                                if (!empty($key->subject_id)) {
  # code...

                                  echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->subject_id)->getRow('sub_name');
                                } ?></td>

                                <td><?php  echo $key->class; ?>
                                <td>                                       
                                  <?php 
                                  if (!empty($key->user_id)) {
  # code...

                                    echo $db->query("select vc_name from vt_useraccount where vc_id =" . $key->user_id)->getRow('vc_name');   }?></td>                                   

                                  </td>
                                  <td><span class="badge badge-success"><?php if(!empty($key->section))
                                  {

                                    echo $key->section; }
                                    ?></span></td>
                                    <td><?php  
                                    if(!empty($key->timing))
                                    {
                                      echo $key->timing;    
                                    }
                                    else
                                      echo "NA";
                                    ?></td>
                                    <!--   <td>0</td>-->
                                    
                                  </tr>
                                <?php }}}
                                else
                                {
                                  ?><tr><td><p>No data available</p></td></tr><?php
                                }
                                ?>
                              </tbody>
                            </table>

                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 xl-100">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Notifications <i class="fab fa-accessible-icon" aria-hidden="true"></i></h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-address-book-o" aria-hidden="true"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive products-table">
                        <table class="table table-bordernone mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Notification Description</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                        <?php

                         if(!empty($notificationarray))
                         {
                           if (is_array($notificationarray) && count($notificationarray) > 0)  { 
                            $i=1; foreach ($notificationarray as $key) {
                              foreach ($key as $keyindex) {?>
                                
                                <tr>
                                  <td><?php echo $keyindex->assignment_details;?></td>
                                </tr>
                                
                              <?php }}}}
                              else
                              {
                                ?><tr><td><p>No data available</p></td></tr><?php
                              }?>
                       
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Activity Progress</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                        </ul>
                    </div>
                </div>

                 <?php

                         if(!empty($activityreport))
                         {  

                           if (is_array($activityreport) && count($activityreport) > 0)  { 
                            $i=1; foreach ($activityreport as $key) {
                              
                                ?>
                                
                                <tr>
                                  <td><?php echo $key->act_type;?></td>
                                </tr>
                                
                              <?php }}}
                              else
                              {
                                ?><tr><td><p>No data available</p></td></tr><?php
                              }?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph">
                                <h6>Activity Report</h6>
                                <div class="chart-block chart-vertical-center">
                                    <canvas id="myDoughnutGraph"></canvas>
                                </div>
                                <div class="order-graph-bottom">
                                    <div class="media">
                                        <div class="order-shape-primary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Life<span class="pull-right">70%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-secondary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Number System <span class="pull-right">10%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-danger"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Reasoning <span class="pull-right">20%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-warning"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Atlas <span class="pull-right">0%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Container-fluid Ends-->

</div>

