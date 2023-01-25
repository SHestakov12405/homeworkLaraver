@extends('layouts.main')
@section('content')
    <article class="card card-outline mb-4">
        <div class="card-body">
            <header>
                <h4 class="card-title">Запросить информацию</h4>
            </header>
            <form method="post" action="{{route('feedback.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormInput" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" name="name" id="exampleFormInput">
                </div>
                <div class="mb-3">
                    <label for="exampleFormInput" class="form-label">Номер телефона</label>
                    <input type="number" class="form-control" name="phone" id="exampleFormInput">
                </div>
                <div class="mb-3">
                    <label for="exampleFormInput" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormInput">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Информация</label>
                    <textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </article>
@endsection