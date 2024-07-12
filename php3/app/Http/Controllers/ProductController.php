<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;



class ProductController extends Controller
{

    public function listProduct(Request $request)
    {
        $dataForm = $request->all();
        
    
        $products = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.*', 'category.name_cate')
            ->where('product.name', 'like', isset($dataForm['keyword']) ? '%'.$dataForm['keyword'].'%' : '%')
            ->get();
        $data = [
            'listProduct' => $products
        ];

        return view('list', $data);


    }
    public function createProduct()
    {
        $category = DB::table('category')->get();

        $data = [
            'listCategory' => $category
        ];
        return view('create', $data);
    }
    public function handleCreateProduct(Request $request)
    {
        $dataForm = $request->all();
        var_dump($dataForm);
        DB::table('product')->insert([
            'name' => $dataForm['name'],
            'price' => $dataForm['price'],
            'view' => $dataForm['view'],
            'category_id' => $dataForm['category_id']
        ]);

        return redirect('/list');

    }

    public function updateProduct($idPr)
    {
        $category = DB::table('category')->get();

        $product = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.*', 'category.name_cate')
            ->where('product.id', '=', $idPr)
            ->get();

        $data = [
            'listCategory' => $category,
            'product' => $product[0]
        ];
        return view('update', $data);
    }

    public function handleUpdateProduct(Request $request)
    {
        $dataForm = $request->all();

        DB::table('product')
            ->where('id', '=', $dataForm['id'])
            ->update([
                'name' => $dataForm['name'],
                'price' => $dataForm['price'],
                'view' => $dataForm['view'],
                'category_id' => $dataForm['category_id']
            ]);
        return redirect('/list');
    }
    public function handle_delete($idPr)
    {
        DB::table('product')->where('id', '=', $idPr)->delete();
        return redirect('/list');
    }
}
