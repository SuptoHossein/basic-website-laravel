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
                <h3>Profile <small></small></h3>
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
                        <h2>{{ $data->name }}<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('user.create') }}" class="close-link"><i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-6 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view"  alt="Avatar" title="Change the avatar" style="with:300px; height: 300px;"
                                            @if ($data->image)
                                                src="{{ url('upload/user_image/'.$data->image) }}">
                                            @else
                                                {{ asset('upload/demo.png') }}
                                            @endif
                                    </div>
                                </div>
                                <h3>{{ $data->name }}</h3>
                            </div>
                            <div class="col-md-6 col-sm-8 col-xs-6 profile_left">
                                <ul class="list-unstyled user_data">
                                    <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $data->address }}
                                    </li>
                                    <li><i class="fa fa-envelope user-profile-icon"></i> {{ $data->email }}
                                    </li>
                                    <li><i class="fa fa-phone user-profile-icon"></i> {{ $data->mobile }}
                                    </li>
                                    <li><i class="fa fa-user user-profile-icon"></i> {{ $data->gender }}
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-success" href="{{ route('profile.edit', [$data->id]) }}"><i
                                    class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
