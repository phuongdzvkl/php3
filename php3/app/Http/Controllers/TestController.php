<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;



class TestController extends Controller
{

    public function index()
    {
        // $this->getAllUser();
        // $this->getUserId();
        // $this->getNameId();
        $this->coutUserInPB();
    }

    public function getAllUser()
    {

        $result = DB::table('users')->get();
        dd($result);
    }
    public function getUserId()
    {

        $result = DB::table('users')->where('id', '4')->get();
        dd($result);
    }

    public function getNameId()
    {

        $result = DB::table('users')->where('id', '16')->select('name')->get();
        dd($result);
    }


    public function getPBId()
    {
        $result = DB::table('phongban')->where('ten_donvi', 'like', '%Ban giám hiệu%')->select('id')->get();
        dd($result);
    }
    public function getUserOldest()
    {
        $maxAge = DB::table('users')->max('tuoi');
        $result = DB::table('users')->where('tuoi', $maxAge)->first();
        dd($result);
    }
    public function getUserYoungest()
    {
        $maxAge = DB::table('users')->min('tuoi');
        $result = DB::table('users')->where('tuoi', $maxAge)->first();
        dd($result);
    }

    //  1. Lấy danh sách toàn bộ user
//     2. Lấy thông tin user có id = 4 
//     3. Lấy thuộc tính 'name' của user có id = 16
//     4. Lấy danh sách id của phòng ban 'Ban giám hiệu'
//     5. Tìm user có độ tuổi lớn nhất trong công ty 
//     6. Tìm user có độ tuổi nhỏ nhất trong công ty
//     7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
//     8. Lấy danh sách tuổi các user 
//     9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
//     10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
//     11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
//     12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
//     13. Thêm một user mới vào công ty
//     14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
//     15. Xóa user nghỉ quá 15 ngày


    // Các hàm thường dùng
//     $query->get();
//     $query->first();
//     $query->find();
//     $query->value('fieldName');
//     $query->pluck('fieldName');
//     $query->max('fieldName');
//     $query->min('fieldName');
//     $query->sum('fieldName');
//     $query->avg('fieldName');
//     $query->count('fieldName');
//     $query->select('fieldName', 'fieldName as shortFieldName');
//     $query->distinct();


    // Truy vấn điều kiện
//     $query->where('fieldName', 'value')  // =, <=, >=, <, >
//     $query->where('fieldName', 'value')->orWhere('fieldName', 'value')
//     $query->where('fieldName', 'like' ,'%value%')
//     $query->whereBetween('fieldName', [1, 100])
//     $query->whereNotBetween('votes', [1, 100])
//     $query->whereIn('fieldName', array)
//     $query->orderBy('fieldName', asc|desc)  // default: asc (tăng dần)
//     $query->offset(number)
//     $query->limit(number)

    // Thêm, Sửa, Xóa
//     $query->insert([
//         'key' => 'value', 
//         'key' => 'value'
//     ]);

    //     $query->where('fieldName', 'value')->update([
//         'key' => 'valueUpdate', 
//         'key' => 'valueUpdate'
//     ]);


    //     $query->where('fieldName', 'value')->delete();


    public function coutUserInPB()
{
    $result = DB::table('users')
        ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
        ->where('phongban.ten_donvi', 'Ban giám hiệu')
        ->count();

    dd($result);
}

}
