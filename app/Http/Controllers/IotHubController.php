<?php

namespace App\Http\Controllers;

use App\Models\IotHub;
use Illuminate\Http\Request;

class IotHubController extends Controller
{
    /**
     * Get add IotHub page
     */
    public function getAddIotHub()
    {

        return view('admin.iothub_add');
    }

    /**
     * Post add IotHub page
     */
    public function postAddIotHub(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "IotHub " . time();
        }

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
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

        $IotHubModel = new IotHub();
        $result = $IotHubModel->insertIotHub($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit IotHub page
     */
    public function getEditIotHub($id)
    {

        $IotHubModel = new IotHub();
        $IotHub = $IotHubModel->getIotHubById($id);

        if ($IotHub) {
            $this->data['news'] = $IotHub;
            return view('admin.iothub_edit', $this->data);
        } else {
            return redirect()->route('adgetListNews');
        }

    }

    /**
     * IotHub edit IotHub page
     */
    public function postEditIotHub($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "IotHub " . time();
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
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

        $IotHubModel = new IotHub();
        $result = $IotHubModel->updateIotHub($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list IotHub page
     */
    public function getListIotHub()
    {

        $IotHubModel = new IotHub();
        $IotHubs = $IotHubModel->getListIotHub();
        $this->data['newss'] = $IotHubs;

        return view('admin.iothub_list', $this->data);
    }

    /**
     * Delete IotHub
     */
    public function getDelIotHub($id)
    {

        $IotHubModel = new IotHub();
        $result = $IotHubModel->deleteIotHub($id);

        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Xóa thất bại!');
        }
    }

}
