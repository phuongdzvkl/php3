@include('header')


<h1>Trang sửa sản phẩm</h1>
<form action="/handle_update" method="POST">
    <label for="" class="form-lable">Tên:</label>
    <input type="" name="name" value="{{$product->name}}" class="form-control">

    <label for="" class="form-lable">Danh mục:</label>
    <select name="category_id" id="">
        @foreach ($listCategory as $cate)
            <option {{$cate->id == $product->category_id ? 'selected' : ''}} value="{{ $cate->id }}">{{ $cate->name_cate }}</option>
        @endforeach
    </select>
    <br>
    <label for="" class="form-lable">Gía:</label>
    <input type="" value="{{$product->price}}" name="price" class="form-control">

    <label for="" class="form-lable">Lượt xem:</label>
    <input type="" value="{{$product->view}}"  name="view" class="form-control">
    <button class="btn btn-primary">Sửa</button>
    <input type="hidden" name="id" value="{{$product->id}}">
    @csrf
</form>
