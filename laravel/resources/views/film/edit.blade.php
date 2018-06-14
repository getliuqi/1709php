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

                            <form action="editSave" method="post">
                                {{csrf_field()}}
                                <p><input type="hidden" name="id" value="{{$data->id}}"></p>
                                <p>电影名称：<input type="text" name="title" value="{{$data->title}}"></p>
                                <p>图片地址：<input type="text" name="img_url"  value="{{$data->img_url}}"></p>
                                <p>下载地址：<input type="text" name="download_url" value="{{$data->download_url}}"></p>
                                <p>用户评分：<input type="text" name="score" value="{{$data->score}}"></p>
                                <p>语言：<input type="text" name="lanaguage_type" value="{{$data->lanaguage_type}}"></p>
                                <p>地区：<input type="text" name="area_id" value="{{$data->area_id}}"></p>
                                <p>类型：<input type="text" name="type_id" value="{{$data->type_id}}"></p>
                                <p>年代：<input type="text" name="year_id" value="{{$data->year_id}}"></p>
                                <p>导演：<input type="text" name="director_id" value="{{$data->director_id}}"></p>
                                <p>演员：<input type="text" name="actor_id" value="{{$data->actor_id}}"></p>
                                <p>电影简介：<input type="text" name="desc" value="{{$data->desc}}"></p>
                                <p><input type="submit"></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
