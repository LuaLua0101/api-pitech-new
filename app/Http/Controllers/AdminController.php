<?php

namespace App\Http\Controllers;

use App;
use App\Config;
use App\Models\Banner;
use App\Models\IotHub;
use App\Models\TeachMeSeries;
use App\Models\TeachMeSeriesPinned;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $lang = session('lang') ? session('lang') : 'en';
        $banner1 = Banner::where('type', 'home')->where('lang', $lang)->first();
        $banner2 = Banner::where('type', 'new_update')->where('lang', $lang)->first();
        $teachme = TeachMeSeries::orderBy('id', 'desc')->take(6)->get();
        $teachmepinned = DB::table('teach-me-series')
            ->leftjoin('teach-me-series-pinned', 'teach-me-series.id', '=', 'teach-me-series-pinned.pinned_id')
            ->first();
        $iothub = IotHub::orderBy('id', 'desc')->take(3)->get();
        $iotpinned = DB::table('iot-hub')->leftjoin('iot-hub-pinned', 'iot-hub.id', '=', 'iot-hub-pinned.pinned_id')->first();

        return view('client.index',
            ['teachmepinned' => $teachmepinned,
                'teachme' => $teachme,
                'banner_home' => $banner1,
                'banner_app' => $banner2,
                'iothub' => $iothub,
                'iotpinned' => $iotpinned]);
    }

    public function teachMeIndex()
    {
        $lang = session('lang') ? session('lang') : 'en';
        $banner = Banner::where('type', 'teach_me')->where('lang', $lang)->first();
        $teachme = TeachMeSeries::orderBy('id', 'desc')->take(6)->get();
        $teachmepinned = DB::table('teach-me-series')
            ->leftjoin('teach-me-series-pinned', 'teach-me-series.id', '=', 'teach-me-series-pinned.pinned_id')->first();
        return view('client.teach-me-series', ['teachmepinned' => $teachmepinned, 'teachme' => $teachme, 'banner' => $banner]);
    }

    public function teachMeLoadMore($skip)
    {
        $teachme = TeachMeSeries::orderBy('id', 'desc')->skip($skip)->take(6)->get();
        return response()->json($teachme, 200);
    }

    public function teachMeDetail($id)
    {
        $detail = TeachMeSeries::where('id', $id)->first();
        $detail->view_count = $detail->view_count + 1;
        $detail->save();
        return view('client.teach-me-detail', ['data' => $detail]);
    }

    /**
     * Get login page
     */
    public function getLogin()
    {
        if (Auth::check()) {
            if (Auth::user()->admin == 1) {
                return redirect()->route('adgetHome');
            } else {
                return redirect()->route('getHome');
            }
        } else {
            return view('admin.login', $this->data);
        }
    }

    /**
     * Product login page
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed...
            if (Auth::user()->admin == 1) {
                return redirect()->route('adgetHome');
            } else {
                return redirect()->route('getHome');
            }
        } else {
            return redirect()->route('adgetLogin')->with('error', 'Mật khẩu hoặc tài khoản không đúng');
        }
    }

    /**
     * Add user
     */
    public function postAddUser(Request $request)
    {

        $name = $request->input('name');
        if (!$name) {
            $name = "Người dùng " . time();
        }
        $email = $request->input('email');
        if (!$email) {
            return redirect()->route('adgetHome')->with('error', 'Chưa nhập Email');
        }
        $password = $request->input('password');
        if (!$password) {
            return redirect()->route('adgetHome')->with('error', 'Chưa nhập Password');
        }
        if (strlen($password) < 6) {
            return redirect()->route('adgetHome')->with('error', 'Password ít nhất 6 kí tự');
        }
        $phone_number = $request->input('phone_number');
        if (!$phone_number) {
            $phone_number = "";
        }

        $userModal = new User();
        $userCheck = $userModal->getUserByEmail($email);

        if ($userCheck) {
            return redirect()->route('adgetHome')->with('error', 'Email đã tồn tại');
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'phone_number' => $phone_number,
            'level' => 1,
            'admin' => 1,
        ]);

        return redirect()->route('adgetListUser')->with('success', 'Thêm người dùng thành công');
    }

    /**
     * Get list user
     */
    public function getListUser()
    {

        $userModel = new User();
        $users = $userModel->getListUser();
        $this->data['users'] = $users;

        return view('admin.user_list', $this->data);
    }

    /**
     * Delete user
     */
    public function getDelUser($id)
    {

        $userModel = new User();
        $result = $userModel->deleteUser($id);

        if ($result > 0) {
            return redirect()->route('adgetListUser')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListUser')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * update password
     */
    public function postUpdatePassword(Request $request)
    {

        $id = $request->input('id');
        $pw = $request->input('pw');
        if (strlen($pw) < 6) {
            return 0;
        }

        $userModel = new User();
        $result = $userModel->updateUser($id, ['password' => bcrypt($pw)]);

        return $result;
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/public/images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Get home page
     */
    public function getHome()
    {

        return view('admin.home', $this->data);
    }

    /**
     * Update config by ajax
     */
    public function updateConfig(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        if ($title && $description) {
            $configModel = new Config();

            $result = $configModel->updateConfig(['title' => $title, 'description' => $description]);
            return $result;
        }
        return 0;
    }

    /**
     * Get add TeachMeSeries page
     */
    public function getAddTeachMeSeries()
    {

        return view('admin.teachme_add', $this->data);
    }

    /**
     * Post add TeachMeSeries page
     */
    public function postAddTeachMeSeries(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "TeachMeSeries " . time();
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
            'video_url' => $request->video_url,
            'cover' => $cover,
            'short_desc' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $TeachMeSeriesModel = new TeachMeSeries();
        $result = $TeachMeSeriesModel->insertTeachMeSeries($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit TeachMeSeries page
     */
    public function getEditTeachMeSeries($id)
    {
        $TeachMeSeriesModel = new TeachMeSeries();
        $TeachMeSeries = $TeachMeSeriesModel->getTeachMeSeriesById($id);

        if ($TeachMeSeries) {
            $this->data['news'] = $TeachMeSeries;

            return view('admin.teachme_edit', $this->data);
        } else {
            return redirect()->route('adgetListNews');
        }

    }

    /**
     * TeachMeSeries edit TeachMeSeries page
     */
    public function postEditTeachMeSeries($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "TeachMeSeries " . time();
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

        $TeachMeSeriesModel = new TeachMeSeries();
        $result = $TeachMeSeriesModel->updateTeachMeSeries($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list TeachMeSeries page
     */
    public function getListTeachMeSeries()
    {
        $TeachMeSeriesModel = new TeachMeSeries();
        $TeachMeSeriess = $TeachMeSeriesModel->getListTeachMeSeries();
        $this->data['newss'] = $TeachMeSeriess;
        $this->data['news_pinned'] = TeachMeSeriesPinned::first();
        return view('admin.teachme_list', $this->data);
    }

    /**
     * Delete TeachMeSeries
     */
    public function getDelTeachMeSeries($id)
    {
        $TeachMeSeriesModel = new TeachMeSeries();
        $result = $TeachMeSeriesModel->deleteTeachMeSeries($id);

        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Pin TeachMeSeries
     */
    public function getPinTeachMeSeries($id)
    {

        TeachMeSeriesPinned::truncate();
        $p = new TeachMeSeriesPinned;
        $p->pinned_id = $id;
        $p->save();
        if ($p) {
            return redirect()->route('adgetListNews')->with('success', 'Ghim thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Ghim thất bại!');
        }
    }

    public function change2En()
    {
        session(['lang' => 'en']);
        // App::setLocale(session('lang'));
        return redirect()->back();
    }

    public function change2Vi()
    {
        session(['lang' => 'vi']);
        // App::setLocale(session('lang'));
        return redirect()->back();
    }
}