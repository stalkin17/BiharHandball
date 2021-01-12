@extends('frontend.pages.includes.layout')
@section('title', 'Login')
@section('container')
<div class="login-form">
    <form id="adminlogin" action="login.php" method="post">
    <div class="avatar">
      <img src="{{asset('images/logo.jpg')}}" class="rounded-circle" alt="Avatar">
    </div>
        <h2 class="text-center text-danger">Users Login</h2>   
         <div class="form-group">
                <label for="regtype">Login Type*</label>
                <select name="regtype" id="regtype" class="custom-select" data-validation="required">
                  <option value="" selected>Select</option>                 
                  <option value="1">Super Admin</option>
                   <option value="2">Admin</option>
                  <option value="3">Club</option>
                  <option value="4">Player</option>                 
                </select>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>    
        <h6><a href="/register" class="text text-danger">Click here </a>to register yourself.</h6>
    </form>    
</div>
@endsection