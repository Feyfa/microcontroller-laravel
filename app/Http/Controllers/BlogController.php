<?php

namespace App\Http\Controllers;

use App\Models\Chip;
use App\Models\Family;
use App\Models\Serie;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($family, $serie)
    {
        return view('partials.blog', [
            'series' => Serie::query()->filter(['family' => $family])->get(),
            'family_req' => $family,
            'serie_req' => $serie,
        ]);
    }
}
