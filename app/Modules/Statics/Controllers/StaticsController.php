<?php

namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\Loader;
use App\Library\PHPDev\Pagging;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ValidForm;
use App\Modules\Admin\Controllers\BaseAdminController;
use App\Modules\Models\Banner;
use App\Modules\Models\Category;
use App\Modules\Models\Contact;
use App\Modules\Models\Info;
use App\Modules\Models\Statics;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class StaticsController extends BaseStaticsController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        Loader::loadJS('libs/owl.carousel/owl.carousel.min.js', CGlobal::$postEnd);
        Loader::loadCSS('libs/owl.carousel/owl.carousel.min.css', CGlobal::$postHead);



        $messages = Utility::messages('messages');

        return view('Statics::content.index',[
            'messages' => $messages,

        ]);
    }

    public function pageContactPost(){
        if (!empty($_POST)){
            $contact_name = addslashes(Request::get('contact_name', ''));
            $contact_phone = addslashes(Request::get('contact_phone', ''));
            $contact_local = addslashes(Request::get('contact_local', ''));
            $contact_created = time();

            if ($contact_name != '' && $contact_phone != '' && $contact_local != ''){
                $dataInput = array(
                    'contact_name' => $contact_name,
                    'contact_phone' => $contact_phone,
                    'contact_local' => $contact_local,
                    'contact_created' => $contact_created,
                    'contact_status' => 1
                );
                $query = Contact::addData($dataInput);
                if ($query > 0){
                    Utility::messages('messages', 'Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên hệ sớm nhất!');
                    return Redirect::route('SIndex');
                }
            }
        }
        Utility::messages('messages', 'Thông tin liên hệ chưa đúng. Bạn hãy đăng ký lại!');
        return Redirect::route('SIndex');
    }
}
