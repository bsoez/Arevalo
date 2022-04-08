
//const btnToggle = document.querySelector('.toggle-btn');

//btnToggle.addEventListener('click', function () {
  //console.log('clik')
  //document.getElementById('sidebar').classList.toggle('active');
 // console.log(document.getElementById('sidebar'))
//});

//$(document).ready(function(){

//  $(".toggle-btn").click(alternarMenu);
//    function alternarMenu(){
//      $("#sidebar").toggleClass("active");
//    }

//});


$('.menu-bar').on('click', function(){
  $('.contenido').toggleClass('abrir');
});