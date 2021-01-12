@extends('frontend.pages.includes.layout')
@section('title', 'Login')
@section('container')
<div class="login-form">
    <form id="adminlogin" action="login.php" method="post">
    <div class="avatar">
      <img src="{{asset('images/logo.jpg')}}" class="rounded-circle" alt="Avatar">
    </div>
        <h2 class="text-center text-danger">User Signup Form</h2> 

        <div class="form-group">
            <label for="fname">First Name :*</label>
              <input type="text" name="fname" id="fname" class="form-control"
              placeholder="Min 3 Characters" data-sanitize="upper" 
              data-validation="custom" data-validation-regexp="^[a-zA-Z]+(\s[a-zA-Z]+)?$">
         </div>

        <div class="form-group">
            <label for="fname">Last Name :*</label>
              <input type="text" name="lname" id="lname" class="form-control"
              placeholder="Min 3 Characters" data-sanitize="upper" 
              data-validation="custom" data-validation-regexp="^[a-zA-Z]+(\s[a-zA-Z]+)?$">
         </div>

        <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="Email" 
          data-sanitize="trim" data-validation="custom" 
         data-validation-regexp="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" 
            data-sanitize="trim" data-validation="custom" 
         data-validation-regexp="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$">
        </div>      
          
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
        </div>    
        
    </form>    
</div>
@endsection