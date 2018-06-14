
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
                            <p>作者姓名:<input type="text" name="author_name" value="{{$data->author_name}}"></p>
                            <input type="submit" value="修改">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
