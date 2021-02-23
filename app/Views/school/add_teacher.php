

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Teacher</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <form action="<?=base_url()?>/school/addnewuser" enctype="multipart/form-data" method="post">
                            <div class="row product-adding">
                                <input type="hidden" name="accounttype" value="teacher">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> First Name</label>
                                        <input name="fname" class="form-control" id="validationCustom01" type="text" required="">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                 <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"><span>*</span>Last Name</label>
                                    <input name="lname" class="form-control" id="validationCustom05" type="text" required="">
                                </div>
                            </div>


                            <div class="col-xl-6">
                             <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0"><span>*</span>Date-of-birth</label>
                                
                                <input  type="date" id="birthday" name="dob" class="form-control" id="validationCustom05" placeholder="dd-mm-yyyy" type="text" required="">
                                
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Mobile</label>
                                 <input type="tel" class="form-control" id="validationCustomtitle" name="mobile" placeholder="1234566789" pattern="[0-9]{10}" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Email</label>
                                <input name="email"  class="form-control" id="validationCustom02" type="email" required="">
                            </div>
                        </div>
                        
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Gender</label>
                                <select name="gender" id="validationCustom02" class="form-control" required="" value="male">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                     
                        <div class="col-xl-6">
                            <div class="form-group">
                             <label for="validationCustom02" class="col-form-label"><span>*</span> State</label>
                             <select name="state" id="validationCustom02" class="form-control" required="">
                                <option disabled="">Select State</option>
                                <option value="32">ANDAMAN &amp; NICOBAR</option>
                                <option value="1">ANDHRA PRADESH</option>
                                <option value="3">ARUNACHAL PRADESH</option>
                                <option value="2">ASSAM</option>
                                <option value="4">BIHAR</option>
                                <option value="31">CHANDIGARH</option>
                                <option value="35">CHATTISGARH</option>
                                <option value="30">DADRA &amp; NAGAR</option>
                                <option value="29">DAMAN &amp; DIU</option>
                                <option value="25" selected="">DELHI</option>
                                <option value="26">GOA</option>
                                <option value="5">GUJRAT</option>
                                <option value="6">HARYANA</option>
                                <option value="7">HIMACHAL PRADESH</option>
                                <option value="8">JAMMU &amp; KASHMIR</option>
                                <option value="34">JHARKHAND</option>
                                <option value="9">KARNATAKA</option>
                                <option value="10">KERALA</option>
                                <option value="28">LAKSHDWEEP</option>
                                <option value="11">MADHYA PRADESH</option>
                                <option value="12">MAHARASHTRA</option>
                                <option value="13">MANIPUR</option>
                                <option value="14">MEGHALAYA</option>
                                <option value="15">MIZORAM</option>
                                <option value="16">NAGALAND</option>
                                <option value="17">ORISSA</option>
                                <option value="27">PONDICHERY</option>
                                <option value="18">PUNJAB</option>
                                <option value="19">RAJASTHAN</option>
                                <option value="20">SIKKIM</option>
                                <option value="21">TAMIL NADU</option>
                                <option value="22">TRIPURA</option>
                                <option value="23">UTTAR PRADESH</option>
                                <option value="33">UTTARAKHAND</option>
                                <option value="24">WEST BENGAL</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="form-group mb-0">
                            
                        </div>
                    </div> 

                    <div class="col-xl-6">
                        <div class="form-group mb-0">
                            <div class="product-buttons text-left">
                                <button  type="submit" class="btn btn-primary">Add</button>

                            </div>
                        </div>
                    </div> 

                </div>

            </form>
        </div>
    </div>
</div>

</div>
</div>
<!-- Container-fluid Ends-->

</div>
