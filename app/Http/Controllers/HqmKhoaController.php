<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HqmKhoaController extends Controller
{
    public function hqmGetAllKhoa()
    {
        // truy van doc du lieu tu bang khoa 
        $hqmKhoas = DB::select("Select * from hqmkhoa ");
        // chuyen du lieu len view de hien thi
        return view('hqmKhoa.hqmList',['hqmKhoas' => $hqmKhoas]);
    }
    public function hqmGetKhoa($makh)
    {
        $khoa = DB::select("Select * from hqmkhoa where hqmmakh=?",[$makh][0]);
        return view ('hqmKhoa.hqmDetail',['khoa'=>$khoa]);
    }

    public function hqmEdit($makh)
    {
        $khoa = DB::select("Select * from hqmkhoa where hqmmakh=?",[$makh][0]);
        return view ('hqmKhoa.hqmEdit',['khoa'=>$khoa]);
    }
    public function hqmEditSummit($makh, Request $request)
    {
        $makh = $request->input('hqmmakh');
        $tenkh = $request->input('hqmtenkh');
        DB::update("UPDATE hqmkhoa SET hqmtenkh = ? WHERE hqmmakh = ?",[$tenkh,$makh]);
        return redirect('/khoas');
    }
    public function hqmInsert()
    {
        return view('hqmKhoa.hqmInsert');
    }

    public function hqmInsertSubmit(Request $request)
    {
        // kiem tra du kieu nhap
        $validate = $request->validate([
                'hqmmakh' => 'required|max:2',
                'hqmtenkh' => 'required|max:50'
            ],
            [
                'hqmmakh.required' => 'Vui long nhap ma khoa.',
                'hqmmakh.max' => 'Ma khoa toi da nhap 2 ky tu.',
                'hqmtenkh.required' => 'Vui long nhap ten khoa.',
                'hqmtenkh.max' => 'Ten khoa toi da nhap 50 ky tu.',
            ]
        );
        // lay du lieu tren form
        $makh = $request->input('hqmmakh');
        $tenkh = $request->input('hqmtenkh');
        // ghi du lieu xuong database
        DB::insert("INSERT INTO hqmkhoa(hqmmakh,hqmtenkh) VALUES (?,?) ",[$makh,$tenkh]);
        // chuyen sang trang danh sach
        return redirect('/khoas');
    }
    // #Delete
    public function hqmDelete($makh)
    {
        DB::delete("DELETE FROM hqmkhoa WHERE hqmmakh = ?",[$makh]);
        //chuyen sang danh sach
        return redirect('/khoas');
    }
}
