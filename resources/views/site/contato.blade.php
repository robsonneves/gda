@section('form-titulo')Contato @stop

@section('form-action'){{route('contato.send')}} @stop

@section('form-conteudo')

    <fieldset>
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
            <label for="name"> Mensagem</label>
            <textarea name="message" id="message" class="form-control" rows="5" cols="25" placeholder="Digite sua mensagem" required="required">
            </textarea>
        </section>

    </fieldset>

@endsection

@section('form-footer')

    <button type="submit" class="btn btn-primary btn-large pull-right">
        Enviar mensagem
    </button>

@endsection
  
    

                        



