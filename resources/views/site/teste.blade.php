@extends('layouts.site.index')


@section('content')

    ola
<script>


    $(document).ready(function() {


        /*
        $.ajax("http://gda.app/social", {

            type:"POST",

            dataType:"json",

            data: {
                name:"John",
                email:"EmailErrado",
                message:"Mensagem"
            },

            success:function(data){
                console.log(data);
            },

            error:function(data){

                $.each(data.responseJSON, function(i, error) { alert(error) });
                //alert(data.responseJSON.id);
            }
        });

        $.post('http://gda.app/social',{id:''} , function() {

        }, 'json')
                .success(function(data) {
                         alert( "second success" );
                 })
                 .fail(function(data) {
                    $.each(data.responseJSON, function(i, error) { alert(i+":"+error) });
                });




    });*/

        var url   = '/social/1';
        var rest  = 'DELETE';
        var dados = {id:''};

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

    });



</script>
    @stop