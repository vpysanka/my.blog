@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Изменить статью
            <small>приятные слова..</small>
        </h1>
    </section>

    <section class="content">
    {{Form::open([
        'route' => ['posts.update', $post->id],
        'files' => true,
        'method' => 'put'
    ])}}
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Обновляем статью</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <img src="{{$post->getImage()}}" alt="" class="img-responsive" width="200">
                        <label for="exampleInputFile">Лицевая картинка</label>
                        <input type="file" name="image" id="exampleInputFile">
                        <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                    </div>
                    <div class="form-group">
                        <label>Категория</label>
                        {{Form::select('category_id', 
                            $categories,
                            $post->getCategoryID(),
                            ['class' => 'form-control select2']
                        )}}
                    </div>
                    <div class="form-group">
                        <label>Теги</label>
                        {{Form::select('tags[]', 
                            $tags,
                            $post->tags->pluck('id')->all(),
                            ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги']
                        )}}
                    </div>
                    <div class="form-group">
                        <label>Дата:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date" class="form-control pull-right" id="datepicker" value="{{$post->date}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            {{Form::checkbox('is_featured', '1', $post->is_featured, ['class' => 'minimal'])}}
                        </label>
                        <label>
                            Рекомендовать
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            {{Form::checkbox('status', '1', $post->status, ['class' => 'minimal'])}}
                        </label>
                        <label>
                            Черновик
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Полный текст</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('posts.index')}}" class="btn btn-default">Назад</a>
                <button type="submit" class="btn btn-warning pull-right">Изменить</button>
            </div>
        </div>
    {{Form::close()}}
    </section>
</div>
@endsection