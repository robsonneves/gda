//Rest Full Method #Delete #PUT #POST

$("#form-controller").submit(function(event) {

    $('.errors').empty();

    var url   = $(this).attr("action");
    var rest  = $(this).data('type');
    var dados = $(this).serialize();

    $.ajax(url, {

        type:rest,
        dataType:"json",
        data: dados,

        success:function(data){

            alert('Success');
        },

        error:function(data){

            $.each(data.responseJSON, function(i, error) { alert(error) });
        }
    });

    return false;
});

$(".deleteIten").click(function() {

    //var table = $('#datatable_tabletools').DataTable();
    //table.row( $(this).parents('tr') ).remove().draw( false );

    if(confirm("DELETAR! Deseja realmente fazer isso?")) {

        $.ajax({
            type: "DELETE",
            url: this.href,
            statusCode: {
                200: function() {
                    location.reload( window.location.pathname );
                }
            }
        });


    }else { return false;   }

    return false;

});


