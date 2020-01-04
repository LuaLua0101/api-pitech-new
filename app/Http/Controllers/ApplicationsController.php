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

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Application " . time();
        }

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/application/', $cover);
            $cover .= '?n=' . time();
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataInsert = [
            'title' => $title,
            'cover' => $cover,
            'short_desc' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
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

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Application " . time();
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/application/', $cover);
            $cover .= '?n=' . time();
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataUpdate = [
            'title' => $title,
            'short_desc' => $description,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

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
