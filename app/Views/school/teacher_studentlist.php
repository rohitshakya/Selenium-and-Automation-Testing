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


                                if(!empty($ccount))
                                {
                                    echo $ccount;
                                }
                                else
                                    echo 0;
                                ?>
                                
                            </span><small> Completed</small></h3>
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
                        <div class="media-body col-8"><span class="m-0">Students</span>
                            <h3 class="mb-0"><span class="counter">
                                <?php 


                                if(!empty($scount))
                                {
                                    echo $scount;
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
            <div class="card o-hidden widget-cards grow">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Time spent</span>
                            <h3 class="mb-0"><span class="counter">4 </span><small> Months</small></h3>
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
                        <div class="media-body col-8"><span class="m-0">Assignments</span>
                            <h3 class="mb-0"><span class="counter">
                                <?php 
                                if(!empty($assignmentcount))
                                {
                                    echo $assignmentcount;
                                }
                                else
                                {
                                    echo "0";
                                }
                                ?></span><small> Pending</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-12 xl-100">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Students</h5>
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
                                        <th scope="col">Section</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">State</th>
                                        <th scope="col">City</th>

                                    </tr>
                                </thead>
                                <tbody>



                                   <?php  

                                   if(!empty($studentlistarray))
                                   {

                                       if (is_array($studentlistarray) && count($studentlistarray) > 0)  { 

                                         $i=1; foreach ($studentlistarray as $key) {
                                            foreach ($key as $keyindex) { ?>
                                                <tr>

                                                    <td><?php  echo $keyindex->vc_name; ?></td>
                                                    <td><?php  echo $keyindex->vc_class; ?></td>
                                                    <td><?php  echo $keyindex->vc_email; ?></td>
                                                    <td><?php  echo $keyindex->vc_contact; ?></td>
                                                    <td><?php  echo $keyindex->vc_username; ?></td>
                                                    <td><?php  echo $keyindex->vc_gender; ?></td>
                                                    <td><?php echo $db->query("select name from states where id =" . $keyindex->vc_state)->getRow('name'); ?></td>

                                                    <td><?php echo $db->query("select city from cities where id =" . $keyindex->vc_city)->getRow('city'); ?></td>

                                                </tr>

                                            <?php }}
                                        } }else
                                        {
                                            ?><tr><td><p>No data available</p></td></tr><?php
                                        }

                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>