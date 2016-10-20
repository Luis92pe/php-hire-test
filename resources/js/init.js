$('#formUsers').validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
    },
    messages: {
        name: {
            required: 'Este campo es obligatorio'
        },
        email: {
            required: 'Este campo es obligatorio',
            email: 'Por favor, Verifique el formato de correo',
        }
    }
});


$('#btnFormUsers').click(function(event) {
    event.preventDefault();

    if ($('#formUsers').valid()) {
        $.ajax({
                type: 'POST',
                data: $('#formUsers').serialize(),
            })
            .done(function(result) {
                console.log("success");

                $('#myModal').modal('toggle');
                console.log(result);
            })
            .fail(function(result) {
                console.log("error");
            })
            .always(function(result) {
                console.log("complete");
            });
    }
});
