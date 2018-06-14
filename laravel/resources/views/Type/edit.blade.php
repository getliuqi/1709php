

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">类型表</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="editSave" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$list->id}}">
                                类型: <input type="radio" name="type" value="1" {{ $list->type == 1 ? 'checked' : "" }}>电影
                                 <input type="radio" name="type" value="2" {{ $list->type == 2 ? 'checked' : "" }}>电视
                                 <input type="radio" name="type" value="3" {{ $list->type == 3 ? 'checked' : "" }}>小说<br><br>
                                类型名称: <input type="text" name="name" value="{{$list->name}}"><br><br>
                                <input type="submit" value="添加">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
