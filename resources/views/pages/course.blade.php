@extends('layouts.default')
@section('content')

<section>
    <div class="container-fluid">
       
        <div class="row banner-btec justify-content-center align-items-center banner-heading "  style="height: 50vh;">
            <div class="col-sm-10 text-right">
                <h1 class="display-3 text-capitalize banner-heading "><span class="text-warning banner-s  ">{!! $course->title !!}</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>
  </section>
  {{ Breadcrumbs::render('course',$course) }}

    <section class="bg-light p-7 ">
        <div class="container-fluid">


            {!! $course->content !!}

          <div class="col-lg-10 col-sm-10 mx-auto border-bottom mt-3 mb-3">
            @foreach($boxes as $box)
            {{-- colapse box start --}}
            <button  class="accordion mt-2 mb-2 text-info font-weight-bolder   ">{{$box->title}}</button>
            <div class="panel">
              <p class="text-left">{!!$box->content!!}</p>
            </div>
            @endforeach

        </div>

        </div>
    </section>  


  </section>

@stop