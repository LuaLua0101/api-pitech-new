<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $table = "manuals";
        
    public function insertManual($data)
    {
        return Manual::insert($data);
    }

    public function updateManual($id, $data)
    {
        return Manual::where('id', '=', $id)->update($data);
    }

    public function getManualById($id)
    {
        return Manual::where('id', '=', $id)->first();
    }
    public function getManualBySlug($slug)
    {
        return Manual::first();
    }
    public function getListManual()
    {
        return Manual::leftjoin('manual_type', 'manual_type.id', '=', 'manuals.type_id')->select('manuals.id', 'manual_type.name', 'manuals.cover')->get();
    }
    public function deleteManual($id)
    {
        return Manual::where('id', '=', $id)->delete();
    }
    public function getListManualRelate($slug)
    {
        return Manual::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
