@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Изменить категорию
            <small>приятные слова..</small>
        </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Меняем категорию</h3>
                @include('admin.errors')
            </div>
            {{Form::open(['route'=>['categories.update', $category->id], 'method'=>'put'])}}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" 
                                placeholder="" value="{{$category->title}}">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('categories.index')}}" class="btn btn-default">Назад</a>
                    <button type="submit" class="btn btn-warning pull-right">Изменить</button>
                </div>
            {{Form::close()}}
        </div>
    </section>
</div>
@endsection