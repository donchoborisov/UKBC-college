@extends('layouts.default')
@section('content')
 <!-- banner start -->
 <section>
    <div class="container-fluid">
       
        <div class="row banner-participation align-items-center banner-heading  "  style="height: 50vh;">
            <div class="col-sm-10 text-right ">
                <h1 class="display-3 text-capitalize banner-heading mt-5 "><span class="text-warning banner-s  ">{!!$page2->title!!}</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>


  </section>
   <!-- banner end -->
        {{-- {!! $page2->body !!} --}}
        {{ Breadcrumbs::render('Access and Participation') }}
        <!---about us start-->
        <section class="bg-light p-7 ">
            <div class="container-fluid">
             
              
          
               <div class="row text-center text-secondary font-weight-bold">
                   <div class="col-lg-10 col-md-10 mx-auto  col-sm-10  border-bottom access-statement-p   mt-3 mb-3 ">
                   
                    {!!$page2->body!!}
                      
                       <div class="col-lg-10 col-sm-10 mx-auto  mt-3 mb-3">
                        @foreach($boxes as $box)
                       {{-- colapse box start --}}
                       <button  class="accordion mt-2 mb-2 text-info font-weight-bolder   ">{{$box->title}}</button>
                       <div class="panel">
                         <p class="text-left">{!!$box->content!!}</p>
                       </div>
                       @endforeach
                       </div>
                   

                            {{-- end --}}
                                   
                                      
                                      
                                               
                                            
                    </div>
                                   
                          
                            
                        </div>
   
   
                    </div>
                   
          
                  
                 
{{-- colapse rectangular boxes --}}
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
                
{{-- end --}}




               
                </section> 
        
       


   
@stop