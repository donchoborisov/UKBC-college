 @php
     
     $menu = DB::select('select * from menu_items where menu_id=2');
     $students =  DB::select('select * from menu_items where menu_id=3');

 @endphp
 
 
 
 <!---navbar-->
 <nav class="navbar navbar-expand-xl navbar-light bg-dark fixed-top">
    <a href="/" class="navbar-brand"><img src="{{Voyager::image(setting('site.logo'))}}"> <i class="fas fa fa-child text-warning fa-2x"></i> </a>
      <button class="navbar-toggler bg-light" type="button"><span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav"></span></button>
    <div class="collapse navbar-collapse justify-content-between" id="nav" >
    {{menu('main-menu','includes.menus.main')}}
    {{menu('students','includes.menus.students')}}
   
      {{-- <ul class="navbar-nav">
       
      @foreach ( $menu as $item)
      <li class="nav-item"><a href="{{$item->url}} " class="nav-link text-light text-uppercase font-weight-bold px-3">{{$item->title}}</a></li>
      @endforeach
     
        <li class="nav-item dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS</a>
          <div class="dropdown-menu font-weight-bold">
            @foreach ( $students as $student)
               <a class="dropdown-item font-weight-bold" href="{{$student->url}}">{{$student->title}} </a>
              
            @endforeach

          </div>
      
        
      
      
      </li>
    
       
    </ul> --}}

    
  
    <form id="searchform" class="mb-3" action="{{route('search')}}" method="GET">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="search..">
        <div class="input-group-append">
          <button type="submit" id="search" class="btn bg-warning  text-uppercase font-weight-bold"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</nav>
<!---navbar-end-->