<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Models\ManualType;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    /**
     * Get add Manual page
     */
    public function getAddManual()
    {
        $ManualTypeModel = new ManualType();
        $ManualTypes = $ManualTypeModel->getListManualType();
        if ($ManualTypes) {
            $this->data['types'] = $ManualTypes;
            return view('admin.manual_add', $this->data);
        } else {
            return redirect()->route('adgetListManual');
        }
    }

    /**
     * Post add Manual page
     */
    public function postAddManual(Request $request)
    {

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Manual/', $cover);
            $cover .= '?n=' . time();
        }
        $dataInsert = [
            'cover' => $cover,
            'type_id' => $request->type,
            'sequent' => $request->sequent,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $ManualModel = new Manual();
        $result = $ManualModel->insertManual($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListManual')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListManual')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit Manual page
     */
    public function getEditManual($id)
    {

        $ManualModel = new Manual();
        $Manual = $ManualModel->getManualById($id);
        $ManualTypeModel = new ManualType();
        $ManualTypes = $ManualTypeModel->getListManualType();
        if ($Manual) {
            $this->data['news'] = $Manual;
            $this->data['types'] = $ManualTypes;
            return view('admin.manual_edit', $this->data);
        } else {
            return redirect()->route('adgetListManual');
        }

    }

    /**
     * Manual edit Manual page
     */
    public function postEditManual($id, Request $request)
    {
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/Manual/', $cover);
            $cover .= '?n=' . time();
        }

        $dataUpdate = [
            'type_id' => $request->type,
            'sequent' => $request->sequent,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $ManualModel = new Manual();
        $result = $ManualModel->updateManual($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditManual', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditManual', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list Manual page
     */
    public function getListManual()
    {

        $ManualModel = new Manual();
        $Manuals = $ManualModel->getListManual();
        $this->data['newss'] = $Manuals;
        return view('admin.manual_list', $this->data);
    }

    /**
     * Delete Manual
     */
    public function getDelManual($id)
    {

        $ManualModel = new Manual();
        $result = $ManualModel->deleteManual($id);

        if ($result > 0) {
            return redirect()->route('adgetListManual')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListManual')->with('error', 'Xóa thất bại!');
        }
    }

}
