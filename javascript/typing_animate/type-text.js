var myString = "Space: the final frontier. These are the voyages of the starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before...";
var myArray = myString.split("");
var loopTimer;

function frameLoop() {
  if(myArray.length > 0) {
    document.getElementById("text-box").innerHTML += myArray.shift();
  } else {
    clearTimeout(loopTimer);
    return false;
  }
  loopTimer = setTimeout('frameLoop()', 100);
}
frameLoop();
