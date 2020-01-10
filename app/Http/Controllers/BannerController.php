<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Get edit Banner page
     */
    public function getEditBanner($id)
    {

        $BannerModel = new Banner();
        $Banner = $BannerModel->getBannerById($id);

        if ($Banner) {
            $this->data['news'] = $Banner;
            return view('admin.banner_edit', $this->data);
        } else {
            return redirect()->route('adgetListBanner');
        }

    }

    /**
     * Banner edit Banner page
     */
    public function postEditBanner($id, Request $request)
    {
        $dataUpdate = [
            'title' => $request->title,
            'content' => $request->content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $BannerModel = new Banner();
        $result = $BannerModel->updateBanner($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditBanner', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditBanner', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list Banner page
     */
    public function getListBanner()
    {

        $BannerModel = new Banner();
        $Banners = $BannerModel->getListBanner();
        $this->data['newss'] = $Banners;

        return view('admin.banner_list', $this->data);
    }

    /**
     * Delete Banner
     */
    public function getDelBanner($id)
    {

        $BannerModel = new Banner();
        $result = $BannerModel->deleteBanner($id);

        if ($result > 0) {
            return redirect()->route('adgetListBanner')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListBanner')->with('error', 'Xóa thất bại!');
        }
    }

}
