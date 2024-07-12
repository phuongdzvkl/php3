@include('header')
<h1>Danh sách sản phẩm</h1>
<form action="/list" method="get">
    <input name="keyword" type="text" class="form-control" placeholder="từ khóa...">
    <button class="btn btn-primary">Tìm kiếm</button>
</form>

<table>
    <thead>
        <tr class="table table-striped">
            <td>Tên</td>
            <td>Gía</td>
            <td>Danh mục</td>
            <td>Lượt xem</td>
            <td>Ngày tạo</td>
            <td>Ngày cập nhật</td>
            <td colspan="2">Hành động</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($listProduct as $pr)
            <tr>
                <td>{{$pr->name}}</td>
                <td>{{$pr->price}}</td>
                <td>{{$pr->name_cate}}</td>
                <td>{{$pr->view}}</td>
                <td>{{$pr->create_at}}</td>
                <td>{{$pr->update_at}}</td>
                <td>
                    <a href="/update/{{$pr->id}}" class="btn btn-warning">Sửa</a>
                    <a onclick="return confirm('ban co muon xoa khong')" href="/delete/{{$pr->id}}" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/create" class="btn btn-primary">Thêm sản phẩm</a>
@include('footer')