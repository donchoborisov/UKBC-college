@extends('layouts.default')
@section('content')


<div class="page-wrap d-flex flex-row align-items-center"  style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
             
                    
                    <img src="{{Voyager::image(setting('site.logo'))}}">

            
              
            </div>
        </div>
    </div>
</div>

@stop