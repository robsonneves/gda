@extends('layouts.site.index')

@section('content')

@section( 'widget-header') @show
        <!-- widget grid -->

<div class="jumbotron-icon" style="padding-bottom:60px">
    <a href="/site/processos" class="txt-color-blueDark">
        <i class="fa fa-arrow-left icon-2 col-xs-1" style="margin-top: 35px; margin-left:15px"></i>
    </a>
</div>

<section id="content">
    <!-- row -->
    <div class="row">
        <!-- NEW WIDGET START -->
        <article class="col-lg-@section('widget-size')12 @show col-md-offset-@section('widget-posicao')0 @show">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-blueDark" id="" @section('widget-load') @show data-widget-refresh="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false">

                <!--
                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"
                -->

                <header>

                    <h2> @section('widget-titulo') @show </h2>

                    <div class="widget-toolbar">
                        @section('widget-button') @show
                                <!--<a href="#/" class="btn btn-xs btn-success "><i class="fa fa-plus"></i> <span class="hidden-mobile">Novo</span></a> -->
                        @section('widget-dropdown')
                            <!--
                            <div class="btn-group">
                                <button class="btn dropdown-toggle btn-xs btn-warning" data-toggle="dropdown">
                                    Dropdown <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:void(0);">Option 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Option 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Option 3</a>
                                    </li>
                                </ul>
                            </div>
                            -->
                        @show
                    </div>
                </header>


                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <div class="well well-light">

                            @section('widget-conteudo')@show

                        </div>
                        <!-- end widget content -->
                    </div>
                    <!-- end widget div -->
                </div>
                <!-- end widget -->
            </div>
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>


<!-- end widget grid -->

@stop
