<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index() {
        return view('companies.index', [
            'companies' => Companies::paginate(10)
        ]);
    }

    public function show(Companies $companies) {
        return view('companies.show', [
            'companies' => $companies
        ]);
    }

}
