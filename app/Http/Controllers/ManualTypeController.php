<?php

namespace App\Http\Controllers;

use App\Models\ManualType;
use Illuminate\Http\Request;

class ManualTypeController extends Controller
{
    /**
     * Get add ManualType page
     */
    public function getAddManualType()
    {

        return view('admin.manual_type_add');
    }

    /**
     * Post add ManualType page
     */
    public function postAddManualType(Request $request)
    {
        $dataInsert = [
            'name' => $request->name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $ManualTypeModel = new ManualType();
        $result = $ManualTypeModel->insertManualType($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListManualType')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListManualType')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit ManualType page
     */
    public function getEditManualType($id)
    {

        $ManualTypeModel = new ManualType();
        $ManualType = $ManualTypeModel->getManualTypeById($id);

        if ($ManualType) {
            $this->data['news'] = $ManualType;
            return view('admin.manual_type_edit', $this->data);
        } else {
            return redirect()->route('adgetListManualType');
        }

    }

    /**
     * ManualType edit ManualType page
     */
    public function postEditManualType($id, Request $request)
    {
        $dataUpdate = [
            'name' => $request->name,
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $ManualTypeModel = new ManualType();
        $result = $ManualTypeModel->updateManualType($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditManualType', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditManualType', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list ManualType page
     */
    public function getListManualType()
    {

        $ManualTypeModel = new ManualType();
        $ManualTypes = $ManualTypeModel->getListManualType();
        $this->data['newss'] = $ManualTypes;

        return view('admin.manual_type_list', $this->data);
    }

    /**
     * Delete ManualType
     */
    public function getDelManualType($id)
    {

        $ManualTypeModel = new ManualType();
        $result = $ManualTypeModel->deleteManualType($id);

        if ($result > 0) {
            return redirect()->route('adgetListManualType')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListManualType')->with('error', 'Xóa thất bại!');
        }
    }

}
