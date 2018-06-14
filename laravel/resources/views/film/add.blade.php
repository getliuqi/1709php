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

                            <form action="addSave" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <p>电影名称：<input type="text" name="title"></p>
                                <p>图片地址：<input type="file" name="img_url" ></p>
                                <p>下载地址：<input type="text" name="download_url"></p>
                                <p>用户评分：<input type="text" name="score"></p>
                                <p>语言：<input type="text" name="lanaguage_type"></p>
                                <p>地区：<input type="text" name="area_id"></p>
                                <p>类型：<input type="text" name="type_id"></p>
                                <p>年代：<input type="text" name="year_id"></p>
                                <p>导演：<input type="text" name="director_id"></p>
                                <p>演员：<input type="text" name="actor_id"></p>
                                <p>电影简介：<input type="text" name="desc"></p>
                                <p><input type="submit"></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
