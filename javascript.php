<!-- Javascript -->
<script type="text/javascript">
//navigation bar animation
var  nav = document.getElementById('nav');
      
    window.onscroll = function(){

        if (window.pageYOffset > 100) {
            nav.style.background = "black";
            nav.style.padding = "0px";
            navword.style.margin = "-30px";
        }
      	else{
      		nav.style.background = "transparent";
      		nav.style.boxShadow = "none";
      	}
      }
//end of navigation bar animation
</script>

<script type="text/javascript">
//back to top function
var mybutton = document.getElementById("topBtn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//end of back to top function
</script>

<!-- Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- End of animation -->
<!-- Carousel -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- End of javascript -->

<!-- Accordion -->
<script>
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
</script>