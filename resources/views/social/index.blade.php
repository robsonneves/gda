<html>
    <head>
        <script>$('#remoteModal').on('hide.bs.modal', function (e) { $('#remoteModal').removeData();});</script><!--Limpa MyModal -->
    </head>    
    <body ng-app="App">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Gerenciar Social</h4>
        </div>
        <div ng-controller="GetItemController" class="modal-body">

            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Usuário</th>
                        <th>Provider</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($sociais as $social)
                        <tr>
                            <td><a href="{{$social->link}}" target="_blank">{{$social->id}}</a></td>
                            <td><a href="{{$social->link}}" target="_blank">{{$social->nome}}</a></td>
                            <td>{{$social->provider}}</td>
                            <td><a href="javascript:void(0);" ng-click="deleteItem({{$social->id}},'/social/')">{{--<i class="glyphicon glyphicon-trash txt-color-red"></i> --}}del </a> </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>

    </body>
</html>


