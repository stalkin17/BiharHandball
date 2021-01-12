@extends('frontend.pages.includes.layout')
@section('title', 'Contact-Us')
@section('container')
<section id="contact">
  <div class="container-fluid">
    <div class="row">
	  <div class="col-md-6">
	  	<h3 class="text-danger text-center ">
        <i class="fas fa-map-marker"></i>
          &nbsp;LOCATE US</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-6">
          <h3 class="text-primary text-center">CONTACT US</h3>
          <div id="response"></div>
        <form id="contact_us" method="post" >
          <div class="form-group">
            <input type="text" class="form-control" name="cname" id="cname"
            placeholder="Enter Your Name"   class="form-control"  placeholder="Min 3 Characters"  data-sanitize="trim upper"  data-validation="custom" 
            data-validation-regexp="^([a-zA-Z\s]{3,20})$">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="cemail" id="cemail" 
            placeholder="Enter Your Email Id"  class="form-control" 
            data-sanitize="trim lower"  data-validation="email" >
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="csub" id="csub"
            placeholder="Enter Subject"   class="form-control"  placeholder="Min 3 Characters"  data-sanitize="trim upper"  data-validation="custom" 
            data-validation-regexp="^([a-zA-Z\s]{3,30})$">
          </div>

          
          <div class="form-group">
            <textarea class="form-control" name="cmessage" id="cmessage" placeholder="Message"
            cols="50" rows="3"  data-validation="alphanumeric required" data-validation-allowing="()./,"></textarea>
          </div>

          <button class="btn btn-default" type="submit" name="button" id="send_mail"  >
             <i class="fas fa-paper-plane"></i> Send Mail
          </button>
        </form>
      
      </div>
    </div>
  </div>
</section>
@endsection