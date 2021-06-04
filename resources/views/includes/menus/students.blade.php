 <ul class="navbar-nav">
       
    
     
        <li class="nav-item dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS</a>
          <div class="dropdown-menu font-weight-bold">
            
            
            
            
            @foreach($items as $menu_item)
               <a class="dropdown-item font-weight-bold " href="{{$menu_item->url}}">{{$menu_item->title}} </a>
              
            @endforeach

          </div>
      
        
      
      
      </li>
    
       
    </ul>