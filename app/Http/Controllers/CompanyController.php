<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index() {
        return view('companies.index', [
            'companies' => Company::paginate(10)
        ]);
    }

    public function show(Company $companies) {
        return view('companies.show', [
            'companies' => $companies
        ]);
    }

}
