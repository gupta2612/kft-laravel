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
                        @if (Session::has('success'))
                        <div class="alert alert-fill alert-success alert-icon">
                            <em class="icon ni ni-check-circle"></em>
                            {{ Session::get('success') }}
                        </div>
                        @endif

                        @if (Session::has('logout'))
                        <div class="alert alert-fill alert-success alert-icon">
                            <em class="icon ni ni-check-circle"></em>
                            {{ Session::get('logout') }}
                        </div>
                        @endif
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <div class="card-content">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0)"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
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
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                </div>
                                            </div>
                                            <div class="nk-tab-actions me-n1">
                                                <a class="btn btn-icon btn-trigger" href="/admin/user-profile/update-user"><em class="icon ni ni-edit"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Title</span>
                                                <span class="profile-ud-value">Mr.</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Full Name</span>
                                                <span class="profile-ud-value">{{ Auth::guard('admin')->user()->name }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date of Birth</span>
                                                <span class="profile-ud-value">-------</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Surname</span>
                                                <span class="profile-ud-value">-------</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Mobile Number</span>
                                                @if (Auth::guard('admin')->user()->mobile == '')
                                                <span class="profile-ud-value">+91-9xxxxxxxx0</span>
                                                @else
                                                <span class="profile-ud-value">{{ Auth::guard('admin')->user()->mobile }}</span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email Address</span>
                                                <span class="profile-ud-value">{{ Auth::guard('admin')->user()->email }}</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-line">
                                        <h6 class="title overline-title text-base">Additional Information</h6>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Joining Date</span>
                                                <span class="profile-ud-value">{{ Auth::guard('admin')->user()->created_at->format('j-F-Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Reg Method</span>
                                                <span class="profile-ud-value">Email</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Country</span>
                                                <span class="profile-ud-value">India</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nationality</span>
                                                <span class="profile-ud-value">India</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-line">
                                        <h6 class="title overline-title text-base">Personal Preferences</h6>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Language</span>
                                                <span class="profile-ud-value">English (United State)</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date Format</span>
                                                <span class="profile-ud-value">M d, YYYY</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Timezone</span>
                                                <span class="profile-ud-value">India (GMT +05:30)</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Visual Editor</span>
                                                <span class="profile-ud-value">Disable the visual editor when writing</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
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