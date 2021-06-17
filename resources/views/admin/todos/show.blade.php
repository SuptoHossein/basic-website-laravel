@extends('layouts.dashboard')

@section('content')
<style>
    .navbar-right {
        margin-right: -43px;
    }

    .fa-plus-circle {
        font-size: 18px;
    }

</style>
<div class="right_col" role="main" style="min-height: 1184px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Todos <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                  
                        <span class="text-danger"></span>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Todo List<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('todo.create') }}" class="close-link"><i
                                        class="fa fa-plus-circle"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        
                                @foreach($todo as $key => $data)
                                    
                                

                                <div class="col-md-6 col-md-offset-3 col-sm-4 col-xs-12 profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief"><i>Todo Details</i></h4>
                                            <div class="left col-xs-7">
                                                <h2>{{ $data->title }}</h2>
                                                <p><strong>Details: </strong> {{ $data->details }} </p>
                                                <ul class="list-unstyled">
                                                <li><i class="fa fa-clock-o"></i> Time: {{ $data->created_at }}</li>
                                                <li><i class="fa fa-bell-o"></i> status : {{ ($data->done == 0) ? 'Not Done' : 'Done'  }} </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 bottom text-center">
                                            <div class="col-xs-12 col-sm-6 emphasis text-right">

                                                <!-- <a href="{{ route('todo.done', [$data->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></a> -->
                                                
                                                
                                                
                                                <form action="{{ route('todo.done', [$data->id]) }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-check"></i> Make as done</button>
                                                </form> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection




