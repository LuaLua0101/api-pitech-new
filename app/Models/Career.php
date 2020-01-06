<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = "careers";

    public function insertCareer($data)
    {
        return Career::insert($data);
    }

    public function updateCareer($id, $data)
    {
        return Career::where('id', '=', $id)->update($data);
    }

    public function getCareerById($id)
    {
        return Career::where('id', '=', $id)->first();
    }
    public function getCareerBySlug($slug)
    {
        return Career::first();
    }
    public function getListCareer()
    {
        return Career::orderBy('created_at', 'desc')->get();
    }
    public function deleteCareer($id)
    {
        return Career::where('id', '=', $id)->delete();
    }
    public function getListCareerRelate($slug)
    {
        return Career::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
