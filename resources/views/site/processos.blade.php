@extends('layouts.site.index')

@section('content')

<style type="text/css">.trow {width: 100%;}</style> <!-- TAMANHO DA ROW -->

<div>
    <br>
    <div ng-controller="ProcessListCtrl" class="home-sectionr">
        <div class="row trow">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-12">
                    <div class="input-group-addon" style="border:0px">
                        <span class="col-lg-1">
                            <i class="fa fa-search fa-lg"></i>
                        </span>
                        <span class="col-lg-10">
                            <input aria-controls="dt_basic" placeholder="" class="form-control" type="search" ng-model="query" >
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row trow" >
            <div class="col-lg-10 col-lg-offset-1">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="conteiner-fluid col-md-12" ng-repeat="processo in processos | filter:query | orderBy:orderProp">
                            <h4 class="panel-title">
                                <p>
                                    <i class="fa fa-download pull-left fa-lg txt-color-blue"></i>
                                    <a href="updates/@{{processo.ficha}}/@{{processo.incidente}}" class="col-md-3 col-lg-offset-1">
                                       <b>@{{processo.numero_processo}}</b>
                                    </a>
                                    <i class="fa fa-briefcase col-md-3">&nbsp;&nbsp; @{{processo.advogado.nome}} </i>
                                    <i class="fa fa-legal col-md-4">&nbsp;&nbsp; @{{processo.reu.nome}}  </i>
                                    <i class="fa fa-star pull-right  fa-lg txt-color-yellow "></i>
                                </p>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop





