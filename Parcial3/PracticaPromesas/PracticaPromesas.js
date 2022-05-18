window.onload = function() {

    document.getElementById("btnPromesa").addEventListener("click",pedirHeader);
    document.getElementById("btnreset").addEventListener("click",iniciarHeader);
    
    
    function pedirHeader() {
    
    
    } var solicitud = new XMLHttpRequest();          //Crear objeto XMLHttpRequest
    
    solicitud.onreadystatechange = function() {   // En esta propiedad declaramos la funcion a ejecutar
                                                // cuando cambie el status del objeto XMLHttpRequest
    
        if (solicitud.readyState == 4 && solicitud.status == 200) {                 // La respueta esta lista
            document.getElementById("encabezado").innerHTML = solicitud.responseText;  // La propiedad responseText tiene la respuesta en texto
    }};
    
    solicitud.open("GET", "getHeader.txt", true);
    solicitud.send();
    
     }
    
    function iniciarHeader() {
        document.getElementById("encabezado").innerHTML = "<h2>Este es un Header nivel 22<h2>"; 
    }
    