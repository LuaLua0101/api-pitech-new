@extends('admin.layout')

@section('list_banner_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="create-news" class="card updates">
                    <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Chỉnh sửa banner</a></h2>
                    </div>
                    <div id="create-box" class="show create-box card-body">
                        <form action="{{route('adpostEditBanner', ['id' => $news->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" required=""
                                        value="{{$news->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề 2</label>
                                <div class="col-sm-10">
                                <textarea id="form-description-txt" class="text-content form-control"
                                        name="content">{{$news->content}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Trang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title"  disabled
                                        value="{{$news->type}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Ngôn ngữ hiển thị</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" disabled
                                        value="{{$news->lang == 'vi' ? 'tiếng Việt' : 'tiếng Anh'}}">
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
