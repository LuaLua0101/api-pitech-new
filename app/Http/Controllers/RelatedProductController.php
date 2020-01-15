<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\RelatedProduct;
use DB;
use Illuminate\Http\Request;

class RelatedProductController extends Controller
{
    public function index()
    {
        $lang = session('lang') ? session('lang') : 'vi';
        $banner = Banner::where('type', 'related_product')->where('lang', $lang)->first();
        $products = DB::table('related-products')->where('lang', $lang)->get();
        return view('client.related-products', ['banner' => $banner, 'products' => $products]);
    }
    /**
     * Get edit RelatedProduct page
     */
    public function getEditRelatedProduct($id)
    {

        $RelatedProductModel = new RelatedProduct();
        $RelatedProduct = $RelatedProductModel->getRelatedProductById($id);

        if ($RelatedProduct) {
            $this->data['news'] = $RelatedProduct;
            return view('admin.rproduct_edit', $this->data);
        } else {
            return redirect()->route('adgetListRelatedProduct');
        }

    }

    /**
     * RelatedProduct edit RelatedProduct page
     */
    public function postEditRelatedProduct($id, Request $request)
    {
        $dataUpdate = [
            'name' => $request->name,
            'desc' => $request->description,
            'url' => $request->url,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $RelatedProductModel = new RelatedProduct();
        $result = $RelatedProductModel->updateRelatedProduct($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditRelatedProduct', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditRelatedProduct', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list RelatedProduct page
     */
    public function getListRelatedProduct()
    {

        $RelatedProductModel = new RelatedProduct();
        $RelatedProducts = $RelatedProductModel->getListRelatedProduct();
        $this->data['newss'] = $RelatedProducts;

        return view('admin.rproduct_list', $this->data);
    }

    /**
     * Delete RelatedProduct
     */
    public function getDelRelatedProduct($id)
    {

        $RelatedProductModel = new RelatedProduct();
        $result = $RelatedProductModel->deleteRelatedProduct($id);

        if ($result > 0) {
            return redirect()->route('adgetListRelatedProduct')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListRelatedProduct')->with('error', 'Xóa thất bại!');
        }
    }

}