header("Content-type: application/javascript");

/* dropdown_tarifs container*/
function myFunction(){
    document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn_tarifs')) {

    var dropdowns = document.getElementsByClassName("dropbtn_tarifs_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
/* dropdown_tarifs container*/