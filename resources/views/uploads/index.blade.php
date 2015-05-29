@section('widget-titulo')Upload @stop

@section('widget-conteudo')

@if($files->count())

<table class="table table-striped table-hovertable-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Ficha</th>
            <th>Incidente</th>
            <th>Nome</th>
            <th>#</th>
        </tr>
    </thead>
    
    @foreach($files as $file)
    <tbody>
        <tr>
            <td>{{$file->id}}</td>
            <td>{{$file->ficha}}</td>
            <td>{{$file->incidente}}</td>
            <td>
                <a href='{{route('uploads.show',['id' =>$file->id] )}}'> {{$file->filename}} </a>
            </td>
            <td>
                <a href='{{route('uploads.destroy',['id' => $file->id])}}'rel="nofollow" data-confirm="Tem certeza de que deseja excluir este?" data-method="delete">{{--<i class="glyphicon glyphicon-trash txt-color-red"></i> --}}
                    <i class="fa fa-trash-o txt-color-red"></i> 
                </a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

    @else
    <div class="alert alert-info fade in">
        <i class="fa-fw fa fa-info"></i> <strong>Info!</strong> No Records.
    </div>

@endif

@endsection
