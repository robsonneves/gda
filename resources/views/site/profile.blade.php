@extends('layouts.site.index')

@section('content')

<style type="text/css"> #box { background:#ccc;  height:80px;  } .trow{ width: 100%; }</style><!-- TROW TAMANHO DA ROW -->

<div class="row trow">
    <div class="col-sm-12">
        <div class="padding-10">
            <ul class="nav nav-tabs tabs-pull-right">
                <li class="active">
                    <a href="#a1" data-toggle="tab"><i class="fa fa-user fa-lg"></i> Perfil  </a>
                </li>
                <li class="">
                    <a href="#a2" data-toggle="tab"><i class="fa fa-list-alt"></i> Dados </a>
                </li>
                <li class="pull-left">
                    <span class="margin-top-10 display-inline"><i class=""></i></span>
                </li>
            </ul>
            <!-- COMEÇA ABAS -->
            <div class="tab-content padding-top-10">
                <!-- COMEÇA PRIMEIRA ABA -->
                <div class="tab-pane fade in active" id="a1">
                    <div class="well well-light well-sm no-margin no-padding">
                        <div id="box">
                                @include('site.paletacor')
                        </div>
                    </div>


                    <div class="col-sm-12" >
                        <div class="row">
                            <div class="col-sm-3 profile-pic">
                                <img src="{{isset($social) ? $social->avatar :  asset("assets/site/img/avatars/male.png") }}"/>
                                <div class="padding-10">
                                    <h4 class="font-md"><strong></strong>
                                    <br>
                                    <small></small></h4>
                                    <br>
                                    <h4 class="font-md"><strong></strong>
                                    <br>
                                    <small></small></h4>
                                </div>n
                            </div>
                            <div class="col-sm-6">
                                @if(!$social)
                                    <h1><i class="fa fa-arrow-down"></i>Agora o <span class="semi-bold">GDA</span> também se conecta as suas redes sociais !
                                    </h1>
                                @else
                                    <h1>
                                        <td>{{$social->nome}}</td>
                                        <br>
                                        <small>{{$social->user_id}}</small>
                                    </h1>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p class="text-muted">
                                                <i class="fa fa-envelope"></i>
                                                <td>{{$social->email}}</td>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-muted">
                                                <i class="fa fa-facebook-square"></i>
                                                <td><a href="{{$social->link}}" target="_blank">{{$social->provider}}</a></td>
                                            </p>
                                        </li>
                                    </ul>
                                    <br>
                                @endif
                            </div>

                            <div>
                                <h1>
                                    <small>
                                        Social
                                        <a href="/social/" data-toggle="modal" data-target="#remoteModal" id="dialog-modal">
                                            <i class="fa fa-cog fa-sm"></i>
                                        </a>
                                    </small>
                                </h1>
                                <ul class="company-social">
                                    <li class="social-facebook">
                                        <a href="/auth/redirect/facebook/"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-google">
                                        <a href="javascript:void(0);" target="_blank"><i class="fa fa-linkedin fa-lg txt-color-white"></i></a>
                                    </li>
                                    <li class="social-twitter">
                                        <a href="javascript:void(0);" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-dribble">
                                        <a href="javascript:void(0);" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                           </div>
                        </div>
                    </div>
                </div>
                <!-- FIM DA PRIMEIRA ABA -->

                <!-- COMEÇA SEGUNDA ABA -->
                <div class="padding-top-10 tab-pane fade in" id="a2">
                    <div class="col-sm-12" style="height : 470px">
                        <div class="col-sm-3 profile-pic">
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-body no-padding">
                                <div class="panel-group smart-accordion-default" id="accordion-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1" aria-expanded="false" class="collapsed">
                                                    <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                    <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                    Cadastro
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne-1" class="panel-collapse collapse in"   aria-expanded="true">
                                            <div class="panel-body">
                                                <form action="" id="checkout-form" class="smart-form" novalidate="novalidate">
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->nome}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                                   <input class="form-control" disabled="disabled" placeholder="Sobrenome" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->email}}" type="email">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->telefones}}" type="tel">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="" type="tel">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-credit-card"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cpf_cnpj}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-credit-card"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->rgie}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed" aria-expanded="false"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>  Endereço </a></h4>
                                        </div>
                                        <div id="collapseTwo-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <form action="" id="checkout-form" class="smart-form" novalidate="novalidate">
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-10">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->endereco}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>

                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                                                   <input class="form-control" disabled="disabled" placeholder="{{$pessoa->complemento}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->bairro}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cep}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cidade}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->estado}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed" aria-expanded="false">
                                                    <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                    <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                    Cobrança
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <form action="" id="checkout-form" class="smart-form" novalidate="novalidate">
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-10">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->endereco_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>

                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                                                   <input class="form-control" disabled="disabled" placeholder="{{$pessoa->complemento_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->bairro_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cep_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cidade_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->estado_cob}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapsefour-1" class="collapsed" aria-expanded="false">
                                                    <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                    <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                    Comercial
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefour-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <form action="" id="checkout-form" class="smart-form" novalidate="novalidate">
                                                    <fieldset>
                                                        <div class="row">
                                                            <section class="col col-10">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->endereco_com}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>

                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                                                   <input class="form-control" disabled="disabled" placeholder="{{$pessoa->complemento_com}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>

                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->bairro_com}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cep_com}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->cidade_com}}" type="text">
                                                                </label>
                                                            </section>
                                                            <section class="col col-6">
                                                                <label class="input"> <i class="icon-prepend fa fa-map-marker"></i>
                                                                    <input class="form-control" disabled="disabled" placeholder="{{$pessoa->estado_com}}" type="text">
                                                                </label>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- FECHA LINHAS -->
                        </div>
                    </div>
                </div><!-- TERMINA SEGUNDA ABA -->
            </div><!-- TERMINA ABAS -->
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

    });

</script>

@stop
