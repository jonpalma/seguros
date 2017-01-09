$(window).scroll(function () {
    if ($(window).scrollTop() >= '80' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '80' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$("#bttnCotiza").click(function() {
    if(($("#selectSeguro").val()) == 'auto')
    {
        window.open('cotiza-auto.php','_self');
    }
    if(($("#selectSeguro").val()) == 'hogar')
    {
        window.open('cotiza-hogar.php','_self');
    }
    if(($("#selectSeguro").val()) == 'vida')
    {
        window.open('cotiza-vida.php','_self');
    }
    if(($("#selectSeguro").val()) == 'salud')
    {
        window.open('cotiza-salud.php','_self');
    }
});

$("input[name=grupal]").change(function() {
    if(($(this).val()) == 'individual')
    {
        $("#asegurados").hide();
        $("#asegurados").prop('required', false);
    }
    if(($(this).val()) == 'grupal')
    {
        $("#asegurados").show();
        $("#asegurados").prop('required', true);
    }
});

//Ajax contact form
$(function() {
    var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    // Get the form.
    var form = $('#form');
    // Get the messages div.
    var formMessages = $('#form-output');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        $("#form-submit").val("Enviando...");

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert alert-danger');
            $(formMessages).addClass('alert alert-success');

            // Set the message text.
            $(formMessages).html(close+response);

            // Clear the form.
            $('#name').val('');
            $('#lastname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#mssg').val('');
            $('#estado').val('');
            $('#municipio').val('');
            $('#ciudad').val('');
            $('#colonia').val('');
            $('#cp').val('');
            $('#valor').val('');
            $('#fecha').val('');
            $('#gender').val('');
            $('#torf').val('');
            $('#marca').val('');
            $('#modelo').val('');
            $('#year').val('');
            $('#age').val('');
            $('#suma').val('');
            $("#form-submit").val("Enviar");
        })
            .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).addClass('alert alert-danger');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).html(close+data.responseText);
                $("#form-submit").val("Enviar");
            } else {
                $(formMessages).html(close+'Oops! Ocurrió un error, intentelo nuevamente.');
                $("#form-submit").val("Enviar");
            }
        });
    });
});