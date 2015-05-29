@section('form-titulo') Registrar @stop

@section('form-action')/auth/register @stop

@section('form-conteudo')

<section>
    <label class="input"> <i class="icon-append fa fa-credit-card"></i>
        <input type="text" name="cpfcnpj" placeholder="CNPJ / CPF" required="required">
    </label>
</section>

<section>
    <label class="input"> <i class="icon-append fa fa-user"></i>
        <input type="text" name="name" placeholder="Nome" required="required">
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
        <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required="required">
    </label>
</section>

@endsection

@section('form-conteudo2')
    <section>
        <label class="checkbox">
            <input type="checkbox" name="news" id="news" value="1"/>
            <i></i>Quero receber novidades e ofertas especiais
        </label>
        <label class="checkbox">
            <input type="checkbox" name="terms" id="terms" value="1"/>
            <i></i>Concordo com os <a href="#" data-toggle="modal" data-target="#myModal"> Termos e Condições </a>
        </label>
    </section>
@stop

@section('form-footer')
    <button type="submit" class="btn btn-primary"> Registrar </button>
@show
