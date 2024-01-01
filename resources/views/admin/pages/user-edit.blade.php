@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'User Profile' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title page-title">My Profile</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-content">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0)"><em class="icon ti ti-settings"></em><span>Personal Info Update</span></a>
                                </li>
                                <li class="nav-item nav-item-trigger d-xxl-none">
                                    <a href="javascript:void(0)" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                </li>
                            </ul><!-- .nav-tabs -->
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between d-flex justify-content-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Personal Information</h4>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <form action="admin/update-user" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter your full name" autocomplete="off" value="{{ Auth::guard('admin')->user()->name }}">
                                                    @error('name')
                                                    <span class="invalid">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Email Address</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" disabled class="form-control" placeholder="Enter your email address" autocomplete="off" value="{{ Auth::guard('admin')->user()->email }}">
                                                    {{-- @error('name')
                                                    <span class="invalid">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Mobile Number</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile Number" autocomplete="off" value="{{ Auth::guard('admin')->user()->mobile }}">
                                                    @error('mobile')
                                                    <span class="invalid">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Profile Image</label>
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control" name="photo" placeholder="Enter your profile image" autocomplete="off">
                                                    @error('photo')
                                                    <span class="invalid">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <div class="nk-block-head">
                                    <div class="nk-block-between d-flex justify-content-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Password</h4>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="admin/update-password/{{ Auth::guard('admin')->user()->id }}" method="POST">
                                    @csrf
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" name="password" placeholder="Enter your New Password" autocomplete="off">
                                                @error('password')
                                                <span class="invalid">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Change Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div><!-- .nk-block -->
                            </div><!--card inner-->
                        </div><!-- .card-content -->
                    </div><!--card-->
                </div><!--nk block lg-->
            </div>
        </div>
    </div>
</div>

@endsection