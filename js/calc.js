function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

window.onload=func1();

function func1(){
$('.pop-up').fadeIn();
}

$('.nope').click(function(){
$('.pop-up').fadeOut();
$('.overlay').fadeOut();
});