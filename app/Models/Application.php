<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";

    public function insertApplication($data)
    {
        return Application::insert($data);
    }

    public function updateApplication($id, $data)
    {
        return Application::where('id', '=', $id)->update($data);
    }

    public function getApplicationById($id)
    {
        return Application::where('id', '=', $id)->first();
    }
    public function getApplicationBySlug($slug)
    {
        return Application::first();
    }
    public function getListApplication()
    {
        return Application::orderBy('created_at', 'desc')->get();
    }
    public function deleteApplication($id)
    {
        return Application::where('id', '=', $id)->delete();
    }
    public function getListApplicationRelate($slug)
    {
        return Application::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
