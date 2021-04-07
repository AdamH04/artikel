window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("navbar a").style.padding = "8px 10px";
    
  } else {
    document.getElementById("navbar a").style.padding = "14px 16px";
    
  }
}