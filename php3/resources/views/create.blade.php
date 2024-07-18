@extends('admin.layout.default')

@section('content')
    <h1>Trang thêm sản phẩm</h1>
    <form action="/handle_create" method="POST">
        <label for="" class="form-lable">Tên:</label>
        <input type="" name="name" class="form-control">

        <label for="" class="form-lable">Danh mục:</label>
        <select name="category_id" id="">
            @foreach ($listCategory as $cate)
                <option value="{{ $cate->id }}">{{ $cate->name_cate }}</option>
            @endforeach
        </select>
        <br>
        <label for="" class="form-lable">Gía:</label>
        <input type="" name="price" class="form-control">

        <label for="" class="form-lable">Lượt xem:</label>
        <input type="" name="view" class="form-control">
        <button class="btn btn-primary">Thêm</button>
        @csrf
    </form>
@endsection
