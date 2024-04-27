<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'

        ];

        return view('series.index')->with('series', $series);

    }
    public function create()
    {
        return view('series.create');
    }
    public function store(Request $request)
    {
        $nomeSerie = $request->input('name');

        if ($nomeSerie === null) {
            return redirect()->back()->with('error', ['name' => 'O nome da série é obrigatório']);
        }

//        Serie::query()->create(['nome' => $nomeSerie]);

        return redirect()->route('series.index');
    }
}

