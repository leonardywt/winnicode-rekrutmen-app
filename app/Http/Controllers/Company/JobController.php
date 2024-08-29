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

class JobController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $jobs = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
            ->where('id_perusahaan', $userId)
            ->get();

        return Inertia::render('Company/Jobs/Dashboard', [
            'jobs' => $jobs,
        ]);
    }
    public function create()
    {
        return Inertia::render('Company/Jobs/Create');
    }
    public function store(Request $request)
    {
        $userId = Auth::id();

        $PekerjaanParams = $request->all();
        // $PekerjaanParams = $request->validate([
        //     'id_perusahaan' => 'required|integer|exists:users,id',
        //     'nama' => 'required|string|max:255',
        //     'tanggal_mulai' => 'required|date',
        //     'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        //     'rentang_gaji_awal' => 'required|between:0,99999999999999.99',
        //     'rentang_gaji_akhir' => 'required|between:0,99999999999999.99',
        // ]);
        $PekerjaanData = Pekerjaan::create([
            'id_perusahaan' => $userId,
            'nama' => $PekerjaanParams['nama'],
            'tanggal_mulai' => $PekerjaanParams['tanggal_mulai'],
            'tanggal_akhir' => $PekerjaanParams['tanggal_akhir'],
            'rentang_gaji_awal' => $PekerjaanParams['rentang_gaji_awal'],
            'rentang_gaji_akhir' => $PekerjaanParams['rentang_gaji_akhir'],
        ]);
        $pekerjaanId = $PekerjaanData->id;
        foreach ($PekerjaanParams['selectedTypes'] as $type) {
            $TipePekerjaanData = TipePekerjaan::create([
                'id_perusahaan' => $userId,
                'id_pekerjaan' => $pekerjaanId,
                'tipe' => $type,
            ]);
        }
        foreach ($PekerjaanParams['kategori'] as $category) {
            $KategoriPekerjaanData = KategoriPekerjaan::create([
                'id_perusahaan' => $userId,
                'id_pekerjaan' => $pekerjaanId,
                'kategori' => $category,
            ]);
        }
        $DeskripsiTambahanPekerjaanData = DeskripsiTambahanPekerjaan::create([
            'id_perusahaan' => $userId,
            'id_pekerjaan' => $pekerjaanId,
            'deskripsi' => $PekerjaanParams['deskripsi'],
            'responsibilities' => $PekerjaanParams['responsibilities'],
            'whoyouare' => $PekerjaanParams['whoyouare'],
            'nicetohaves' => $PekerjaanParams['nicetohaves'],
            'benefits' => $PekerjaanParams['benefits'],
        ]);

        return redirect()->route('company.jobdashboard');

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

    public function edit($id)
    {
        $job = Pekerjaan::with(['tipePekerjaan', 'kategoriPekerjaan', 'deskripsiTambahanPekerjaan', 'user'])
            ->findOrFail($id);

        return Inertia::render('Company/Jobs/Edit', [
            'job' => $job,
        ]);
    }
    public function update(Request $request, $id)
    {
        $PekerjaanParams = $request->all();
        $userId = Auth::id();
        $pekerjaan = Pekerjaan::findOrFail($id);

        // Update the pekerjaan record
        $pekerjaan->update([
            'id_perusahaan' => $userId,
            'nama' => $PekerjaanParams['nama'],
            'tanggal_mulai' => $PekerjaanParams['tanggal_mulai'],
            'tanggal_akhir' => $PekerjaanParams['tanggal_akhir'],
            'rentang_gaji_awal' => $PekerjaanParams['rentang_gaji_awal'],
            'rentang_gaji_akhir' => $PekerjaanParams['rentang_gaji_akhir'],
        ]);

        $pekerjaan->tipePekerjaan()->delete();
        foreach ($PekerjaanParams['selectedTypes'] as $type) {
            TipePekerjaan::create([
                'id_perusahaan' => $userId,
                'id_pekerjaan' => $pekerjaan->id,
                'tipe' => $type,
            ]);
        }

        $pekerjaan->kategoriPekerjaan()->delete();
        foreach ($PekerjaanParams['kategori'] as $category) {
            KategoriPekerjaan::create([
                'id_perusahaan' => $userId,
                'id_pekerjaan' => $pekerjaan->id,
                'kategori' => $category,
            ]);
        }
        $deskripsiTambahan = $pekerjaan->deskripsiTambahanPekerjaan();
        $deskripsiTambahan->update([
            'id_perusahaan' => $userId,
            'deskripsi' => $PekerjaanParams['deskripsi'],
            'responsibilities' => $PekerjaanParams['responsibilities'],
            'whoyouare' => $PekerjaanParams['whoyouare'],
            'nicetohaves' => $PekerjaanParams['nicetohaves'],
            'benefits' => $PekerjaanParams['benefits'],
        ]);


        return redirect()->route('company.jobdashboard');
    }

    public function delete($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->deskripsiTambahanPekerjaan()->delete();
        $pekerjaan->tipePekerjaan()->delete();
        $pekerjaan->kategoriPekerjaan()->delete();
        $pekerjaan->delete();

        return redirect()->route('company.jobdashboard');
    }
}
