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
    
}
