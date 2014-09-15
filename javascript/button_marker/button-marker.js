function _(x) {
  return document.getElementById(x);
}

function initMenu() {
  _("btn-marker").style.left = _("btn1").offsetLeft+"px";
  _("btn-marker").style.width = _("btn1").offsetWidth-2+"px";
  _("btn-marker").style.display = "block";
}

function loadContent(btn) {
  _("btn-marker").style.left = btn.offsetLeft+"px";
  _("btn-marker").style.width = btn.offsetWidth-2+"px";
  _("content").innerHTML = "Content for "+btn.innerHTML+" loaded";
}

window.addEventListener('load', function(event) { initMenu(); });

