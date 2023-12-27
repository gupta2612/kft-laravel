@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'Edit Post' }}
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
                                    @foreach ($collection as $item)
                                    <form action="admin/edit-post" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <div class="row g-gs">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTitle">Title</label>
                                                    <input type="text" class="form-control" name="addTitle" placeholder="Title" value="{{ $item->title }}">
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
                                                        <textarea name="post" class="summernote-lg summernote-minimal">{{ $item->content }}</textarea>
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
                                                    <input type="text" class="form-control" name="addTags" placeholder="Tags" value="{{ $item->tags }}">
                                                    @error('addTags')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addSlug">Slug</label>
                                                    <input type="text" class="form-control" name="addSlug" placeholder="Slug" value="{{ $item->slug }}">
                                                    @error('addSlug')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Featured Image</label>
                                                    <input type="file" name="photo" class="form-control" value="{{ $item->image }}">
                                                    @error('photo')
                                                    <span class="invalid invalid-err">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Categories</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2" multiple="multiple" name="categories" data-placeholder="Categories">
                                                            <option value="uncategorized">Uncategorized</option>
                                                            <option value="covid">Covid</option>
                                                            <option value="seo">SEO</option>
                                                            <option value="website">Website</option>
                                                        </select>
                                                        @error('categories')
                                                    <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDate">Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar"></em>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" name="addDate" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ $item->date }}">
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
                                                            @if ($item->status == 1)
                                                                <option value="1" selected>Published</option>
                                                                <option value="2">Pending</option>
                                                                <option value="3">Draft</option>
                                                            @elseif($item->status == 2)
                                                                <option value="1">Published</option>
                                                                <option value="2" selected>Pending</option>
                                                                <option value="3">Draft</option>
                                                            @else
                                                                <option value="1">Published</option>
                                                                <option value="2">Pending</option>
                                                                <option value="3" selected>Draft</option>
                                                            @endif
                                                        </select>
                                                        @error('status')
                                                            <span class="invalid">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                        <li>
                                                            <button type="submit" class="btn btn-primary">Update Post</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
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