<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            // jika isinya kosong atau hanya spasi saja, kembalikan string kosong
            if(trim($request->search) === '') {
                return '';
            }   

            $series = Serie::query()->search(['family' => $request->search , 'search' => $request->search])->get();

            return view('partials.result-search', [
                'series' => $series
            ]);
        }
    }
}
