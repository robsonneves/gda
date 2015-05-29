@extends('layouts.site.index')

@section('content')

<style type="text/css">.galeria{margin: 30px}.foto{margin: 0px 10px 5px 0px; width: 80px; height: 80px}</style>
    
    
    <div class="row-fluid superbox galeria">

        @foreach($sociais as $social){{-- 16 imagens por linha--}}
            <div class="superbox-list foto ">
                @if($social->avatar != null)
                    <img src="{{$social->avatar}}"
                @else
                    <img src="{{asset("assets/site/img/avatars/male.png")}}"
                @endif
                    width="100%" height="100%" data-alt="{{$social->user_id}}" data-link="{{$social->link}}" data-title="{{$social->name}}" data-sorte="teste" class="superbox-img">
            </div>
        @endforeach
        <div class="superbox-float"></div>
    </div>

    <script src="{{asset("assets/site/js/superbox.min.js")}}"> </script>

    <script>
        $(document).ready(function()
        {
            $('.superbox').SuperBox();

        });
    </script>

@stop



