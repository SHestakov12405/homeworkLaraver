@extends('layouts.admin')

@section('content')

    <form method="post" action="{{route('admin.news.store')}}">
        @csrf
        <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Добавить запись</div>
            <div class="card-body">
                <form>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="title">Название</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="title" required name="title" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="author">Автор</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="author" required value="default" name="author" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="category_ids">Категория</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2-selection__rendered" name="category_ids[]" id="category_ids" multiple>
                            <option value="0">Выбрать</option>
                            @foreach ($categories as $category)
                                <option value="{{$category['id']}}">{{$category['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="status">Статус</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <select class="" name="status" id="status">
                                <option value="0">Выбрать</option>
                                <option value="draft">draft</option>
                                <option value="active">active</option>
                                <option value="blocked">blocked</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="description">Текст</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                    <textarea class="form-control" required name="description" id="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputDisabled3">Фото</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="photo" name="photo" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="sources">Источник</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2-selection__rendered" name="sources" id="sources">
                            <option value="0">Выбрать</option>
                            @foreach ($sources as $source)
                                <option value="{{$source['id']}}">{{$source['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                </form>
            </div>
        </div>
            <div class="form-group">
                <div class="col-12 col-sm-8 col-lg-6">
                    <button class="btn btn-space btn-primary" type="submit">Submit</button>
                </div>
            </div>
      </div>
    </form>
@endsection
