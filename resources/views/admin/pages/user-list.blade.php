@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'User List' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Users</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 10 users.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <a data-bs-toggle="modal" href="#addUser" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                            <a data-bs-toggle="modal" href="#addUser" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add User</span></a>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px">
                                                <select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="pass">Send Password Reset</option>
                                                    <option value="delete">Delete</option>
                                                </select>
                                            </div>
                                            <div class="btn-wrap">
                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-setting"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                        <ul class="link-check">
                                                            <li><span>Show</span></li>
                                                            <li class="active"><a href="#">10</a></li>
                                                            <li><a href="#">20</a></li>
                                                            <li><a href="#">50</a></li>
                                                        </ul>
                                                        <ul class="link-check">
                                                            <li><span>Order</span></li>
                                                            <li class="active"><a href="#">DESC</a></li>
                                                            <li><a href="#">ASC</a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .dropdown -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by User Name">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">User Name</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Name</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Role</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Posts</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                            <a href="#" class="btn btn-xs btn-outline-light btn-icon"><em class="icon ni ni-plus"></em></a>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-primary-dim">
                                                        <em class="icon ni ni-user-fill"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">abubin_ishtiyak</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Abu Bin Ishtiyak</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>softnio@gmail.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Super Admin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>1</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-primary-dim">
                                                        <img src="./images/avatar/a-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">ashleylawson</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Ashley Lawson</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>ashleylawson@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Admin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>2</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                <label class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-danger-dim">
                                                        <em class="icon ni ni-user-fill"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">joelarson</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>—</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>joelarson@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Subscriber</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>5</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                <label class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-primary-dim">
                                                        <img src="./images/avatar/d-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">frances</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Larson Frances</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>frances@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Contributor</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>2</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                <label class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-warning-dim">
                                                        <em class="icon ni ni-user-fill"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">dobrah542</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Dhobra Zack</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>dobrah542@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Author</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>0</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                <label class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-warning-dim">
                                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">butler95</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Emaliy Butler</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>butler@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Editor</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>2</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                <label class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-orange-dim">
                                                        <em class="ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">jackmiller65</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Jack Miller</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>jackmiller65@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Guest</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>2</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                <label class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-orange-dim">
                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">thomasjack653</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Thomas Huge</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>thomasjack653@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Contributor</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>2</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                <label class="custom-control-label" for="uid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-info-dim">
                                                        <em class="ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">knightfall156</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Brad Pitt</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>knightfall156@example.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Subscriber</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>4</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                <label class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/cms/user-profile.html">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-primary-dim">
                                                        <em class="icon ni ni-user-fill"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">fahimmuntasir</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>—</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>example@gmail.com</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span>Guest</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>1</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/cms/user-profile.html" class="btn btn-trigger btn-icon" data-bs-placement="top" title="View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editUser" data-bs-placement="top" title="Quick Edit">
                                                        <em class="icon ni ni-edit-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/cms/user-profile.html"><em class="icon ni ni-eye-fill"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editUser"><em class="icon ni ni-edit-fill"></em><span>Edit User</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection