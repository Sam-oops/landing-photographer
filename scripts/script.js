document.getElementById("btn-action").onclick = function () {

    document.getElementById("services").scrollIntoView({
        behavior: "smooth"
    });
};

var buttons = document.getElementsByClassName("services-btn");
for (var i = 0;i < buttons.length; i++){
    buttons[i].onclick = function(){
document.getElementById("footer").scrollIntoView({behavior:"smooth"});
    }
}

$(document).ready(function() {
 
  // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 2000);
 
});