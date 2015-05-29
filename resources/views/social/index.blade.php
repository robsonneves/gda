@section('widget-titulo') Gerenciador Social @stop

@section('widget-size')6 @stop

@section('widget-posicao')3 @stop

@section('widget-conteudo')

@if($sociais->count())
 <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Ativo</th>
            <th>id</th>
            <th>Usuário</th>
            <th>Provider</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sociais as $social)
         <tr>
            @if($social->active == true)
            <td> <i class="fa  fa-check-square-o txt-color-green"></i> </td>
            @else
            <td><a href="{{route('social.active',['id'=> $social->id])}}" data-confirm="Tem certeza de que deseja ativar este?"> <i class="fa  fa-square-o"></i> </a></td>
            @endif

            <td><a href="{{$social->link}}" target="_blank">{{$social->id}}</a></td>
            <td><a href="{{$social->link}}" target="_blank">{{$social->name}}</a></td>
            <td>{{$social->provider}}</td>
            <td>
                <a href="{{route('social.destroy',['id'=> $social->id])}}" rel="nofollow" data-confirm="Tem certeza de que deseja excluir este?" data-method="delete" >{{--<i class="glyphicon glyphicon-trash txt-color-red"></i> --}} 
                    <i class="fa fa-trash-o txt-color-red"></i> 
                </a>
            </td>
         </tr>

        @endforeach
    </tbody>
</table>
@else
    <div class="alert alert-info fade in">
        <i class="fa-fw fa fa-info"></i> <strong>Info!</strong> No Records.
    </div>

@endif

@endsection



