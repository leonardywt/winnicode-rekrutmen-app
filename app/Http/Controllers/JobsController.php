<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Inertia\Inertia;


class JobsController extends Controller
{
    public function index()
    {
        $jobs = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
            ->get();
        return Inertia::render('FindJobs/findjobs', ['jobs' => $jobs]);
    }
    public function detail($id)
    {
        $jobs = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
        ->findOrFail($id);
        return Inertia::render('FindJobs/jobdescription', ['jobs' => $jobs]);
    }
    
}
