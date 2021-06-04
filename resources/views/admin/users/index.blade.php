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
                <h3>Users <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Users List<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('user.create') }}" class="close-link"><i
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
                                    <th>User Type</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $value->role }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('user.edit', [$value->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            {{-- <a href="{{ route('user.destroy', [$value->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                                            {{-- <form action="{{ route('user.destroy', [$user->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </button>
                                            </form> --}}


                                            <form action="{{ route('user.destroy', [$value->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
