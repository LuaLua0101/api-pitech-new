<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IotHub extends Model
{
    protected $table = "iot-hub";

    public function insertIotHub($data)
    {
        return IotHub::insert($data);
    }

    public function updateIotHub($id, $data)
    {
        return IotHub::where('id', '=', $id)->update($data);
    }

    public function getIotHubById($id)
    {
        return IotHub::where('id', '=', $id)->first();
    }
    public function getIotHubBySlug($slug)
    {
        return IotHub::first();
    }
    public function getListIotHub()
    {
        return IotHub::orderBy('created_at', 'desc')->get();
    }
    public function deleteIotHub($id)
    {
        return IotHub::where('id', '=', $id)->delete();
    }
    public function getListIotHubRelate($slug)
    {
        return IotHub::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
