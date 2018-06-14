
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
                            <p>用户id:<input type="text" name="user_id" value="{{$data->user_id}}"></p>
                            <p>评论id:<input type="text" name="comment_id" value="{{$data->comment_id}}"></p>
                            <p>评论类型(电影/电视):<input type="text" name="comment_type" value="{{$data->comment_type}}"></p>
                            <p>回应id:<input type="text" name="repay_id" value="{{$data->repay_id}}"></p>
                            <p>用户评分:<input type="text" name="score" value="{{$data->score}}"></p>
                            <p>评论内容:<input type="text" name="content" value="{{$data->content}}"></p>
                            <input type="submit" value="修改">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
