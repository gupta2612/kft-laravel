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
    <title>Login || {{ config('app.name') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css') }}">
</head>

<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main  -->
        <div class="nk-main ">
            <!-- wrap  -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content  -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('admin/assets/images/logo.png') }}" srcset="{{ asset('admin/assets/images/logo2x.png 2x') }}" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('admin/assets/images/logo-dark.png') }}" srcset="{{ asset('admin/assets/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register</h5>
                                        <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="html/pages/auths/auth-success-v3.html">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email or Username</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your email address or username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1" href="javascript:void(0)">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0)"> Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Already have an account ? <a href="/auth/login"><strong>Sign in instead</strong></a>
                                </div>
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Help</a>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2023 KFT Team. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap  -->
            </div>
            <!-- content  -->
        </div>
        <!-- main  -->
    </div>
    <!-- app-root  -->
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.2') }}"></script>

</html>