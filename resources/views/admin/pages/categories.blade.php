@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'Categories' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Categories</h3>
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
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs flex-row-reverse">
                        <div class="col-xxl-7">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Sr. No.</span></div>
                                                <div class="nk-tb-col"><span class="sub-text">Categories Name</span></div>
                                                <div class="nk-tb-col"><span class="sub-text">Description</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Slug</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Action</span></div>
                                            </div><!-- .nk-tb-item -->
                                            @foreach ($collection as $item)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span>{{ $no++ }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <a href="/blog/{{ $item->id }}/{{ $item->name }}" target="_blank" rel="noopener noreferrer"><strong><span>{{ $item->name }}</span></strong></a>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <div class="text-ellipsis w-max-200px">
                                                        <span>{{ $item->description }}</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span>{{ $item->slug }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span><a href="{{ 'admin/categories/delete/'.$item->id }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" title="Delete">
                                                        <em class="icon ni ni-trash-fill"></em>
                                                    </a></span>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            @endforeach
                                        </div><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    {{ $collection->links() }}
                                                </ul><!-- .pagination -->
                                            </div>
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <form action="{{ route('admin/categories') }}" method="POST">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Categorie Name</label>
                                                    <span class="form-note">The Categorie name that appears on your site.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" placeholder="Categorie Name" name="nameCategories" value="{{ old('nameCategories') }}">
                                                        @error('nameCategories')
                                                        <span class="invalid">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="slug">Slug</label>
                                                    <span class="form-note">The “slug” is URL-friendly version of the name.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="addSlug" value="{{ old('addSlug') }}">
                                                        @error('addSlug')
                                                        <span class="invalid">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDescription">Description</label>
                                                    <span class="form-note">The description is not prominent by default.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm no-resize" placeholder="Write your description"name="description"> {{ old('description') }}</textarea>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Add New Category</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection