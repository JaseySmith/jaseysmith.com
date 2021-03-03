function uncheck() { // hide overflow for nav-link a - onClick
    document.getElementById("check").checked = false;
}


function disableScroll() {
  // Get current page scroll position
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

    // Set this to previous value if any scroll is attempted
    window.onscroll = function() {
      window.scrollTo(scrollLeft, scrollTop);
    };
}

function enableScroll() {
  window.onscroll = function() {};
}