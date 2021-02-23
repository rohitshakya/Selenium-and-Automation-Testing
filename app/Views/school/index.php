
<!-- Container-fluid Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards grow">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Teacher accounts</span>

                            <h3 class="mb-0"><span class="counter">                                
                            <?php 
                            if(!empty($tcount))
                            {
                                echo $tcount;
                            }
                            else
                            {
                                echo "0";
                            }
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
                    <div class="media-body col-8"><span class="m-0">Student accounts</span>

                        <h3 class="mb-0"> <span class="counter">
                            <?php 
                            if(!empty($scount))
                            {
                                echo $scount;
                            }
                            else
                            {
                                echo "0";
                            }
                            ?>



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
                        <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                    </div>
                    <div class="media-body col-8"><span class="m-0">Volt Subscription</span>

                        <h3 class="mb-0"><span class="counter">0</span><small> Total</small></h3>
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
                        <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                    </div>
                    <div class="media-body col-8"><span class="m-0">Volt Junior Subscription</span>
                        <h3 class="mb-0"><span class="counter">0</span><small> Total</small></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6 xl-100">
        <div class="card height-equal">
            <div class="card-header">
                <h5>Teacher Details</h5>
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
                                <th scope="col">Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php  

                          if(!empty($teacherlist))
                          {
                          if (is_array($teacherlist) && count($teacherlist) > 0)  { 
                            $i=1; foreach ($teacherlist as $key) {?>
                                <tr>
                                    <td><?php if ($key->vc_name) {
                                     echo $key->vc_name; }?></td>
                                     <td><?php if ($key->vc_class) {
                                     echo $key->vc_class; }?></td>
                                    <td><?php if ($key->vc_subject) {
                                     echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->vc_subject)->getRow('sub_name'); }?></td>
                                      <td><?php if ($key->vc_contact) {
                                     echo $key->vc_contact; }?></td>
                                    </tr>
                            <?php }}}
                                else
                            {
                                ?><tr><td><p>No data available</p></td></tr><?php
                            }?>
                        </tbody>
                    </table>
                </div>
                <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre class=" language-html"><code class=" language-html" id="example-head4">

                    </code></pre>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 xl-100">
        <div class="card height-equal">
            <div class="card-header">
                <h5>Student List</h5>
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
                                <th scope="col">Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            if(!empty($studentlist))
                            {
                            if (is_array($studentlist) && count($studentlist) > 0)  { 
                                $i=1; foreach ($studentlist as $key) {?>
                                     <tr>
                                    <td><?php if ($key->vc_name) {
                                     echo $key->vc_name; }?></td>
                                     <td><?php if ($key->vc_class) {
                                     echo $key->vc_class; }?></td>
                                    <td><?php if ($key->vc_subject) {
                                     echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->vc_subject)->getRow('sub_name'); }?></td>
                                      <td><?php if ($key->vc_contact) {
                                     echo $key->vc_contact; }?></td>
                                    </tr>
                            <?php }}}
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph">
                                <h6>Assignment Report</h6>
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
                        
                        
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph sm-order-space">
                                <h6>Total Classes</h6>
                                <div class="peity-chart-dashboard text-center">
                                    <span class="pie-colours-1">4,7,6,5</span>
                                </div>
                                <div class="order-graph-bottom sales-location">
                                    <div class="media">
                                        <div class="order-shape-primary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Class 10th <span class="pull-right">14%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-secondary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Class 9th <span class="pull-right">36%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-danger"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Class 3rd <span class="pull-right">16%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-warning"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mr-0">Class 2nd <span class="pull-right">34%</span></h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                         <div class="col-xl-6 xl-100">
                            <div class="order-graph xl-space">
                                <h6>Attendance for last month</h6>
                                <div class="ct-4 flot-chart-container"></div>
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

