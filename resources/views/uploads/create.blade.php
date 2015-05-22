@section('widget-titulo') Enviar arquivo @stop
    
@section('widget-button')
<a href="{{route('uploads.index')}}" class="btn btn-xs btn-success "><i class="fa fa-plus"></i> <span class="hidden-mobile">Meus Uploads</span></a>
@stop

@section('widget-size')6 @stop

@section('widget-posicao')3 @stop   

@section('widget-conteudo')

@section('css')

@parent
    <link rel="stylesheet"  href="/bower_components/jquery-file-upload/css/jquery.fileupload.css">
@stop

    <span class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i>
       <span>Selecione um Arquivo</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="file" data-ficha="{{$ficha}}" data-inc="{{$inc}}">
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>

@section('scripts')
@parent

<script src="/bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js"> </script>
<script src="/bower_components/jquery-file-upload/js/jquery.fileupload.js"> </script>

<script>
        $(document).ready(function()
        {
            'use strict';
            var $fileupload = $('#fileupload');
            $fileupload.fileupload({
                url: '/uploads/inserir',
                dataType: 'json',
                formData:{ ficha: $fileupload.data('ficha'), inc:$fileupload.data('inc') },

                success:function(data){

                    alert(data.success);
                },

                error:function(data){

                    alert(data.fail);
                },

                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                            'width',
                            progress + '%'
                    );
                }
            });

        });
</script>
@stop


@endsection
