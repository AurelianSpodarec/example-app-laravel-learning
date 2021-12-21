<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorPaletteController extends Controller
{
    public function index() {
        return view('color-palettes.index');
    }
}
