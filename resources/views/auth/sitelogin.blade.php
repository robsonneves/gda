<html>
    
    <head>
        <script>$('#remoteModal').on('hide.bs.modal', function (e) { $('#remoteModal').removeData();});</script><!--Limpa MyModal -->
    </head>
    
    <body>

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
            <div class="no-padding">
                <form action="{{ url('/auth/login') }}" id="login-form" class="smart-form client-form" method="post">
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
                    <div class="modal-footer" style="border: 0px">
                        <button type="submit" class="btn btn-primary btn-sm">LOGAR</button>
                        <a href="{{url('auth/register')}}" type="button" class="btn btn-primary btn-sm pull-left">REGISTRAR</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>





