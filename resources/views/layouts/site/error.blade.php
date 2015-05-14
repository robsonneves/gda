@extends('layouts.site.index')

@section('content')
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-center error-box">
                    <h1 class="error-text tada animated"><i class="fa fa-times-circle text-danger error-icon-shadow"></i></h1>
                    <h2 class="font-xl"><strong></strong></h2>
                    <br />
                    <p class="lead semi-bold">
                        <strong>Você acabou se deparando com um erro do nosso sistema.</strong><br><br>
                        <small>
                            Nós estamos trabalhando intensamente para resolver este problema.<br> Nesse meio tempo, você pode realizar algumas operações listadas abaixo:
                        </small>
                    </p>
                    <ul class="error-search text-left font-md">
                        <li><a href="#/user/"><small>Voltar para Home <i class="fa fa-arrow-right"></i></small></a></li>
                        <li><a href="javascript:void(0);"><small>Denunciar erro!</small></a></li>
                        <li><a href="javascript:history.go(-1)"><small>Voltar.</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop