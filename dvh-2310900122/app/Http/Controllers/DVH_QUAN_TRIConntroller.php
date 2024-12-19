<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DVH_QUAN_TRIConntroller extends Controller
{
    //

    // get: login (authentication)
    public function dvhLogin(){
        return view('Dvhlogin.dvh-login');
    }

    // post: login (authentication)
    public function dvhLoginSubmit(Request $request){
        return view('DvhLogin.dvh-login');
    }

    //
    public function index(){
        $dvhquantri = DB::select('select * from DVH_QUAN_TRI');
        return view('DvhQuanTri.index',['DVH_QUAN_TRI'=>$dvhquantri]);
    }
}
