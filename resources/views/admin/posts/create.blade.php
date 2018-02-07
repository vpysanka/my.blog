@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Добавить статью
            <small>приятные слова..</small>
        </h1>
    </section>

    <section class="content">
    {{Form::open([
        'route' => 'posts.store',
        'files' => true
    ])}}
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем статью</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Лицевая картинка</label>
                        <input type="file" name="image" id="exampleInputFile">
                        <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                    </div>
                    <div class="form-group">
                        <label>Категория</label>
                        {{Form::select('category_id', 
                            $categories,
                            null,
                            ['class' => 'form-control select2']
                        )}}
                    </div>
                    <div class="form-group">
                        <label>Теги</label>
                        {{Form::select('tags[]', 
                            $tags,
                            null,
                            ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги']
                        )}}
                    </div>
                    <div class="form-group">
                        <label>Дата:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date" class="form-control pull-right" id="datepicker" value="{{old('date')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="is_featured" class="minimal">
                        </label>
                        <label>
                            Рекомендовать
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="status" class="minimal">
                        </label>
                        <label>
                            Черновик
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Полный текст</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('posts.index')}}" class="btn btn-default">Назад</a>
                <button type="submit" class="btn btn-success pull-right">Добавить</button>
            </div>
        </div>
    {{Form::close()}}
    </section>
</div>
@endsection