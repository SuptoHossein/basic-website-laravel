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
                        <h2>Edit User - {{ $data->role }}<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('profile.index') }}" class="close-link"><i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form class="form-horizontal form-label-left" novalidate=""
                            action="{{ route('profile.update', [$data->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <span class="section">Personal Info</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        value="{{ $data->name }}" required="required" type="text">
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
                                        class="form-control col-md-7 col-xs-12" placeholder="{{ $data->email }}"
                                        disabled>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="address" id="" cols="30" rows="3"
                                        class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                        data-validate-words="2" required="required">{{ $data->address }} </textarea>

                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile">Mobile <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="mobile"
                                        value="{{ $data->mobile }}" required="required" type="text">
                                    @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Genter <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="gender" id="" class="form-control">
                                        <option value="">Choose Gender</option>
                                        <option value="male" {{ ($data->gender == 'male') ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ ($data->gender == 'female') ? 'selected' : '' }}>
                                            Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="image"
                                        type="file">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    @if ($data->image)
                                        <img class="img-responsive avatar-view"  alt="Avatar" title="Change the avatar" style="with:300px; height: 300px;" src="{{ url('upload/user_image/'.$data->image) }}">
                                    @else
                                        <img class="img-responsive avatar-view"  alt="Avatar" title="Change the avatar" style="with:300px; height: 300px;" src="{{ url('upload/demo.png') }}">
                                    @endif




                                    {{-- <img class="img-responsive avatar-view"  alt="Avatar" title="Change the avatar" style="with:300px; height: 300px;"
                                    @if ($data->image)
                                        src="{{ url('upload/user_image/'.$data->image) }}">
                                    @else
                                        {{  url('upload/demo.png') }}
                                    @endif --}}
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Update</button>
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

@section('liveShowImageUpload')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataUrl(e.target.files['0']);
            });
        });
    </script>
@endsection
