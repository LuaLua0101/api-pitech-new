<?php

namespace App\Http\Controllers;

use App\Models\PressResource;
use Illuminate\Http\Request;

class PressResourceController extends Controller
{
    public function index()
    {
        $pressResources = PressResource::orderBy('id', 'desc')->take(8)->get();
        return view('client.press-resources', ['press_resources' => $pressResources]);
    }

    public function pressLoadMore($skip)
    {
        $pressResources = PressResource::orderBy('id', 'desc')->skip($skip)->take(8)->get();
        return response()->json($pressResources, 200);
    }

    /**
     * Get add PressResource page
     */
    public function getAddPressResource()
    {

        return view('admin.press_add');
    }

    /**
     * Post add PressResource page
     */
    public function postAddPressResource(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "PressResource " . time();
        }

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/press-resource/', $cover);
            $cover .= '?n=' . time();
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }

        $dataInsert = [
            'title' => $title,
            'cover' => $cover,
            'short_desc' => $description,
            'url' => $request->url,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $PressResourceModel = new PressResource();
        $result = $PressResourceModel->insertPressResource($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListPressResource')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListPressResource')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit PressResource page
     */
    public function getEditPressResource($id)
    {

        $PressResourceModel = new PressResource();
        $PressResource = $PressResourceModel->getPressResourceById($id);

        if ($PressResource) {
            $this->data['news'] = $PressResource;
            return view('admin.press_edit', $this->data);
        } else {
            return redirect()->route('adgetListPressResource');
        }

    }

    /**
     * PressResource edit PressResource page
     */
    public function postEditPressResource($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "PressResource " . time();
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = time() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/press-resource/', $cover);
            $cover .= '?n=' . time();
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }

        $dataUpdate = [
            'title' => $title,
            'short_desc' => $description,
            'url' => $request->url,
            'view_count' => $request->view_count,
            'share_count' => $request->share_count,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $PressResourceModel = new PressResource();
        $result = $PressResourceModel->updatePressResource($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditPressResource', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditPressResource', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list PressResource page
     */
    public function getListPressResource()
    {

        $PressResourceModel = new PressResource();
        $PressResources = $PressResourceModel->getListPressResource();
        $this->data['newss'] = $PressResources;

        return view('admin.press_list', $this->data);
    }

    /**
     * Delete PressResource
     */
    public function getDelPressResource($id)
    {

        $PressResourceModel = new PressResource();
        $result = $PressResourceModel->deletePressResource($id);

        if ($result > 0) {
            return redirect()->route('adgetListPressResource')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListPressResource')->with('error', 'Xóa thất bại!');
        }
    }

}