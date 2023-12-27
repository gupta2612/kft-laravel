@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'Post Add' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Post</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-8">
                            @if (Session::has('wrong'))
                            <div class="alert alert-fill alert-danger alert-icon">
                                <em class="icon ni ni-cross-circle"></em>
                                {{ Session::get('wrong') }}
                            </div>
                            @endif
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form action="{{ route('admin/addpost') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::guard('admin')->user()->id }}">
                                        <div class="row g-gs">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTitle">Title</label>
                                                    <input type="text" class="form-control" name="addTitle" placeholder="Title" value="{{ old('addTitle') }}">
                                                    @error('addTitle')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Content</label>
                                                    <div class="form-control-wrap">
                                                        {{-- <div class="summernote-lg summernote-minimal">
                                                        </div> --}}
                                                        <textarea name="post" class="summernote-lg summernote-minimal">{{ old('post') }}</textarea>
                                                        @error('post')
                                                    <span class="invalid-err">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-4">
                            <div class="card card-bordered">
                                <div class="card-inner">

                                        <div class="row g-gs">
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTags">Tags</label>
                                                    <input type="text" class="form-control" name="addTags" placeholder="Tags" value="{{ old('addTags') }}">
                                                    @error('addTags')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addSlug">Slug</label>
                                                    <input type="text" class="form-control" name="addSlug" placeholder="Slug" value="{{ old('addSlug') }}">
                                                    @error('addSlug')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Featured Image</label>
                                                    <input type="file" name="photo" class="form-control">
                                                    @error('photo')
                                                    <span class="invalid invalid-err">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Categories</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2" name="categories" data-placeholder="Categories">
                                                            <option value="uncategorized">Uncategorized</option>
                                                            @foreach ($collection as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('categories')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDate">Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar"></em>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" name="addDate" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ old('addDate') }}">
                                                        @error('addDate')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Select Status</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2" data-placeholder="Status" name="status">
                                                            <option value="1">Published</option>
                                                            <option value="2">Pending</option>
                                                            <option value="3">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="form-group">
                                                    <div class="g-3 align-center flex-wrap">
                                                        <div class="g">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" name="addComment">
                                                                <label class="custom-control-label" for="addComment">Allow Comments</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                        <li>
                                                            <button type="submit" class="btn btn-primary">Submit Post</button>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="#" class="link link-light">Save to Draft</a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection