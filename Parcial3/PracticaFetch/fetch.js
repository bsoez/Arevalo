document.getElementById("btnFetch").addEventListener("click",function(){
            
    let promise = fetch('peticion.php');

    promise.then(respuesta => respuesta.json()).then(datos => console.log(datos));
});