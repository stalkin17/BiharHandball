@extends('frontend.pages.includes.layout')
@section('title', 'Videos')
@section('container')
<!----------------------------------- Video Gallery starts here--------------------------------------->
<div class="container-fluid m-0 p-0 "><!-- main container starts here -->
	<!--------------------------------- first row starts here ---------------------------------------->
    <div class="row">
    	<!-- --------------------Gallery heading starts here -----------------------------------------> 
    	<div class="container-fluid text-white bg-danger text-center my-1 pt-1" >
    		<h2>Video Gallery</h2></div>
    	<!-- --------------------Gallery heading ends here ------------------------------------------->

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SC1XE85BC9o" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->
                
                <div class="card-content text-center">
                    <span class="card-title">Video Title-1</span>                   
                    
                </div><!-- card content -->             
                
            </div><!-- end of card -->
        </div><!-- end of col -->

        <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VNYwx5KBoYY" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->           
                <div class="card-content text-center">
                    <span class="card-title">Video Title-2</span>                    
                </div><!-- card content -->              
            </div><!-- end of card -->
        </div><!-- end of col -->

                <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VNYwx5KBoYY" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->           
                <div class="card-content text-center">
                    <span class="card-title">Video Title-3</span>                    
                </div><!-- card content -->              
            </div><!-- end of card -->
        </div><!-- end of col -->
                <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VNYwx5KBoYY" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->           
                <div class="card-content text-center">
                    <span class="card-title">Video Title-4</span>                    
                </div><!-- card content -->              
            </div><!-- end of card -->
        </div><!-- end of col -->

    </div> <!-- end of first row -->

	<!--------------------------------------------- second row starts here ---------------------------> 
     <div class="row">    
        <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/23mXDU5bBhw" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->
                
                <div class="card-content text-center">
                    <span class="card-title">Video Title-5</span>                    
                </div><!-- card content -->
                
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/oJhPYmw21fw" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->
                
                <div class="card-content text-center">
                    <span class="card-title">Video Title-6</span>                    
                </div><!-- card content -->
                
            </div><!-- end of card -->
        </div><!-- end of col -->
         <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/oJhPYmw21fw" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->
                
                <div class="card-content text-center">
                    <span class="card-title">Video Title-7</span>                    
                </div><!-- card content -->
                
            </div><!-- end of card -->
        </div><!-- end of col -->
        <div class="col-md-3 col-sm-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/oJhPYmw21fw" frameborder="0" allowfullscreen></iframe>
					</div>
                    
                </div><!-- card image -->
                
                <div class="card-content text-center">
                    <span class="card-title">Video Title-8</span>                    
                </div><!-- card content -->
                
            </div><!-- end of card -->
        </div><!-- end of col -->
    </div> <!-- end of second row -->
<!--------------------------------------------- second row ends here --------------------------------> 
</div> <!-- end of main container -->
<!----------------------------------- Video Gallery ends here---------------------------------------->
<!----------------------------------- Java script for video control starts here --------------------->
<script>
	$(function(){

    $('#show').on('click',function(){        
        $('.card-reveal').slideToggle('slow');
    });
    
    $('.card-reveal .close').on('click',function(){
        $('.card-reveal').slideToggle('slow');
    });
});
</script>
<!----------------------------------- Java script for video control ends here --------------------->
@endsection