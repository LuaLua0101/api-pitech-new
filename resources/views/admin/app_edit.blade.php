@extends('admin.layout')

@section('list_app_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="create-news" class="card updates">
                    <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Chỉnh sửa bài viết</a></h2>
                    </div>
                    <div id="create-box" class="show create-box card-body">
                        <form action="{{route('adpostEditApplications', ['id' => $news->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Version:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="version" required=""
                                        value="{{$news->version}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề chính:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" required=""
                                        value="{{$news->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả chính:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="description">{{$news->desc}}</textarea>
                                </div>
                            </div>
                            <div class="content-post">
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Nội dung chi tiết:</label>
                                    <div class="col-sm-10">
                                        <textarea id="form-content-txt" class="text-content form-control"
                                            name="content">{!! $news->detail !!}</textarea>
                                    </div>
                                    <script>
                                    CKEDITOR.replace( 'form-content-txt', {
                                      language: 'en',
                                      filebrowserUploadUrl: '{!! route('uploadImage', ['_token' => csrf_token() ]) !!}',
                                      filebrowserUploadMethod: 'form'
                                    } );
                                    </script>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề tính năng 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title1" 
                                        value="{{$news->feature1_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả tính năng 1:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="description1">{{$news->feature1_desc}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề tính năng 2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title2" 
                                        value="{{$news->feature2_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả tính năng 2:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="description2">{{$news->feature2_desc}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề tính năng 3:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title3"
                                        value="{{$news->feature3_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả tính năng 3:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="description3">{{$news->feature3_desc}}</textarea>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group bold">
                                <input type="reset" value="RESET" class="btn btn-secondary"> <input type="submit"
                                    value="CẬP NHẬT" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Recent Updates Widget End-->
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="{{asset('public/admin/js/post.js')}}" type="text/javascript" ></script>
@endsection
