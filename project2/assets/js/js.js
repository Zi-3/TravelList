//Zi Rong Cao
window.onload=function(){
    var story = document.getElementById('word');
    var s = document.getElementById('show');
    var i = 0;
    timer=setInterval(function(){
        s.innerHTML=story.innerHTML.substring(0,i);
        i++;
        if(s.innerHTML==story.innerHTML){
            clearInterval(timer);
        }
    },60);
}

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
 }
 slideIndex++;
 if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("myBtn").style.display = "block";
} else {
    document.getElementById("myBtn").style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

        function check(){
            var validate = true;

        if(document.getElementById('name').value==''){
            document.getElementById('name').style.backgroundColor="red";
            validate = false;
        }
        else{
            document.getElementById('name').style=null;
        }

        if(document.getElementById('comment').value==''){
            document.getElementById('comment').style.backgroundColor="red";
            validate = false;
        }
        else{
            document.getElementById('comment').style=null;
        }

        return (validate);
        }
        
        i = true;

function whereami() {
    var alist = document.getElementsByTagName("a");
    for(z = 0 ; z < alist.length; z++ ) {
        if(alist[z].href == window.location.href)   {
            alist[z].style.color = "red"; 
            alist[z].style.borderBottom = "solid 3px red";
        }
        else{
            alist[z].style.color = "black";
        }
    }
}
