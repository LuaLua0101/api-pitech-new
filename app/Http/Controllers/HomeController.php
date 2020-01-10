<?php
namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationPinned;
use App\Models\Banner;
use App\Models\IotHub;
use App\Models\Manual;
use App\Models\ManualType;
use App\Models\PressResource;
use App\Models\TeachmeComment;
use App\Models\TeachMeSeries;
use DB;
use Illuminate\Http\Request;
use Mail;
use Response;

class HomeController extends Controller
{
    public function index()
    {}

    public function getHome()
    {
        $banner = Banner::where('type', 1)->first();
        $teachme = TeachMeSeries::orderBy('id', 'desc')->take(6)->get();
        $teachmepinned = DB::table('teach-me-series')->leftjoin('teach-me-series-pinned', 'teach-me-series.id', '=', 'teach-me-series-pinned.pinned_id')->first();
        $iothub = IotHub::orderBy('id', 'desc')->take(3)->get();
        $iotpinned = DB::table('iot-hub')->leftjoin('iot-hub-pinned', 'iot-hub.id', '=', 'iot-hub-pinned.pinned_id')->first();
        $app_pinned = ApplicationPinned::latest()->first();
        return response()->json(['teachmepinned' => $teachmepinned, 'teachme' => $teachme, 'banner' => $banner, 'iothub' => $iothub, 'iotpinned' => $iotpinned, 'app_pinned' => $app_pinned], 200, [
            'Access-Control-Allow-Origin' => 'http://localhost:3000',
        ]);
    }

    public function getTeachMeSeries(Request $request)
    {
        $banner = Banner::where('type', 2)->first();
        $page = $request->page ? $request->page : 0;
        $teachme = TeachMeSeries::orderBy('id', 'desc')->skip($page)->take(6)->get();
        $teachmepinned = DB::table('teach-me-series')->leftjoin('teach-me-series-pinned', 'teach-me-series.id', '=', 'teach-me-series-pinned.pinned_id')->first();
        return response()->json(['teachmepinned' => $teachmepinned, 'teachme' => $teachme, 'banner' => $banner], 200);
    }

    public function getIotHub(Request $request)
    {
        $page = $request->page ? $request->page : 0;
        $iothub = IotHub::orderBy('id', 'desc')->skip($page)->take(6)->get();
        $iothubpinned = DB::table('iot-hub')->leftjoin('iot-hub-pinned', 'iot-hub.id', '=', 'iot-hub-pinned.pinned_id')->first();
        return response()->json(['iothubpinned' => $iothubpinned, 'iothub' => $iothub], 200);
    }

    public function getPressResource(Request $request)
    {
        $page = $request->page ? $request->page : 0;
        $pressResources = PressResource::orderBy('id', 'desc')->skip($page)->take(8)->get();
        return response()->json(['press_resources' => $pressResources], 200);
    }

    public function getApplication()
    {
        $app = Application::latest()->first();
        $related_3_apps = Application::orderBy('id', 'desc')->take(4)->get();
        $app_pinned = ApplicationPinned::latest()->first();
        return response()->json(['application' => $app, 'app_pinned' => $app_pinned, 'related' => $related_3_apps], 200);
    }

    public function getCareers($lang = 'vi')
    {
        $banner = Banner::where('type', 2)->first();
        $careers = DB::table('careers')->where('lang', $lang)->orderBy('seq', 'asc')->get();
        return response()->json(['banner' => $banner, 'careers' => $careers], 200);
    }

    public function getBuildings($lang = 'vi')
    {
        $banner = Banner::where('type', 2)->first();
        $buildings = DB::table('building_the_futures')->where('lang', $lang)->orderBy('seq', 'asc')->get();
        return response()->json(['banner' => $banner, 'buildings' => $buildings], 200);
    }

    public function getRelatedProducts($lang = 'vi')
    {
        $banner = Banner::where('type', 2)->first();
        $products = DB::table('related-products')->where('lang', $lang)->get();
        return response()->json(['banner' => $banner, 'products' => $products], 200);
    }

    public function getManuals()
    {
        $banner = Banner::where('type', 2)->first();
        $manuals = ManualType::orderBy('id', 'asc')->get();
        foreach ($manuals as $item) {
            $list = Manual::where('type_id', $item->id)->orderBy('id', 'asc')->get();
            $item->list = $list;
        }
        return response()->json(['banner' => $banner, 'manuals' => $manuals], 200);
    }

    public function getTeachMeSerieDetail(Request $request)
    {
        $detail = TeachMeSeries::where('id', $request->id)->first();
        return response()->json($detail, 200);
    }

    public function getPressResourceDetail(Request $request)
    {
        $detail = PressResource::where('id', $request->id)->first();
        return response()->json($detail, 200);
    }

    public function getIotHubDetail(Request $request)
    {
        $detail = IotHub::where('id', $request->id)->first();
        return response()->json($detail, 200);
    }

    public function addTeachmeComment(Request $request)
    {
        $data = new TeachmeComment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->content = $request->content;
        $data->parent_id = $request->parent_id;
        $data->save();

        $to_name = $request->name;
        $to_email = $request->email;
        $data = array('name' => $request->name, 'content' => $request->content, 'email' => $request->email);
        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Pitech');
            $message->from('ihtgodev@gmail.com', 'Test Mail');
        });

        return response()->json($data, 200);
    }
}