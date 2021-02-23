
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5>Add Class</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <form action="<?=base_url()?>/school/addnewclass" enctype="multipart/form-data" method="post">
                        
                        <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Class</label>
                            <select name="class" id="validationCustom02" class="form-control" required="" value="1">
                                    <option value="1">Class 1</option>
                                    <option value="2">Class 2</option>
                                    <option value="3">Class 3</option>
                                    <option value="4">Class 4</option>
                                    <option value="5">Class 5</option>
                                    <option value="6">Class 6</option>
                                    <option value="7">Class 7</option>
                                    <option value="8">Class 8</option>
                                    <option value="9">Class 9</option>
                                    <option value="10">Class 10</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Section</label>
                            <select name="section" id="validationCustom02" class="form-control" required="" value="A">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Subject</label>
                            <select name="subject" id="validationCustom02" class="form-control" required="" value="1">
                                    <option value="1">English</option>
                                    <option value="2">Science</option>
                                    <option value="3">Computer</option>
                                    <option value="4">Mathematics</option>
                                    <option value="5">Hindi</option>
                                    <option value="6">Social Studies</option>
                                    <option value="7">General Knowledge</option>
                                    <option value="8">EVS</option>
                                    <option value="9">Computer Science</option>
                                    <option value="10">Social Science</option>
                                    <option value="11">Atlas</option>
                                    <option value="12">Reasoning and Aptitude</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Teacher</label>
                            <select name="user_id" id="validationCustom02" class="form-control" required="" value="">
                                    <?php  
                           if(!empty($teacherlist))
                           {
                           if (is_array($teacherlist) && count($teacherlist) > 0)  { 
                            $i=1; foreach ($teacherlist as $key) {?>
                                <option value="<?php  echo $key->vc_id; ?>"><?php  echo $key->vc_name; ?></option>
                            <?php }}}
                                else
                            {
                                ?><tr><td><p>No data available</p></td></tr><?php
                            }?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Remark</label>
                            <input name="timing" class="form-control" id="validationCustom02" type="text" required="" placeholder="Class Description">
                        </div>

                        <div class="form-group mb-0">
                            <div class="product-buttons text-left">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Container-fluid Ends-->

</div>
