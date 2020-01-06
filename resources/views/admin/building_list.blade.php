@extends('admin.layout')

@section('list_building_active', 'active')

@section('content')
<section class="mt-30px mb-30px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Recent Updates Widget          -->
        <div id="delete-page" class="card">
          <div id="delete-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h2 bold"><a href="javascript:void(0)">Danh sách building the future</a></h2>
          </div>
          <div id="delete-box" class="show delete-box card-body">
            <div class="delete-form">
            <table class="table table-striped">
            <thead>
      <tr>
      <th>Tiêu đề chính</th>
        <th>Tiêu đề phụ</th>
        <th>Ngôn ngữ hiển thị</th>
        <th>Xóa</th>
      </tr>
    </thead>
            <tbody>
    @foreach($newss as $item)
      <tr>
      <td><a href="{{route('adgetEditBuilding', ['id' => $item->id])}}">{{$item->dep}}</a></td>
        <td><a href="{{route('adgetEditBuilding', ['id' => $item->id])}}">{{$item->title}}</a></td>
        <td><a href="{{route('adgetEditBuilding', ['id' => $item->id])}}">{{$item->lang == 'vi' ? "tiếng Việt" : "tiếng Anh"}}</a></td>
        <td><a class="btn delete-btn" href="{{route('adgetDelBuilding', ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn xóa bài viết này?');"><i class="icon icon-close"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
            </div>
          </div>
        </div>
        <!-- Recent Updates Widget End-->
      </div>
    </div>
  </div>
</section>

@endsection

@section('js')

@endsection
