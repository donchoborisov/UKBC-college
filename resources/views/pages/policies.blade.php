@extends('layouts.default')
@section('content')
 
 <!-- banner start -->
 <section>
    <div class="container-fluid">
       
        <div class="row banner-policy justify-content-center align-items-center banner-heading "  style="height: 50vh;">
            <div class="col-sm-10 text-right">
                <h1 class="display-3 text-capitalize banner-heading "><span class="text-warning banner-s  ">Our Policies</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>


  </section>
   <!-- nammer end -->
   {{ Breadcrumbs::render('policies') }}


   <section class="bg-light p-7 mt-5 ">
      <div class="container-fluid">
          <div class="row text-left text-secondary font-weight-bold">
              <div class="col-lg-10 policies col-sm-10 mx-auto border-bottom mt-3 mb-3 ">
                @foreach($policies as $policy)
                  <div class="shadow-sm bg-secondary pt-4 pb-4 rounded d-flex justify-content-between mb-3 ">

                 
                      
                      <h5 class="text-warning ml-4  ">{{$policy->name}}</h1>
                      <a target="_blank" rel="noopener noreferrer" href="{{Storage::url((json_decode($policy->file_path))[0]->download_link)}}"   class="mr-4 btn btn-sm btn-warning"><i class="fas  fa-cloud-download-alt"></i></a>
                    </div>
                    @endforeach

              </div>
          </div>


      </div>
  </section>  
@stop