function renderTime() {
  var currentTime = new Date();
  var diem = "AM";
  var hrs = currentTime.getHours();
  var min = currentTime.getMinutes();
  var sec = currentTime.getSeconds();
  setTimeout('renderTime()', 1000);

  if (hrs == 0) {
    hrs = 12;
  }
  else if (hrs > 12) {
    hrs = hrs - 12;
    diem = "PM";
  }

  if (hrs < 10) {
    hrs = "0" + hrs;
  }
  if (min < 10) {
    min = "0" + min;
  }
  if (sec < 10) {
    sec = "0" + sec;
  }

  var myClock = document.getElementById('clock-display');
  // Firefox & Chrome
  myClock.textContent = hrs + ":" + min + ":" + sec + " " + diem;
  // IE
  myClock.innerText = hrs + ":" + min + ":" + sec + " " + diem;

}
renderTime();
