<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use UniqueCode;
use SMS;


/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()

    {
        $OTPcode = UniqueCode::OTP(4,'1234567890');
        $MioSMS = 'IL TUO CODICE PER ACCETTAZIONE PRESENZA: ' .$OTPcode;

        /*SMS::send($MioSMS, [], function($sms) {
            $sms->to('+393476938717');
        });*/





        $module = DB::table('dashboard_elements')->orderBy('row')->orderBy('col')->get();

        return view('la.dashboard',['elementi_dsb'=>$module,'OTPcode'=>$OTPcode]);
    }


}