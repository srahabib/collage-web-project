var input = document.querySelector('.search__input');
//offsetWidth is a measurement in pixels of the element's CSS width, including any borders, padding, and vertical scrollbars
var inputWidth = input.offsetWidth;
var suggestion = document.querySelector('.suggestion');


//function to make all suggestions of equal width   
function equalWidth() {
  var input = document.querySelector('.search__input');
  var inputWidth = input.offsetWidth;
  suggestion.style.width = inputWidth + "px" ;
}

function showSuggestion() {
  suggestion.classList.add('active');
}

function hideSuggestion() {
  suggestion.classList.remove('active');
}

//DOM fully loaded and parsed
document.addEventListener('DOMContentLoaded', function() {
  equalWidth();
  input.addEventListener('focus', showSuggestion);
})

document.addEventListener('click', function(e) {
  var target = e.target.className;
  //prevents further propagation of the current event
  e.stopPropagation();
  if (target != "search__input" && target != "suggestion__content-left-side" && target != "suggestion__content-right-side" && target != "suggestion__content" ) {
    hideSuggestion();
  }
});

