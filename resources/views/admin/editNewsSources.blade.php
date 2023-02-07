@extends('layouts.admin')

@section('content')

    <form method="post" action="{{route('admin.newsSources.update', ['newsSource'=>$newsSource])}}">
        @csrf
        @method('put')
        <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Редактировать запись</div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="name">Название</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="name" name="name" type="text" value="{{$newsSource['name']}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="description">Текст</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea class="form-control" name="description" id="description">{{$newsSource['description']}}</textarea>
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-12 col-sm-8 col-lg-6">
                        <button class="btn btn-space btn-primary" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </form>


@endsection
