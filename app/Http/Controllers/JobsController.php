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

        $jobTypeCounts = $jobs->flatMap(function ($job) {
            return $job->tipePekerjaan->pluck('tipe');
        })->countBy()
            ->toArray();
        $jobCategoriesCounts = $jobs->flatMap(function ($job) {
            return $job->kategoriPekerjaan->pluck('kategori');
        })->countBy()
            ->toArray();

        return Inertia::render('FindJobs/findjobs', [
            'jobs' => $jobs,
            'jobTypeCounts' => $jobTypeCounts,
            'jobCategoriesCounts' => $jobCategoriesCounts,
        ]);
    }

    public function detail($id)
    {
        $jobs = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
            ->findOrFail($id);
        return Inertia::render('FindJobs/jobdescription', ['jobs' => $jobs]);
    }
}
