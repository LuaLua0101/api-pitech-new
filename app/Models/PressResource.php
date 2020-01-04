<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PressResource extends Model
{
    protected $table = "press-resources";

    public function insertPressResource($data)
    {
        return PressResource::insert($data);
    }

    public function updatePressResource($id, $data)
    {
        return PressResource::where('id', '=', $id)->update($data);
    }

    public function getPressResourceById($id)
    {
        return PressResource::where('id', '=', $id)->first();
    }
    public function getPressResourceBySlug($slug)
    {
        return PressResource::first();
    }
    public function getListPressResource()
    {
        return PressResource::orderBy('created_at', 'desc')->get();
    }
    public function deletePressResource($id)
    {
        return PressResource::where('id', '=', $id)->delete();
    }
    public function getListPressResourceRelate($slug)
    {
        return PressResource::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
