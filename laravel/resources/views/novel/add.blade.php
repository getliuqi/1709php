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
                                <p>小说名称：<input type="text" name="title"></p>
                                <p>评分：<input type="text" name="score"></p>
                                <p>图片地址：<input type="file" name="img_url"></p>
                                <p>下载地址：<input type="text" name="download_url"></p>
                                <p>作者：<input type="text" name="author_id"></p>
                                <p>状态：<input type="text" name="status"></p>
                                <p>类型：<input type="text" name="type_id"></p>
                                <p>内容简介：<input type="text" name="desc"></p>
                                <p><input type="submit"></p>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
