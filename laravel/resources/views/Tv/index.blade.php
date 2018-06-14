@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">电视剧表</div>

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
                                            <td>电视剧名</td>
                                            <td>图片地址</td>
                                            <td>下载地址</td>
                                            <td>用户评分</td>
                                            <td>语言</td>
                                            <td>地区id</td>
                                            <td>类型id</td>
                                            <td>年代id</td>
                                            <td>导演id</td>
                                            <td>演员id</td>
                                            <td>电视剧简介id</td>
                                            <td>created_at</td>
                                            <td>updated_at</td>
                                            <td>操作</td>
                                        </tr>
                                        @foreach( $list as $v)
                                            <tr>
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->tv_name}}</td>
                                                <td><img src="{{$v->img_url}}" width="50px"></td>
                                                <td>{{$v->download_url}}</td>
                                                <td>{{$v->score}}</td>
                                                <td>{{$v->lanaguage_type}}</td>
                                                <td>{{$v->area['area_name']}}</td>
                                                <td>{{$v->type['name']}}</td>
                                                <td>{{$v->year['years']}}</td>
                                                <td>{{$v->director['name']}}</td>
                                                <td>{{$v->actor['actor_name']}}</td>
                                                <td>{{$v->desc}}</td>
                                                <td>{{$v->created_at}}</td>
                                                <td>{{$v->updated_at}}</td>
                                                <td><a href="delete?id={{$v->id}}">删除</a>
                                                    <a href="edit?id={{$v->id}}">修改</a>
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
