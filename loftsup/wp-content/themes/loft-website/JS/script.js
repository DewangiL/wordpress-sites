
//humberger menu
const hamburger = document.querySelector(".ham");  
 const navsub = document.querySelector(".nav-sub");  
 const navsb = document.querySelector(".nav-s"); 
 hamburger.addEventListener('click', () => {  
  hamburger.classList.toggle("change")  
  navsub.classList.toggle("nav-change") 
  navsb.classList.toggle("nav-chan") 
 });

 
//sticky header
var header = document.getElementById("myHeader");
var newone = document.getElementById("disp");
var newtwo = document.getElementById("notdisp");
var backwhite = document.getElementById("nav-one");
var backblack = document.getElementById("nav-two");
var stickyPosition = header.offsetTop;
window.onscroll = function () {
  if (window.pageYOffset > stickyPosition) {
    header.classList.add("sticky");
    newone.style.display= "block";
    newtwo.style.display="none";
    backwhite.style.display= "none";
    backblack.style.display="block";
  } else {
    header.classList.remove("sticky");
    newone.style.display= "none";
    newtwo.style.display="block";
    backwhite.style.display= "block";
    backblack.style.display="none";
  }
};



//top to menu
jQuery(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('#sc').fadeIn();
        }else{
            $('#sc').fadeOut();
        }
    });
    $('#sc').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}




