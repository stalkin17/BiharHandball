@extends('frontend.pages.includes.layout')
@section('title', 'Registration')
@section('container')
<!-------------------------------Registration Starts Here------------------------------------- -->

<title>Registration Form</title>
</head>
  <body>
    <div class="container-fluid"><!-- main container starts -->
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Personal Details
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            <title>Registration Form</title>
    <div class="container-fluid"><!-- container starts -->
      <div class="card   bg-dark mb-2"><!-- card header starts -->
        <!-- <div class="card-header text-white text-center"><h2>Player's Personal Details</h2></div>   -->    
        <div class="card-body text-white "> <!-- card body starts -->
         <form role="form" method="post" enctype="multipart/form-data" id="reg_form" > <!-- form starts -->
          <div class="row"><!-- row starts -->
            <div class="col-md-12 col-lg-12">
              <div id="response"></div>
              <div class="form-group">
                <label for="regtype">Registration Type*</label>
                <select name="regtype" id="regtype" class="custom-select" data-validation="required">
                  <option value="" selected>Select</option>                 
                  <option value="Men">Men</option>
                   <option value="Women">Women</option>
                  <option value="Boy">Boy</option>
                  <option value="Girl">Girl</option>                 
                </select>
              </div>
            </div>
          </div><!-- row ends -->
  <fieldset>
        <legend class="badge badge-danger"><strong>Personal Details:</strong></legend>

      
          <div class="row"> <!-- row starts -->                 
               <div class="col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="fname">First :*</label>
                      <input type="text" name="fname" id="fname" class="form-control"
                      placeholder="Min 3 Characters" data-sanitize="upper" 
                      data-validation="custom" data-validation-regexp="^[a-zA-Z]+(\s[a-zA-Z]+)?$">
                   </div>
               </div>
                                
              <div class="col-md-4 col-lg-4">
                <div class="form-group">  
                <label for="lname">Last Name:*</label>
                  <input type="text" name="lname"  id="lname" class="form-control"
                  placeholder="Min 3 Characters" data-sanitize="trim upper" 
                  data-validation="custom" data-validation-regexp="^([a-zA-Z]{3,20})$">
                </div>
              </div>

            <div class="col-md-4 col-lg-4">
               <div class="form-group"> 
                <label for="dob">Date of Birth(dd/mm/yyyy):*</label>
                <input type="text" class="form-control" name="dob" id="dob" 
                placeholder="dd/mm/yyyy" data-sanitize="trim upper" 
                data-validation="birthdate" data-validation-format="dd/mm/yyyy">
              </div>
            </div>
          </div> <!-- end of row -->

          <div class="row"> <!-- row starts --> 

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="fathername">Father Name:*</label>
                            <input type="text" name="fathername" id="fathername" class="form-control"
                              placeholder="Min 3 Characters" 
                                data-sanitize="trim upper" data-validation="custom" 
                                data-validation-regexp="^([a-zA-Z\s]{3,50})$">
                         </div>
                     </div>
                            
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">  
                          <label for="mothername">Mother Name:*</label>
                            <input type="text" name="mothername"  id="mothername" class="form-control"
                              placeholder="Min 3 Characters"  data-sanitize="trim upper" 
                              data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,50})$">
                        </div>
                      </div>
            </div> <!-- row ends -->
    </fieldset>

    <fieldset>
        <legend class="badge badge-danger"><strong>Contact Details:</strong></legend>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label for="place">Address*</label>
                <input type="text" class="form-control" name="place" id="place" 
                placeholder="Allowed Alphanumeric only" 
                data-sanitize="trim upper" data-validation="custom" 
                data-validation-regexp="^([a-zA-Z\s\d]{3,20})$" >
             </div>
            </div>
          </div>

         <div class="row"><!-- row starts -->

         <div class="col-md-3 col-lg-3">
         <div class="form-group">
         <label for="vcity">Village/City:*</label>
         <input type="text"  name ="vcity" id="vcity" class="form-control" 
          placeholder="Allowed Alphabets only" 
          data-sanitize="trim upper" data-validation="custom" 
          data-validation-regexp="^([a-zA-Z\s]{3,20})$">
         </div>
         </div>
                            
         <div class="col-md-3 col-lg-3">
         <div class="form-group">  
         <label for="spr">State/Province/Region:*</label>
         <input type="text"  name="spr" id="spr" class="form-control" 
         placeholder="Allowed Alphabets only" 
         data-sanitize="trim upper" data-validation="custom" 
         data-validation-regexp="^([a-zA-Z\s]{3,50})$">
         </div>
         </div>

         <div class="col-md-3 col-lg-3">
         <div class="form-group"> 
         <label for="dist">District:*</label>
         <input type="text" class="form-control" name="dist" id="dist"
         placeholder="Allowed Alphabets only" 
         data-sanitize="trim upper" data-validation="custom"
         data-validation-regexp="^([a-zA-Z\s]{3,50})$">
         </div>
         </div>

         <div class="col-md-3 col-lg-3">
         <div class="form-group"> 
         <label for="pin">Pincode:(6 digit only)*</label>
         <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode in digits only" 
         data-sanitize="trim" data-validation="custom" 
         data-validation-regexp="^[1-9]{1}[0-9]{5}$">
         </div>
         </div>

         </div> <!-- end of row -->


         <div class="row"><!-- row starts -->                  
         <div class="col-md-4 col-lg-4">
         <div class="form-group">
         <label for="country">Country:*</label>
         <input type="text"   class="form-control"  value="India" disabled>
         </div>
         </div>
                            
         <div class="col-md-4 col-lg-4">
         <div class="form-group">  
         <label for="mobile">Mobile No:(#with ISD CODE e.g. +91xxxxxxxxxx )*</label>
         <input type="text" name="mobile"  id="mobile" class="form-control" 
         placeholder="Mobile"  data-sanitize="trim" data-validation="custom" 
         data-validation-regexp="^((\+){1}91){1}[1-9]{1}[0-9]{9}$">
         </div>
         </div>

         <div class="col-md-4 col-lg-4">
         <div class="form-group"> 
          <label for="aadhar">Aadhar Card No:(12 digits only)*</label>
           <input type="text" class="form-control" name="aadhar" id ="aadhar"
            placeholder="Aadhar Card No" 
            data-sanitize="trim" data-validation="custom" 
            data-validation-regexp="^[1-9]{1}[0-9]{11}$" >
            <span id="aadhar_check" class="text-white"></span>
          </div>
          </div>

          </div> <!-- row ends -->


        <div class="row"> <!-- row starts -->
        <div class="col-md-12 col-lg-12">       
          <div class="form-group">
            <label for="email">Email:*</label>
            <input type="text" class="form-control" name="email" id="email" 
            placeholder="Your Email" data-sanitize="trim lower" data-validation="email required" >
          </div>
        </div>
        </div> <!-- row ends -->
  </fieldset>


  <fieldset>
    <legend class="badge badge-danger"><strong>Image Uploads</strong></legend>
      <div class="row"><!-- row starts -->

          <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="pic">Upload Picture of candidate(3cmx4cm):*</label><br>
            <input type="file" class="form-control-file" name="pic" id="pic"                      
            data-validation="mime size dimension required"
            data-validation-allowing="jpg, png, jpeg"
            data-validation-max-size="50kb" 
            data-validation-dimension="min150x200"
            data-validation-dimension="max200x230">
          </div>
          </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group"><label for="sign">Upload Signature of Candidate(2cmx1cm):*</label><br>
            <input type="file" class="form-control-fle" name="sign" id="sign"
             data-validation="mime size dimension required" 
             data-validation-allowing="jpg, png, jpeg" 
             data-validation-max-size="20kb"
             data-validation-dimension="min120x40"
             data-validation-dimension="max150x50">
            </div>
            </div>
          </div><!-- row ends   -->              
 </fieldset> 

          <div class="row"><!-- row starts -->
            <div class="col-md-12 col-lg-12">  
            <div class="form-group">
            <label for="check" class="form-control">Terms & Conditions:*</label>
            <input type="checkbox" name="tnc" id="tnc" data-validation="checkbox_group" data-validation-qty="min1"> I agree to all the <a href="">terms and conditions</a> of BHA.
            </div>
            </div>
          </div><!-- row ends -->
  
           <button type="submit" class="btn btn-success" id="btnSubmit" >submit</button>
        </form> <!-- end of form -->
        </div><!-- card body ends -->
    </div><!-- card header ends -->
      </div>
    </div>
  </div>

<!----------------------- Code for Players Apply with app id------------------------------------------------->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Registration
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <div id="msg"></div>
        <form role="form" method="post"    id="aprocess"> <!-- form starts -->
      

  <fieldset>
    
    <div class="row"> <!-- row starts -->
      
        <div class="col-md-12 col-lg-12">       
          <div class="form-group">
            <label for="aadhar">Aadhar Id:*</label>
            <input type="text" class="form-control" name="aadhar" id="aadhar" 
            placeholder="Your Aadhar No " data-sanitize="trim" data-validation="required" >
          </div>
        </div>
        </div> <!-- row ends -->



        <legend class="badge badge-danger"><strong>Professional Details:</strong></legend>

        <div class="row"><!-- row starts -->
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="profile"> Profile*</label>
                            <select class="custom-select" name="profile" id="profile" data-validation="required">
                              <option value="" selected>Select</option>
                              <option value="Student" >Student</option>
                              <option value="Professional">Professional</option>
                            </select>
                        </div>
                    </div>
        </div><!-- row ends -->

         <div class="row"><!-- row starts -->
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="control-label" for="session"> Sessional Year*</label>
                    <select class="custom-select" name="session" id="session" data-validation="required">  
                      <option value="" selected="">Select</option>                          
                      <option value="2016-2017">2016-2017</option>
                      <option value="2017-2018">2017-2018</option>
                      <option value="2018-2019">2018-2019</option>
                    </select>
                </div>
            </div>
        </div><!-- row ends -->


        <div class="row"><!-- row starts -->
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="control-label" for="plevel"> Play Level*</label>
                    <select class="custom-select" name="plevel" id="plevel" data-validation="required"> 
                      <option value="" selected>Select</option>                         
                      <option value="Mini" >Mini</option>
                      <option value="Sub-Junior">Sub-Junior</option>
                      <option value="Junior">Junior</option>
                      <option value="Senior">Senior</option>
                      <option value="Association Cup Championship">Association Cup Championship</option>
                      <option value="All Bihar School Championship">All Bihar School Championship</option>
                    </select>
                </div>
            </div>                    
        </div><!-- row ends -->


        <div class="row"> <!-- row starts -->
            <div class="col-md-12 col-lg-12 ">
                <div class="form-group">
                    <label class="control-label" for="dunit"> District Unit*</label>
                    <select class="custom-select" name="dunit" id="dunit" data-validation="required">
                      <option value="" selected="">Select</option>
                      <option value="Araria">Araria</option>
                      <option value="Arwal">Arwal</option>
                      <option value="Aurangabad">Aurangabad</option>
                      <option value="Banka">Banka</option>
                      <option value="Begusarai">Begusarai</option>
                      <option value="Bhagalpur">Bhagalpur</option>
                      <option value="Bhojpur">Bhojpur</option>
                      <option value="Buxar">Buxar</option>
                      <option value="Darbhanga">Darbhanga</option>
                      <option value="East Champaran">East Champaran</option>
                      <option value="Gaya">Gaya</option>
                      <option value="Gopalganj">Gopalganj</option>
                      <option value="Jamui">Jamui</option>
                      <option value="Jehanabad">Jehanabad</option>
                      <option value="Kaimur">Kaimur</option>
                      <option value="Katihar">Katihar</option>
                      <option value="Khagaria">Khagaria</option>
                      <option value="Kishanganj">Kishanganj</option>
                      <option value="Lakhisarai">Lakhisarai</option>
                      <option value=" Madhepura"> Madhepura</option>
                      <option value=" Madhubani"> Madhubani</option>
                      <option value=" Monghyr"> Monghyr</option>
                      <option value=" Muzaffarpur"> Muzaffarpur</option>
                      <option value=" Nalanda"> Nalanda</option>
                      <option value=" Nawada"> Nawada</option>
                      <option value=" Patna"> Patna</option>
                      <option value=" Purnea"> Purnea</option>
                      <option value=" Rohtas"> Rohtas</option>
                      <option value=" Saharsa"> Saharsa</option>
                      <option value=" Samastipur"> Samastipur</option>
                      <option value=" Saran"> Saran</option>
                      <option value=" Sheohar"> Sheohar</option>
                      <option value=" Shiekhpura"> Shiekhpura</option>
                      <option value=" Sitamarhi"> Sitamarhi</option>
                      <option value=" Siwan"> Siwan</option>
                      <option value=" Supaul"> Supaul</option>
                      <option value=" Vaishali"> Vaishali</option>
                      <option value=" West Champaran"> West Champaran</option>
                    </select>
                </div>
            </div>                    
        </div> <!-- row ends --> 

        <div class="row"><!-- row starts -->
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="control-label" for="achievement"> Achievement, National</label>
                    <textarea name="achievement" id="achievement" class="form-control" cols="50" rows="3" 
                    data-sanitize="trim upper" data-validation="custom" 
                data-validation-regexp="^([a-zA-Z\s\.]{3,50})$"></textarea>                            
                </div>
            </div>                    
        </div> <!-- row ends -->
    </fieldset>
        <button type="submit" class="btn btn-success" id="process" >submit</button>
           
        </form> <!-- end of form -->
      </div>
    </div>
  </div>
<!-- --------Print/Download Regisration form------- -->
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Download Application
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">

        <form action="admin/get_application.php" method="POST">
          <label for="">Enter Application ID:</label>
          <input type="text" name="get_pdf_id">
          <input type="submit" name="submit" value="submit">
        </form>

    </div>
    </div>
  </div>

<!-- --------Print/Download Regisration form------- -->
</div>
</div><!-- container ends -->
  </div><!-- main container ends -->
<!-------------------------------Registration Ends Here------------------------------------->
@endsection