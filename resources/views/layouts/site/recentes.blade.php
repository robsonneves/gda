<div class="col-md-6 col-sm-5 col-xs-12">
    <font color="b9b9b9"><b>Usuários</b></font><p>
    <ul class="list-inline friends-list">
        @foreach($recentes as $user )

            <li> <a href="{{$user->link}}" target="_blank"><img src="{{$user->avatar}}" width="35" height="35" title="{{$user->nome}}"> </a> </l>

        @endforeach
    </ul>
</div>