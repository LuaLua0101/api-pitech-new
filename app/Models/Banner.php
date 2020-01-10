<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banners";

    public function insertBanner($data)
    {
        return Banner::insert($data);
    }

    public function updateBanner($id, $data)
    {
        return Banner::where('id', '=', $id)->update($data);
    }

    public function getBannerById($id)
    {
        return Banner::where('id', '=', $id)->first();
    }
    public function getBannerBySlug($slug)
    {
        return Banner::first();
    }
    public function getListBanner()
    {
        return Banner::orderBy('created_at', 'desc')->get();
    }
    public function deleteBanner($id)
    {
        return Banner::where('id', '=', $id)->delete();
    }
    public function getListBannerRelate($slug)
    {
        return Banner::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
