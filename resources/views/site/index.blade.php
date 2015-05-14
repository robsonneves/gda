@extends('layouts.site.index')



@section('content')
    @if(Auth::guest())

        <!-- Section: #INTRO -->
        <section class="intro">
            @include('layouts.site.intro')
        </section>
        <!-- /Section: INTRO -->
        <!-- Section: #CONTACT -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact marginbot-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="section-heading">
                                <h2>Entre em contato</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="boxed-grey">
                            <form id="form-controller" data-type="post" method="post" action="/site/contato">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="pull-left"> Nome <i class="fa fa-user"></i></label><br>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Entre com seu nome" required="required" />
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="pull-left"> Endereço de email <i class="fa fa-envelope"></i></label><br>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Entre com seu email" required="required" />
                                            </div>
                                        {{--
                                        <div class="form-group">
                                            <label for="subject"> Opções</label>
                                            <select id="subject" name="subject" class="form-control" required="required">
                                                <option value=""></option>
                                                <option value="contatc">Contato</option>
                                                <option value="service">Primeiro Acesso</option>
                                            </select>
                                        </div>
                                        --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"> Mensagem</label>
                                            <textarea name="message" id="message" class="form-control" rows="5" cols="25" required="required" placeholder="Digite sua mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-large pull-right">
                                            Enviar mensagem
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: CONTACT -->



    @else
        <div class="container" style="width: 100%">
            @yield('content')
        </div>

        @endif

e


@stop