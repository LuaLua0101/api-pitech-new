<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    protected $table = "related-products";

    public function insertRelatedProduct($data)
    {
        return RelatedProduct::insert($data);
    }

    public function updateRelatedProduct($id, $data)
    {
        return RelatedProduct::where('id', '=', $id)->update($data);
    }

    public function getRelatedProductById($id)
    {
        return RelatedProduct::where('id', '=', $id)->first();
    }
    public function getRelatedProductBySlug($slug)
    {
        return RelatedProduct::first();
    }
    public function getListRelatedProduct()
    {
        return RelatedProduct::orderBy('created_at', 'desc')->get();
    }
    public function deleteRelatedProduct($id)
    {
        return RelatedProduct::where('id', '=', $id)->delete();
    }
    public function getListRelatedProductRelate($slug)
    {
        return RelatedProduct::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
