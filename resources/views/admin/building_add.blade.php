@extends('admin.layout')

@section('add_building_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Recent Updates Widget          -->
        <div id="create-news" class="card updates">
          <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h2 bold"><a href="javascript:void(0)">Tạo bài viết mới</a></h2>
          </div>
          <div id="create-box" class="show create-box card-body">
            <form action="{{route('adpostAddBuilding')}}" method="POST" id="create-new" class="form-create" enctype='multipart/form-data'>
              {{ csrf_field() }}
              <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Ngôn ngữ</label>
                                <div class="col-sm-10">
                                <select class="bootstrap-select" name="lang">
                              <option value="vi">tiếng Việt</option>
                              <option value="en">tiếng Anh</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề chính</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="dep" 
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề phụ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" 
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Mô tả:</label>
                                <div class="col-sm-10">
                                    <textarea id="form-description-txt" class="text-content form-control"
                                        name="desc"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Thứ tự hiển thị</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="form-title" name="sequent" 
                                        value="">
                                </div>
                            </div>


                            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Hình hiển thị:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="form-avatar" name="cover">
                      <label class="custom-file-label" for="form-avatar">Choose file</label>
                    </div>
                  </div>
                   <img id="file-show"class="hidden">
                </div>
              </div>
                            <div class="line"></div>
              <div class="form-group bold">       
                <input type="reset" value="RESET" class="btn btn-secondary"> <input type="submit" value="TẠO MỚI" class="btn btn-primary">
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