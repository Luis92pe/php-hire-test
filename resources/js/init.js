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
                result = $.parseJSON(result);

                $('#myModalLabel').html(result.tittle);
                $('#myModalBody').html(result.message);
                $('#myModal').modal('toggle');
                console.log(result);
            })
            .fail(function(result) {
                console.log("success");
                result = $.parseJSON(result);

                $('#myModalLabel').html(result.tittle);
                $('#myModalBody').html(result.message);
                $('#myModal').modal('toggle');
                console.log(result);
            });
    }
});
