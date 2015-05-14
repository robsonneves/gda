<html>
    <head>
        <script>$('#remoteModal').on('hide.bs.modal', function (e) { $('#remoteModal').removeData();});</script><!--Limpa MyModal -->
    </head>

    <body ng-app="App">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Resetar Senha</h4>
        </div>

        <div class="modal-body">
            <div class="no-padding">
                <form action="{{url('/auth/reset-password')}}" method="post" id="login-form" class="smart-form client-form">
					<fieldset>
						<section>
                            <label class="label">Login</label>
                            <label class="input">
                                <input type="text" name="login" placeholder="Login" required="required">
                            </label>
                        </section>
                        <section>
                            <label class="label">CNPJ/CPF</label>
                            <label class="input">
                                <input type="text" name="cpfcnpj" placeholder="CNPJ/CPF" required="required">
                            </label>
                        </section>
					</fieldset>
					<footer>
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-refresh"></i> Resetar Senha
						</button>
					</footer>
				</form>
    		</div>
    	</div>
    </body>
</html>

