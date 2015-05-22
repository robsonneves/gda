@extends('layouts.site.index')

@section('content')

    <div class="col-md-6 col-lg-offset-3 " style="margin-top:35px; padding-bottom: 300px">
        <div class="well no-padding">

            <form action="@section('form-action')@show" method=@section('form-method')"post"@show class=@section('form-class')"smart-form client-form"@show>
               
                <header>
                    <h4 class="modal-title">@section('form-titulo') @show</h4>
                </header>

                <fieldset>   
                
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                
                    @section('form-conteudo') @show

                       {{--
                        <section>
                            <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                <input type="email" name="email" placeholder="Endereço de Email" required="required">
                            </label>
                        </section>
                        --}}

                </fieldset>

                <fieldset>
                    @section('form-conteudo2')@show
                </fieldset>

                <footer>
                    @section('form-footer') @show
                    {{--<button type="submit" class="btn btn-primary"> Registrar </button> --}}
                </footer>
            </form>
        </div>
    </div>
@stop
