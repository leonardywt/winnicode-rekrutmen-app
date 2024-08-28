<?php

namespace App\Http\Controllers\Company;

use Illuminate\Support\Facades\Auth;
use App\Models\Pekerjaan;
use App\Models\TipePekerjaan;
use App\Models\KategoriPekerjaan;
use App\Models\DeskripsiTambahanPekerjaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyController extends Controller
{
    public function index()
    {
        return Inertia::render('Company/Dashboard');
    }
    public function CreateJob()
    {
        return Inertia::render('Company/Jobs/Create');
    }
    public function StoreJob(Request $request)
    {
        $userId = Auth::id();
        // $pekerjaan = new Pekerjaan($request->all());
        // $pekerjaan['id_perusahaan'] = $userId;
        // $pekerjaan->save();
        $PekerjaanParams = $request->all();
        $PekerjaanData = [
            'id_perusahaan' => $userId,
            'nama' => $PekerjaanParams['nama'],
            'tanggal_mulai' => $PekerjaanParams['tanggal_mulai'],
            'tanggal_akhir' => $PekerjaanParams['tanggal_akhir'],
            'rentang_gaji_awal' => $PekerjaanParams['rentang_gaji_awal'],
            'rentang_gaji_akhir' => $PekerjaanParams['rentang_gaji_akhir'],
        ];
        Pekerjaan::create($PekerjaanData);
        return redirect()->route('company.jobdashboard');
        // $pekerjaanId = $pekerjaan->id;

        // $validatedKategoriPekerjaanData = $request->validate([
        //     'kategori' => 'required|string',
        // ]);
        // $validatedKategoriPekerjaanData['id_perusahaan'] = $userId;
        // $validatedKategoriPekerjaanData['id_pekerjaan'] = $pekerjaanId;
        // KategoriPekerjaan::create($validatedKategoriPekerjaanData);
        // $validatedDeskripsiTambahanPekerjaanData = $request->validate([
        //     'deskripsi' => 'required|string',
        //     'responsibilities' => 'required|string',
        //     'whoyouare' => 'required|string',
        //     'nicetohaves' => 'required|string',
        //     'benefits' => 'required|string',
        // ]);
        // $validatedDeskripsiPekerjaanData['id_perusahaan'] = $userId;
        // $validatedDeskripsiTambahanPekerjaanData['id_pekerjaan'] = $pekerjaanId;
        // DeskripsiTambahanPekerjaan::create($validatedDeskripsiTambahanPekerjaanData);

        // return redirect('/company/job')->with('success', 'Job created successfully!');
    }
    public function JobDashboard()
    {
        $userId = Auth::id();
        $jobs = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
            ->where('id_perusahaan', $userId)
            ->get();

        // Pass the data to the Inertia view
        return Inertia::render('Company/Jobs/Dashboard', [
            'jobs' => $jobs,
        ]);
    }
}
