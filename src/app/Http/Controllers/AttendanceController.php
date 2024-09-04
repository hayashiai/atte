<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users2; 

class AttendanceController extends Controller
{
    public function index()
    {
        $users = Users2::paginate(5); // 1ページあたり5人表示
        return view('attendances', compact('users')); // attendancesビューにデータを渡す
    }
}