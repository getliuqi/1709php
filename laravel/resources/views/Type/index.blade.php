

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
                            <div class="search">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                名字
                                            </td>
                                            <td>
                                                <input type="text" name="name" value="" class="text short">
                                            </td>
                                            <td>
                                                <input type="hidden" name="page" value="1">
                                                <button class="button">查找</button>
                                            </td>
                                            <td>
                                                <button class="button">全选</button>
                                            </td>
                                            <td>
                                                <button class="button">清除</button>
                                            </td>
                                            <td>
                                                <button class="button">删除</button>
                                            </td>
                                            <td>
                                                <a href="add"><button class="button" type="button">添加</button></a>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        <div class="list">
                            <a href="add">添加</a>
                                <table border="1">
                                    <tr>
                                        <td>id</td>
                                        <td>类型</td>
                                        <td>类型名称</td>
                                        <td>created_at</td>
                                        <td>updated_at</td>
                                        <td>操作</td>
                                    </tr>

                                    @foreach( $list as $v)
                                        <tr>
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->type}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->created_at}}</td>
                                            <td>{{$v->updated_at}}</td>
                                            <td><a href="delete?id=<?php echo $v->id ?>">删除</a>
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
