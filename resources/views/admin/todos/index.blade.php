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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Done</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($todo as $key => $data)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $data->title }}</td>
                                        <td> @if($data->done == 0) <span class="label label-danger">Not Done</span> @else <span class="label label-success">Done</span> @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('todo.show', [$data->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('todo.show', [$data->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            
                                            <!-- Make done -->
                                            <form action="{{ route('todo.done', [$data->id]) }}" method="post">
                                                @method('put')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-check"></i></button>
                                            </form> 

                                            <!-- Make done -->
                                            <form action="{{ route('todo.destroy', [$data->id]) }}" method="post">
                                                @method('put')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                                            </form> 
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-danger large-text"><span>No Todo Found</span></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
