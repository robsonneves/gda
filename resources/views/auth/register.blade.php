@extends('layouts.site.index')

@section('content')

<div class="col-md-6 col-lg-offset-3 " style="margin-top:35px; padding-bottom: 300px">
	<div class="well no-padding">

		<form action="#" class="smart-form client-form">
			<header>
				<h4 class="modal-title">Registre-se Agora !</h4>
			</header>

			<fieldset>
				<section>
					<label class="input"> <i class="icon-append fa fa-credit-card"></i>
						<input type="text" name="username" placeholder="CNPJ / CPF" required="required">
					</label>
				</section>

				<section>
					<label class="input"> <i class="icon-append fa fa-envelope"></i>
						<input type="email" name="email" placeholder="Endereço de Email" required="required">
					</label>
				</section>

				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="password" placeholder="Senha" id="password" required="required">
					</label>
				</section>

				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="passwordConfirm" placeholder="Confirmar Senha" required="required">
					</label>
				</section>
			</fieldset>

			<fieldset>
				<section>
					<label class="checkbox">
						<input type="checkbox" name="subscription" id="subscription">
						<i></i>Quero receber novidades e ofertas especiais</label>
					<label class="checkbox">
						<input type="checkbox" name="terms" id="terms">
						<i></i>Concordo com os <a href="#" data-toggle="modal" data-target="#myModal"> Termos e Condições </a></label>
				</section>
			</fieldset>
			<footer>
				<button type="submit" class="btn btn-primary">
					Registrar
				</button>
			</footer>

			<div class="message">
				<i class="fa fa-check"></i>
				<p>
					Obrigado pela sua inscrição!
				</p>
			</div>
		</form>
	</div>
</div>




@endsection
