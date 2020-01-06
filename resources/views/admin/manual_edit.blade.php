@extends('admin.layout')

@section('list_manual_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="create-news" class="card updates">
                    <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Chỉnh sửa manual</a></h2>
                    </div>
                    <div id="create-box" class="show create-box card-body">
                        <form action="{{route('adpostEditManual', ['id' => $news->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Loại manual</label>
                                <div class="col-sm-10">
                                <select class="bootstrap-select" name="type">
                                @foreach($types as $item)
  <option value="{{$item->id}}" {{$news->id === $item->id ? 'selected' : ''}}>{{$item->name}}</option>
  @endforeach
</select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Thứ tự hiển thị</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="form-title" name="sequent" 
                                        value="{{$news->sequent}}">
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
                                            <label class="custom-file-label" for="form-avatar">@if($news->cover != "")
                                                {{substr($news->cover,0,strpos($news->cover,'?'))}} @else Choose file
                                                @endif </label>
                                        </div>
                                    </div>
                                    <img id="file-show" @if($news->cover != "")
                                    src="{{asset('/public/img/Manual/' .$news->cover)}}" @else class="hidden" @endif >
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
