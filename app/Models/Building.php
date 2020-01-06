<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = "building_the_futures";

    public function insertBuilding($data)
    {
        return Building::insert($data);
    }

    public function updateBuilding($id, $data)
    {
        return Building::where('id', '=', $id)->update($data);
    }

    public function getBuildingById($id)
    {
        return Building::where('id', '=', $id)->first();
    }
    public function getBuildingBySlug($slug)
    {
        return Building::first();
    }
    public function getListBuilding()
    {
        return Building::orderBy('created_at', 'desc')->get();
    }
    public function deleteBuilding($id)
    {
        return Building::where('id', '=', $id)->delete();
    }
    public function getListBuildingRelate($slug)
    {
        return Building::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
