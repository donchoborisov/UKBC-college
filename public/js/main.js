$(document).ready(function() {


  
   
    //animation for progress bar
      $(window).scroll(function() {
        let position = $(this).scrollTop();
        if(position >= 2387) {
          $('.progress-left').addClass('fromLeft');
          
        } else {
          $('.progress-left').removeClass('fromLeft');
          
        }
      });
    //end
  
  
  $(document).ready(function(){
      $(".dropdown").hover(function(){
          var dropdownMenu = $(this).children(".dropdown-menu");
          if(dropdownMenu.is(":visible")){
              dropdownMenu.parent().toggleClass("open");
          }
      });
  });   
   
    });




// disable button
$('#mailform').submit(function(){
  $('#send',this)
  .html("Sending...")
  .attr('disabled','disabled');
  return true;
});
  
// disable button
$('#searchform').submit(function(){
  $('#search',this)
  .html("Searching...")
  .attr('disabled','disabled');
  return true;
});




//spinner

var myVar;
            
function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}



//colapse rectangular boxes
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