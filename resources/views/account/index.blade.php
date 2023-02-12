@extends('layouts.app')
@section('content')
    <div class="col-8 offset-2">
        <h2>Добро пожаловать, {{Auth::user()->name}}</h2>
        @if (Auth::user()->is_admin)
            <br>
            <a href="{{route("admin.news.index")}}">Админка</a>
        @endif
    </div>
@endsection
