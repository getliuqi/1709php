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
                            <form action="editSave" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$list->id}}">
                                电视剧名称: <input type="text" name="tv_name" value="{{$list->tv_name}}"><br><br>
                                图片地址: <input type="file" name="img_url" value="{{$list->img_url}}"><br><br>
                                下载地址: <input type="text" name="download_url" value="{{$list->download_url}}"><br><br>
                                用户评分: <input type="text" name="score" value="{{$list->score}}"><br><br>
                                语言: <input type="text" name="lanaguage_type" value="{{$list->lanaguage_type}}"><br><br>
                                地区id: <input type="text" name="area_id" value="{{$list->area_id}}"><br><br>
                                类型id: <input type="text" name="type_id" value="{{$list->type_id}}"><br><br>
                                年代id: <input type="text" name="year_id" value="{{$list->year_id}}"><br><br>
                                导演id: <input type="text" name="director_id" value="{{$list->director_id}}"><br><br>
                                演员id :<input type="text" name="actor_id" value="{{$list->actor_id}}"><br><br>
                                电视剧简介:<input type="text" name="desc" value="{{$list->desc}}"><br><br>
                                <input type="submit" value="添加"><br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
