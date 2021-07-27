
h1 = document.getElementById("post_title")
  
function updateText(e) {
  multiplierWidth = e.offsetX / window.innerWidth;
  randomWeight =  multiplierWidth * (800 - 200) + 200;
  h1.fontVariationSettings = "\"wght\" " + randomWeight;
}

window.addEventListener("mousemove", updateText)
