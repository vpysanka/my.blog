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
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Текст</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->text}}</td>
                                <td>
                                    @if($comment->status == 1)
                                        <a href="/admin/comments/toggle/{{$comment->id}}" class="fa fa-lock"></a>
                                    @else
                                        <a href="/admin/comments/toggle/{{$comment->id}}" class="fa fa-thumbs-o-up"></a>                               
                                    @endif

                                    {{Form::open(['route'=>['comments.destroy', $comment->id], 'method'=>'delete'])}}
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                            <i class="fa fa-remove"></i>
                                        </button>    
                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection