<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Get add Building page
     */
    public function getAddBuilding()
    {
            return view('admin.building_add');
       
    }

    /**
     * Post add Building page
     */
    public function postAddBuilding(Request $request)
    {

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Building/', $cover);
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

        $BuildingModel = new Building();
        $result = $BuildingModel->insertBuilding($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListBuilding')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListBuilding')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit Building page
     */
    public function getEditBuilding($id)
    {

        $BuildingModel = new Building();
        $Building = $BuildingModel->getBuildingById($id);
        if ($Building) {
            $this->data['news'] = $Building;
            return view('admin.building_edit', $this->data);
        } else {
            return redirect()->route('adgetListBuilding');
        }

    }

    /**
     * Building edit Building page
     */
    public function postEditBuilding($id, Request $request)
    {
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Building/', $cover);
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

        $BuildingModel = new Building();
        $result = $BuildingModel->updateBuilding($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditBuilding', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditBuilding', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list Building page
     */
    public function getListBuilding()
    {

        $BuildingModel = new Building();
        $Buildings = $BuildingModel->getListBuilding();
        $this->data['newss'] = $Buildings;
        return view('admin.building_list', $this->data);
    }

    /**
     * Delete Building
     */
    public function getDelBuilding($id)
    {

        $BuildingModel = new Building();
        $result = $BuildingModel->deleteBuilding($id);

        if ($result > 0) {
            return redirect()->route('adgetListBuilding')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListBuilding')->with('error', 'Xóa thất bại!');
        }
    }

}
