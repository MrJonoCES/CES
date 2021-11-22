// when I click the toggle tag, toggle a class of on on the main tag

const toggleTag = document.querySelector("a.toggle-words")
const divTag = document.querySelector(".words")
const infoTag = document.querySelector(".info-panel")


toggleTag.addEventListener("click", function(){
  divTag.classList.toggle("on")
  infoTag.classList.toggle("on")

// when i click the toggle tag, toggle a class of on on the main tag
// and if it's on, make the toggle tag say closed
// and not, make the toggle tag say on
  if (divTag.classList.contains("on")) {
    toggleTag.innerHTML = '<img src="http://localhost:8888/wp-content/themes/ces/css/images/close.svg">'
  } else {
    toggleTag.innerHTML = '<a href="#" class="toggle-words"><h2>Info</h2></a>'
  }
})

