@extends('layouts.site.index')

@section('content')

<section class="text-center" style="width:98%;margin-left:1%; margin-top: -70px">
    <div class="heading-contact">
        <div class="conteiner">
            <div class="section-heading ">
                <div class="jumbotron-icon">
                    <a href="/site/processos" class="txt-color-blueDark">
                        <i class="fa fa-arrow-left icon-2 col-xs-1" style="margin-top: 35px"></i>
                    </a>
                </div>
                <h2>Updates</h2>
            </div>
        </div>
    </div>


    <div class="row"> 
        <div class="timeline-centered">

            @foreach($tramitacoes as $tramitacao)

           <article class="timeline-entry {{$lr}}-aligned" @if ($lr === 'left'){{$lr =''}}@else{{$lr ='left'}}@endif>
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45" style="margin: 0px -80px">
                        <h5><b>{{$tramitacao->update_data_hora}}</b></h5>
                    </time>
                    <div class="timeline-icon bg-success">
                        <i class="entypo-feather"></i>
                    </div>
                    <div class="timeline-label">
                        <h2 ><b>N° Ficha : {{$tramitacao->ficha}}</b></h2>
                        <p  class="text- center text-justify">{{$tramitacao->texto}}</p>
                    </div>
                </div>
            </article>
                
            
            

            @endforeach

            <!-- secondary
            <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45">
                        <span>03:45 AM</span> <span>4 weeks ago</span>
                    </time>
                    
                    <div class="timeline-icon bg-secondary">
                        <i class="entypo-suitcase"></i>
                    </div>
                    
                    <div class="timeline-label">
                        <h2><a href="#">{{$tramitacao->ficha}}</a></h2>
                        <p>Yahoo buys a share in <strong>SmartAdmin</strong></p>
                    </div>
                </div>
            </article>


                
            <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-09T13:22">
                        <span>03:45 AM</span> <span>3 months ago</span>
                    </time>
                    
                    <div class="timeline-icon bg-info">
                        <i class="entypo-location"></i>
                    </div>
                    
                    <div class="timeline-label">
                        <h2><a href="#">{{$tramitacao->ficha}}</a> <span>checked in at</span> <a href="#">Laborator</a></h2>
                        
                        <blockquote>Place was booked till 3am!</blockquote>
                        
                        <img src="img/map.png" alt="map" class="img-responsive">
                    </div>
                </div>
            </article>
                
            <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45">
                        <span>03:45 AM</span> <span>8 months ago</span>
                    </time>
                    
                    <div class="timeline-icon bg-warning">
                        <i class="entypo-camera"></i>
                    </div>
                    
                    <div class="timeline-label">
                        <h2><a href="#">{{$tramitacao->ficha}}</a></h2>
                        
                        <blockquote>SmartAdmin Launched with grace and beauty</blockquote>
                    </div>
                </div>
            </article>
            -->
            
                
            <article class="timeline-entry begin">
                <div class="timeline-entry-inner">
                    <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                        <i class="entypo-flight"></i>
                    </div>
                </div>
            </article>
            
        </div>
    </div>
    <div class="jumbotron-icon">
        <a href="/site/processos" class="txt-color-blueDark">
            <i class="fa fa-arrow-left icon-2 col-xs-1" style="margin-top: -55px"></i>
        </a>
    </div>
</section>


@stop

