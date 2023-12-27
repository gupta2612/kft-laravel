@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'Post List' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Posts </h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total <strong>{{ $collection->count() }}</strong> posts.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        @if (Session::has('success'))
                                <div class="alert alert-fill alert-success alert-icon">
                                    <em class="icon ni ni-check-circle"></em>
                                    {{ Session::get('success') }}
                                </div>
                        @endif
                        @if (Session::has('wrong'))
                                <div class="alert alert-fill alert-danger alert-icon">
                                    <em class="icon ni ni-cross-circle"></em>
                                    {{ Session::get('wrong') }}
                                </div>
                        @endif
                        <div class="nk-block-head-content">
                            <a href="/admin/post-add" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                            <a href="/admin/post-add" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">

                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li><a href="admin/all-post/desc">DESC</a></li>
                                                                            <li><a href="admin/all-post/asc">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .toggle-content -->
                                                </div><!-- .toggle-wrap -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by Author Name or Post Title">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->

                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col tb-col-mb">
                                            Sr. No.
                                        </div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Title</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Author</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Categories</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Tags</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Action</span></div>

                                    </div><!-- .nk-tb-item -->
                                    @foreach ($collection as $item)
                                    <div class="nk-tb-item sr-no">
                                        <div class="nk-tb-col tb-col-mb sr-no-start">
                                            {{ $no++ }}
                                        </div>
                                        <div class="nk-tb-col">
                                            @if ($item->status == 1 )
                                            <a href="/blog/blog-details/{{ $item->id }}/{{ $item->slug }}" target="_blank">
                                                <span>{{ Str::words($item->title, 4, '...') }}</span>
                                            </a>
                                            @else
                                            <span>{{ Str::words($item->title, 4, '...') }}</span>
                                            @endif

                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <a href="javascript:void(0)">
                                                <div class="user-card">
                                                    <div class="user-avatar  sm bg-orange-dim">
                                                        <span>{{
                                                            Str::substr($item->user_name, 0, 1)
                                                            }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $item->user_name }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>{{ $item->categories_name }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>{{ $item->tags }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            @if ($item->status == 1)
                                                <span>Published</span>
                                            @elseif($item->status == 2)
                                                <span>Pending</span>
                                            @else
                                                <span>Draft</span>
                                            @endif
                                        </div>
                                        @if (Auth::guard('admin')->user()->id == $item->user_id)
                                        <div class="nk-tb-col tb-col-sm">
                                            <span><a class="btn btn-trigger btn-icon" href="admin/edit-post/{{ $item->id }}" title="Edit Post" data-bs-toggle="tooltip">
                                                <em class="icon ni ni-edit-fill"></em>
                                            </a></span> |
                                            <span><a href="{{ 'admin/delete/'.$item->id }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" title="Delete">
                                                <em class="icon ni ni-trash-fill"></em>
                                            </a></span>
                                        </div>
                                        @else
                                            @if ($item->status == 1)
                                            <div class="nk-tb-col tb-col-sm">
                                                <span><a class="btn btn-trigger btn-icon" href="/blog/blog-details/{{ $item->id }}/{{ $item->slug }}" title="View Post" data-bs-toggle="tooltip" target="_blank">
                                                    <em class="icon ti ti-eye"></em>
                                                </a></span>
                                            </div>
                                            @else
                                            <div class="nk-tb-col tb-col-sm">
                                                <span><a class="btn btn-trigger btn-icon" href="javascript:void(0)" title="This is not View Post" data-bs-toggle="tooltip">
                                                    <em class="icon ti ti-eye"></em>
                                                </a></span>
                                            </div>
                                            @endif
                                        @endif

                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        {{ $collection->links() }}
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