@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Добавить тег
            <small>приятные слова..</small>
        </h1>
    </section>

    <section class="content">
        <div class="box">
            {{Form::open(['route' => 'tags.store'])}}
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем тег</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('tags.index')}}" class="btn btn-default">Назад</a>
                    <button type="submit" class="btn btn-success pull-right">Добавить</button>
                </div>
            {{Form::close()}}
        </div>
    </section>
</div>
@endsection