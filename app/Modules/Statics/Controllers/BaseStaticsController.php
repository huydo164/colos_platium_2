<?php

namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\Loader;
use App\Library\PHPDev\SEOMeta;
use App\Modules\Models\Banner;
use App\Modules\Models\Category;
use App\Modules\Models\Info;
use App\Modules\Models\Statics;
use App\Modules\Models\User;
use Illuminate\Support\Facades\View;

class BaseStaticsController extends Controller
{
    public function __construct()
    {

        $arrOnline = Info::getItemByKeyword('SITE_ONLINE');
        if (isset($arrOnline->info_status) && $arrOnline->info_status == CGlobal::status_show) {
            $this->middleware(function ($request, $next) {
                $users = User::userLogin();
                if (sizeof($users) == 0) {
                    header('Content-Type: text/html; charset=utf-8');
                    echo '<div style="text-align: center"><img src="' . FuncLib::getBaseUrl() . 'assets/frontend/img/maintain.png"></div>';
                    echo '<div style="text-align: center; margin-top:10px">' . CGlobal::txtMaintain . '</div>';
                    die;
                }
                return $next($request);
            });
        }

        Loader::loadJS('frontend/js/site.js', CGlobal::$postEnd);
        Loader::loadJS('libs/jAlert/jquery.alerts.js', CGlobal::$postEnd);
        Loader::loadCSS('libs/jAlert/jquery.alerts.css', CGlobal::$postHead);
        Loader::loadCSS('libs/fontAwesome/css/font-awesome.min.css', CGlobal::$postHead);

        $searchBannerHead['banner_status'] = CGlobal::status_show;
        $searchBannerHead['banner_type'] = 0;
        $searchBannerHead['field_get'] = 'banner_id,banner_title,banner_title_show,banner_image,banner_link,banner_is_target,banner_is_rel,banner_is_run_time,banner_start_time,banner_end_time';
        $dataBannerHead = Banner::getBannerSite($searchBannerHead, $limit = 1, 'head');
        $dataBannerHead = FuncLib::checkBannerShow($dataBannerHead);
        View::share('dataBannerHead', $dataBannerHead);

        $searchBannerCont1['banner_status'] = CGlobal::status_show;
        $searchBannerCont1['banner_type'] = 0;
        $searchBannerCont1['field_get'] = 'banner_id,banner_title,banner_title_show,banner_image,banner_link,banner_is_target,banner_is_rel,banner_is_run_time,banner_start_time,banner_end_time';
        $dataBannerCont1 = Banner::getBannerSite($searchBannerCont1, $limit , 'cont1');
        $dataBannerCont1 = FuncLib::checkBannerShow($dataBannerCont1);
        View::share('dataBannerCont1', $dataBannerCont1);

        $searchBannerCont2['banner_status'] = CGlobal::status_show;
        $searchBannerCont2['banner_type'] = 1;
        $searchBannerCont1['field_get'] = 'banner_id,banner_title,banner_title_show,banner_image,banner_link,banner_is_target,banner_is_rel,banner_is_run_time,banner_start_time,banner_end_time';
        $dataBannerCont2 = Banner::getBannerSite($searchBannerCont2, $limit = 1, 'cont2');
        $dataBannerCont2 = FuncLib::checkBannerShow($dataBannerCont2);
        View::share('dataBannerCont2', $dataBannerCont2);

        $dataField['field_get'] = '';
        $arrCategory = Category::getAllCategory(0, array(), 0);
        View::share('arrCategory', $arrCategory);


        $textHotline = strip_tags(self::viewShareVal('Hotline'));
        View::share('textHotline', $textHotline);

        $textaddress = self::viewShareVal('SITE_FOOTER_LEFT');
        View::share('textaddress', $textaddress);

        $textLink = self::viewShareVal('SITE_FOOTER_LINK');
        View::share('textLink', $textLink);

        $textRight = self::viewShareVal('SITE_FOOTER_RIGHT');
        View::share('textRight', $textRight);
    }

    public function page403()
    {
        $meta_img = '';
        $meta_title = $meta_keywords = $meta_description = $txt403 = CGlobal::txt403;
        SEOMeta::init($meta_img, $meta_title, $meta_keywords, $meta_description);
        return view('Statics::errors.page-403', ['txt403' => $txt403]);
    }

    public function page404()
    {
        $meta_img = '';
        $meta_title = $meta_keywords = $meta_description = $txt404 = CGlobal::txt404;
        SEOMeta::init($meta_img, $meta_title, $meta_keywords, $meta_description);
        return view('Statics::errors.page-404', ['txt404' => $txt404]);
    }

    public static function viewShareVal($key = '')
    {
        $str = '';
        if ($key != '') {
            $arrStr = Info::getItemByKeyword($key);
            if (isset($arrStr->info_id)) {
                $str = stripslashes($arrStr->info_content);
            }
        }
        return $str;
    }

}
