@section('content')

<br>
<br>

    <div class="row-fluid">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="well no-padding">
                <form action="{{ url('/auth/login') }}" id="form-controller" class="smart-form client-form" method="post" data-type="post" >
                    <header>
                        <h3>Login</h3>
                    </header>      
                    
                    <fieldset>
                        <section>
                            <label class="label">Usuário</label>
                            <label class="input" > <i class="icon-append fa fa-user"></i>
                                <input type="sigla" name="sigla" required="required">
                                <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Entre com seu usuário / Login</b>
                            </label>
                        </section>
                        <section>
                            <label class="label">Password</label>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                <input type="password" name="senha" required="required">
                                <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Entre com sua senha</b> 
                            </label>
                            <div class="note pull-left">
                                <ul id="mobile-profile-img" class="header-dropdown-list hidden-lg padding-5">
                                    <li class="">
                                        <a href="{{url('auth/reset-password')}}" data-toggle="modal" data-target="#remoteModal2" id="dialog-modal2">
                                        Esqueceu sua senha?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </fieldset>
                    <header class="alturalinha">
                        <button type="submit" class="btn btn-primary btn-sm pull-right">LOGAR</button>
                        <a href="{{url('auth/register')}}" type="button" class="btn btn-primary btn-sm pull-left">REGISTRAR</a>
                    </header>
                </form>
            </div>
        </div>
    </div>

    <style type="text/css">.alturalinha{height: 35px;} </style>







