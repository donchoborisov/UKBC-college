<!-- footer -->
<footer class="bg-dark px-5">
    <div class="container-fluid">
      <div class="row text-light py-4">
        <div class="col-lg-3 col-sm-6">
          <h5 class="pb-3">Address</h5>
          <ul class="list-unstyled">
            <li>
                <small><p><i class="fas fa-search-location text-warning"></i>  {{setting('site.address')}}</p></small>
            </li>
            <li>
                <small><p><i class="fas fa-phone text-warning"></i>  {{ setting('site.phone')}} </p></small>
            </li>
            <li>
              <small><p><i class="far fa-envelope text-warning"></i>  {{setting('site.email')}} </p></small>
            </li>
          
            
          </ul>
        </div>
        <div class="col-lg-2 col-sm-6">
          <h5 class="pb-3">Visit Us</h5>
          {{menu('main-menu','includes.menus.footer-menu')}}
         
        </div>
        <div class="col-lg-2 col-sm-6">
          <h5 class="pb-3">Need Help?</h5>
          <ul class="list-unstyled">
          
            <li>
              <a href="#" class="footer-link text-uppercase">Online Chat</a>
            </li>
            <li>
              <a href="#" class="footer-link text-uppercase">Support</a>
            </li>
            
          </ul>
        </div>
        <div class="col-lg-4 col-sm-6">
          <h5 class="pb-3">Stay Connected</h5>
         
          <form class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email Address">
              <div class="input-group-append">
                <button type="button" class="btn bg-warning  text-uppercase font-weight-bold">Sign Up</button>
              </div>
            </div>
          </form>
        
        </div>
      </div>
     
    </div>
  </footer>

<!---Footer start-->
<footer class="bg-secondary">
    <div class="container">
        <div class="row">
     
            <div class="col text-center">
                <h1 class="text-white font-weight-light text-capitalize p-3">{{setting('site.title')}}</h1>
                <!-- <h3 class="text-light font-weight-light font-italic mb-3">Lorem ipsum dolor, sit amet consectetur</h3> -->
             <div class="py-2">
                 <a href="#"><i class="fab fa-facebook  text-info mx-3 fa-2x"></i></a>
                 <a href="#"><i class="fab fa-linkedin text-info mx-3 fa-2x"></i></a>
                 <a href="#"><i class="fab fa-twitter text-info mx-3 fa-2x"></i></a>
                 <a href="#"><i class="fab fa-instagram-square text-info mx-3 fa-2x"></i></a>
             </div>
             <div class="row">
                <div class="col text-center text-light border-top pt-3">
                  <p>&copy;{{setting('site.copyright')}}</p>
                </div>
              </div>
            </div>
         

        </div>
    </div>

</footer>




 