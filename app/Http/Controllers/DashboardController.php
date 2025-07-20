<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard untuk guru
    public function teacherDashboard()
    {
        return view('pages.teacher');  // Ganti dengan view untuk dashboard guru
    }

    // Dashboard untuk siswa
    public function studentDashboard()
    {
        return view('pages.student');  // Ganti dengan view untuk dashboard siswa
    }
}
