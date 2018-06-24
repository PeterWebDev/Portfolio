
/* keep navigation highlighted */

$("ul li").click(function(){
    $("ul li").removeClass("buttonpress");
    $(this).addClass('buttonpress');
})

//overlay box for work page
 //closes the overlay when clicked on anything but the over lay
window.onclick = function(event) {
    if((event.target.className !== 'imgflex') && (event.target.className  !== 'pop popcontent') ){ 
         modal.style.display = "none";
         modal2.style.display = "none";
         modal3.style.display = "none";
 };
};

var modal = document.getElementById("pop");
var modal2 = document.getElementById("pop2");
var modal3 = document.getElementById("pop3");
var closebtn = document.getElementsByClassName("close1")[0];
var closebtn3 = document.getElementsByClassName("close3")[0];
var closebtn2 = document.getElementsByClassName("close2")[0];

function openlink(){
	modal2.style.display = "none";
 	modal3.style.display = "none";
 	modal.style.display =  "block";
 	
};
function openlink2(){
  modal.style.display = "none";
  modal3.style.display = "none";
  modal2.style.display =  "block";
  
};
function openlink3(){
  modal.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display =  "block";
  
};


closebtn.onclick = function(){
	modal.style.display = "none";
 };

closebtn2.onclick = function(){
	
	modal2.style.display = "none";
 };
closebtn3.onclick = function(){
	var modal3 = document.getElementById("pop3");
	modal3.style.display = "none";
 };
/* Smooth scrolling https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });