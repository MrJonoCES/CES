// when I click the toggle tag, toggle a class of on on the main tag

const mixTag = document.querySelector("a.toggle-mix")
const vidTag = document.querySelector(".mix")
const panelTag = document.querySelector(".mix-panel")


mixTag.addEventListener("click", function(){
    vidTag.classList.toggle("on")
    panelTag.classList.toggle("on")

// when i click the toggle tag, toggle a class of on on the main tag
// and if it's on, make the toggle tag say closed
// and not, make the toggle tag say on
  if (vidTag.classList.contains("on")) {
    mixTag.innerHTML = '<img width="50px" height="50px" src="http://localhost:8888/wp-content/themes/ces/css/images/close-mix.svg">'
  } else {
    mixTag.innerHTML = '<a href="#" class="toggle-mix"><img src="http://localhost:8888/wp-content/themes/ces/css/images/vinyl.gif"></a>'
  }
})

