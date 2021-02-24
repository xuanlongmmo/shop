@extends('admin.layout.master')
<style>
    a.button{
        margin: 0px 2px;
        display: block;
        text-align: center;
        background-color: #3598dc;
        border: 1px solid black;
        height: auto;
        width: auto;
        padding: 3px 10px;
        color: white;
    }
    a.button2{
        margin: 0px 2px;
        display: block;
        text-align: center;
        background-color: #5cb85c;
        border: 1px solid black;
        height: auto;
        width: auto;
        padding: 3px 10px;
        color: white;
    }
</style>
@section('content')
<div class="page-title">
    <h3>Quản lí danh mục tin tức</h3>
</div>
<a style="width: 200px;margin-bottom: 20px;margin-left: 850px" class="button2" href="{{ route('admin.addcategorynews') }}"><i class="fa fa-plus" aria-hidden="true"></i> Thêm danh mục mới</a>
<div>
    <table>
        <thead>
          <th>ID</th>
          <th style="width: 250px">Tên danh mục</th>
          <th>Slug</th>
          <th style="width: 90px">Người tạo</th>
          <th style="width: 90px">Trạng thái</th>
          <th style="width: 90px"></th>
        </thead>
        <tbody>
          @if (!is_null($category_news))
            @foreach ($category_news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>  
                    <td>{{ $item->slug_name }}</td>
                    <td><span style="color: red">{{ $item->user->username }}</span></td>
                    <td>
                        @if ($item->status==1)
                            <span style="color: green">Hiển thị</span>
                        @else
                            <span style="color: red">Không Hiển thị</span>
                        @endif
                    </td>
                    <td style="display: flex;width: 70px">
                        <a class="button" href="{{ route('admin.editcategorynews', ['id'=>$item->id]) }}">Sửa</a>
                        <a class="button" href="{{ route('admin.deletecategorynews', ['id'=>$item->id]) }}">Xóa</a>
                    </td>
                </tr>
            @endforeach
          @endif
        </tbody>
      </table><br><br>
</div>
@endsection