<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachMeSeries extends Model
{
    protected $table = "teach-me-series";
    protected $fillable = [
        'created_at',
        'updated_at',
        'view_count',
        'title',
        'short_desc',
        'is_image',
        'chat_count',
        'share_count',
        'content',
    ];

    public function insertTeachMeSeries($data)
    {
        return TeachMeSeries::insert($data);
    }

    public function updateTeachMeSeries($id, $data)
    {
        return TeachMeSeries::where('id', '=', $id)->update($data);
    }

    public function getTeachMeSeriesById($id)
    {
        return TeachMeSeries::where('id', '=', $id)->first();
    }
    public function getTeachMeSeriesBySlug($slug)
    {
        return TeachMeSeries::first();
    }
    public function getListTeachMeSeries()
    {
        return TeachMeSeries::orderBy('created_at', 'desc')->get();
    }
    public function deleteTeachMeSeries($id)
    {
        return TeachMeSeries::where('id', '=', $id)->delete();
    }
    public function getListTeachMeSeriesRelate($slug)
    {
        return TeachMeSeries::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
