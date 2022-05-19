window.onload = function() {

    document.getElementById("btnPromesa").addEventListener("click",pedirHeader);
    document.getElementById("btnreset").addEventListener("click",iniciarHeader);
    
    
    function pedirHeader() {
        
        let promesa = new Promise(function(resolve,reject){
            var solicitud = new XMLHttpRequest();
            solicitud.onreadystatechange = function(){
        
                if(solicitud.readyState == 4 && solicitud.status == 200){
                    resolve(solicitud.responseText);
                }};
                solicitud.open("GET","getHeader.txt", true);
                solicitud.send();
        });
        promesa.then(value => document.getElementById("encabezado").innerHTML = value);
     }
     function iniciarHeader() {
        document.getElementById("encabezado").innerHTML = "<h2>Registro de VJ<h2>"; 
  
    } 
}