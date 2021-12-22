<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\ColorPalette;

class ColorPaletteController extends Controller
{
    public function index() {
        return view('color-palettes.index', [
            'colorPalettes' => ColorPalette::paginate(10)
        ]);
    }
}
