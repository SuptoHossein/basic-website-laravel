@extends('layouts.dashboard')

@section('content')
<style>
    .navbar-right {
        margin-right: -43px;
    }

    .fa-arrow-circle-left {
        font-size: 18px;
    }

</style>
<div class="right_col" role="main" style="min-height: 1184px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>New User<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('user.index') }}" class="close-link"><i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('user.store') }}" method="POST">
                            @csrf

                            <span class="section">Personal Info</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="role" id="" class="form-control">
                                        <option value="">Choose Option</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Password <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" name="password" data-validate-length="6,8"
                                        class="form-control col-md-7 col-xs-12" required="required">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat
                                    Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password2" type="password" name="password2"
                                        data-validate-linked="password" class="form-control col-md-7 col-xs-12"
                                        required="required">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
