@extends('layouts.admin')

@section('content')
    <form method="post" action="{{route('admin.news.store')}}">
        @csrf
        <input name="name" type="text" id="name">
        <button class="btn" type="submit">Отправить</button>
    </form>
@endsection