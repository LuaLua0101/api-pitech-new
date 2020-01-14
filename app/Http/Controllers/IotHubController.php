<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\IotHub;
use App\Models\IotHubComment;
use App\Models\IotHubPinned;
use DB;
use Illuminate\Http\Request;
use Mail;

class IotHubController extends Controller
{
    public function index()
    {
        $lang = session('lang') ? session('lang') : 'en';
        $banner = Banner::where('type', 'iothub')->where('lang', $lang)->first();
        $iothub = IotHub::orderBy('id', 'desc')->take(6)->get();
        $iothubpinned = DB::table('iot-hub')->leftjoin('iot-hub-pinned', 'iot-hub.id', '=', 'iot-hub-pinned.pinned_id')->first();
        return view('client.iot-hub', ['iothubpinned' => $iothubpinned, 'iothub' => $iothub, 'banner' => $banner]);
    }

    public function iotHubDetail($id)
    {
        $detail = IotHub::where('id', $id)->first();
        $detail->view_count = $detail->view_count + 1;
        $detail->save();
        return view('client.iot-hub-detail', ['data' => $detail]);
    }

    public function iotHubLoadMore($skip)
    {
        $iothub = IotHub::orderBy('id', 'desc')->skip($skip)->take(6)->get();
        return response()->json($iothub, 200);
    }

    public function addIotComment(Request $request)
    {
        $data = new IotHubComment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->content = $request->content;
        $data->parent_id = intval($request->id);
        $data->save();

        $detail = IotHub::find($data->parent_id);
        if ($detail) {
            $detail->chat_count = $detail->chat_count + 1;
            $detail->save();
        }
        $to_name = $request->name;
        $to_email = $request->email;
        $data = array('name' => $request->name, 'content' => $request->content, 'email' => $request->email);
        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to('lua.solution@gmail.com', $to_name)
                ->subject('Pitech');
            $message->from($to_email, 'Test Mail Teach me series');
        });

        return response()->json($data, 200);
    }

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
            $request->cover->storeAs('img/iothub/', $cover);
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
            'video_url' => $request->video_url,
            'cover' => $cover,
            'short_desc' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $IotHubModel = new IotHub();
        $result = $IotHubModel->insertIotHub($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListIotHub')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListIotHub')->with('error', 'Thêm thất bại!');
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
            return redirect()->route('adgetListIotHub');
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
            $request->cover->storeAs('img/iothub/', $cover);
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
            'video_url' => $request->video_url,
            'short_desc' => $description,
            'content' => $content,
            'view_count' => $request->view_count,
            'share_count' => $request->share_count,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $IotHubModel = new IotHub();
        $result = $IotHubModel->updateIotHub($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditIotHub', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditIotHub', ['id' => $id])->with('error', 'Cập nhật thất bại!');
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
        $this->data['news_pinned'] = IotHubPinned::first();
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
            return redirect()->route('adgetListIotHub')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListIotHub')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Pin Iot Hub
     */
    public function getPinIotHub($id)
    {

        IotHubPinned::truncate();
        $p = new IotHubPinned;
        $p->pinned_id = $id;
        $p->save();
        if ($p) {
            return redirect()->route('adgetListIotHub')->with('success', 'Ghim thành công!');
        } else {
            return redirect()->route('adgetListIotHub')->with('error', 'Ghim thất bại!');
        }
    }

}