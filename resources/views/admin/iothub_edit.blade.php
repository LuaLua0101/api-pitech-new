@extends('admin.layout')

@section('list_iothub_active', 'active')

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
                        <form action="{{route('adpostEditIotHub', ['id' => $news->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tên bài viết:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" required=""
                                        value="{{$news->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Đường dẫn video:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="video_url" name="video_url"
                                        value="{{$news->video_url}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Hình đại diện:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="form-avatar" name="cover">
                                            <label class="custom-file-label" for="form-avatar">@if($news->cover != "")
                                                {{substr($news->cover,0,strpos($news->cover,'?'))}} @else Choose file
                                                @endif </label>
                                        </div>
                                    </div>
                                    <img id="file-show" @if($news->cover != "")
                                    src="{{asset('/public/img/iothub/' .$news->cover)}}" @else class="hidden" @endif >
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="description">{{$news->short_desc}}</textarea>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="content-post">
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Nội dung:</label>
                                    <div class="col-sm-10">
                                        <textarea id="form-content-txt" class="text-content form-control"
                                            name="content">{!! $news->content !!}</textarea>
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
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Số lượt xem:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="view_count" required=""
                                        value="{{$news->view_count}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Số lượt share:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="share_count" required=""
                                        value="{{$news->share_count}}">
                                </div>
                            </div>
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
