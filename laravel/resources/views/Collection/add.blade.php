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
                                电视剧id: <input type="text" name="tv_id"><br><br>
                                电视剧集数: <input type="text" name="collection_index"><br><br>
                                剧情介绍简介: <input type="text" name="collection_desc"><br><br>
                                下载地址: <input type="text" name="download_url"><br><br>
                                <input type="submit" value="添加"><br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
