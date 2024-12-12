<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HqmMonHocController extends Controller
{
    // #1List mon hoc
    public function hqmList()
    {
        $hqmMonHocs = DB::table('hqmmonhoc')->get();
        return view('hqmMonHoc.hqmList',['hqmMonHocs'=>$hqmMonHocs]);
    }
}
