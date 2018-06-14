
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

                            <form action="addSave" method="post">
                                {{csrf_field()}}
                                地区:<input type="text" name="area_name"><br><br>
                                <input type="submit" value="添加">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
