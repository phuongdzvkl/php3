<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;



class ThongtinSVController extends Controller
{

    public function thongtinSV(Request $request)
    {
        $thongtin = [
            "id" => "2",
            "name" => "Phuong",
            "address" => "Hà Nội"
        ];
        return view('thongtinsv')->with(['thongtin' => $thongtin]);
    }
}