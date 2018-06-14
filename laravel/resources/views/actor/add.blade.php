@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">actor添加</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="addSave" method="post">
                                {{csrf_field()}}
                                <p>演员名称：<input type="text" name="actor_name"></p>
                                <p><input type="submit"></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
