@extends('frontend.pages.includes.layout')
@section('title', 'Home')
@section('container')
@include('frontend.pages.includes.slider')
<div class="container-fluid m-0 p-0">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-stretch">
            <div class="card  border border-success m-2 p-2" style="width:48rem;">
              <div class="card-header bg-success text-center text-white text-justify">
                <span class="heading font-effect-emboss">
                    <i class="fas fa-user-circle"></i>
                    ABOUT US</span></div>
                    <div class="card-body text-justify ">
                    <span >Its our privilage to announce that on <b> 1<sup>st</sup> Dec, 2018</b>,a brand new website of Bihar Handball Association is launched to connect the Handball activities of Bihar to each and every stakeholders of Bihar Handball Association.This step is an approach to spread equality among each individual. We are trying to make handball more than active and transparent ever in state.We have made all efforts to provide relevant information to the handball fraternity and fans, and are constantly endeavoring to keep our website updated. Feel free to leave any suggestion at our 
                    contact us page <i class="text-danger fas fa-share"></i> <a href="{{url('/contact_us')}}" class="text-danger">Click here.</a>

                    </span>
                    
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-stretch">
            <div class="card border border-danger m-2 p-2" style="width: 48rem;">
              <div class="card-header bg-danger text-center  text-justify">
                <span class="heading font-effect-emboss">
                    <i class="fas fa-flag"></i>
                    NOTIFICATION</span>
            </div>
              <ul class="list-group list-group-flush ">
                  <li class="list-group-item">
                    <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i>  <kbd> <a href="{{asset('/uploads/guideline.pdf')}}" download="guideline.pdf">Click here</a></kbd> for Registration Guidelines. </li>  
                                 
              <li class="list-group-item">
                  <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i> <kbd> <a href="{{asset('/uploads/deletion_list.pdf')}}" download="deletion_list.pdf">Click here</a></kbd> for Deletion list of Players  for voilating  <a href = "{{asset('/uploads/guideline.pdf')}}" class = 'text text-danger' download="guideline.pdf"> Registration Guideline</a>. </li>
                     <li class="list-group-item">
                  <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i> <kbd> <a href="{{asset('/uploads/banned_list.jpg')}}" download="banned_list.jpg">Click here</a></kbd> for List of Banned Players. </li>
           <li class="list-group-item" >
                    <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i>  <kbd> <a href="{{asset('/uploads/notifiication_4.pdf')}}" download="notifiication_4.pdf">Click here</a></kbd> for Detailed Notification for 6<sup>th</sup> Bihar Junior Boys Handball Championship 2020-21. </li> 
             
                 
              </ul>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-stretch">
            <div class="card border border-primary m-2 p-2" style="width: 48rem;" id="demo2">
              <div class="card-header bg-primary text-center  text-justify">
                <span class="heading font-effect-emboss">
                    <i class="fas fa-bullhorn"></i>
                    LATEST NEWS</span>
            </div>
              <ul class="list-group list-group-flush ">
                <marquee behavior="slide" direction="up" scrollamount="2"  height ="100%" loop='10000' >
                                      
                 
                     <li class="list-group-item">
                    <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i> Registration for 6<sup>th</sup> Bihar Junior Boys Handball Championship 2020-21 is Open Now . 
                    </li>
                     <li class="list-group-item">
                    <i class="text-primary fas fa-edit"></i>                      
                    &nbsp;</i> Last Date of Online Registration is 31<sup>st</sup> December 2020, 12:00AM. </li> 
                </marquee>
                
              </ul>
            </div>
        </div>
    
</div>
@endsection