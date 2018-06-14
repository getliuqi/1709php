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
                            <form action="addSave" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                电视剧名称: <input type="text" name="tv_name"><br><br>
                                图片地址: <input type="file" name="img_url"><br><br>
                                下载地址: <input type="text" name="download_url"><br><br>
                                用户评分: <input type="text" name="score"><br><br>
                                语言: <input type="text" name="lanaguage_type"><br><br>
                                地区id: <input type="text" name="area_id"><br><br>
                                类型id: <input type="text" name="type_id"><br><br>
                                年代id: <input type="text" name="year_id"><br><br>
                                导演id: <input type="text" name="director_id"><br><br>
                                演员id :<input type="text" name="actor_id"><br><br>
                                电视剧简介:<input type="text" name="desc"><br><br>
                                <input type="submit" value="添加"><br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
