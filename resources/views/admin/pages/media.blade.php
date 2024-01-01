@extends('admin/layout/admin-main')

@section('admin-title')
{{ 'Media' }}
@endsection

@section('admin-content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Media</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu" style="display: none;">
                                    <ul class="nk-block-tools g-3">
                                        {{-- <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered by</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>All Media Files</span></a></li>
                                                        <li><a href="#"><span>Images</span></a></li>
                                                        <li><a href="#"><span>Audio</span></a></li>
                                                        <li><a href="#"><span>Video</span></a></li>
                                                        <li><a href="#"><span>Document</span></a></li>
                                                        <li><a href="#"><span>Spreadsheets</span></a></li>
                                                        <li><a href="#"><span>Archives</span></a></li>
                                                        <li><a href="#"><span>Mine</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li> --}}
                                        <li class="nk-block-tools-opt">
                                            <a href="/admin/post-add" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach ($collection as $item)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery gallery-content card card-bordered">
                                <div class="gallery-images">
                                    <img class="w-100 rounded" src="{{ asset('assets/images/background/'.$item->image) }}" alt="">
                                </div>
                                <div class="image-overlay">
                                    <ul>
                                        <li><a target="_blank" href="{{ asset('assets/images/background/'.$item->image) }}"><em class="icon ni ni-edit"></em></a></li>
                                    </ul>
                                </div><!--image-overlay-->
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div><!-- .nk-block -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                <div class="g">
                                    {{ $collection->links() }}
                                </div>
                            </div><!-- .nk-block-between -->
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .nl-block -->
            </div>
        </div>
    </div>
</div>

@endsection