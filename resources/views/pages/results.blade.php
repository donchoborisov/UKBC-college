@extends('layouts.default')

@section('content')
   <!-- banner start -->
   <section>
    <div class="container-fluid">
       
        <div class="row bg-secondary justify-content-center align-items-center banner-heading "  style="height: 50vh;">
            <div class="col-sm-10 text-right">
                <h1 class="display-3 text-capitalize banner-heading "><span class="text-warning banner-s  ">SEARCH RESULTS</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>

    {{ Breadcrumbs::render('search') }}
  </section>
  <section class="p-5">
    <div class="container-fluid">
        <!---title start-->
        <div class="row">
            <div class="col text-center mb-3">
              
                <p class="lead text-secondary">RESULTS</p>
            </div>
         </div>
        <!---title end-->
        <div class="row ">
          
           @if($courses->isEmpty())

           <div class=" col text-center mb-3">
                
            <p>No results are find try to use different keyword</p>
            
           </div>


           @else

          @foreach($courses as $course)
          <div class="col-lg-3 col-sm-6 course-content">
             <a href="/course/{{$course->title}}">
              <img src="{{Voyager::image($course->image)}}" class="img-thumbnail shadow">
              <h2 class="my-3 text-warning heading">{{$course->title}}</h2>
            </a>
              <p class="text-muted">{!! Str::words($course->content, 30, ' ...') !!}</p>
          
          </div>
          @endforeach
   
          @endif
         

        
 
            
           
        </div>

    </div>




<!--courses-end-->

</section>

 





 








  
@stop