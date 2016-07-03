//munculkan dan tutup dropdown saat button di klik
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// tutup dropdown saat klik diluar button
window.onclick = function(event) {
  if (!event.target.matches('button')) {

    var dropdowns = document.getElementsByClassName("dropdown-content-script");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}