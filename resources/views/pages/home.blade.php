@extends('layouts.default')
@section('content')
       <!---banner-start-->
       <section >
        <div class="container-fluid shadow ">
           
            <div class="row banner justify-content-center align-items-center banner-heading "  style="height: 100vh;">
                <div class="col-sm-10 text-center">
                    <h1 class="display-2 text-capitalize "><span class="text-warning banner-s ">{{setting('site.description') }}</span>   <br><span class="text-white font-weight-bold">{{setting('site.title')}}<span></h1>
                        
                        <a href="#" class="btn btn-outline-warning btn-outline-warning btn-lg px-4 m-3">Apply Here</a>
                      
                </div>

            </div>
        </div>
           

      </section>
   
      <!---banner-end-->

      <!----carousel-->
      <section class= "bg-dark  ">
            
          <div class="container-fluid mt-2  bg-dark" >
            

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner container-fluid">
            <div class="carousel-item active" >
              <img src="images/1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block  title-bg shadow-sm mb-2 pr-2 pl-2">
                <h5>News 1</h5>
                <p>Title goes here</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block title-bg shadow-sm mb-2 pr-2 pl-2">
                <h5>News 2 </h5>
                <p>Title goes here...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block title-bg shadow-sm mb-2 pr-2 pl-2">
                <h5>News 3</h5>
                <p>Title goes here....</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
      </div> 
       
      <div class="container-fluid news-cards">
                
        <div class="row">
            <div class="col-lg-2 col-sm-6 course-content">
               <a href="btec-5.html">
                <img src="images/project1.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 text-warning heading">News 1</h2>
              </a>
                <p class="text-muted">Content goes here ...</p>
            
            </div>
            
            <div class="col-lg-2 col-sm-3 course-content">
                <a href="#" >
                <img src="images/project2.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 course-title text-warning heading">News 2 </h2>
               </a>
                <p class="text-muted">Content goes here ...</p>
                
            </div>
            <div class="col-lg-2 col-sm-3 course-content">
                <a href="#">
                <img src="images/course1.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 text-warning heading-news">News 3</h2>
               </a>
                <p class="text-muted">Content goes here ...</p>
                
            </div>
            <div class="col-lg-2 col-sm-6 course-content">
                <a href="#">
                <img src="images/exam2.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 text-warning heading-news ">News 4</h2>
               </a>
                <p class="text-muted">Content goes here ....</p>
             
            </div>

            <div class="col-lg-2 col-sm-6 course-content">
                <a href="#">
                <img src="images/exam2.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 text-warning heading-news ">News 5</h2>
               </a>
                <p class="text-muted">Content goes here ....</p>
             
            </div>

            <div class="col-lg-2 col-sm-6 course-content">
                <a href="#">
                <img src="images/exam2.jpg" class="img-thumbnail shadow">
                <h4 class="my-3 text-warning heading-news ">News 6</h2>
               </a>
                <p class="text-muted">Content goes here ....</p>
             
            </div>
        </div>





    </div> 






      </section>
 
    
  

     <!--courses-start-->
     <section class="p-5">
        <div class="container-fluid">
            <!---title start-->
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2">Courses</h1>
                    <p class="lead text-secondary">Choose the best course for you</p>
                </div>
             </div>
            <!---title end-->
            <div class="row">

                @foreach($courses as $course)
                <div class="col-lg-3 col-sm-6 course-content">
                   <a href="/course/{{$course->title}}">
                    <img src="{{Voyager::image($course->image)}}" class="img-thumbnail shadow">
                    <h2 class="my-3 text-warning heading">{{$course->title}}</h2>
                  </a>
                    <p class="text-muted">{!! Str::words($course->content, 30, ' ...') !!}</p>
                
                </div>
                @endforeach
                
                {{-- <div class="col-lg-3 col-sm-6 course-content">
                    <a href="#" >
                    <img src="images/project2.jpg" class="img-thumbnail shadow">
                    <h2 class="my-3 course-title text-warning heading">Private: BTEC Level 7 Diploma in Strategic Management and Leadership</h2>
                   </a>
                    <p class="text-muted">The BTEC Level 7 Diploma and Extended Diploma in Strategic...</p>
                    
                </div>
                <div class="col-lg-3 col-sm-6 course-content">
                    <a href="#">
                    <img src="images/course1.jpg" class="img-thumbnail shadow">
                    <h2 class="my-3 text-warning heading">Private: BTEC Level 5 in Education & Training</h2>
                   </a>
                    <p class="text-muted">The qualification covers the knowledge and skills required by teachers/trainers in the further</p>
                    
                </div>
                <div class="col-lg-3 col-sm-6 course-content">
                    <a href="#">
                    <img src="images/exam2.jpg" class="img-thumbnail shadow">
                    <h2 class="my-3 text-warning heading ">Private: ESOL Exam Preparation</h2>
                   </a>
                    <p class="text-muted">UK Business College offers wide range ESOL exam preparation...</p>
                 
                </div> --}}
            </div>

        </div>


    </section>

    <!--courses-end-->
    
     <!--departments-start-->
     <section class="p-sm-5 p-2 bg-secondary">
         <div class="container-fluid">
               <!---title start-->
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class=" text-warning display-2 round shadow  ">Events <i class="fas fa-calendar-week fa-xs"></i></h1>
                    
                </div>
             </div>
            <!---title end-->
            <div class="row">
                
                    
                <div class="col-lg-4 col-sm-10 mx-auto mb-4 wrap ">
                    <a href="#">
                  <div class="card">
                    <div class="description">
                        <i class="fas fa-link fa-4x text-warning"></i>
                       
                       </div>
                    <img src="images/open1.jpg" class="card-img-top">
                     <div class="card-body">
                         <div class="card-title">
                             <h3 class="text-muted text-capitalize event-title">Open Days 2021</h3>
                         </div>
                        <div class="card-subtitle">
                            <p class="lead text-secondary">Learn more...</p>
                        </div>
                        <div class="text-right">
                            <a href="#"><i class="fas fa-book-reader fa-2x mx-2 text-warning"></i></a>
                        </div>
                     </div>
                    </a>
                </div>
            
                
                </div>

              
                <div class="col-lg-4 col-sm-10 mx-auto mb-4 wrap  ">
                    <a href="#">
                    <div class="card">
                        <div class="description">
                            <i class="fas fa-link fa-4x text-warning"></i>
                           
                           </div>
                        <img src="images/secret1.jpg" class="card-img-top">
                         <div class="card-body">
                             <div class="card-title">
                                 <h3 class="text-muted text-capitalize">Secret</h3>
                             </div>
                            <div class="card-subtitle">
                                <p class="lead text-secondary">Of successful business</p>
                            </div>
                            <div class="text-right">
                                <a href="#"><i class="fas fa-key fa-2x mx-2 text-warning"></i></a>
                            </div>
                         </div>
    
                      </div>
                    </a>
                </div>
                </a>
                <div class="col-lg-4 col-sm-10 mx-auto mb-4 wrap ">
                    <a href="#">
                    <div class="card">
                        <div class="description">
                            <i class="fas fa-link fa-4x text-warning"></i>
                           
                           </div>
                        <img src="images/mental.jpg" class="card-img-top">
                         <div class="card-body">
                             <div class="card-title">
                                 <h3 class="text-muted text-capitalize">Mental health during the pandemic</h3>
                             </div>
                            <div class="card-subtitle">
                                <p class="lead text-secondary ">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="text-right">
                                <a href="#"><i class="fas fa-sitemap fa-2x mx-2 text-warning"></i></a>
                            </div>
                         </div>
    
                      </div>
                    </a>
                </div>
            </div>
             

         </div>

     </section>


     <!--departments-end-->

      <!--Progress start-->
    <section class="p-5">
        <div class="container-fluid">
              <!---title start-->
              <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2">Our Students Progress</h1>
                   
             </div>
            <!---title end-->
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-10 text-secondary progress-left">
                <small class="font-weight-bold text-muted text-capitalize ">Students Satisfaction</small>
                <div class="progress bg-secondary mb-3">
                    <div class="progress-bar bg-success" style="width:81%">
                    81%
                    </div>

            
                </div>

                <small class="font-weight-bold text-muted text-capitalize ">Students Prepared for further studies</small>
                <div class="progress bg-secondary mb-3">
                    <div class="progress-bar bg-success" style="width:96%">
                    96%
                    </div>

            
                </div>

                <small class="font-weight-bold text-muted text-capitalize ">Students fully prepared for future employment</small>
                <div class="progress bg-secondary mb-3">
                    <div class="progress-bar bg-success" style="width:89%">
                    89%
                    </div>

            
                </div>

                <small class="font-weight-bold text-muted text-capitalize ">Students going into a Masters or Employment after UKBC</small>
                <div class="progress bg-secondary mb-3">
                    <div class="progress-bar bg-success" style="width:73%">
                    73%
                    </div>

            
                </div>
                

            </div>
        </div>
     

    </section>
<!--Progress end-->
<!--Contact start-->
<section id="contact" class="p-5 bg-light">
    <div class="container-fluid">
            <!---title start-->
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2">Contact us</h1>
                   
                </div>
             </div>
            <!---title end-->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="text-center text-secondary">
                        <h2>Got Question?</h2>
                        <p>Stay Connected</p>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        <i class="far fa-envelope"></i> {{ Session::get('success') }}
                   </div>
                    @endif
                    <form id="mailform" class="text-muted" method="POST" action="{{route('contact.store')}}"> @csrf
                        <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"> 
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                            <span class="text-danger">{{ $errors->first('name') }}</span> 
                        </div>
                        <div class="form-group" {{ $errors->has('message') ? 'has-error' : '' }}>
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3">

                            </textarea>
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                    <button id="send" class="btn btn-warning btn-block" type="submit">Submit Question</button> 
                    </form>
                </div>
            </div>

    </div>


</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="main.js"></script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    




@stop

