const res = document.getElementById("randId")
function createJoke() {
  var rndInt = Math.floor(Math.random() * 410) + 1 //creates a random integer 1 - 410
  res.value = rndInt
}
