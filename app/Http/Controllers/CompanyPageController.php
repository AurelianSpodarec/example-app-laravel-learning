<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyPage;

class CompanyPageController extends Controller
{
    
    public function index() {
        return view('company-pages.index', [
            'companies' => CompanyPage::paginate(10)
        ]);
    }

}
