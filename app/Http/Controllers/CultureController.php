<?php

namespace App\Http\Controllers;
use App\Models\Culture;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CultureController extends Controller
{
    public function show($id)
    {
        $culture = Culture::find($id);
        $etapes = $culture->etapes;

        return view('culture.show', compact('culture', 'etapes'));
    }
}