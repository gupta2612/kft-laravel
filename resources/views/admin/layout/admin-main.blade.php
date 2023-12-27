<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>@yield('admin-title') || {{ config('app.name') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/libs/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.css') }}">
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">

        <!-- main   -->
        <div class="nk-main ">
            <!-- wrap   -->
            <div class="nk-wrap ">
                <!-- Top header   -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info">
                                    <span class="sub-text">KFT</span>
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>{{
                                                            Str::substr(Auth::guard('admin')->user()->name, 0, 1)
                                                            }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::guard('admin')->user()->name }} </span>
                                                        <span class="sub-text">{{ Auth::guard('admin')->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="/admin/user-profile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        {{-- <a href="{{ route('admin/logout') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a> --}}
                                                    <form action="{{ route('admin/logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"><em class="icon ni ni-signout"></em> <span>Sign out</span></button>
                                                    </form>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side header  -->
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboard</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="admin/dashboard" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                    <span class="nk-menu-text">Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0)" class="nk-menu-link"><span class="nk-menu-text">Add Page</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0)" class="nk-menu-link"><span class="nk-menu-text">Page List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0)" class="nk-menu-link"><span class="nk-menu-text">Sample Page</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    <span class="nk-menu-text">Post</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="/admin/all-post" class="nk-menu-link"><span class="nk-menu-text">All Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="/admin/{{ Auth::guard('admin')->user()->id }}/user-post" class="nk-menu-link"><span class="nk-menu-text">Your Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="/admin/post-add" class="nk-menu-link"><span class="nk-menu-text">Add Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="/admin/categories" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="/admin/media" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>
                                    <span class="nk-menu-text">Media</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="javascript:void(0)" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-comments"></em></span>
                                    <span class="nk-menu-text">Comments</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="/admin/user-list" class="nk-menu-link"><span class="nk-menu-text">User List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="/admin/user-profile" class="nk-menu-link"><span class="nk-menu-text">User Profile</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                <!-- main content   -->
                @yield('admin-content')
                <!-- content -->
            </div>
            <!-- wrap -->
        </div>
        <!-- main  -->
    </div>
    <!-- app-root  -->


    <!-- Edit Post Quick Edit-->
    @yield('quick-edit')
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.2') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/editors/summernote.css?ver=3.2.2') }}">
    <script src="{{ asset('admin/assets/js/libs/editors/summernote.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('admin/assets/js/editors.js?ver=3.2.2') }}"></script>
</body>

</html>