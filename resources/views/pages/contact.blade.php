@extends('layouts.default')
@section('content')
     <!-- banner start -->
  <section>
    <div class="container-fluid">
       
        <div class="row banner-contact justify-content-center align-items-center banner-heading "  style="height: 50vh;">
            <div class="col-sm-10 text-right">
                <h1 class="display-3 text-capitalize banner-heading "><span class="text-warning banner-s  ">Contact Us</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>


  </section>
   <!-- nammer end -->
   {{ Breadcrumbs::render('contact') }}
   <section class="p-5 bg-light">
    <div class="container-fluid  ">
        <div class="row justify-content-around ">


            <div  class="col-lg-4 col-sm-8 col-xs-12 mt-2 contact-side-main ">
                <div class="contact-heading mb-5">
                <h5 class="font-weight-bolder">Information</h5>
                </div>

                <div class="row contact-side mb-3 pt-3 ">
                <div class="col">
                <i class="fas contact-icon fa-search-location text-warning"></i>
                </div>
                <div class="col-10">
               <p  class="font-weight-bold">{{setting('site.address')}}</p>
            </div>
        </div>


        <div class="row contact-side mb-3 pt-3">
                 <div class="col">
                <i class="fas contact-icon fa-phone text-warning"></i>
                </div>
                <div class="col-10">
                <p class="font-weight-bold">{{setting('site.phone')}}</p>
                </div>
            </div> 
            
        <div class="row contact-side  pt-3">
        <div class="col">
        <i class="far contact-icon fa-envelope text-warning"></i>
       </div>
         
       <div class="col-10">
        <p  class="font-weight-bold">{{setting('site.email')}}  </p>
        </div>   
        </div> 
        
        <div class="row contact-side mt-3 ">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.386348136042!2d-0.28201928473152615!3d51.52447327963793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487611a78e4093a3%3A0x22a24f05b5a94708!2sMemo%20House!5e0!3m2!1sen!2suk!4v1616769676059!5m2!1sen!2suk" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
       
                
                  
               
              </div>


              <div class="col-lg-6 col-md-8 col-sm-6 mt-2">
                  <div class="contact-heading mb-3">
                <h5 class="font-weight-bolder">Contact With Us</h5>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    <i class="far fa-envelope"></i> {{ Session::get('success') }}
               </div>
                @endif
                <form id="mailform" class="mt-5"  method="POST" action="{{route('contact.store')}}">@csrf
                    <div class="row mb-3">
                        <div class="col" {{ $errors->has('name') ? 'has-error' : '' }}>
                          <input type="text" class="form-control" name="name" placeholder="Name">
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="col" {{ $errors->has('email') ? 'has-error' : '' }}>
                          <input type="email" class="form-control" name="email" placeholder="Email">
                          <span  class="text-danger ">{{ $errors->first('email') }}</span>
                        </div>
                      </div>
                      <div class="row mb-3">
                       
                        
                      </div>
                      <div class="form-group" {{ $errors->has('message') ? 'has-error' : '' }}>
                        
                        <textarea class="form-control" name="message" rows="7"></textarea>
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                      </div>
                      <button id="send" class="btn btn-warning font-weight-bold btn-block" type="submit">Submit Message</button> 
                </form>
              
              
              </div>

           

               
      
              



         </div>    
          <!--information finish here  -->

          
    </div>

</section>

@stop