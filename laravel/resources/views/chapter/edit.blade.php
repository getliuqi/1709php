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
                                <p>小说id：<input type="text" name="novel_id" value="{{$data->novel_id}}"></p>
                                <p>章节数：<input type="text" name="chapter_num" value="{{$data->chapter_num}}"></p>
                                <p>章节标题：<input type="text" name="charpter_title" value="{{$data->charpter_title}}"></p>
                                <p>小说内容：<input type="text" name="novel_content" value="{{$data->novel_content}}"></p>
                                <p><input type="submit"></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
