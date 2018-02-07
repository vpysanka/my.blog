@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Изменить тег
            <small>приятные слова..</small>
        </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Меняем тег</h3>
                @include('admin.errors')
            </div>
            {{Form::open(['route'=>['tags.update', $tag->id], 'method'=>'put'])}}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="{{$tag->title}}">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('tags.index')}}" class="btn btn-default">Назад</a>
                    <button type="submit" class="btn btn-warning pull-right">Изменить</button>
                </div>
            {{Form::close()}}
        </div>
    </section>
</div>
@endsection