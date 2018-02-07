@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <section class="content">
    {{Form::open([
        'route' => 'posts.store',
        'files' => true
    ])}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="form-group">
                    <a href="{{route('posts.create')}}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->getCategoryTitle()}}</td>
                                <td>{{$post->getTagsTitle()}}</td>
                                <td>
                                    <img src="{{$post->getImage()}}" alt="" width="100">
                                </td>
                                <td><a href="{{route('posts.edit', $post->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>    
                                {{Form::close()}}
                            </tr>
                        @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    {{Form::close()}}
    </section>
</div>
@endsection