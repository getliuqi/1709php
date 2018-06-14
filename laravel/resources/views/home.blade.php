@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list">
                        <a href="add">添加</a>
                            <table cellspacing="0" border="1">
                                <tr>
                                    <td>id</td>
                                    <td>年代</td>
                                    <td>创建时间</td>
                                    <td>更新时间</td>
                                    <td>操作</td>
                                </tr>
                                @foreach( $list as $v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->years}}</td>
                                        <td>{{$v->created_at}}</td>
                                        <td>{{$v->updated_at}}</td>
                                        <td><a href="delete?id=<?php echo $v->id ?>">删除</a>|
                                            <a href="edit?id=<?php echo $v->id ?>">修改</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
