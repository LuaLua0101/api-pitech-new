<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Career;
use DB;
use Illuminate\Http\Request;
use Session;

class CareerController extends Controller
{
    public function index()
    {
        $lang = session('lang') ? session('lang') : 'en';
        $banner = Banner::where('type', 'career')->where('lang', $lang)->first();
        $careers = DB::table('careers')->where('lang', $lang)->orderBy('seq', 'asc')->get();
        return view('client.career', ['banner' => $banner, 'careers' => $careers]);
    }

    /**
     * Get add Career page
     */
    public function getAddCareer()
    {
        return view('admin.career_add');
    }

    /**
     * Post add Career page
     */
    public function postAddCareer(Request $request)
    {

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Career/', $cover);
            $cover .= '?n=' . time();
        }
        $dataInsert = [
            'cover' => $cover,
            'dep' => $request->dep,
            'title' => $request->title,
            'desc' => $request->desc,
            'lang' => $request->lang,
            'seq' => $request->sequent,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $CareerModel = new Career();
        $result = $CareerModel->insertCareer($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListCareer')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListCareer')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit Career page
     */
    public function getEditCareer($id)
    {

        $CareerModel = new Career();
        $Career = $CareerModel->getCareerById($id);
        if ($Career) {
            $this->data['news'] = $Career;
            return view('admin.career_edit', $this->data);
        } else {
            return redirect()->route('adgetListCareer');
        }

    }

    /**
     * Career edit Career page
     */
    public function postEditCareer($id, Request $request)
    {
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Career/', $cover);
            $cover .= '?n=' . time();
        }

        $dataUpdate = [
            'dep' => $request->dep,
            'title' => $request->title,
            'desc' => $request->desc,
            'lang' => $request->lang,
            'seq' => $request->sequent,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $CareerModel = new Career();
        $result = $CareerModel->updateCareer($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditCareer', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditCareer', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list Career page
     */
    public function getListCareer()
    {

        $CareerModel = new Career();
        $Careers = $CareerModel->getListCareer();
        $this->data['newss'] = $Careers;
        return view('admin.career_list', $this->data);
    }

    /**
     * Delete Career
     */
    public function getDelCareer($id)
    {

        $CareerModel = new Career();
        $result = $CareerModel->deleteCareer($id);

        if ($result > 0) {
            return redirect()->route('adgetListCareer')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListCareer')->with('error', 'Xóa thất bại!');
        }
    }

}