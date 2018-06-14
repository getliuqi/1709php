

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
                            <form action="addSave" method="post">
                                {{csrf_field()}}
                                类型: <input type="radio" name="type" value="1">电影
                                 <input type="radio" name="type" value="2">电视
                                 <input type="radio" name="type" value="3">小说<br><br>
                                类型名称: <input type="text" name="name"><br><br>
                                <input type="submit" value="添加">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
