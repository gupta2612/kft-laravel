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
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check"><span class="sub-text">Sr. No.</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">User Name</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Role</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach ($AllUsers as $item)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <span>{{ $n++ }}</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="javascript:void(0)">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-primary-dim">
                                                        <img src="{{ asset('admin/assets/images/avatar/'.$item->profile_image) }}" alt="" srcset="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $item->name }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>{{ $item->email }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            @if ($item->type == 0)
                                                <span>Admin</span>
                                            @else
                                                <span>Super Admin</span>
                                            @endif
                                        </div>
                                        @if ($item->type == 1)
                                            <div class="nk-tb-col tb-col-md">
                                            <span>
                                                Only View
                                            </span>
                                        </div>

                                        @else

                                        <div class="nk-tb-col tb-col-md">
                                            <span><a href="javascript:void(0)" class="btn btn-trigger btn-icon"  title="Delete">
                                                <em class="icon ni ni-trash-fill"></em>
                                            </a></span>
                                        </div>
                                        @endif
                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        {{ $AllUsers->links() }}
                                    </div>
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