
    /**
     * Create a new product script
     */

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $(".btn-submit").on('click',function(e){

    //     e.preventDefault()


    //     let name = $("#product_name_js").val();
    //     let description = $("#product_description_js").val();

    //     alert(name);
    //     alert(description);

    //     $.ajax({
    //         type:'POST',
    //         url: config.routes.create_product,
    //         data:{
    //             name: name,
    //             description: description
    //         },
    //         success:function(data){

    //         }
    //     });

    // });

$(".btn-submit").on('click', function(e) {
    e.preventDefault()

    let name = $("#product_name_js").val();
    let description = $("#product_description_js").val();

    if (name =='' || description == '') {

    }
    //let image_name = $('#product_image_name_js').val().split('\\').pop();;

    $.ajax({
        type: 'POST',
        dataType : 'JSON',
        data: JSON.stringify({
            name: name,
            description : description,
            //image_name : image_name
        }),
        url: config.routes.create_product,
    }).done(function(data) {
        let error = data.isError;
        let success_message = data.success_message;
        if (error === false) {
            $('.alert_product_success_js').show();
            $('.alert_product_success_js p').html(success_message);
            setTimeout(function() {
                $('.alert_product_success_js').hide();
            }, 4000);
            $('#create_new_product').modal('hide');

        }

    }).fail(function(jqXHR, textStatus, errorThrown) {});
})
