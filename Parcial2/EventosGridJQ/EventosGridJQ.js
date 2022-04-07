  //<script>
        //window.onload = function(){
        
      //  var elem = document.getElementById("idcontene");
       // elem.addEventListener("click",function(evento){
            //console.log(evento.target.id);
            
            //if(document.getElementById(evento.target.id).classList.contains("caja")) {
            //    document.getElementById(evento.target.id).classList.toggle("cajaRoja");
         //   }

       // });

        //}

       // </script>

$(document).ready(function(){
 console.log('click');
    $("#idcontene").click(function(E){
    $(E.target).toggleClass("cajaRoja") ; 
      });
  });