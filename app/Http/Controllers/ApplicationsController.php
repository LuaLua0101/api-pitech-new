<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Get add Application page
     */
    public function getAddApplication()
    {

        return view('admin.app_add');
    }

    /**
     * Post add Application page
     */
    public function postAddApplication(Request $request)
    {
        $dataInsert = [
            'version' => $request->version,
            'title' => $request->title,
            'desc' => $request->description,
            'detail' => $request->content,
            'feature1_title' => $request->title1,
            'feature1_desc' => $request->description1,
            'feature2_title' => $request->title2,
            'feature2_desc' => $request->description2,
            'feature3_title' => $request->title3,
            'feature3_desc' => $request->description3,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $ApplicationModel = new Application();
        $result = $ApplicationModel->insertApplication($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListApplications')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListApplications')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit Application page
     */
    public function getEditApplication($id)
    {

        $ApplicationModel = new Application();
        $Application = $ApplicationModel->getApplicationById($id);

        if ($Application) {
            $this->data['news'] = $Application;
            return view('admin.app_edit', $this->data);
        } else {
            return redirect()->route('adgetListApplications');
        }

    }

    /**
     * Application edit Application page
     */
    public function postEditApplication($id, Request $request)
    {
        $dataUpdate = [
            'version' => $request->version,
            'title' => $request->title,
            'desc' => $request->description,
            'detail' => $request->content,
            'feature1_title' => $request->title1,
            'feature1_desc' => $request->description1,
            'feature2_title' => $request->title2,
            'feature2_desc' => $request->description2,
            'feature3_title' => $request->title3,
            'feature3_desc' => $request->description3,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $ApplicationModel = new Application();
        $result = $ApplicationModel->updateApplication($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditApplications', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditApplications', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list Application page
     */
    public function getListApplication()
    {

        $ApplicationModel = new Application();
        $Applications = $ApplicationModel->getListApplication();
        $this->data['newss'] = $Applications;

        return view('admin.app_list', $this->data);
    }

    /**
     * Delete Application
     */
    public function getDelApplication($id)
    {

        $ApplicationModel = new Application();
        $result = $ApplicationModel->deleteApplication($id);

        if ($result > 0) {
            return redirect()->route('adgetListApplications')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListApplications')->with('error', 'Xóa thất bại!');
        }
    }

}
