<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManualType extends Model
{
    protected $table = "manual_type";
    
    public function insertManualType($data)
    {
        return ManualType::insert($data);
    }

    public function updateManualType($id, $data)
    {
        return ManualType::where('id', '=', $id)->update($data);
    }

    public function getManualTypeById($id)
    {
        return ManualType::where('id', '=', $id)->first();
    }
    public function getManualTypeBySlug($slug)
    {
        return ManualType::first();
    }
    public function getListManualType()
    {
        return ManualType::orderBy('created_at', 'desc')->get();
    }
    public function deleteManualType($id)
    {
        return ManualType::where('id', '=', $id)->delete();
    }
    public function getListManualTypeRelate($slug)
    {
        return ManualType::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
