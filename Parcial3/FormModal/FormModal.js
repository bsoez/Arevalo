$(document).ready(function(){
    $('#btnAlerta').click(function(){
        $('#ventanaA').show();
    });

    $('#btnCerrarA').click(function(){
        $('#ventanaA').hide();
    });

    $('#btnJS').click(function(){
        $('.modal-body'.text("Se ha activado el boton"));
        $('#ventanaM').modal();
    });

    $('#btnSw').click(function(){
        Swal.fire({
            title: "Good job!",
            text: "Hiciste click en el boton",
            icon: "Success",
        });
    });

    $('#closemodal').click(function(){
        $('#modalid').hide();
    })
});


$('#btnJS').click(function(){
    $('.modal-body').text("Se ha activado el botón");
    $('#ventanaM').modal();
});