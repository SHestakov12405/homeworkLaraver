@extends('layouts.main')

@section('content')
    <article class="card card-outline mb-4">
        <div class="card-body">
            <header>
                <h4 class="card-title">Осавить отзыв</h4>
            </header>
            <form method="post" action="{{route('contacts.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormInput" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="ФИО">
                </div>
                <div class="mb-3">
                    <label for="exampleFormInput" class="form-label">Ваш телефон</label>
                    <input type="tel" pattern="8[0-9]{3}[0-9]{3}[0-9]{4}" required placeholder="Формат 89998887776" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ваш отзыв</label>
                    <textarea class="form-control" name="feedback" id="feedback" rows="3" required placeholder="Текст..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </article>
@endsection





