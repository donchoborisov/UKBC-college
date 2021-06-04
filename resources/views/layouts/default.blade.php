<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <header class="row">
        @include('includes.header')
    </header>

    <div  style="display:none;" id="myDiv" class="animate-bottom" >
   
            @yield('content')
            @include('includes.footer')

    </div>

   
       
  


     


</body>
</html>